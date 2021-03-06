<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $data) {
        
        if($data['password'] !== $data['passwordconfirm']) {
            return view('user.register', ['error' => 'As senhas não conferem!']);
        } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return view('user.register', ['error' => 'Selecione um email válido!']);
        } else if (strlen($data['name']) < 4 || strlen($data['name'] > 16)) {
            return view('user.register', ['error' => 'Seu nome deve ter entre 4 e 16 caracteres!']);
        } else if($this->create($data)) {
            return redirect('login');
        } else {
            return view('user.register', ['error' => 'Email já cadastrado!']);
        }
    }

    public function index() {
        return view('user.register');
    }
}
