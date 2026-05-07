<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = [
        'cover_photo',
        'title_hy',
        'title_en',
        'body_hy',
        'body_en',
        'published_at',
        'published',
        'user_id'
    ];
}
