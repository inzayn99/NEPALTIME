<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public $backendPath = 'backend.';
    public $pagePath = '';

    public function __construct()
    {
        $this->data('title', $this->makeTitle('Welcome'));
        $this->pagePath = $this->backendPath . 'pages';
    }
}
