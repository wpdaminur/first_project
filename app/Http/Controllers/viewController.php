<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class viewController extends Controller
{
    public function index()
    {
        return 'Hellow NASA';
    }
    public function demo()
    {
        return view (view: 'demo');
    }
}