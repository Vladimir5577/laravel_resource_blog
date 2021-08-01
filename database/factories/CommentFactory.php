<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;


class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'user_id' => $this->faker->randomElement(User::all()->pluck('id')->toArray()),
            'post_id' => $this->faker->randomElement(Post::all()->pluck('id')->toArray()),
            'comment' => $this->faker->sentence(20),
        ];
    }
}
