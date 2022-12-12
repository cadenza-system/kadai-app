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
    <div class="post-page">
        <div class="post">
            <a href="/user/{{ $user->id }}">
                <div class="user">
                    <div class="icon"></div>
                    <div class="name">{{ $user->name }}</div>
                </div>
                <div class="content">{{ $post->content }}</div>
            </a>
            @if ($isOwnPost)
            <div class="menu">
                <div class="menu-item">
                    <a href="/post/edit/{{ $post->id }}">編集</a>
                </div>
                <div class="menu-item">削除</div>
            </div>
            @endif
        </div>
    </div>
</body>
<x-footer></x-footer>
<script src="{{ asset('/js/app.js') }}"></script>

</html>