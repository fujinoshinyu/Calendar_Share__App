<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<title>CalendarShareApp</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      </head>
      <body>
        <x-app-layout>
        <x-slot name="header">
            <x-primary-button class="ml-4">
                <a href="/calendar">Add Event</a>
            </x-primary-button>
          </x-slot>

          <div id='home_calendar'></div> 
          
          <p class='alluser'>All Users</p> 
          <div class='alluser'>
        @foreach ($users as $event) 
            <a href="">{{ $event->id }}:{{ $event->name }}</a>
        @endforeach
        </div>
        
        <div class='paginate'>
            {{ $users->links() }}
        </div>
        
        <div id="modal-add" class="modal">
            <div class="modal-contents">
                <form method="POST" action="{{ route('create') }}">
                    @csrf
                    <input id="new-id" type="hidden" name="id" value="" />
                    
                    <label for="user_id">YourName</label>
                    <select id="user_id" name="user_id">
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    
                    <label for="event_title">タイトル</label>
                    <input id="new-event_title" class="input-title" type="" name="event_title" value="" />
                    <label for="start_date">開始日時</label>
                    <input id="new-start_date" class="input-date" type="date" name="start_date" value="" />
                    <label for="end_date">終了日時</label>
                    <input id="new-end_date" class="input-date" type="date" name="end_date" value="" />
                    <label for="event_body" style="display: block">内容</label>
                    <textarea id="new-event_body" name="event_body" rows="3" value=""></textarea>
                    <label for="event_color">背景色</label>
                    <select id="new-event_color" name="event_color">
                        <option value="blue" selected>青</option>
                        <option value="green">緑</option>
                        <option value="red">赤</option>
                    </select>
                    <button type="button" onclick="closeAddModal()">キャンセル</button>
                    <button type="submit">決定</button>
                </form>
            </div>
        </div>
        
        <div id="modal-update" class="modal">
            <div class="modal-contents">
                <form method="POST" action="{{ route('update') }}" >
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="" />
                    
                    <label for="user_id">Posted By</label>
                    <select id="user_id" name="user_id">
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    
                    <label for="event_title">タイトル</label>
                    <input class="input-title"  id="event_title" name="event_title" />
                    <label for="start_date">開始日時</label>
                    <input class="input-date" type="date" id="start_date" name="start_date" value="" />
                    <label for="end_date">終了日時</label>
                    <input class="input-date" type="date" id="end_date" name="end_date" value="" />
                    <label for="event_body" style="display: block">内容</label>
                    <textarea id="event_body" name="event_body" rows="3" value=""></textarea>
                    <label for="event_color">背景色</label>
                    <select id="event_color" name="event_color">
                        <option value="blue">青</option>
                        <option value="green">緑</option>
                        <option value="red">赤</option>
                    </select>
                    <button type="button" onclick="closeUpdateModal()">キャンセル</button>
                </form>
                <form id="delete-form" method="post" action="{{ route('delete') }}">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="delete-id" name="id" value="" />
                    
                </form>
            </div>
        </div>
           </x-app-layout>
      </body>
</html>

 <style scoped>
          
        #home_calendar{
                
                
        
                width: 1100px;
                padding: 30px;
    }
        .alluser{
            
            padding: 10px;
           
        }
        #alluser{
            
            
        }
        
/* モーダルのオーバーレイ */

/* 予定の上ではカーソルがポインターになる */
.fc-event-title-container{
    cursor: pointer;
}

.modal{
    display: none; /* モーダル開くとflexに変更（ここの切り替えでモーダルの表示非表示をコントロール） */
    justify-content: center;
    align-items: center;
    position: absolute;
    z-index: 10; /* カレンダーの曜日表示がz-index=2のため、それ以上にする必要あり */
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0,0,0,0.5);
}
/* モーダル */
.modal-contents{
    background-color: white;
    height: 500px;
    width: 600px;
    padding: 20px;
}

/* 以下モーダル内要素のデザイン調整 */
input{
    padding: 2px;
    border: 1px solid black;
    border-radius: 5px;
}
.input-title{
    display: block;
    width: 80%;
    margin: 0 0 20px;
}
.input-date{
    width: 27%;
    margin: 0 5px 20px 0;
}
textarea{
    display: block;
    width: 80%;
    margin: 0 0 20px;
    padding: 2px;
    border: 1px solid black;
    border-radius: 5px;
    resize: none;
}
select{
    display: block;
    width: 30%;
    margin: 0 0 20px;
    padding: 2px;
    border: 1px solid black;
    border-radius: 5px;
}

.ml-4{
    
    margin : 20px ;
     padding : 12px 100px 12px 100px ;
     background-color : navy ;
    display: flex;
    justify-content: center;
    margin: 0 auto;
}

</style scoped>
          