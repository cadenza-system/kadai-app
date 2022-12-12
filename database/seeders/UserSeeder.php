<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'oca',
            'email' => 'oca@email.com',
            'password' => 'oca',
        ]);

        User::create([
            'name' => '名言bot',
            'email' => 'meigen@email.com',
            'password' => 'meigen',
        ]);

        User::create([
            'name' => 'ElonMusk',
            'email' => 'elonmusk@email.com',
            'password' => 'elonmusk',
        ]);
    }
}
