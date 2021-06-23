<?php

namespace App\Http\Controllers\Backend;

use App\Models\AdminUser\AdminUser;
use Illuminate\Http\Request;

class AdminUserController extends BackendController
{
    public function index()
    {
        return view($this->pagePath . '.admins.show-admin-users', $this->data);
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->pagePath . '.admins.add-admin-user', $this->data);

        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|min:3|max:100',
                'username' => 'required|min:3|max:20|unique:admin_users,username',
                'email' => 'required|email|unique:admin_users,email',
                'password' => 'required|min:3|max:20|confirmed',
                'password_confirmation' => 'required',
                'image' => 'mimes:jpg,jpeg,gif,png'
            ]);

            $data['name'] = $request->name;
            $data['username'] = $request->username;
            $data['email'] = $request->email;
            $data['password'] = bcrypt($request->password);

            if (AdminUser::created($data)) {
                echo "success";
            }
        }
    }
}
