<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | post</title>

</head>

<body class="">
    <x-header></x-header>
    <div class=" page post-edit-page">
        <form action="/post/edit/{{ $post->id }}" method="post">
            @csrf @method('PUT')
            <div class="post">
                <textarea name="postContent" id="" cols="30" rows="10">{{ $post->content }}</textarea>
            </div>
            <input type="hidden" name="postid" value="{{$post->id}}" />
            <div class="save-button">
                <button class="button-white">保存</button>
            </div>
    </div>
    </form>
</body>
<x-footer></x-footer>
<script src="{{ asset('/js/app.js') }}"></script>
<style scoped>
    .post-edit-page .post {
        display: flex;
        flex-direction: column;
    }
    
    .post-edit-page .save-button {
        display: flex;
        justify-content: end;
        margin: 10px 10px 0 0;
    }
</style>

</html>