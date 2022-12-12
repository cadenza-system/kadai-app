<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller,
    Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // セッションにログイン情報があるか確認
        if (!Session::exists('user')) {
            // ログインしていなければログインページへ
            return redirect('/login');
        }

        // タイムラインに表示するツイートを取得
        $user = Session::get('user');

        // フォローしているユーザーを取得
        $followUsers = $user->followUsers();
        // 各ユーザーの投稿を取得

        $posts = [];
        foreach ($followUsers as $followUser) {
            foreach ($followUser->posts as $post) {
                array_push($posts, array('user'=> $followUser, 'post'=> $post));
            }
        }
        return view('home', compact('user'), compact('posts'));
    }
}
