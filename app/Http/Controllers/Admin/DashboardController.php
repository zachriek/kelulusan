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
        $rata2_nilai_akhir = $jumlah_siswa > 1 ? $this->getNilaiAkhir() : null;

        return view('pages.admin.dashboard', compact('rata2_nilai_akhir', 'jumlah_lulus', 'jumlah_tidak_lulus', 'jumlah_user', 'jumlah_siswa'));
    }

    private function getNilaiAkhir()
    {
        $mapels = ['n_pai', 'n_pkn', 'n_bin', 'n_mat', 'n_ipa', 'n_ips', 'n_big', 'n_sb', 'n_pjok', 'n_pkr', 'n_bde'];
        $rata2_nilai_akhir = [
            'n_pai' => 0,
            'n_pkn' => 0,
            'n_bin' => 0,
            'n_mat' => 0,
            'n_ipa' => 0,
            'n_ips' => 0,
            'n_big' => 0,
            'n_sb' => 0,
            'n_pjok' => 0,
            'n_pkr' => 0,
            'n_bde' => 0
        ];
        $rata2_nilai = Student::select($mapels)->get()->toArray();
        foreach ($rata2_nilai as $nilai) {
            foreach ($mapels as $mapel) {
                $rata2_nilai_akhir[$mapel] += $nilai[$mapel];
            }
        }
        foreach ($mapels as $mapel) {
            $rata2_nilai_akhir[$mapel] = intval($rata2_nilai_akhir[$mapel] / count($rata2_nilai));
        }
        return $rata2_nilai_akhir;
    }
}
