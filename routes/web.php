<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Hary R','title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Hary R',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quo, voluptate quibusdam vel obcaecati impedit labore minima pariatur maiores optio magni hic ullam inventore dicta animi expedita magnam. Dicta, perspiciatis!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Hary R',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quo quod molestiae ipsa non veniam odio totam, ad saepe perferendis tenetur ex excepturi? In delectus corporis id veritatis ratione illo?'
        ],
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Hary R',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quo, voluptate quibusdam vel obcaecati impedit labore minima pariatur maiores optio magni hic ullam inventore dicta animi expedita magnam. Dicta, perspiciatis!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Hary R',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quo quod molestiae ipsa non veniam odio totam, ad saepe perferendis tenetur ex excepturi? In delectus corporis id veritatis ratione illo?'
        ]
        ];

        $post = Arr::first($posts, function($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
