<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = 'admin';
    protected $fillable = ['name', 'username', 'email', 'password', 'image', 'status', 'admin_type'];


}
