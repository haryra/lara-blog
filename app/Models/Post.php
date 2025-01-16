<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Field yang boleh diisi
    protected $fillable = ['title', 'author', 'slug', 'body'];

    // Nama tabel jika berbeda dari Model
//    protected $table = 'blog_posts';
}
