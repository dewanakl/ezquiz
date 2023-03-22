<?php

namespace App\Controllers;

use App\Models\User;
use Core\Auth\Auth;
use Core\Routing\Controller;
use Core\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return $this->view('auth/login');
    }

    public function register()
    {
        return $this->view('auth/register');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => ['required', 'dns', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($request->only(['email', 'password']))) {
            return $this->redirect(route('dashboard'));
        }

        return $this->redirect(route('login'));
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required'],
            'email' => ['required', 'dns', 'email'],
            'password' => ['required', 'hash']
        ]);

        $data['role_id'] = 2;

        User::create($data);

        return $this->redirect(route('login'))->with('berhasil', 'Registrasi berhasil, silahkan login');
    }
}
