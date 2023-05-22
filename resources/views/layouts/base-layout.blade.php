<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  @stack('prepend-styles')
  <x-base-styles />
  @stack('addon-styles')

  <title>Pengumuman Kelulusan {{ "- $title" }}</title>
</head>

<body style="background: url({{ url('base/assets/images/settings/background.png') }})">
  @include('sweetalert::alert')

  <x-base-navbar />
  {{ $slot }}
  <hr>
  <x-base-footer />

  @stack('prepend-scripts')
  <x-base-scripts />
  @stack('addon-scripts')
</body>

</html>
