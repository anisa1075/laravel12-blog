<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Anisa',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt eius consectetur
            laboriosam est debitis?
            Fugit architecto itaque doloremque unde tempore, expedita dolor veritatis facere mollitia praesentium. Vitae
            adipisci aliquid ipsum.',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Anisa',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt eius consectetur
            laboriosam est debitis?
            Fugit architecto itaque doloremque unde tempore, expedita dolor veritatis facere mollitia praesentium. Vitae
            adipisci aliquid ipsum.',
        ],
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
             'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Anisa',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt eius consectetur
            laboriosam est debitis?
            Fugit architecto itaque doloremque unde tempore, expedita dolor veritatis facere mollitia praesentium. Vitae
            adipisci aliquid ipsum.',
        ],
        [
            'id' => 2,
             'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Anisa',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt eius consectetur
            laboriosam est debitis?
            Fugit architecto itaque doloremque unde tempore, expedita dolor veritatis facere mollitia praesentium. Vitae
            adipisci aliquid ipsum.',
        ],
    ];
    $posts = Arr::first($posts, function($post) use($slug) {
        return $post['slug'] == $slug;
    });

    if(!$posts) abort(404);
    return view('post', ['title' => 'Single Post', 'post' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
