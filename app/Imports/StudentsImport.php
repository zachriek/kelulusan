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
        return 3;
    }

    public function model(array $row)
    {
        return new Student([
            'nama' => $row[0],
            'ttl' => $row[1],
            'nis' => explode('/ ', $row[2])[0],
            'nisn' => explode('/ ', $row[2])[1],
            'kls' => $row[3],
            'status' => $row[4] === 'LULUS' ? 1 : 0
        ]);
    }
}
