<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post_1 = [
            'title' => 'Laravel',
            'subtitle' => 'Laravel is a web application',
            'description' => 'Laravel is a web application Sframework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.
            Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.',
            'likes' => 4,
            'views' => 34,
            'is_active' => true,
            'image' => public_path('/photo/assets/prog_2.png'),
        ];

        $post_2 = [
            'title' => 'Javascript',
            'subtitle' => 'JavaScript is a text-based programming language',
            'description' => 'JavaScript is a text-based programming language used both on the client-side and server-side that allows you to make web pages interactive. Where HTML and CSS are languages that give structure and style to web pages, JavaScript gives web pages interactive elements that engage a user. Common examples of JavaScript that you might use every day include the search box on Amazon, a news recap video embedded on The New York Times, or refreshing your Twitter feed.  ',
            'likes' => 7,
            'views' => 84,
            'is_active' => true,
            'image' => public_path('/photo/assets/prog_1.png'),
        ];

        $post_3 = [
            'title' => 'React js',
            'subtitle' => 'It provides a very simple ',
            'description' => 'It provides a very simple start, there is no need to write a lot of boilerplate code, you just import it and start extendinng the primitive components and create the ones you need',
            'likes' => 5,
            'views' => 88,
            'is_active' => true,
            'image' => public_path('/photo/assets/prog_3.png'),
        ];

        $post_4 = [
            'title' => 'Symfony',
            'subtitle' => 'Symfony Components',
            'description' => 'Symfony Components
            Symfony Components are a set of decoupled and reusable PHP libraries. Battle-tested in thousands of projects and downloaded billions of times, they\'ve become the standard foundation on which the best PHP applications are built on. You can use any of these components in your own applications independently from the Symfony Framework.',
            'likes' => 77,
            'views' => 32,
            'is_active' => true,
            'image' => public_path('/photo/assets/prog_4.png'),
        ];

        $post_5 = [
            'title' => 'Docker',
            'subtitle' => 'Docker makes development efficient',
            'description' => 'Docker makes development efficient and predictable
            Docker takes away repetitive, mundane configuration tasks and is used throughout the development lifecycle for fast, easy and portable application development - desktop and cloud. Docker’s comprehensive end to end platform includes UIs, CLIs, APIs and security that are engineered to work together across the entire application delivery lifecycle.',
            'likes' => 33,
            'views' => 23,
            'is_active' => true,
            'image' => public_path('/photo/assets/prog_5.jpeg'),
        ];

        $post_6 = [
            'title' => 'PHP Symfony',
            'subtitle' => 'Over 2000 ISVs, OEMs',
            'description' => 'Over 2000 ISVs, OEMs, and VARs rely on MySQL as their products embedded database to make their applications, hardware and appliances more competitive, bring them to market faster, and lower their cost of goods sold.',
            'likes' => 78,
            'views' => 36,
            'is_active' => true,
            'image' => public_path('/photo/assets/prog_6.png'),
        ];

        $post_7 = [
            'title' => 'Linux',
            'subtitle' => 'There are many Linux distributions.',
            'description' => 'There are many Linux distributions. I can’t even think of coming up with an exact number because you would find loads of Linux distros that differ from one another in one way or the other.
        Some of them just turn out to be a clone of one another while some of them tend to be unique. So, it’s kind of a mess – but that is the beauty of Linux.',
            'likes' => 45,
            'views' => 78,
            'is_active' => true,
            'image' => public_path('/photo/assets/prog_7.png'),
        ];

        $post_8 = [
            'title' => 'Laravel Framework',
            'subtitle' => 'Laravel is a web application ',
            'description' => 'Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.

            Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.',
            'likes' => 337,
            'views' => 346,
            'is_active' => true,
            'image' => public_path('/photo/assets/prog_8.png'),
        ];


        User::firstWhere('email', 'bob@bob.com')
            ->posts()
            ->createMany([$post_1, $post_2]);

        User::firstWhere('email', 'mike@mike.com')
            ->posts()
            ->createMany([$post_3, $post_4]);

        User::firstWhere('email', 'jack@jack.com')
            ->posts()
            ->createMany([$post_5, $post_6]);

        User::firstWhere('email', 'donna@donna.com')
            ->posts()
            ->createMany([$post_7, $post_8]);

    }
}
