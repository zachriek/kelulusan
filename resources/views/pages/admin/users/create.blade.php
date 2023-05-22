<x-admin-layout title="Tambah User">
  <div class="row">
    <div class="col-12">
      <div class="card w-100">
        <div class="card-body">
          <h5 class="card-title fs-6 fw-semibold mb-4">Tambah User</h5>
          <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf
            <div class="row px-2">
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="name" class="form-label">Nama Lengkap</label>
                  <input type="text" name="name" id="name"
                    class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Lengkap"
                    value="{{ old('name') }}" autofocus autocomplete="off">
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" name="username" id="username"
                    class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan Username"
                    value="{{ old('username') }}" autocomplete="off">
                  @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" id="email"
                    class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email"
                    value="{{ old('email') }}" autocomplete="off">
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4">
                <div class="form-group">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" id="password"
                    class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password"
                    value="{{ old('password') }}" autocomplete="off">
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 d-flex flex-column-reverse flex-sm-row justify-content-end mt-5 gap-2">
                <a href="{{ route('admin.users.index') }}" class="btn btn-text">
                  <i class="ti ti-arrow-back"></i>
                  <span>Kembali</span>
                </a>
                <button class="btn btn-primary">
                  <i class="ti ti-plus"></i>
                  <span>Buat User</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>
