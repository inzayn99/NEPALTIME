<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends FrontendController
{
    public function index()
    {

        $this->data('categoryData', Category::all());
        $this->data('title', $this->makeTitle('home'));
        return view($this->pagePath . '.Home.home', $this->data);
    }
//-----------------start whole pages--------------------------------//
    public function contact()
    {
        return view($this->pagePath . '.contact.contact', $this->data);
    }

    public function magazine()
    {
        return view($this->pagePath . '.wholepage.magazine', $this->data);
    }

    public function error404()
    {
        return view($this->pagePath . '.wholepage.error404', $this->data);
    }
    public function advertise()
    {
        return view($this->pagePath . '.wholepage.advertise', $this->data);
    }
    public function bussiness()
    {
        return view($this->pagePath . '.wholepage.bussiness', $this->data);
    }

    public function events()
    {
        return view($this->pagePath . '.wholepage.events', $this->data);
    }

    public function politics()
    {
        return view($this->pagePath . '.wholepage.politics', $this->data);
    }
    public function sports()
    {
        return view($this->pagePath . '.wholepage.sports', $this->data);
    }
    public function travel()
    {
        return view($this->pagePath . '.wholepage.travel', $this->data);
    }
    public function art()
    {
        return view($this->pagePath . '.wholepage.art', $this->data);
    }
    public function aboutus()
    {
        return view($this->pagePath . '.wholepage.aboutus', $this->data);
    }

//-----------------------end Whole pages---------------------//

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

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->intended(route('login'));
    }
}
