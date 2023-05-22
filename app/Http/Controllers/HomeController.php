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
            'no_ujian' => ['required']
        ]);

        $tgl_pengumuman = Setting::first()->tgl_pengumuman;
        $tgl_pengumuman = strip_tags($tgl_pengumuman);
        $waktu = $this->getWaktuPengumuman($tgl_pengumuman);

        $siswa = Student::where('no_ujian', $request->no_ujian)->first();
        $nilai_kelompok_a = $this->get_nilai_kelompok_a($siswa);
        $nilai_kelompok_b = $this->get_nilai_kelompok_b($siswa);
        return view('pages.base.home', compact('siswa', 'nilai_kelompok_a', 'nilai_kelompok_b', 'waktu', 'tgl_pengumuman'));
    }

    public function print(Request $request)
    {
        $request->validate([
            'id' => ['required']
        ]);

        $siswa = Student::findOrFail($request->id);
        $sekolah = Setting::first();
        $tahun_ajaran = date('Y') - 1 . '/' . date('Y');
        return view('pages.base.print', compact('siswa', 'sekolah', 'tahun_ajaran'));
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

    private function  get_nilai_kelompok_a($siswa)
    {
        return [
            [
                "nama" => "Pendidikan Agama dan Budi Pekerti",
                "nilai" =>  $siswa->n_pai
            ],
            [
                "nama" => "Pendidikan Pancasila dan Kewarganegaraan",
                "nilai" =>  $siswa->n_pkn
            ],
            [
                "nama" => "Bahasa Indonesia",
                "nilai" =>  $siswa->n_bin
            ],
            [
                "nama" => "Matematika",
                "nilai" =>  $siswa->n_bin
            ],
            [
                "nama" => "Ilmu Pengetahuan Alam",
                "nilai" =>  $siswa->n_ipa
            ],
            [
                "nama" => "Ilmu Pengetahuan Sosial",
                "nilai" =>  $siswa->n_ips
            ],
            [
                "nama" => "Bahasa Inggris",
                "nilai" =>  $siswa->n_big
            ],
        ];
    }

    private function  get_nilai_kelompok_b($siswa)
    {
        return [
            [
                "nama" => "Seni Budaya",
                "nilai" =>  $siswa->n_sb
            ],
            [
                "nama" => "Pendidikan Jasmani, Olah Raga, dan Kesehatan",
                "nilai" =>  $siswa->n_pjok
            ],
            [
                "nama" => "Prakarya",
                "nilai" =>  $siswa->n_pkr
            ],
            [
                "nama" => "Bahasa Lampung",
                "nilai" =>  $siswa->n_bde
            ],
        ];
    }
}
