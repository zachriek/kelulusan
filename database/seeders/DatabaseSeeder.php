<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin 1',
            'username' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('123456789'),
        ]);

        Setting::create([
            'sekolah' => 'SMP Insan Mandiri',
            'kepsek' => 'Kepala Sekolah',
            'kota' => 'Bandar Lampung',
            'ttd' => 'ttd.png',
            'cap' => 'cap.png',
            'logo' => 'logo.png',
            'kop' => 'kopsurat.png',
            'kop' => 'kopsurat.png',
            'about' => 'Website ini diperuntukkan memberikan informasi kelulusan kepada peserta didik berbasis Website atau Online. Dalam menyikapi wabah COVID-19. Untuk Surat Keterangan kelulusan bisa di ambil di sekolah atau hubungi Wali kelas.',
            'contact' => 'Alamat Sekolah: -
            <br>
            Email: -
            <br>
            Website: -',
            'tgl_pengumuman' => date('Y-m-d H:i:s')
        ]);
    }
}
