<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use App\Tasks;


class TodolistController extends Controller
{
    public function index() {
        if(Auth::check()) {
            $tasks = Tasks::all()->where('userId', '=', Auth::user()['id']);
            return view('user.todolist', ['user' => Auth::user(), 'tasks' => $tasks]);
        } else {
            return redirect('login');
        }
    }

    public function logout() {
        if(Auth::check()) {
            Auth::logout();
            return redirect('login');
        } else {
            return redirect('login');
        }
    }

    public function insertTask(Request $request) {
        if(Auth::check()) {
            $task = new Tasks();
            $task->name = $request['newtask'];
            $task->userId = Auth::user()['id'];
            $task->save();

            return redirect('todolist');
        } else {
            return redirect('login');
        }
    }

    public function deleteTask(Request $request) {
        if(Auth::check()) {
            $task = Tasks::find($request['id'])->delete();
            return redirect('todolist');
        } else {
            return redirect('login');
        }
    }
}
