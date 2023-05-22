<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaracraftTech\LaravelUsefulAdditions\Traits\UsefulScopes;

class Student extends Model
{
    use HasFactory;
    use UsefulScopes;

    protected $hidden = ['id', 'created_at', 'updated_at'];
    protected $fillable = [
        'no_ujian',
        'nis',
        'nisn',
        'nama',
        'ttl',
        'ortu',
        'kls',
        'n_pai',
        'n_pkn',
        'n_bin',
        'n_mat',
        'n_ipa',
        'n_ips',
        'n_big',
        'n_sb',
        'n_pjok',
        'n_pkr',
        'n_bde',
        'n_mulok2',
        'rata2',
        'status'
    ];
}
