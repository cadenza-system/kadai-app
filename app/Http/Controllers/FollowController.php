<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller,
    Session;
use App\Models\User;
class FollowController extends Controller
{
    public function index($id)
    {

        // 指定したIDのユーザー情報を取得する
        $user = User::find($id);

        // ユーザーが存在するか判定
        if ($user == null) {
            return dd('存在しないユーザーです');
        }

        // フォローとフォロワーの取得
        $followUsers = $user->followUsers();
        $followerUsers = $user->followerUsers();

        // ログイン中のユーザーの情報を取得する
        $loginUser = Session::get('user');

        return view('user.follow', compact('user','followUsers','followerUsers'));
    }
}
