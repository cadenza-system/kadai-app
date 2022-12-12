
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <header>
      <a href="/">
      <div class="logo">
          Kadai-app
        </div>
      </a>
        @if (Session::exists('user'))
        <a href="/user/{{ Session::get('user')->id }}">
        <div class="user">
          <div class="icon"></div>
          <div class="username"> {{ $loginUser = Session::get('user')->name }}</div>
        </div>
        </a>
        @else
          <div><a href="/login">ログイン</a></div>
        @endif
        </div>
    </header>
</body>
</html>
