<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function headingRow(): int
    {
        return 1;
    }

    public function model(array $row)
    {
        return new Student([
            'no_ujian' => $row['no_ujian'],
            'nis' => $row['nis'],
            'nisn' => $row['nisn'],
            'nama' => $row['nama_siswa'],
            'ttl' => $row['ttl'],
            'ortu' => $row['nama_ortu'],
            'kls' => $row['kelas'],
            'n_pai' => $row['nrr_pai'] ?? 0,
            'n_pkn' => $row['nrr_pkn'] ?? 0,
            'n_bin' => $row['nrr_bind'] ?? 0,
            'n_mat' => $row['nrr_mtk'] ?? 0,
            'n_ipa' => $row['nrr_ipa'] ?? 0,
            'n_ips' => $row['nrr_ips'] ?? 0,
            'n_big' => $row['nrr_bing'] ?? 0,
            'n_sb' => $row['nrr_sb'] ?? 0,
            'n_pjok' => $row['nrr_pjok'] ?? 0,
            'n_pkr' => $row['nrr_prk'] ?? 0,
            'n_bde' => $row['mulok1'] ?? 0,
            'n_mulok2' => $row['mulok2'] ?? 0,
            'rata2' => $row['rata2'] ?? 0,
            'status' => $row['lulustidak']
        ]);
    }
}
