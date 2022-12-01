<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteBackendController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
}