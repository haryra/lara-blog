<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    // Field yang boleh diisi
    protected $fillable = ['title', 'author', 'slug', 'body'];

    // Nama tabel jika berbeda dari Model
//    protected $table = 'blog_posts';
}
