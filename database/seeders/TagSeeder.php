<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'title' => 'Front end',
        ]);

        Tag::create([
            'title' => 'Back end',
        ]);

        Tag::create([
            'title' => 'Framework',
        ]);

        Tag::create([
            'title' => 'Web dewelopment',
        ]);

        Tag::create([
            'title' => 'Server',
        ]);
    }
}
