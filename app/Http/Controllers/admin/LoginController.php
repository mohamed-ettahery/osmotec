<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        if (session()->has('admin')) {
            return redirect('/owner');
        }
        return view("admin.login");
    }
    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $user = Admin::where('email', $email)->first();

        if ($user && password_verify($password, $user->password)) {
            session(['admin' => $user->id]);
            return redirect()->intended('/owner');
        } else {
            return back()->withInput()->with('error', 'Email ou mot de passe invalide.');
        }
    }
    public function logOut()
    {
        Session::flush();
        return redirect()->route('login.index');
    }
}
