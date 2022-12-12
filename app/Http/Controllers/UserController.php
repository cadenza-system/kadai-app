<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller,
    Session;
use App\Models\User;
class UserController extends Controller
{
    public function index($id)
    {
        // セッションにログイン情報があるか確認
        if (!Session::exists('user')) {
            // ログインしていなければログインページへ
            return redirect('/login');
        }

        // 指定したIDのユーザー情報を取得する
        $user = User::find($id);

        // ユーザーが存在するか判定
        if ($user == null) {
            return dd('存在しないユーザーです');
        }

        // ユーザーの投稿を取得
        $posts = $user->posts;
        // ログイン中のユーザーの情報を取得する
        $loginUser = Session::get('user');
        // 自分自身のユーザーページか判定
        $isOwnPage = $loginUser->id == $user->id;
        return view('user', compact('user'),compact('posts'),compact('isOwnPage'));
    }
}
