<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class signController extends Controller
{
    public function index()
    {
    	return view('Admin.sign');
    }
    public function sign()
    {
    	return view('Admin.signup');
    }
}
