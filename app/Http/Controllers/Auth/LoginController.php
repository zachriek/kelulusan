<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.guest.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (auth()->attempt($request->only(['username', 'password']))) {
            toast('Berhasil masuk!', 'success');
            return redirect()->route('admin.dashboard')->with('success', 'Berhasil masuk!');
        }

        toast('Gagal masuk!', 'error');
        return redirect()->route('login')->with('error', 'Gagal masuk!');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'Berhasil keluar!');
    }
}
