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
        return ["NO_UJIAN", "NIS", "NISN", "Nama Siswa", "TTL", "Nama Ortu", 'Kelas', 'NRR-PAI', 'NRR-PKn', 'NRR-BInd', 'NRR-MTK', 'NRR-IPA', 'NRR-IPS', 'NRR-BIng', 'NRR-SB', 'NRR-PJOK', 'NRR-PRK', 'Mulok1', 'Mulok2', 'Rata2', 'LULUS/TIDAK'];
    }

    public function collection()
    {
        return Student::all();
    }
}
