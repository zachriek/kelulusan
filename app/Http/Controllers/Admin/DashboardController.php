<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_user = User::count();
        $jumlah_siswa = Student::count();
        $jumlah_lulus = Student::where('status', 1)->count();
        $jumlah_tidak_lulus = Student::where('status', 0)->count();

        return view('pages.admin.dashboard', compact('jumlah_lulus', 'jumlah_tidak_lulus', 'jumlah_user', 'jumlah_siswa'));
    }
}
