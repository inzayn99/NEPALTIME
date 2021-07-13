<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'cat_name',
        'slug',
        'meta_keywords',
        'meta_description',
        'description',
        'status',
        'posted_by'
    ];
}
