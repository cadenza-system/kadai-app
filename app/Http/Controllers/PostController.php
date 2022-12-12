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

        return view('post.index');
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
        $post->user = $loginUser->id;
        $post->content = $request->postContent;
        $post->save();

        return redirect('/');
    }

    public function show($id)
    {
        // 指定したIDの投稿情報を取得する
        $post = Post::find($id);

        // 投稿が存在するか判定
        if ($post == null) {
            return dd('存在しない投稿です');
        }

        // 投稿者を取得
        $user = $post->user();

        $isOwnPost = false;

        // セッションにログイン情報があるか確認
        if (Session::exists('user')) {
            // ログイン中のユーザーの情報を取得する
            $loginUser = Session::get('user');
            // 自分自身の投稿ページか判定
            $isOwnPost = $loginUser->id == $user->id;
        }
        return view('post.detail', compact('post','user','isOwnPost'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        // 投稿が存在するか判定
        if ($post == null) {
            return dd('存在しない投稿です');
        }
        // セッションにログイン情報があるか確認
        if (!Session::exists('user')) {
            return redirect('/');
        }

        // ログイン中のユーザーの情報を取得する
        $loginUser = Session::get('user');
        // 投稿者を取得する
        $user = $post->user();
        // 自分自身の投稿ページか判定
        if ($loginUser->id != $user->id) {
            return redirect('/');
        }

        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // idから投稿を取得
        $post = Post::find($id);

        // 投稿が存在するか判定
        if ($post == null) {
            return dd('存在しない投稿です');
        }
        // セッションにログイン情報があるか確認
        if (!Session::exists('user')) {
            return redirect('/');
        }

        // ログイン中のユーザーの情報を取得する
        $loginUser = Session::get('user');
        // 投稿者を取得する
        $user = $post->user();
        // 自分自身の投稿ページか判定
        if ($loginUser->id != $user->id) {
            return redirect('/');
        }

        $post->content = $request->postContent;
        $post->save();
        return redirect('/post/detail/'.$post->id);
    }

    public function delete($id)
    {
        // idから投稿を取得
        $post = Post::find($id);

        // 投稿が存在するか判定
        if ($post == null) {
            return dd('存在しない投稿です');
        }
        // セッションにログイン情報があるか確認
        if (!Session::exists('user')) {
            return redirect('/');
        }

        // ログイン中のユーザーの情報を取得する
        $loginUser = Session::get('user');
        // 投稿者を取得する
        $user = $post->user();
        // 自分自身の投稿ページか判定
        if ($loginUser->id != $user->id) {
            return redirect('/');
        }

        $post->is_deleted = true;
        $post->save();
        return redirect('/');
    }
}
