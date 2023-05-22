<x-admin-layout title="Profil Saya">
  <div class="row">
    <div class="col-12 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex justify-content-between mb-4">
            <h5 class="card-title fs-6 fw-semibold mb-3">Profil Saya</h5>
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Ubah
              </button>
              <ul class="dropdown-menu">
                <li>
                  <a href="{{ route('admin.profile.edit') }}" class="dropdown-item">
                    <i class="ti ti-pencil"></i>
                    <span class="ms-1">Ubah Profil</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('admin.password.edit') }}" class="dropdown-item">
                    <i class="ti ti-eye"></i>
                    <span class="ms-1">Ubah Password</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <x-session-message />

          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <tbody>
                <tr>
                  <td>
                    <img src="{{ url('admin/assets/images/profile/user-1.jpg') }}" alt="profile" width="200"
                      class="rounded">
                  </td>
                </tr>
                <tr>
                  <th>Nama:</th>
                  <td>{{ auth()->user()->name }}</td>
                </tr>
                <tr>
                  <th>Username:</th>
                  <td>{{ auth()->user()->username }}</td>
                </tr>
                <tr>
                  <th>Email:</th>
                  <td>{{ auth()->user()->email }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</x-admin-layout>
