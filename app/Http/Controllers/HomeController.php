<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // main index or landing page
    public function index(){

        return view('main.index');
    }

    //admin Counting all the registered users
    public function admin(){
        $total = User::where('usertype', 'user')->count();
        $username = Auth::user()->username;
        return view('dashboard', compact('total', 'username'));
    }

    // after login
    public function user_page(){
        $user_name = Auth::user()->username;
        return view('userdashboard', compact('user_name'));
    }
}
