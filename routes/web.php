<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
            'title' => 'Homepage'
        ]
    );
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Achmad Ifal',
        'title' => 'About'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'email' => 'qwerty@gmail.com',
        'title' => 'Contact'
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Achmad Ifal',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis tempora, hic tenetur magni id impedit laudantium laborum! Sequi illo animi soluta asperiores ducimus, nesciunt minima culpa reiciendis atque! Excepturi, saepe!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Achmad Ifal',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, maiores vel facilis exercitationem nihil dolor praesentium nesciunt? Voluptates soluta culpa laudantium eaque expedita, facilis delectus, dicta quam architecto, nam corrupti?'
            ],
        ],
    ]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Achmad Ifal',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis tempora, hic tenetur magni id impedit laudantium laborum! Sequi illo animi soluta asperiores ducimus, nesciunt minima culpa reiciendis atque! Excepturi, saepe!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Achmad Ifal',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, maiores vel facilis exercitationem nihil dolor praesentium nesciunt? Voluptates soluta culpa laudantium eaque expedita, facilis delectus, dicta quam architecto, nam corrupti?'
        ],
    ];
    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});


