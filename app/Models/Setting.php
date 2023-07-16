<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $hidden = [];
    protected $fillable = [
        'sekolah',
        'kepsek',
        'kota',
        'ttd',
        'about',
        'tgl_pengumuman',
        'logo',
        'kop',
        'cap',
    ];

    public static function getTanggal()
    {
        $sekolah = Setting::first();
        $format_tanggal = strtotime(strip_tags($sekolah->tgl_pengumuman));
        $namaBulan = array("01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");

        $bulan = $namaBulan[date("m", $format_tanggal)];
        $tahun = date("Y", $format_tanggal);
        $tgl = date("d", $format_tanggal);

        $tgl_pengumuman = "$tgl $bulan $tahun";

        return $tgl_pengumuman;
    }
}
