<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Tag;

use App\Admin\Sections\Users;
use App\Admin\Sections\Posts;
use App\Admin\Sections\Comments;
use App\Admin\Sections\Categories;
use App\Admin\Sections\Tags;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        //\App\User::class => 'App\Http\Sections\Users',
        User::class => Users::class,
        Post::class => Posts::class,
        Comment::class => Comments::class,
        Category::class => Categories::class,
        Tag::class => Tags::class,
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
