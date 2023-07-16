<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function headings(): array
    {
        return ["NAMA", "TEMPAT DAN TANGGAL LAHIR", "NIS/NISN", "KELAS", "KETERANGAN"];
    }

    public function collection()
    {
        return Student::all();
    }
}
