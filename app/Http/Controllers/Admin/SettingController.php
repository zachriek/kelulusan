<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::first();
        return view('pages.admin.settings.edit', compact('setting'));
    }

    private function remove_image($image)
    {
        unlink(public_path('base/assets/images/settings/' . $image));
    }

    private function move_image($file, $name)
    {
        $file->move(public_path('base/assets/images/settings'), $name);
    }

    public function update(SettingRequest $request, Setting $setting)
    {
        $data = $request->all();
        $data['tgl_pengumuman'] = "$request->tgl_pengumuman $request->jam_pengumuman";

        if ($request->file('logo') && $request->file('ttd') && $request->file('cap') && $request->file('kop')) {
            if ($setting->logo !== null && $setting->ttd !== null && $setting->cap !== null && $setting->kop !== null) {
                $this->remove_image($setting->logo);
                $this->remove_image($setting->ttd);
                $this->remove_image($setting->cap);
                $this->remove_image($setting->kop);
            }

            // Logo
            $logo_file = $request->file('logo');
            $logo_name = 'logo.png';
            $this->move_image($logo_file, $logo_name);
            $data['logo'] = $logo_name;

            // TTD
            $ttd_file = $request->file('ttd');
            $ttd_name = 'ttd.png';
            $this->move_image($ttd_file, $ttd_name);
            $data['ttd'] = $ttd_name;

            // KOP
            $kop_file = $request->file('kop');
            $kop_name = 'kopsurat.png';
            $this->move_image($kop_file, $kop_name);
            $data['kop'] = $kop_name;

            // CAP
            $cap_file = $request->file('cap');
            $cap_name = 'cap.png';
            $this->move_image($cap_file, $cap_name);
            $data['cap'] = $cap_name;
        }

        $setting->update($data);
        toast('Berhasil memperbarui konfigurasi!', 'success');
        return redirect()->route('admin.settings.edit')->with('success', 'Berhasil memperbarui konfigurasi!');
    }
}
