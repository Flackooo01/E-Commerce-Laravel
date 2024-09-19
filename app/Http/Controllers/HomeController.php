<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // main index or landing page
    public function index(){
        return view('main.index');
    }
    //admin
    public function admin(){
        return view('admin.index');
    }
    // after login
    public function user_page(){
        return view('userdashboard');
    }
}
