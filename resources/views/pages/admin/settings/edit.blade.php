<x-admin-layout title="Konfigurasi">
  <div class="row">
    <div class="col-12">
      <div class="card w-100">
        <div class="card-body">
          <h5 class="card-title fs-6 fw-semibold mb-4">Konfigurasi</h5>
          <form method="POST" action="{{ route('admin.settings.update', $setting->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row px-2">
              <div class="col-12 mb-4">
                <img id="logo_img" class="img-thumbnail" width="200"
                  src="{{ url('base/assets/images/settings/' . $setting->logo) }}" alt="logo" loading="lazy">
                <div class="form-group">
                  <label for="logo" class="form-label">Logo Sekolah</label>
                  <input type="file" name="logo" id="logo"
                    class="form-control @error('logo') is-invalid @enderror" placeholder="Masukkan Logo Sekolah"
                    onchange="previewImage(this, '#logo_img')">
                  @error('logo')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="sekolah" class="form-label">Nama Sekolah</label>
                  <input type="text" name="sekolah" id="sekolah"
                    class="form-control @error('sekolah') is-invalid @enderror" placeholder="Masukkan Nama Sekolah"
                    value="{{ old('sekolah', $setting->sekolah) }}" autocomplete="off">
                  @error('sekolah')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="nopesformat" class="form-label">Format Nomor Peserta</label>
                  <input type="text" name="nopesformat" id="nopesformat"
                    class="form-control @error('nopesformat') is-invalid @enderror"
                    placeholder="Masukkan Format Nomor Peserta" value="{{ old('nopesformat', $setting->nopesformat) }}"
                    autocomplete="off">
                  @error('nopesformat')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="tgl_pengumuman" class="form-label">Tanggal Pengumuman</label>
                  <input type="date" name="tgl_pengumuman" id="tgl_pengumuman"
                    class="form-control @error('tgl_pengumuman') is-invalid @enderror"
                    placeholder="Masukkan Tanggal Pengumuman"
                    value="{{ old('tgl_pengumuman', explode(' ', $setting->tgl_pengumuman))[0] }}" autocomplete="off">
                  @error('tgl_pengumuman')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="jam_pengumuman" class="form-label">Jam Pengumuman</label>
                  <input type="time" name="jam_pengumuman" id="jam_pengumuman"
                    class="form-control @error('jam_pengumuman') is-invalid @enderror"
                    placeholder="Masukkan Jam Pengumuman"
                    value="{{ old('jam_pengumuman', explode(' ', $setting->tgl_pengumuman))[1] }}">
                  @error('jam_pengumuman')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="about" class="form-label">Tentang</label>
                  <textarea name="about" id="about" cols="30" rows="10"
                    class="form-control @error('about') is-invalid @enderror" placeholder="Masukkan isi Halaman Tentang">{{ $setting->about }}</textarea>
                  @error('about')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="contact" class="form-label">Kontak</label>
                  <textarea name="contact" id="contact" cols="30" rows="10"
                    class="form-control @error('contact') is-invalid @enderror" placeholder="Masukkan Isi Halaman Kontak">{{ $setting->contact }}</textarea>
                  @error('contact')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>

            <h5 class="card-title fs-6 fw-semibold mt-5 mb-4">Konfigurasi Surat</h5>
            <hr>

            <div class="row px-2">
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="kepsek" class="form-label">Nama Kepala Sekolah</label>
                  <input type="text" name="kepsek" id="kepsek"
                    class="form-control @error('kepsek') is-invalid @enderror"
                    placeholder="Masukkan Nama Kepala Sekolah" value="{{ old('kepsek', $setting->kepsek) }}"
                    autocomplete="off">
                  @error('kepsek')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="nip" class="form-label">NIP Kepala Sekolah</label>
                  <input type="number" name="nip" id="nip"
                    class="form-control @error('nip') is-invalid @enderror" placeholder="Masukkan NIP Kepala Sekolah"
                    value="{{ old('nip', $setting->nip) }}" autocomplete="off">
                  @error('nip')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 mb-4">
                <div class="form-group">
                  <label for="no_surat" class="form-label">Nomor Surat Kelulusan</label>
                  <input type="text" name="no_surat" id="no_surat"
                    class="form-control @error('no_surat') is-invalid @enderror"
                    placeholder="Masukkan Nomor Surat Kelulusan" value="{{ old('no_surat', $setting->no_surat) }}"
                    autocomplete="off">
                  @error('no_surat')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 mb-4">
                <img id="cap_img" class="img-thumbnail" width="200"
                  src="{{ url('base/assets/images/settings/' . $setting->cap) }}" alt="cap" loading="lazy">
                <div class="form-group">
                  <label for="cap" class="form-label">Cap/stempel Sekolah</label>
                  <input type="file" name="cap" id="cap"
                    class="form-control @error('cap') is-invalid @enderror"
                    placeholder="Masukkan Cap/stempel Sekolah" onchange="previewImage(this, '#cap_img')">
                  @error('cap')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <img id="ttd_img" class="img-thumbnail" width="200"
                  src="{{ url('base/assets/images/settings/' . $setting->ttd) }}" alt="ttd" loading="lazy">
                <div class="form-group">
                  <label for="ttd" class="form-label">Tanda Tangan</label>
                  <input type="file" name="ttd" id="ttd"
                    class="form-control @error('ttd') is-invalid @enderror" placeholder="Masukkan Tanda Tangan"
                    onchange="previewImage(this, '#ttd_img')">
                  @error('ttd')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <img id="kop_img" class="img-thumbnail" width="200"
                  src="{{ url('base/assets/images/settings/' . $setting->kop) }}" alt="kop" loading="lazy">
                <div class="form-group">
                  <label for="kop" class="form-label">KOP Surat</label>
                  <input type="file" name="kop" id="kop"
                    class="form-control @error('kop') is-invalid @enderror" placeholder="Masukkan KOP Surat"
                    onchange="previewImage(this, '#kop_img')">
                  @error('kop')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="col-12 d-flex justify-content-end mt-5">
                <button class="btn btn-primary">
                  <i class="ti ti-device-floppy"></i>
                  <span>Perbarui Konfigurasi</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @push('addon-scripts')
    <script>
      const previewImage = (input, selector) => {
        const image = document.querySelector(selector);
        const reader = new FileReader();
        reader.onload = function(e) {
          image.src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
      }
    </script>
  @endpush
</x-admin-layout>
