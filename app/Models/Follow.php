<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Follow extends Model
{
    use HasFactory;

    public function followUser() {
        return User::find($this->follow_user);
    }

    public function followerUser() {
        return User::find($this->user);
    }
}
