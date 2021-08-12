<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends BackendController
{
    public function index()
    {
        return view($this->pagePath . 'Post.show-post', $this->data);
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->pagePath . '.Post.add-post', $this->data);
        }

            if ($request->isMethod('post')){
            }
        }

}
