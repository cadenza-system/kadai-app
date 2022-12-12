<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | post</title>
</head>

<body class="">
    <x-header></x-header>
    投稿
    <form action="/post" method="post">
        @csrf
        <textarea name="postContent" id="" cols="30" rows="5"></textarea>
        <button type="submit">投稿</button>
    </form>
</body>
<script src="{{ asset('/js/app.js') }}"></script>

</html>