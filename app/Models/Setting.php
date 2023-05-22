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
        'nip',
        'no_surat',
        'ttd',
        'about',
        'tgl_pengumuman',
        'nopesformat',
        'logo',
        'kop',
        'cap',
    ];
}
