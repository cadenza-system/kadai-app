<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Follow;
use App\Models\Post;

class User extends Model
{
    use HasFactory;

    public function followUsers() {
        $followUsers = Follow::where('user', $this->id)->get();
        $result = [];
        foreach ($followUsers as $followUser) {
            array_push($result, $followUser->followUser());
        }
        return $result;

    }

    public function posts() {
        // $result = [];
        // foreach ($this->hasMany(Post::class) as $post) {
        //     array_push(array('user'=>$post));
        // }

        // return $result;
        return $this->hasMany(Post::class);
    }
}
