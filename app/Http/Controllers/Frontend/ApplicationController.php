<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends FrontendController
{
    public function index()
    {


        $this->data('title', $this->makeTitle('home'));
        return view($this->pagePath . '.Home.home', $this->data);
    }

    public function contact()
    {
        return view($this->pagePath . '.contact.contact', $this->data);
    }

    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->frontendPath . '.users.login', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'username' => 'required',
                'password' => 'required'
            ]);

            $username = $request->username;
            $password = $request->password;
            if (Auth::guard('web')->attempt(['username' => $username, 'password' => $password])) {
                return redirect()->intended(route('users'));
            } else {
                return redirect()->back()->with('error', 'Username & password not match');
            }
        }
    }

    public function user(Request $request)
    {
        return view($this->frontendPath . '.users.index', $this->data);
    }
public function logout(){
        Auth::guard('web')->logout();
        return redirect()->intended(route('login'));
}
}
