<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller,
    Session;
class PostController extends Controller
{
    function index() {
        // セッションにログイン情報があるか確認
        if (!Session::exists('user')) {
            // ログインしていなければログインページへ
            return redirect('/login');
        }

        return view('post');
    }

    function store(Request $request) {
        // セッションにログイン情報があるか確認
        if (!Session::exists('user')) {
            // ログインしていなければログインページへ
            return redirect('/login');
        }

        // ログイン中のユーザーの情報を取得する
        $loginUser = Session::get('user');

        $post = new Post;
        $post->user_id = $loginUser->id;
        $post->content = $request->postContent;
        $post->save();

        return redirect('/');
    }
}
