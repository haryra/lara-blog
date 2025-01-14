<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all(){
        return [
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
        ];
    }

    public static function find($slug): array {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(! $post){
            abort(404);
        }

        return $post;
    }
}