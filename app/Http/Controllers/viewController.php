<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class viewController extends Controller
{
    public function index()
    {
        return 'Hellow World';
    }
    public function demo()
    {
        return view (view: 'demo');
    }
}