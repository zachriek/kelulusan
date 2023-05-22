<x-admin-layout title="Tambah Siswa">
  <div class="row">
    <div class="col-12">
      <div class="card w-100">
        <div class="card-body">
          <h5 class="card-title fs-6 fw-semibold mb-4">Tambah Siswa</h5>
          <form method="POST" action="{{ route('admin.students.store') }}">
            @csrf
            <div class="row px-2">
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="no_ujian" class="form-label">Nomor Ujian</label>
                  <input type="text" name="no_ujian" id="no_ujian"
                    class="form-control @error('no_ujian') is-invalid @enderror" placeholder="Masukkan Nomor Ujian"
                    value="{{ old('no_ujian') }}" autofocus autocomplete="off">
                  @error('no_ujian')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="nis" class="form-label">NIS</label>
                  <input type="number" name="nis" id="nis"
                    class="form-control @error('nis') is-invalid @enderror" placeholder="Masukkan NIS"
                    value="{{ old('nis') }}" autocomplete="off">
                  @error('nis')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="nisn" class="form-label">NISN</label>
                  <input type="number" name="nisn" id="nisn"
                    class="form-control @error('nisn') is-invalid @enderror" placeholder="Masukkan NISN"
                    value="{{ old('nisn') }}" autocomplete="off">
                  @error('nisn')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama" id="nama"
                    class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Lengkap"
                    value="{{ old('nama') }}" autocomplete="off">
                  @error('nama')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="ttl" class="form-label">Tempat/Tanggal Lahir</label>
                  <input type="text" name="ttl" id="ttl"
                    class="form-control @error('ttl') is-invalid @enderror" placeholder="Masukkan Tempat/Tanggal Lahir"
                    value="{{ old('ttl') }}" autocomplete="off">
                  @error('ttl')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="ortu" class="form-label">Nama Orang Tua</label>
                  <input type="text" name="ortu" id="ortu"
                    class="form-control @error('ortu') is-invalid @enderror" placeholder="Masukkan Nama Orang Tua"
                    value="{{ old('ortu') }}" autocomplete="off">
                  @error('ortu')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="kls" class="form-label">Kelas</label>
                  <input type="text" name="kls" id="kls"
                    class="form-control @error('kls') is-invalid @enderror" placeholder="Masukkan Kelas"
                    value="{{ old('kls') }}" autocomplete="off">
                  @error('kls')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="n_pai" class="form-label">Nilai Pendidikan Agama Islam</label>
                  <input type="number" name="n_pai" id="n_pai"
                    class="form-control @error('n_pai') is-invalid @enderror"
                    placeholder="Masukkan Nilai Pendidikan Agama Islam" value="{{ old('n_pai') }}"
                    autocomplete="off">
                  @error('n_pai')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="n_pkn" class="form-label">Nilai Pendidikan Kewarganegaraan</label>
                  <input type="number" name="n_pkn" id="n_pkn"
                    class="form-control @error('n_pkn') is-invalid @enderror"
                    placeholder="Masukkan Nilai Pendidikan Kewarganegaraan" value="{{ old('n_pkn') }}"
                    autocomplete="off">
                  @error('n_pkn')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="n_bin" class="form-label">Nilai Bahasa Indonesia</label>
                  <input type="number" name="n_bin" id="n_bin"
                    class="form-control @error('n_bin') is-invalid @enderror"
                    placeholder="Masukkan Nilai Bahasa Indonesia" value="{{ old('n_bin') }}" autocomplete="off">
                  @error('n_bin')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="n_mat" class="form-label">Nilai Matematika</label>
                  <input type="number" name="n_mat" id="n_mat"
                    class="form-control @error('n_mat') is-invalid @enderror" placeholder="Masukkan Nilai Matematika"
                    value="{{ old('n_mat') }}" autocomplete="off">
                  @error('n_mat')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="n_ipa" class="form-label">Nilai Ilmu Pengetahuan Alam</label>
                  <input type="number" name="n_ipa" id="n_ipa"
                    class="form-control @error('n_ipa') is-invalid @enderror"
                    placeholder="Masukkan Nilai Pengetahuan Alam" value="{{ old('n_ipa') }}" autocomplete="off">
                  @error('n_ipa')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="n_ips" class="form-label">Nilai Ilmu Pengetahuan Sosial</label>
                  <input type="number" name="n_ips" id="n_ips"
                    class="form-control @error('n_ips') is-invalid @enderror"
                    placeholder="Masukkan Nilai Ilmu Pengetahuan Sosial" value="{{ old('n_ips') }}"
                    autocomplete="off">
                  @error('n_ips')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="n_big" class="form-label">Nilai Bahasa Inggris</label>
                  <input type="number" name="n_big" id="n_big"
                    class="form-control @error('n_big') is-invalid @enderror"
                    placeholder="Masukkan Nilai Bahasa Inggris" value="{{ old('n_big') }}" autocomplete="off">
                  @error('n_big')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="n_sb" class="form-label">Nilai Seni Budaya</label>
                  <input type="number" name="n_sb" id="n_sb"
                    class="form-control @error('n_sb') is-invalid @enderror" placeholder="Masukkan Nilai Seni Budaya"
                    value="{{ old('n_sb') }}" autocomplete="off">
                  @error('n_sb')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="n_pjok" class="form-label">Nilai Penjas</label>
                  <input type="number" name="n_pjok" id="n_pjok"
                    class="form-control @error('n_pjok') is-invalid @enderror" placeholder="Masukkan Nilai Penjas"
                    value="{{ old('n_pjok') }}" autocomplete="off">
                  @error('n_pjok')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="n_pkr" class="form-label">Nilai Prakarya</label>
                  <input type="number" name="n_pkr" id="n_pkr"
                    class="form-control @error('n_pkr') is-invalid @enderror" placeholder="Masukkan Nilai Prakarya"
                    value="{{ old('n_pkr') }}" autocomplete="off">
                  @error('n_pkr')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="n_bde" class="form-label">Nilai Bahasa Daerah</label>
                  <input type="number" name="n_bde" id="n_bde"
                    class="form-control @error('n_bde') is-invalid @enderror"
                    placeholder="Masukkan Nilai Bahasa Daerah" value="{{ old('n_bde') }}" autocomplete="off">
                  @error('n_bde')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="n_mulok2" class="form-label">Nilai Muatan Lokal 2</label>
                  <input type="number" name="n_mulok2" id="n_mulok2"
                    class="form-control @error('n_mulok2') is-invalid @enderror"
                    placeholder="Masukkan Nilai Muatan Lokal 2" value="{{ old('n_mulok2') }}" autocomplete="off">
                  @error('n_mulok2')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="rata2" class="form-label">Nilai Rata-rata</label>
                  <input type="number" name="rata2" id="rata2"
                    class="form-control @error('rata2') is-invalid @enderror" placeholder="Masukkan Nilai Rata-rata"
                    value="{{ old('rata2') }}" autocomplete="off">
                  @error('rata2')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 mb-4">
                <div class="form-group">
                  <label for="status" class="form-label">Lulus/Tidak Lulus</label>
                  <select class="form-select @error('status') is-invalid @enderror" name="status" id="status">
                    <option value="1" selected>Lulus</option>
                    <option value="2">Tidak Lulus</option>
                  </select>
                  @error('status')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 d-flex flex-column-reverse flex-sm-row justify-content-end mt-5 gap-2">
                <a href="{{ route('admin.students.index') }}" class="btn btn-text">
                  <i class="ti ti-arrow-back"></i>
                  <span>Kembali</span>
                </a>
                <button class="btn btn-primary">
                  <i class="ti ti-plus"></i>
                  <span>Buat Siswa</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>
