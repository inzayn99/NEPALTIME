<?php

namespace App\Models\AdminUser;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{

    protected $fillable = ['name', 'username', 'email', 'password', 'image', 'status', 'admin_type'];

}
