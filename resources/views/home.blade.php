<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />

    <title>kadai-app | home</title>
</head>

<body class="">
    <x-header></x-header>
    タイムライン
    <div class="post-list">
        @foreach ($posts as $post)
        <div class="post">
            <a href="/user/{{ $post['user']->id }}">
                <div class="user">
                    <div class="icon"></div>
                    <div class="name">
                        {{ $post['user']->name }}
                    </div>
                </div>
            </a>
            <a href="/post/detail/{{ $post['post']->id }}">
                <div class="content">{{ $post['post']->content }}</div>
                <div class="time-stamp">
                    {{ $post['post']->created_at }}
                </div>
            </a>
        </div>
        @endforeach
    </div>
</body>
<x-footer></x-footer>
<script src="{{ asset('/js/app.js') }}"></script>

</html>