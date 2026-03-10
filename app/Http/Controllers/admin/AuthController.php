<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView(){
        return view('admin.auth.login');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function adminLogin(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credentials, $request->has('remember'))) {
            return redirect(route('admin.dashboard'))->with('success', 'Login success.');
        } else {
            return back()->with('error', 'Invalid email or password. Please try again.');
        }
    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return back()->with('success', 'Logout Success.');
    }
}
