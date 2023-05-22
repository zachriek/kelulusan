<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  @stack('prepend-styles')
  <x-guest-styles />
  @stack('addon-styles')

  <title>Pengumuman Kelulusan {{ "-$title" }}</title>
</head>

<body>
  @include('sweetalert::alert')

  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            {{ $slot }}
          </div>
        </div>
      </div>
    </div>
  </div>

  @stack('prepend-scripts')
  <x-guest-scripts />
  @stack('addon-scripts')
</body>

</html>
