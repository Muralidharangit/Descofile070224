<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('Admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        // dd("text");
        $credentials = [
            "email" => $request['email'],
            "password" => $request['password'],
        ];

        if (Auth::attempt($credentials)) {

        return (redirect(route('dashboard')))->with('success', 'You have Successfully loggedin');
        }

        else{
            return redirect()->back()->with('danger', 'You have entered invalid credentials');
        }
       
    }

    
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->to(route('login'));
    }
}
