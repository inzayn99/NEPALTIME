<?php

namespace App\Models\Category;

use App\Models\AdminUser\AdminUser;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = 'admin';
    protected $fillable=[
        'cat_name',
        'slug',
        'meta_keywords',
        'meta_description',
        'description',
        'status',
        'posted_by'
    ];


public function postedBy(){
    return $this->belongsTo(AdminUser::class,'posted_by','id');
}
}

