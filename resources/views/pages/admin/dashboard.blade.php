<x-admin-layout title="Dashboard">
  <div class="row">
    <div class="col-12">
      <div class="card w-100">
        <div class="card-body">
          <div class="alert alert-primary" role="alert">
            <h4 class="fw-semibold">
              <i class="ti ti-info-circle"></i>
              <span>Selamat Datang, {{ auth()->user()->name }}!</span>
            </h4>
            Ini merupakan halaman administrasi untuk pengumuman <span class="fw-semibold text-dark">Info Kelulusan
              2023.</span>
            <br>
            Fasilitas yang tersedia saat ini adalah manajemen <span class="fw-semibold text-dark">User</span> yang diberi
            hak untuk mengelola aplikasi ini dan
            import
            <span class="fw-semibold text-dark">Data</span> kelulusan dengan format excel csv.
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-strech">
      <div class="card w-100 overflow-hidden">
        <div class="card-body p-4">
          <div class="row align-items-center">
            <div class="col-8">
              <h5 class="card-title mb-9 fw-semibold">Jumlah User</h5>
              <h4 class="fw-semibold mb-3">{{ $jumlah_user }}</h4>
            </div>
            <div class="col-4">
              <div class="d-flex justify-content-center">
                <span class="me-1 rounded-circle bg-light-success d-flex align-items-center justify-content-center p-3">
                  <i class="ti ti-users text-primary" style="font-size: 2.5rem;"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-strech">
      <div class="card w-100 overflow-hidden">
        <div class="card-body p-4">
          <div class="row align-items-center">
            <div class="col-8">
              <h5 class="card-title mb-9 fw-semibold">Jumlah Siswa</h5>
              <h4 class="fw-semibold mb-3">{{ $jumlah_siswa }}</h4>
            </div>
            <div class="col-4">
              <div class="d-flex justify-content-center">
                <span class="me-1 rounded-circle bg-light-success d-flex align-items-center justify-content-center p-3">
                  <i class="ti ti-users text-primary" style="font-size: 2.5rem;"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 d-flex align-items-strech">
      <div class="card w-100 overflow-hidden">
        <div class="card-body p-4">
          <div class="row align-items-center">
            <div class="col-8">
              <h4 class="fw-semibold mb-3">Kelulusan</h4>
              <div class="d-flex align-items-center">
                <div class="me-4">
                  <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                  <span class="fs-2">Lulus</span>
                </div>
                <div>
                  <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                  <span class="fs-2">Tidak Lulus</span>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="d-flex justify-content-center">
                <div id="kelulusan"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @push('addon-scripts')
    <script>
      let kelulusan = {
        color: "#adb5bd",
        series: [{{ $jumlah_lulus }}, {{ $jumlah_tidak_lulus }}],
        labels: ["Lulus", "Tidak Lulus"],
        chart: {
          width: 180,
          type: "donut",
          fontFamily: "Plus Jakarta Sans', sans-serif",
          foreColor: "#adb0bb",
        },
        plotOptions: {
          pie: {
            startAngle: 0,
            endAngle: 360,
            donut: {
              size: '75%',
            },
          },
        },
        stroke: {
          show: false,
        },

        dataLabels: {
          enabled: false,
        },

        legend: {
          show: false,
        },
        colors: ["#5D87FF", "#ecf2ff", "#F9F9FD"],

        responsive: [{
          breakpoint: 991,
          options: {
            chart: {
              width: 150,
            },
          },
        }, ],
        tooltip: {
          theme: "dark",
          fillSeriesColor: false,
        },
      };

      let chart = new ApexCharts(document.querySelector("#kelulusan"), kelulusan);
      chart.render();
    </script>
  @endpush
</x-admin-layout>
