<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">
        <title>Laravel</title>


    </head>
    <body class="bg-gray-600">

    <h1 class="my-8 text-center text-5xl">Nadpis</h1>
    <div class="flex">
    @foreach($message as $messageData)

    <x-name-list :messageData="$messageData">   </x-name-list>

    @endforeach
    </div>
    </body>
</html>
