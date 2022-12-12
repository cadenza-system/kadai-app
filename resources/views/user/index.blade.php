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
    <div class="user-info">
        <div class="user">
            <div class="icon"></div>
            <div class="name">{{ $user->name }}</div>
            @if ($isOwnPage)
            <a href="/user/edit/{{ $user->id }}">
                <div class="edit">編集</div>
            </a>
            @else
            <div class="follow-button">
                <form name="follow" action="/follow/{{ $user->id }}" method="post">
                    @csrf @method('PUT') @if ($isFollowed)
                    <input type="hidden" name="isFollow" value="0" />
                    <button onClick="unfollow()">フォロー済み</button> @else
                    <input type="hidden" name="isFollow" value="1" />
                    <button>フォロー</button> @endif
                </form>
            </div>
            @endif
        </div>
        <div class="bio">
            {{ $user->biography }}
        </div>
        <div class="follow-info">
            <a href="/user/{{ $user->id }}/follow">
                <div class="follow">{{ $followCount }} フォロー中</div>
            </a>
            <a href="/user/{{ $user->id }}/follower">
                <div class="follower">{{ $followerCount }} フォロワー</div>
            </a>
        </div>
    </div>
    ツイート一覧
    <div class="post-list">
        @foreach ($posts as $post)
        <div class="post">
            <a href="/post/detail/{{$post->id}}">
                <div class="user">
                    <div class="icon"></div>
                    <div class="name">
                        {{ $user->name }}
                    </div>
                </div>
                <div class="content">{{ $post->content }}</div>
                <div class="time-stamp">{{ $post->created_at }}</div>
            </a>
        </div>
        @endforeach
    </div>
    <x-footer></x-footer>
</body>
<script src="{{ asset('/js/app.js') }}"></script>
<script>
    function unfollow() {
        if (confirm("フォローを解除しますか?")) {
            document.follow.submit();
        }
    }
</script>

</html>