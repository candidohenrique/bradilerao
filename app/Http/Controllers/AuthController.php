<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NLogin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'last_name' => 'required',
            'password' => 'required',
        ]);

        $user = NLogin::where('last_name', $request->last_name)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['login' => 'Usuário ou senha inválidos!']);
        }

        session(['user' => $user]);

        return redirect('/perfil');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/');
    }
}
