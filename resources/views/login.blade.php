<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app</title>
</head>

<body class="">
    <x-header></x-header>
    <div class="page login-page">
        <form class="form" action="/login" method="post">
            @csrf
            <div class="form-item email">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" />
            </div>
            <div class="form-item password">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" />
            </div>
            <div class="login-button">
                <button class="button-white" type="submit">login</button>
            </div>
        </form>

        @if ($errorMessage) {{ $errorMessage }} @endif
    </div>
</body>
<script src="{{ asset('/js/app.js') }}"></script>
<style scoped>
    .login-page {
        display: flex;
        justify-content: center;
    }
    
    .login-page .title {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }
    
    .login-page .form {
        width: 60vw;
    }
    
    .login-page input {
        height: 30px;
        border-radius: 10px;
        background-color: lightgray;
    }
    
    .login-page .form-item {
        display: flex;
        flex-direction: column;
        margin-top: 10px;
    }
    
    .login-page .login-button {
        text-align: center;
        margin-top: 10px;
    }
    
    .login-page button {
        width: 50%;
        height: 30px;
        font-size: 18px;
    }
</style>

</html>