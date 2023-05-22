<x-admin-layout title="Manajemen User">
  <div class="row">
    <div class="col-12">
      <div class="card w-100">
        <div class="card-body">
          <h5 class="card-title fs-6 fw-semibold mb-4">Manajemen User</h5>
          <div class="alert alert-warning" role="alert">
            <div class="fw-semibold text-dark mb-1">
              <i class="ti ti-alert-circle"></i>
              <span>Peringatan!</span>
            </div>
            Hak akses user pada aplikasi ini sangat sederhana, siapapun user yang memiliki hak akses dapat melakukan
            perubahan konten database. Meskipun aplikasi ini telah dilengkapi enkripsi untuk password, jangan
            menggunakan kata-kata yang umum sebagai password admin.
          </div>

          <x-session-message />

          <div class="d-flex justify-content-end mb-2 mt-5">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
              <i class="ti ti-plus"></i>
              <span>Tambah User</span>
            </a>
          </div>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Username</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>{{ $loop->iteration }}.</td>
                    <td>{{ $user->username }}</td>
                    <td>
                      <a href="{{ route('admin.users.edit', $user->username) }}" class="btn btn-sm btn-primary">
                        <i class="ti ti-pencil"></i>
                        <span class="d-none d-sm-inline">Edit</span>
                      </a>
                      @if (count($users) > 1)
                        <form method="POST" action="{{ route('admin.users.destroy', $user->username) }}"
                          class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Apakah anda yakin ingin menghapus user ini?');">
                            <i class="ti ti-trash"></i>
                            <span class="d-none d-sm-inline">Delete</span>
                          </button>
                        </form>
                      @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>
