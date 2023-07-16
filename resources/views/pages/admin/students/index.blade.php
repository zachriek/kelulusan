<x-admin-layout title="Manajemen Siswa">
  <div class="row">
    <div class="col-12">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex justify-content-between mb-5">
            <h5 class="card-title fs-6 fw-semibold mb-3">Manajemen Siswa</h5>
            <div class="d-flex flex-column flex-md-row align-items-md-center gap-2">
              <div class="d-sm-flex justify-content-end">
                <a href="{{ route('admin.students.create') }}" class="btn btn-outline-primary">
                  <i class="ti ti-plus"></i>
                  <span>Tambah Siswa</span>
                </a>
              </div>
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Import/Export Data
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#studentModal">
                      <i class="ti ti-file-import"></i>
                      <span class="ms-1">Import Data</span>
                      </butt>
                  </li>
                  <li>
                    <form method="POST" action="{{ route('admin.students.export') }}">
                      @csrf
                      <button type="submit" class="dropdown-item">
                        <i class="ti ti-download"></i>
                        <span class="ms-1">Download Data</span>
                      </button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <x-session-message />

          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="students_table">
              <thead>
                <tr class="align-middle">
                  <th>No.</th>
                  <th>Nama Siswa</th>
                  <th>Tempat dan Tanggal Lahir</th>
                  <th>NIS/NISN</th>
                  <th>Kelas</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($students as $student)
                  <tr class="align-middle">
                    <td>{{ $loop->iteration }}.</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->ttl }}</td>
                    <td>{{ $student->nis }}/{{ $student->nisn }}</td>
                    <td>{{ $student->kls }}</td>
                    <td class="fw-semibold">
                      @if ($student->status == 1)
                        <span class="text-success">LULUS</span>
                      @else
                        <span class="text-danger">TIDAK LULUS</span>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-sm btn-primary">
                        <i class="ti ti-pencil"></i>
                      </a>
                      <form method="POST" action="{{ route('admin.students.destroy', $student->id) }}"
                        class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                          onclick="return confirm('Apakah anda yakin ingin menghapus siswa ini?');">
                          <i class="ti ti-trash"></i>
                        </button>
                      </form>
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

  <!-- Modal -->
  <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="studentModalLabel">Import Data Siswa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <a href="{{ url('base/assets/templates/template.xlsx') }}" class="btn btn-primary mb-4">
            <i class="ti ti-download"></i>
            <span>Download Template Excel</span>
          </a>

          <form method="POST" action="{{ route('admin.students.import') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="file" class="form-label">File CSV/Excel</label>
              <input type="file" name="file" id="file"
                class="form-control @error('file') is-invalid @enderror" placeholder="Masukkan File CSV/Excel">
              @error('file')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="d-flex justify-content-end mt-5">
              <button type="button" class="btn btn-text" data-bs-dismiss="modal">
                <i class="ti ti-arrow-back"></i>
                <span>Kembali</span>
              </button>

              <button type="submit" class="btn btn-primary">
                <i class="ti ti-file-import"></i>
                <span>Import</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @push('addon-scripts')
    <script>
      $(document).ready(function() {
        $('#students_table').DataTable();
      });
    </script>
  @endpush
</x-admin-layout>
