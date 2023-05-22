<x-base-layout title="Beranda">
  <section class="section" id="hero">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <img src="{{ url('base/assets/images/settings/' . \App\Models\Setting::first()->logo) }}" alt="logo"
            width="150">
          <h1 class="text-uppercase fw-bold">Pengumuman Kelulusan</h1>
          <h5 class="fw-bold mb-0">{{ \App\Models\Setting::first()->sekolah }}</h5>
          <h6 class="fw-bold">Tahun Pelajaran {{ date('Y') - 1 }}/{{ date('Y') }}</h6>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 col-12">
          <div id="clock" class="lead"></div>
          <div id="xpengumuman">
            @if (!$siswa)
              <p class="fw-bold text-success text-center">Masukkan nomor Ujian pada kolom yang disediakan</p>
              <form method="POST" action="{{ route('home.cek') }}">
                @csrf
                <div class="input-group">
                  <input id="cek_input" name="no_ujian" type="text"
                    class="form-control @error('no_ujian') is-invalid @enderror" placeholder="Nomor Ujian">
                  <button type="submit" class="btn btn-primary">CEK!</button>
                  @error('no_ujian')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </form>
            @else
              <div class="d-flex justify-content-end gap-2 mt-4">
                <a href="{{ route('home') }}" class="btn btn-outline-primary">Kembali</a>
                <form method="POST" action="{{ route('home.print') }}">
                  @csrf
                  <input name="id" type="hidden" value="{{ $siswa->id }}">
                  <button type="submit" class="btn btn-primary">Cetak SKL</button>
                </form>
              </div>

              @if ($siswa->status === 1)
                <div class="alert alert-success mt-3" role="alert">
                  SELAMAT! Anda dinyatakan LULUS.
                </div>
              @elseif ($siswa->status === 0)
                <div class="alert alert-danger mt-3" role="alert">
                  MAAF! Anda dinyatakan TIDAK LULUS.
                </div>
              @endif

              <div class="table-responsive">
                <table class="table table-bordered table-hover bg-white">
                  <thead>
                    <tr>
                      <th colspan="2" class="text-center">Data Siswa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Nomor Ujian:</td>
                      <td>{{ $siswa->no_ujian }}</td>
                    </tr>
                    <tr>
                      <td>Nama Siswa:</td>
                      <td>{{ $siswa->nama }}</td>
                    </tr>
                    <tr>
                      <td>Kelas:</td>
                      <td>{{ $siswa->kls }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="table-responsive">
                <table class="table table-bordered table-hover bg-white">
                  <thead>
                    <tr>
                      <th class="text-center">No.</th>
                      <th class="text-center">Mata Pelajaran</th>
                      <th class="text-center">Nilai Akhir</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th colspan="3">Kelompok A</th>
                    </tr>
                    @foreach ($nilai_kelompok_a as $kel_a)
                      <tr>
                        <td class="text-center">{{ $loop->iteration }}.</td>
                        <td>{{ $kel_a['nama'] }}</td>
                        <td class="text-center">{{ $kel_a['nilai'] }}</td>
                      </tr>
                    @endforeach
                    <tr>
                      <th colspan="3">Kelompok B</th>
                    </tr>
                    @foreach ($nilai_kelompok_b as $kel_b)
                      <tr>
                        <td class="text-center">{{ $loop->iteration }}.</td>
                        <td>{{ $kel_b['nama'] }}</td>
                        <td class="text-center">{{ $kel_b['nilai'] }}</td>
                      </tr>
                    @endforeach
                    <tr>
                      <th colspan="2" class="text-center">Rata-rata</th>
                      <td class="text-center">{{ $siswa->rata2 }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>

  @push('addon-scripts')
    <script>
      $(document).ready(function() {
        let skrg = Date.now();
        $('#clock').countdown("<?= $tgl_pengumuman ?>", {
            elapse: true
          })
          .on('update.countdown', function(event) {
            let $this = $(this);
            if (event.elapsed) {
              $("#xpengumuman").show();
              $("#clock").hide();
            } else {
              $this.html(event.strftime(
                '<h5 class="text-center fw-bold m-0 mt-3">Pengumuman dapat dilihat pada waktu: <?= $waktu ?> <br><b><br><div class="alert alert-warning"><span>%D Hari %H Jam %M Menit %S Detik</span> lagi <h5></div></b>'
              ));
              $("#xpengumuman").hide();
            }
          });
      });
    </script>
  @endpush
</x-base-layout>
