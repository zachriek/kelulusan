<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
        return view('pages.admin.profile.password');
    }

    public function update(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);

        $rules = [
            'old_password' => ['required'],
            'new_password' => ['required', 'min:6', 'confirmed']
        ];
        $request->validate($rules);

        if (!Hash::check($request->old_password, $user->password)) {
            toast("Password tidak sesuai!", "error");
            return back()->with("error", "Password tidak sesuai!");
        }

        $user->update(['password' => Hash::make($request->new_password)]);
        toast("Password berhasil diubah!", "success");
        return redirect()->route('admin.profile.show')->with("success", "Password berhasil diubah!");
    }
}
