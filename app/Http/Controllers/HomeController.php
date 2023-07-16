<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tgl_pengumuman = Setting::first()->tgl_pengumuman;
        $tgl_pengumuman = strip_tags($tgl_pengumuman);
        $waktu = $this->getWaktuPengumuman($tgl_pengumuman);

        return view('pages.base.home', compact('tgl_pengumuman', 'waktu'), [
            'siswa' => '',
        ]);
    }

    public function cek(Request $request)
    {
        $request->validate([
            'nisn' => ['required', 'min:10', 'max:10']
        ]);

        $tgl_pengumuman = Setting::first()->tgl_pengumuman;
        $tgl_pengumuman = strip_tags($tgl_pengumuman);
        $waktu = $this->getWaktuPengumuman($tgl_pengumuman);

        $siswa = Student::where('nisn', $request->nisn)->first();
        return view('pages.base.home', compact('siswa', 'waktu', 'tgl_pengumuman'));
    }

    public function print(Request $request)
    {
        $request->validate([
            'id' => ['required']
        ]);

        $siswa = Student::findOrFail($request->id);
        $sekolah = Setting::first();
        $tahun_ajaran = date('Y') - 1 . '/' . date('Y');
        setlocale(LC_TIME, 'IND');
        $tgl_pengumuman = Setting::getTanggal();

        return view('pages.base.print', compact('siswa', 'sekolah', 'tahun_ajaran', 'tgl_pengumuman'));
    }

    private function getWaktuPengumuman($tgl_pengumuman)
    {
        $tgl = substr($tgl_pengumuman, 8, 2);
        $bln = substr($tgl_pengumuman, 5, 2);
        $thn = substr($tgl_pengumuman, 0, 4);
        $jam = substr($tgl_pengumuman, 11, 5);
        $namaBulan = array("01" => "Januari", "02" => "Februaru", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
        $tgl_skl = "$tgl $namaBulan[$bln] $thn";
        $waktu = "<br>$tgl_skl Pukul: $jam WIB";

        return $waktu;
    }
}
