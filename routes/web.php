<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Achmad Ifal',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'email' => 'qwerty@gmail.com',
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'judul' => 'Lorem ipsum dolor sit amet.',
        'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt illum voluptas iste aperiam. Ad asperiores consequuntur natus amet? Necessitatibus dolor repellat fugiat sint, ducimus temporibus corrupti soluta cumque tempore voluptas unde accusantium dolorum nesciunt eum incidunt hic? Quaerat, error expedita. Voluptas cupiditate maxime eos, rerum ipsum odit earum ipsam fuga facilis temporibus perferendis, pariatur, aspernatur libero quia! Consectetur temporibus, quasi, numquam eum voluptatum ipsam nihil esse ratione distinctio at rerum sunt similique ut repudiandae modi nostrum consequatur vel blanditiis praesentium ab debitis possimus perspiciatis enim! Explicabo, dignissimos maiores. Dignissimos fugit fugiat at ullam nam? Ut tempora laboriosam culpa sit earum.',

    ]);
});


