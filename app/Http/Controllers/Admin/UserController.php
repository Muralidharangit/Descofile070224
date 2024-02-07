<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index()
     {
         $user = User::get();
        return view('Admin.user_management.index',compact('user'));
     }
}
