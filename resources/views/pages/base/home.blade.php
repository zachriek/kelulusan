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
              <p class="fw-bold text-success text-center">Masukkan NISN pada kolom yang disediakan</p>
              <form method="POST" action="{{ route('home.cek') }}">
                @csrf
                <div class="input-group">
                  <input id="cek_input" name="nisn" type="text"
                    class="form-control @error('nisn') is-invalid @enderror" placeholder="Masukkan NISN">
                  <button type="submit" class="btn btn-primary">CEK!</button>
                  @error('nisn')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </form>
            @else
              @if ($siswa->status == 1)
                <div class="alert alert-success mt-3" role="alert">
                  SELAMAT! Anda dinyatakan LULUS.
                </div>
              @else
                <div class="alert alert-danger mt-3" role="alert">
                  MAAF! Anda dinyatakan TIDAK LULUS.
                </div>
              @endif

              <table class="table table-bordered bg-white">
                <tbody>
                  <tr>
                    <th>Nama</th>
                    <td>{{ $siswa->nama }}</td>
                  </tr>
                  <tr>
                    <th>Kelas</th>
                    <td>{{ $siswa->kls }}</td>
                  </tr>
                </tbody>
              </table>

              <div class="d-flex justify-content-center gap-2 mt-3">
                <a href="{{ route('home') }}" class="btn btn-outline-primary">Kembali</a>
                <form method="POST" action="{{ route('home.print') }}">
                  @csrf
                  <input name="id" type="hidden" value="{{ $siswa->id }}">
                  <button type="submit" class="btn btn-primary">Cetak SKL</button>
                </form>
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
