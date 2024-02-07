<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gallery;
use App\Models\contact;
class DashboardController extends Controller
{
     public function index()
     {
        $usercount = User::count();
        $gallerycount = Gallery::count();
        $contactcount = contact::count();
        return view('Admin.dashboard',compact('usercount','gallerycount','contactcount'));
     }
}
