<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | login</title>
</head>

<body class="">
    <x-header></x-header>
    login
    <form action="/login" method="post">
        @csrf
        <label for="username"> Email </label>
        <input type="text" id="email" name="email" />
        <label for="password"> Password </label>
        <input type="password" id="password" name="password" />
        <button type="submit">login</button>
    </form>

    @if ($errorMessage) {{ $errorMessage }} @endif
</body>
<script src="{{ asset('/js/app.js') }}"></script>

</html>