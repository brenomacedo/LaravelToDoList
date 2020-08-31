<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;


class TodolistController extends Controller
{
    public function index() {
        if(Auth::check()) {
            return view('user.todolist');
        } else {
            return redirect('login');
        }
    }
}
