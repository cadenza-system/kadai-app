<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <title>kadai-app | home</title>

</head>

<body class="">
    <x-header></x-header>
    <div class="user-info">
        <div class="user">
            <div class="icon">
            </div>
            <div class="name">daichi</div>
            <div class="edit">編集</div>
        </div>
        <div class="bio">
            広島県出身・大阪府在住エンジニア
        </div>
    </div>
    ツイート一覧
    <div class="post-list">
        <div class="post">
            <div class="user">
                <div class="icon">
                </div>
                <div class="name">hoge</div>
            </div>
            <div class="content">testestetste</div>
        </div>
        <div class="post">
            <div class="user">
                <div class="icon">
                </div>
                <div class="name">hoge</div>
            </div>
            <div class="content">testestetste</div>
        </div>
        <div class="post">
            <div class="user">
                <div class="icon">
                </div>
                <div class="name">hoge</div>
            </div>
            <div class="content">testestetste</div>
        </div>
        <div class="post">
            <div class="user">
                <div class="icon">
                </div>
                <div class="name">hoge</div>
            </div>
            <div class="content">testestetste</div>
        </div>
</body>
<script src="{{ asset('/js/app.js') }}"></script>

</html>