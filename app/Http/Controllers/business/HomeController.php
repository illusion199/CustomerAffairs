<?php

namespace App\Http\Controllers\business;
use App\Model\user\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
       /*  $users = User::all();
        return view('admin.home',compact('users')); */
        return view('business.home');
        //return $users;
    }
}
