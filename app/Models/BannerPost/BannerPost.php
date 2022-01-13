<?php

namespace App\Models\BannerPost;

use Illuminate\Database\Eloquent\Model;

class BannerPost extends Model
{
    protected $fillable = [
        'title',
        'date',
        'image',
        'meta_keywords',
        'meta_description',
        'description',
        'status',
        'posted_by'
    ];
}
