<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> welcome --dashboard--</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- vite用の記述忘れずに -->
    </head>
    <body>
    <x-app-layout>
    <title>dashboard</title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Hi,   ") }} {{ Auth::user()->name }}{{ __("!   Welcome to CalendarShareApp!") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>
                    [機能]</br>
                    ・HOMEで各ユーザが投稿したカレンダー予定をシェア</br>
                    ・CREATEで予定を追加,編集,削除</br>
                    ・MESSAGEで簡単なDMのやりとり</br>
                    　　　</br>
                    
                    [未完成の機能]</br>
                    ・HOMEの予定モーダルを開くと、誰の投稿なのか分かるように投稿ユーザを表示する処理</br>
                    ・DM機能の個別にやりとりするための処理,画像アップロード等</br>
                    ・HOMEの完成イメージ⇩</br>
                    <img src="{{ asset('storage/app/Screenshot 2024-02-05 at 04.10.52.png') }}">
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>
