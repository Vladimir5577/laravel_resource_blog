<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'Front end',
        ]);

        Category::create([
            'title' => 'Back end',
        ]);

        Category::create([
            'title' => 'Programming',
        ]);

        Category::create([
            'title' => 'Entertainment',
        ]);

        Category::create([
            'title' => 'Coding',
        ]);

        Category::create([
            'title' => 'Laisure',
        ]);
    }
}
