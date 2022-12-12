<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Follow;
use App\Models\Post;

class User extends Model
{
    use HasFactory;

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function followUsers() {
        $followUsers = Follow::where('user', $this->id)->get();
        $result = [];
        foreach ($followUsers as $followUser) {
            array_push($result, $followUser->followUser());
        }
        return $result;

    }

    public function followerUsers() {
        $followerUsers = Follow::where('follow_user', $this->id)->get();
        $result = [];
        foreach ($followerUsers as $followUser) {
            array_push($result, $followUser->followerUser());
        }
        return $result;
    }
}
