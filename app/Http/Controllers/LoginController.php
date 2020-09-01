<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $data) {
        $credentials = $data->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect('todolist');
        } else {
            return view('user.login', ['error' => 'Usuário ou senha incorretos!']);
        }
    }

    public function index() {
        if(Auth::check()) {
            return redirect('todolist');
        } else {
            return view('user.login');
        }
    }
}
