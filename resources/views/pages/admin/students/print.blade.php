<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/png" href="{{ url('base/assets/images/settings/' . $sekolah->logo) }}" />

  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <title>Cetak SKL</title>
</head>

<body>
  @foreach ($students as $siswa)
    <x-skl-table :siswa="$siswa" :sekolah="$sekolah" :tahun="$tahun_ajaran" />
  @endforeach

  <script>
    window.print();
  </script>
</body>

</html>
