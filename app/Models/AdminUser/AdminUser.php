<?php

namespace App\Models\AdminUser;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class AdminUser extends User
{

    protected $fillable = ['name', 'username', 'email', 'password', 'image', 'status', 'admin_type'];

}
