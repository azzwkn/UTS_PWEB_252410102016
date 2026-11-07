<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->input('username');

        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->input('username');

        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        $hewan = [
            'Kucing',
            'Anjing',
            'Kelinci',
            'Hamster'
        ];

        return view('pengelolaan', compact('hewan'));
    }
}
