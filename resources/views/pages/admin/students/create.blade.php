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
