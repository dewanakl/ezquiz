<?php

namespace App\Controllers;

use Core\Auth\Auth;
use Core\Routing\Controller;
use Core\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return $this->view('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return $this->redirect(route('login'))->with('berhasil', 'Berhasil logout');
    }
}
