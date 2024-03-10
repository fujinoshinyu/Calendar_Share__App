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
                    ポートフォリオをご覧いただきありがとうございます。</br>
                    インスタグラムのように身近なアプリケーションでありながら、今までにない発想のアプリを作りたいと考え、
                    写真を投稿するのではなく、カレンダーとしての予定を投稿することで、誰もが日々使用するであろうカレンダーとしての機能だけでなく、 お互いの予定を共有できるプラスαの楽しみを兼ね備えたアプリケーションを作成しようと考えました。</br>
                    現時点で、改善点や追加したい機能がある状態ではありますが、ご確認いただければ幸いです。</br>
                    <x-primary-button class="ml-4">
                        <a href="/">Go HOME</a>
                    </x-primary-button>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>

<style scoped>
.ml-4{
    
    margin : 10px ;
    padding : 12px 100px 12px 100px ;
    background-color : navy ;
    display: flex;
    justify-content: center;
    
    
}

</style scoped>
