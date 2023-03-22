<?php

namespace App\Controllers;

use App\Models\Quiz;
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

    public function list()
    {
        $data = Quiz::where('user_id', Auth::id())->get();

        return $this->view('list', [
            'data' => $data
        ]);
    }
}
