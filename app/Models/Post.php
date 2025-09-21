<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug) {
        return Arr::first(static::all(), fn ($post) => $post['slug'] == $slug) ?? abort(404);
    }
}
