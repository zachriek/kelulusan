<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        return view('pages.admin.profile.show');
    }

    public function edit()
    {
        return view('pages.admin.profile.edit');
    }

    public function update(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);

        $data = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'email' => ['required'],
        ]);

        $user->update($data);
        toast('Berhasil memperbarui profil!', 'success');
        return redirect()->route('admin.profile.show')->with('success', 'Berhasil memperbarui profil!');
    }
}
