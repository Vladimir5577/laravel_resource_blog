<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Bob',
            'email' => 'bob@bob.com',
            'password' => Hash::make(123),
            'is_admin' => true,
            'image' => public_path('/photo/assets/ava_2.jpeg'),
        ]);

        User::create([
            'name' => 'Mike',
            'email' => 'mike@mike.com',
            'password' => Hash::make(234),
            'image' => public_path('/photo/assets/ava_1.png'),
        ]);

        User::create([
            'name' => 'Jack',
            'email' => 'jack@jack.com',
            'password' => Hash::make(345),
            'image' => public_path('/photo/assets/ava_3.png'),
        ]);

        User::create([
            'name' => 'Donna',
            'email' => 'donna@donna.com',
            'password' => Hash::make(456),
            'image' => public_path('/photo/assets/ava_4.png'),
        ]);

    }
}
