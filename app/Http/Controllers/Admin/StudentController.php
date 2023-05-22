<?php

namespace App\Http\Controllers\Admin;

use App\Exports\StudentsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StudentRequest;
use App\Imports\StudentsImport;
use App\Models\Setting;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function import(Request $request)
    {
        if (empty($request->file('file')->getRealPath())) {
            toast('File belum dimasukkan!', 'success');
            return back()->with('success', 'File belum dimasukkan!');
        }

        $request->validate([
            'file' => ['required', 'file', 'mimes:csv,txt', 'max:10000']
        ]);

        $file = $request->file('file');
        $file_name = $file->getClientOriginalName();
        $file->move(public_path('base/assets/files'), $file_name);

        $import = new StudentsImport();
        Student::query()->delete();
        Excel::import($import, public_path('base/assets/files/' . $file_name));

        toast('Berhasil import data siswa!', 'success');
        return back()->with('success', 'Berhasil import data siswa!');
    }

    public function export()
    {
        return Excel::download(new StudentsExport, 'nilai_siswa.xlsx');
    }

    public function print(Request $request)
    {
        $students = Student::all();
        $sekolah = Setting::first();
        $tahun_ajaran = date('Y') - 1 . '/' . date('Y');
        return view('pages.admin.students.print', compact('students', 'sekolah', 'tahun_ajaran'));
    }

    public function index()
    {
        $students = Student::all();
        return view('pages.admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('pages.admin.students.create');
    }

    public function store(StudentRequest $request)
    {
        $data = $request->all();
        Student::create($data);
        toast('Berhasil menambahkan siswa baru!', 'success');
        return redirect()->route('admin.students.index')->with('success', 'Berhasil menambahkan siswa baru!');
    }

    public function edit(Student $student)
    {
        return view('pages.admin.students.edit', compact('student'));
    }

    public function update(StudentRequest $request, Student $student)
    {
        $data = $request->all();
        $student->update($data);
        toast('Berhasil memperbarui siswa!', 'success');
        return redirect()->route('admin.students.index')->with('success', 'Berhasil memperbarui siswa!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        toast('Berhasil menghapus siswa!', 'success');
        return redirect()->route('admin.students.index')->with('success', 'Berhasil menghapus siswa!');
    }
}
