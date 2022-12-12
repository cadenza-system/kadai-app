<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />

    <title>kadai-app | home</title>
</head>

<body class="">
    <x-header></x-header>
    <form action="/user/edit/{{ $user->id }}" method="post">
        @csrf @method('PUT')
        <div class="user-info">
            <div class="user">
                <div class="icon"></div>
                <input class="name" type="text" name="username" value="{{ $user->name }}" />
            </div>
            <div class="biography">
                <textarea name="biography" id="" cols="30" rows="10">{{ $user->biography }}</textarea
                    >
                </div>
            </div>
            <button>保存</button>
        </form>
    </body>
    <script src="{{ asset('/js/app.js') }}"></script>
</html>