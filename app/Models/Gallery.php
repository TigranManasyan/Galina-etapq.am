<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_hy',
        'title_en',
        'published'
    ];

    public function images() {
        return $this->hasMany(Image::class);
    }
}
