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
        $user = Session::get('user');
        return view('home', compact('user'));
    }
}
