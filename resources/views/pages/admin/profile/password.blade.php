<x-admin-layout title="Ubah Password">
  <div class="row">
    <div class="col-12">
      <div class="card w-100">
        <div class="card-body">
          <h5 class="card-title fs-6 fw-semibold mb-4">Ubah Password</h5>
          <x-session-message />
          <form method="POST" action="{{ route('admin.password.update') }}">
            @csrf
            @method('PATCH')
            <div class="row px-2">
              <div class="col-12 mb-4">
                <div class="form-group mb-4">
                  <label for="old_password" class="mb-2">Password Saat Ini</label>
                  <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                    name="old_password" id="old_password" placeholder="Masukkan Password" autofocus autocomplete="off">
                  @error('old_password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="new_password" class="mb-2">Password Baru</label>
                  <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                    name="new_password" id="new_password" placeholder="Masukkan Password Baru" autocomplete="off">
                  @error('new_password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="new_password_confirmation" class="mb-2">Konfirmasi Password Baru</label>
                  <input type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror"
                    name="new_password_confirmation" id="new_password_confirmation"
                    placeholder="Masukkan Konfirmasi Password Baru" autocomplete="off">
                  @error('new_password_confirmation')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 d-flex flex-column-reverse flex-sm-row justify-content-end mt-5 gap-2">
                <a href="{{ route('admin.profile.show') }}" class="btn btn-text">
                  <i class="ti ti-arrow-back"></i>
                  <span>Kembali</span>
                </a>
                <button class="btn btn-primary">
                  <i class="ti ti-device-floppy"></i>
                  <span>Perbarui Password</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>
