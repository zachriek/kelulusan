<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('pages.admin.users.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'email' => ['required'],
            'password' => ['required', 'min:6'],
        ]);
        $data['password'] = Hash::make($request->password);

        User::create($data);
        toast('Berhasil menambahkan user baru!', 'success');
        return redirect()->route('admin.users.index')->with('success', 'Berhasil menambahkan user baru!');
    }

    public function edit(User $user)
    {
        return view('pages.admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'email' => ['required'],
        ]);

        $user->update($data);
        toast('Berhasil memperbarui user!', 'success');
        return redirect()->route('admin.users.index')->with('success', 'Berhasil memperbarui user!');
    }

    public function destroy(User $user)
    {
        $users_count = User::count();

        if ($users_count === 1) {
            toast('Gagal menghapus user!', 'error');
            return redirect()->route('admin.users.index')->with('error', 'Gagal menghapus user!');
        }

        $user->delete();
        toast('Berhasil menghapus user!', 'success');
        return redirect()->route('admin.users.index')->with('success', 'Berhasil menghapus user!');
    }
}
