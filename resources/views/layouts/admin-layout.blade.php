<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  @stack('prepend-styles')
  <x-admin-styles />
  @stack('addon-styles')

  <title>Pengumuman Kelulusan {{ "- $title" }}</title>
</head>

<body style="background: url('{{ url('base/assets/images/settings/background.png') }}')">
  @include('sweetalert::alert')

  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <x-admin-sidebar />

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <x-admin-header />
      <div class="container-fluid min-vh-100 position-relative">
        {{ $slot }}
        <x-admin-footer />
      </div>
    </div>
  </div>

  @stack('prepend-scripts')
  <x-admin-scripts />
  @stack('addon-scripts')
</body>

</html>
