<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Moeels\Comment;
use App\Models\User;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        dd(User::all()->pluck('id')->toArray());

        $user_bob_id = User::firstWhere('bob@bob.com')->id;
        $user_mike_id = User::firstWhere('mike@mike.com')->id;
        $user_jack_id = User::firstWhere('jack@jack.com')->id;
        $user_donna_id = User::firstWhere('donna@donna.com')->id;

        Comment::create([
            'user_id' => $user_bob_id,
        ]);
    }
}
