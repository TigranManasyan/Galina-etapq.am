<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'cover_photo',
        'title_hy',
        'title_en',
        'body_hy',
        'body_en',
        'published_at',
        'slug',
        'published',
        'user_id',
        'more_url'
    ];
}
