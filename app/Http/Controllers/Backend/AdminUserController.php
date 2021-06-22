<?php

namespace App\Http\Controllers\Backend;

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
            return view($this->pagePath . '. admins.add-admin-user', $this->data);

        }
        if ($request->isMethod('post')) {

        }
    }
}
