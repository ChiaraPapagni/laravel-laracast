<?php

return [
    'header_menu' => [
        [
            'href' => 'topics',
            'text' => 'topics',
        ],
        [
            'href' => 'series',
            'text' => 'series',
        ],
        [
            'href' => 'larabits',
            'text' => 'larabits',
        ],
        [
            'href' => 'discussions',
            'text' => 'discussions',
        ],
        [
            'href' => 'podcast',
            'text' => 'podcast',
        ],
    ],
    'updated' => [
        [
            'title' => 'Recently Updated',
            'desc' =>
                "Curious what's new at Laracasts? The following series have been recently updated.",
            'info' => [
                [
                    'type' => 'frameworks',
                    'name' => 'Build Mobile Apps With React Native and Expo',
                    'text' => "React Native is a mobile app development framework that allows you to build and deploy native mobile apps to both iOS and Android devices. As web developers, leveraging the existing popularity of React can benefit many people who have no experience building mobile apps. Developers only have to maintain one codebase and can quickly get started using existing JavaScript and CSS knowledge. Expo is a framework on top of React Native, which provides even more tools and services that make your development experience similar to the experience of creating web applications.
                    In this series, we'll learn how to use tools within the React Native ecosystem to build robust and maintainable mobile apps. We'll create a simple clone of the Twitter mobile app, along with a Laravel API backend that powers it.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '24',
                    'duration' => '6h 34m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/mobile-apps-with-react-native.svg',
                ],
                [
                    'type' => 'tooling',
                    'name' => 'GraphQL with Laravel and Vue',
                    'text' => "GraphQL is often looked at as the successor to REST APIs. It provides a powerful query language and allows you to make requests for exactly the information you want, nothing more and nothing less.
                    Many services now offer GraphQL APIs making it easier for users to interact with their data. With its powerful type system, the syntax is intuitive, and error messages provide helpful feedback. In this series, we'll take a look at using GraphQL within the Laravel and Vue ecosystem. We'll build out the obligatory blog as a full-stack GraphQL application. In the backend we'll make use of the popular lighthouse package which allows us to define our GraphQL schema. In the frontend, we'll leverage Vue Apollo to allow us to communicate with the backend and display the data in the browser.",
                    'difficulty' => 'Advanced',
                    'episodes' => '8',
                    'duration' => '1h 18m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/graphql-with-laravel-and-vue.svg',
                ],
            ],
        ],
    ],
    'more_updated' => [
        [
            'title' => 'More Recently Updated Series',
            'info' => [
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/inertia-and-spa-techniques.svg',
                    'name' => 'Inertia and SPA Techniques',
                    'text' =>
                        "So you've mastered the basics of building an SPA with Laravel and Inertia? Nice work, but of course there's always more to learn. In this series, we'll review a variety of useful tips and techniques to simplify and clean up your single page applications. This includes everything from creating webpack aliases, to wrapping third party APIs, to leveraging Laravel's API resources. So what do you think? Ready to get started?",
                    'date' => 'Nov 14th, 2021',
                ],
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/modern-laravel-apps-using-inertia.svg',
                    'name' => 'Build Modern Laravel Apps Using Inertia.js',
                    'text' => "Inertia.js, created by Jonathan Reinink, is an incredible tool that glues a server-side framework, like Laravel, to a client-side framework, like Vue. Think of it as a new way to build traditional server-driven applications. With Inertia, you can continue using server-side routing, and controllers, and authentication, and validation. With Inertia, you don't need to learn how to build an API, and you definitely don't need to use OAuth. Instead, relax and continue creating apps the way you traditionally would.

                    I really think you're going to enjoy Inertia as much as I do. In fact, Laracasts itself uses Inertia under the hood; I wouldn't have it any other way. So let me show you everything I know about building modern apps with Laravel, Vue, and Inertia.js in this series.",
                    'date' => 'Nov 15th, 2021',
                ],
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/learn-docker.svg',
                    'name' => 'The Docker Tutorial',
                    'text' => "Docker makes development and deployment much easier, since it removes the need for installing and configuring software on your server or local machine. But there are a lot of options out there, and getting started can sometimes be a bit overwhelming.

                    Follow along in this series, as we learn how to use Docker from a beginner's point of view. By the conclusion, you'll have a complete and production-ready environment for your own projects.",
                    'date' => 'Oct 13th, 2021',
                ],
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/testing-jargon-2.svg',
                    'name' => 'PHP Testing Jargon',
                    'text' => "There's no two ways about it: terminology in the testing world is incredibly overwhelming. Mocks, stubs, and dummies oh my!

                    Let's see if we can cut through the noise. Come along as, bit by bit, we break all of these confusing concepts down into something you can easily understand and implement within your own projects.",
                    'date' => 'Sep 15th, 2021',
                ],
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/learn-headless-ui.svg',
                    'name' => 'Learn Headless UI',
                    'text' =>
                        'Headless UI is a library that provides completely unstyled accessible UI components. Or in other words, you are responsible for providing your own markup and styles, which results in a completely custom look for your components. In this short series, we’ll use Vue 3 to explore some of the components that are available and style them using Tailwind CSS.',
                    'date' => 'Sep 7th, 2021',
                ],
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/write-a-composer-package-with-me.svg',
                    'name' => 'Write a Composer Package With Me',
                    'text' => "If you'd like to come along for the ride, I need to build a small package for Laracasts to handle the loading and processing of a transcripts file. The ultimate goal is to provide a pretty slide-out panel to quickly scan and read the full transcript for a given lesson. Even better, when you click any relevant sentence, it will take you to the exact portion of the video where that line is spoken.

                    In this series, we'll use test-driven development to drive the backend PHP portion of this new feature.",
                    'date' => 'Aug 31st, 2021',
                ],
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/reproduce-popular-web-components.svg',
                    'name' => 'Reproduce Popular Web Components',
                    'text' => "This series is all about recreating the look and feel of popular or compelling web components that you might find around the web. From cool menu transitions, subtle UI interactions, or more complex animations, we'll break it all down and recreate it from scratch.

                    This should give you a solid understanding of how these effects and interactions work under the hood. Ready to get started?",
                    'date' => 'Aug 27th, 2021',
                ],
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/laravel-from-scratch-2021.svg',
                    'name' => 'Laravel 8 From Scratch',
                    'text' => "We don't learn tools for the sake of learning tools. Instead, we learn them because they help us accomplish a particular goal. With that in mind, in this series, we'll use the common desire for a blog - with categories, tags, comments, email notifications, and more - as our goal. Laravel will be the tool that helps us get there. Each lesson, geared toward newcomers to Laravel, will provide instructions and techniques that will get you to the finish line.

                    This version of our popular Laravel From Scratch series was recorded in 2021, and uses Laravel 8.",
                    'date' => 'Aug 5th, 2021',
                ],
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/beginning-react.svg',
                    'name' => 'Beginning React',
                    'text' =>
                        "React continues to be extremely popular in the front-end world. Whether you’re in the job market or are curious to explore React's massive ecosystem, learning it will help you become a better developer. In this series, we'll review the basics of using React. We’ll learn about JSX, state, events, hooks, extracting components, props, and more.",
                    'date' => 'Jul 28th, 2021',
                ],
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/build-a-voting-app.svg',
                    'name' => 'Build a Voting App',
                    'text' => "In this workshop, we’ll build a voting app, similar to UserVoice, that allows you to create ideas, vote and comment on them, sort and filter the results, and even administer the site. We’ll start from scratch and work through the entire process, including implementing the design, working on all of the features, testing our code, and more.

                    We’ll be making use of the TALL (Tailwind, Alpine, Livewire, Laravel) stack in this particular series.",
                    'date' => 'Jul 12th, 2021',
                ],
            ],
        ],
    ],
    'trending' => [
        [
            'title' => 'Trending Series',
            'desc' => "Here's what your peers are binging.",
            'info' => [
                [
                    'type' => 'frameworks',
                    'name' => 'Laravel 8 From Scratch',
                    'text' => "We don't learn tools for the sake of learning tools. Instead, we learn them because they help us accomplish a particular goal. With that in mind, in this series, we'll use the common desire for a blog - with categories, tags, comments, email notifications, and more - as our goal. Laravel will be the tool that helps us get there. Each lesson, geared toward newcomers to Laravel, will provide instructions and techniques that will get you to the finish line.
                    This version of our popular Laravel From Scratch series was recorded in 2021, and uses Laravel 8.",
                    'difficulty' => 'Beginner',
                    'episodes' => '70',
                    'duration' => '9h 48m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/laravel-from-scratch-2021.svg',
                    'version' => 'Laravel 8',
                ],
                [
                    'type' => 'frameworks',
                    'name' => 'Laravel 6 From Scratch',
                    'text' =>
                        "In this series, step by step, I'll show you how to build web applications with Laravel. We'll start with the basics and incrementally dig deeper and deeper, as we review real-life examples. Once complete, you should have all the tools you need. Let's get to work!",
                    'difficulty' => 'Intermediate',
                    'episodes' => '68',
                    'duration' => '8h 59m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/laravel-6-from-scratch.svg',
                    'version' => 'Laravel 6',
                ],
                [
                    'type' => 'frameworks',
                    'name' => 'Build Modern Laravel Apps Using Inertia.js',
                    'text' => "Inertia.js, created by Jonathan Reinink, is an incredible tool that glues a server-side framework, like Laravel, to a client-side framework, like Vue. Think of it as a new way to build traditional server-driven applications. With Inertia, you can continue using server-side routing, and controllers, and authentication, and validation. With Inertia, you don't need to learn how to build an API, and you definitely don't need to use OAuth. Instead, relax and continue creating apps the way you traditionally would.

                        I really think you're going to enjoy Inertia as much as I do. In fact, Laracasts itself uses Inertia under the hood; I wouldn't have it any other way. So let me show you everything I know about building modern apps with Laravel, Vue, and Inertia.js in this series.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '24',
                    'duration' => '2h 52m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/modern-laravel-apps-using-inertia.svg',
                    'version' => 'Inertia 0.10.1',
                ],
                [
                    'type' => 'languages',
                    'name' => 'The PHP Practitioner',
                    'text' => "We all start somewhere. When it comes to web development with PHP, well, your first stop is this series. Designed specifically and exclusively for beginners, here, you'll learn the fundamentals of PHP - all the way down to defining variables and arrays.

                        If you feel somewhat unprepared for the content at Laracasts, this 'PHP for beginners' series should be your next stop. New lessons are published every Thursday, so don't fall behind!",
                    'difficulty' => 'Beginner',
                    'episodes' => '25',
                    'duration' => '4h 46m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/the-php-practitioner.svg',
                    'version' => '',
                ],
                [
                    'type' => 'frameworks',
                    'name' => 'Learn Vue 2: Step By Step',
                    'text' => "Vue is easily one of the most exciting additions to the front-end world in many years. With its intuitive API, and the fact that it can be applied to any type of application, it's no wonder why folks have gravitated to it as much as they have.

                        If you'd like to jump on board, let me show you, step by step, exactly what you need to know. It's the best way to learn Vue!",
                    'difficulty' => 'Intermediate',
                    'episodes' => '49',
                    'duration' => '7h 43m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/learning-vue-2-step-by-step.svg',
                    'version' => '',
                ],
                [
                    'type' => 'frameworks',
                    'name' => 'Build Mobile Apps With React Native and Expo',
                    'text' => "React Native is a mobile app development framework that allows you to build and deploy native mobile apps to both iOS and Android devices. As web developers, leveraging the existing popularity of React can benefit many people who have no experience building mobile apps. Developers only have to maintain one codebase and can quickly get started using existing JavaScript and CSS knowledge. Expo is a framework on top of React Native, which provides even more tools and services that make your development experience similar to the experience of creating web applications.

                        In this series, we'll learn how to use tools within the React Native ecosystem to build robust and maintainable mobile apps. We’ll create a simple clone of the Twitter mobile app, along with a Laravel API backend that powers it.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '24',
                    'duration' => '6h 34m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/mobile-apps-with-react-native.svg',
                    'version' => '',
                ],
            ],
        ],
    ],
    'build' => [
        [
            'title' => 'Build an App',
            'desc' =>
                'Pull up a chair and watch as we, from scratch, build a variety of real-world Laravel apps.',
            'info' => [
                [
                    'type' => 'frameworks',
                    'name' => 'Build A Laravel App With TDD',
                    'text' => "It's time to take the techniques we learned in Laravel From Scratch, and put them to good use building your first real-world application. Together, we'll leverage TDD to create Birdboard: a minimal Basecamp-like project management app.

                    This series will give us a wide range of opportunities to pull up our sleeves and test our Laravel chops. As always, we start from scratch: laravel new birdboard.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '44',
                    'duration' => '8h 51m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/build-an-app-with-tdd.svg',
                ],
                [
                    'type' => 'frameworks',
                    'name' => "Let's Build A Forum with Laravel and TDD",
                    'text' =>
                        "A forum is a deceptively complex thing. Sure, it's made up of threads and replies, but what else might exist as part of a forum? What about profiles, or thread subscriptions, or filtering, or real-time notifications? As it turns out, a forum is the perfect project to stretch your programming muscles. In this series, we'll work together to build one with tests from A to Z.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '102',
                    'duration' => '19h 29m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/lets-build-a-forum.svg',
                ],
                [
                    'type' => 'frameworks',
                    'name' => 'Hands On: Community Contributions',
                    'text' =>
                        "In this mini-series, we'll, from scratch, allow users to register, submit community articles and tutorials, and then vote on their favorites. Exactly like what we have here at Laracasts! While there are a number of moving parts, it should all make perfect sense, once we're done.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '13',
                    'duration' => '2h 19m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/hands-on-community-contributions.svg',
                ],
            ],
        ],
    ],
    'featured' => [
        [
            'title' => 'Currently Featured',
            'desc' =>
                "Here's what we are currently excited about at Laracasts.",
            'info' => [
                [
                    'type' => 'techniques',
                    'name' => 'Laravel Queue Mastery',
                    'text' =>
                        "In this series, join Mohamed Said, from the Laravel core team, as he reviews the ins and outs of how to use Laravel's high-performance queue system to run any potentially long-running task asynchronously. You'll begin by dispatching your first job, and slowly work your way up to more complex configurations and deployment techniques.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '12',
                    'duration' => '1h 41m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/queue-mastery.svg',
                ],
                [
                    'type' => 'testing',
                    'name' => 'Code Katas with PHPUnit',
                    'text' => "If martial artists use kata as a method for exercise and practice, what might be the equivalent for coders like us? Coding katas are short, repeatable programming challenges which are meant to exercise everything from your focus, to your workflow.

                    In this series, one kata per episode, we'll work through a wide variety of challenges to build up your TDD process.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '10',
                    'duration' => '2h 58m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/code-katas-with-phpunit.svg',
                ],
            ],
        ],
    ],
    'news' => [
        [
            'title' => "What's New in Laravel?",
            'desc' =>
                "Don't fall behind on the latest and greatest that Laravel has to offer. Learn the key features of each new point release.",
            'image' =>
                'https://laracasts.com/images/journeys/journey-frameworks.svg?v=2',
            'info' => [
                [
                    'type' => 'frameworks',
                    'name' => "What's New in Laravel 5.6",
                    'text' =>
                        "Laravel 5.6 is upon us! While it's true that this release isn't quite as flashy, there are still a number of incredibly useful new additions and updates. Let's review them together.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '8',
                    'duration' => '37m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/whats-new-in-laravel-5.4.svg',
                ],
                [
                    'type' => 'frameworks',
                    'name' => "What's New in Laravel 6",
                    'text' =>
                        "Laravel 6 is here! Along with a fresh website design comes a variety of new features and improvements, including lazy collections, Laravel Vapor compatibility, job middleware, and so much more. In this series, one topic per episode, we'll get you up to speed in no time.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '5',
                    'duration' => '35m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/whats-new-in-laravel-6.svg',
                ],
                [
                    'type' => 'frameworks',
                    'name' => "What's New in Laravel 5.7",
                    'text' =>
                        'Laravel 5.7 is now available! Along with it comes, not just the reveal of Laravel Nova, but also email verification functionality, dump-server integration, better console testing, and so much more.',
                    'difficulty' => 'Intermediate',
                    'episodes' => '4',
                    'duration' => '22m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/whats-new-in-laravel-5.4.svg',
                ],
                [
                    'type' => 'frameworks',
                    'name' => "What's New in Laravel 7",
                    'text' =>
                        "Laravel advances to version 7 on March 3rd, 2020 with updates to Blade components, custom casting, fluent string operations, a friendly HTTP client, and much more. In this series, one episode at a time, we'll review everything you need to know.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '6',
                    'duration' => '57m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/whats-new-in-laravel-6.svg',
                ],
                [
                    'type' => 'frameworks',
                    'name' => "What's New in Laravel 5.8",
                    'text' =>
                        "Laravel 5.8, which released on February 26th, 2019, ships with a new Eloquent relationship, automatic policy discovery, PHPUnit 8 support, and so much more. In this series, one-by-one, we'll dig into the most important updates you need to know about.",
                    'difficulty' => 'Beginner',
                    'episodes' => '5',
                    'duration' => '24m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/whats-new-in-laravel-5.4.svg',
                ],
                [
                    'type' => 'frameworks',
                    'name' => "What's New in Laravel 8",
                    'text' =>
                        'Laravel 8 is here! This release includes brand new application scaffolding, class-based model factories, migration squashing, time traveling, and so much more. Join me as, one topic per episode, we review everything you need to know!',
                    'difficulty' => 'Beginner',
                    'episodes' => '12',
                    'duration' => '59m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/whats-new-in-laravel-8.svg',
                ],
            ],
        ],
    ],
    'learn' => [
        [
            'title' => 'Learn OOP',
            'desc' =>
                'A full understanding and appreciation for how objects communicate with one another is essential to your maturity as a web developer.',
            'info' => [
                [
                    'type' => 'languages',
                    'name' => 'Object-Oriented Principles in PHP',
                    'text' => "The typical beginner, whether they realize it or not, first learns procedural programming. But, before too long, they level up. Suddenly, an entirely different paradigm is introduced: object-oriented programming. Little do they know that they'll spend years researching and learning exactly what it means to work with objects and messages.

                        In this series, you'll be introduced to the core principles of object-oriented programming in PHP. We'll begin with the basic constructs and work our way up.",
                    'difficulty' => 'Beginner',
                    'episodes' => '9',
                    'duration' => '1h 33m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/object-oriented-principles-in-php.svg',
                ],
                [
                    'type' => 'techniques',
                    'name' => 'SOLID Principles in PHP',
                    'text' =>
                        'SOLID represents a series of guidelines that developers can use to, if done well, simplify and clarify their code. While certainly not laws, understanding these concepts will make you a better developer.',
                    'difficulty' => 'Advanced',
                    'episodes' => '5',
                    'duration' => '57m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/solid-principles-in-php.svg',
                ],
            ],
        ],
        [
            'title' => 'Learn Laravel',
            'desc' =>
                'There has never been a better time to dig in and get started learning.',
            'info' => [
                [
                    'type' => 'frameworks',
                    'name' => "What's New in Laravel 8",
                    'text' =>
                        'Laravel 8 is here! This release includes brand new application scaffolding, class-based model factories, migration squashing, time traveling, and so much more. Join me as, one topic per episode, we review everything you need to know!',
                    'difficulty' => 'Beginner',
                    'episodes' => '12',
                    'duration' => '59m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/whats-new-in-laravel-8.svg',
                ],
                [
                    'type' => 'frameworks',
                    'name' => 'Laravel 8 From Scratch',
                    'text' => "We don't learn tools for the sake of learning tools. Instead, we learn them because they help us accomplish a particular goal. With that in mind, in this series, we'll use the common desire for a blog - with categories, tags, comments, email notifications, and more - as our goal. Laravel will be the tool that helps us get there. Each lesson, geared toward newcomers to Laravel, will provide instructions and techniques that will get you to the finish line.

                    This version of our popular Laravel From Scratch series was recorded in 2021, and uses Laravel 8.",
                    'difficulty' => 'Beginner',
                    'episodes' => '70',
                    'duration' => '9h 48m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/laravel-from-scratch-2021.svg',
                ],
            ],
        ],
        [
            'title' => 'New to Laracasts?',
            'desc' =>
                'Brand new to Laravel and Laracasts? Might we suggest these two beginner series to get you started?',
            'info' => [
                [
                    'type' => 'languages',
                    'name' => 'Object-Oriented Principles in PHP',
                    'text' => "The typical beginner, whether they realize it or not, first learns procedural programming. But, before too long, they level up. Suddenly, an entirely different paradigm is introduced: object-oriented programming. Little do they know that they'll spend years researching and learning exactly what it means to work with objects and messages.

                    In this series, you'll be introduced to the core principles of object-oriented programming in PHP. We'll begin with the basic constructs and work our way up.",
                    'difficulty' => 'Beginner',
                    'episodes' => '9',
                    'duration' => '1h 33m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/object-oriented-principles-in-php.svg',
                ],
                [
                    'type' => 'frameworks',
                    'name' => 'Laravel 8 From Scratch',
                    'text' => "We don't learn tools for the sake of learning tools. Instead, we learn them because they help us accomplish a particular goal. With that in mind, in this series, we'll use the common desire for a blog - with categories, tags, comments, email notifications, and more - as our goal. Laravel will be the tool that helps us get there. Each lesson, geared toward newcomers to Laravel, will provide instructions and techniques that will get you to the finish line.

                    This version of our popular Laravel From Scratch series was recorded in 2021, and uses Laravel 8.",
                    'difficulty' => 'Beginner',
                    'episodes' => '70',
                    'duration' => '9h 48m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/laravel-from-scratch-2021.svg',
                ],
            ],
        ],
    ],
    'tools' => [
        [
            'title' => 'Learn a Tool',
            'desc' =>
                'You use your tools every single day. So take some time to master them.',
            'info' => [
                [
                    'type' => 'languages',
                    'name' => 'CSS Grids for Everyone',
                    'text' => "The new CSS Grid spec offers unprecedented control when it comes to constructing layouts and components. In fact, this level of power and flexibility has never been available before now. That being said, there's a slight learning curve.

                    Come along, as I teach you everything you need to know in bite-sized episodes. You'll be constructing your own custom grids in no time.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '6',
                    'duration' => '37m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/css-grids-for-everyone.svg',
                ],
                [
                    'type' => 'tooling',
                    'name' => 'Learn Redis Through Examples',
                    'text' =>
                        "You've probably known for a while now that Redis is a thing. But, like so many others, maybe you've had trouble understanding exactly when you would reach for a key-value database like this. What's wrong with just using MySQL for everything, right? Well, as you'll find, there are a number of situations when Redis emerges as the best possible tool for the job. In this series, you'll work through a number of examples to get up and running with Laravel and Redis as quickly as possible.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '7',
                    'duration' => '1h 14m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/learn-redis-through-examples.svg',
                ],
                [
                    'type' => 'languages',
                    'name' => 'Learn Flexbox Through Examples',
                    'text' =>
                        "Flexbox is easily one of the most important additions to CSS in the last decade. The only problem is that there's a bit of a learning curve. Trust me, though: you want to learn this. And once you have, you'll be singing its praises to anyone who will listen. I guarantee it.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '8',
                    'duration' => '1h 12m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/learn-flexbox-through-examples.svg',
                ],
                [
                    'type' => 'tooling',
                    'name' => 'Webpack for Everyone',
                    'text' => "Webpack is a wonderful tool for bundling front-end assets. Having said that, it can sometimes be a bit confusing to newcomers who switch over from a more traditional 'concatenate these scripts and libraries in this exact order' setup. However, considering the recent release of Webpack 2, there has never been a better time to dive in.

                    In this series, I'll show you how simple it is to bundle and optimize your assets for production.",
                    'difficulty' => 'Intermediate',
                    'episodes' => '14',
                    'duration' => '1h 19m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/webpack-for-everyone.svg',
                ],
            ],
        ],
    ],
    'more_tools' => [
        [
            'title' => "Don't Forget About These",
            'info' => [
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/charting-and-you.svg',
                    'name' => 'Charting and You',
                    'date' => 'Apr 19th, 2016',
                    'text' =>
                        "At some point, you'll be called upon to prepare a series of graphs, or charts for your business. It's scary at first; where do you even begin? But, luckily, you'll find that, thanks to tools like Chart.js, it has never been easier to accomplish such a task. I'll show you how, one easy-to-understand step at a time.",
                ],
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/vim-mastery.svg',
                    'name' => 'Vim Mastery',
                    'date' => 'Mar 18th, 2016',
                    'text' =>
                        "There's a reason why, after decades, countless developers still prefer Vim as their code editor of choice. That many people can't be wrong, right? In this series, I'll teach you how to master the most flexible editor on the planet.",
                ],
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/git-me-some-version-control.svg',
                    'name' => 'Git Me Some Version Control',
                    'date' => 'Aug 13th, 2015',
                    'text' =>
                        "Version Control can be a mysterious thing at first. Why exactly do I need this?? Before long, though, you depend on it with your life. If you're new to this world, let me help!",
                ],
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/envoyer.svg',
                    'name' => 'Envoyer',
                    'date' => 'Mar 16th, 2015',
                    'text' =>
                        "Envoyer deploys your PHP applications with zero downtime. Just push your code, and let Envoyer deliver your application to one or many servers without interrupting a single customer. In this series, we'll discuss each feature of Envoyer, demonstrating how to use them with a sample project.",
                ],
                [
                    'thumb' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/understand-regular-expressions.svg',
                    'name' => 'Understand Regular Expressions',
                    'date' => 'Sep 19th, 2014',
                    'text' =>
                        "Does the thought of a confusing regular expression send chills down your back? Don't worry; you're in the majority. But, luckily, the truth is that the trick to understanding regular expressions simply boils down to basic memorization. It's not that tough, once you know what you're looking for.",
                ],
            ],
        ],
    ],
    'master' => [
        [
            'title' => 'Master Your Code Editor',
            'desc' =>
                'A full understanding of your code editor will pay dividends throughout your entire career. Master your preferred editor below!',
            'info' => [
                [
                    'type' => 'tooling',
                    'name' => 'Visual Studio Code for PHP Developers',
                    'text' =>
                        'Out of the blue, Microsoft jumps into the editor wars with an incredible offering that gives Sublime Text an overwhelming run for its money. In fact, it just might surpass it! So come along, as I demonstrate the ins, the outs, the tips, the techniques. Say hello to your new best friend: Visual Studio Code.',
                    'difficulty' => 'Intermediate',
                    'episodes' => '18',
                    'duration' => '1h 20m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/visual-studio-code-for-php-developers.svg',
                ],
                [
                    'type' => 'tooling',
                    'name' => 'Professional PHP Workflow in Sublime Text 3',
                    'text' =>
                        'This series is exclusively for the working developer who, though familiar with Sublime Text, needs to tweak and optimize their editor particularly for PHP development. Come along, as we review everything from error detection, to project management, to automatic PSR-2 fixing.',
                    'difficulty' => 'Intermediate',
                    'episodes' => '11',
                    'duration' => '41m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/professional-php-workflow-in-sublime-text.svg',
                ],
                [
                    'type' => 'tooling',
                    'name' => 'Be Awesome in PHPStorm',
                    'text' =>
                        "Think about how many hours each week you spend within your editor. Doesn't it make sense to unlock every inch of its capabilities? I certainly subscribe to that idea! Why don't you come along, and I'll teach you everything I know about PHPStorm.",
                    'difficulty' => 'Beginner',
                    'episodes' => '27',
                    'duration' => '1h 30m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/be-awesome-in-phpstorm.svg',
                ],
                [
                    'type' => 'tooling',
                    'name' => 'Vim Mastery',
                    'text' =>
                        "There's a reason why, after decades, countless developers still prefer Vim as their code editor of choice. That many people can't be wrong, right? In this series, I'll teach you how to master the most flexible editor on the planet.",
                    'difficulty' => 'Advanced',
                    'episodes' => '22',
                    'duration' => '2h 37m',
                    'thumbnail' =>
                        'https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svg/vim-mastery.svg',
                ],
            ],
        ],
    ],
];