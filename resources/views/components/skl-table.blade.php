<div style="height: 100vh;">
  <table width="800" align="center" height="400" valign="top">
    <tr>
      <td>
        <img src="{{ url('base/assets/images/settings/' . $sekolah->kop) }}" width="800">
      </td>
    </tr>

    <tr>
      <td>
        <h2 align="center">SURAT KETERANGAN KELULUSAN (SEMENTARA)<br>Tahun Pelajaran {{ $tahun }}</h2><br>
        <h3>Yang bertanda tangan di bawah ini, Kepala {{ $sekolah->sekolah }} menerangkan dengan sebenarnya bahwa:
        </h3>
        <table>
          <tr>
            <td>
              <h3 style="margin: 0;">NIS</h3>
            </td>
            <td>
              <h3 style="margin: 0;">: {{ $siswa->nis }}</h3>
            </td>
          </tr>
          <tr>
            <td>
              <h3 style="margin: 0;">Nama</h3>
            </td>
            <td>
              <h3 style="margin: 0;">: {{ $siswa->nama }}</h3>
            </td>
          </tr>
          <tr>
            <td>
              <h3 style="margin: 0;">Kelas</h3>
            </td>
            <td>
              <h3 style="margin: 0;">: {{ $siswa->kls }}</h3>
            </td>
          </tr>
        </table>
        <br>
        <h3 style="margin: 0;">Adalah benar siswa/siswi {{ $sekolah->sekolah }} dan dinyatakan :</h3>
        <center><b><u>
              <h1>{{ $siswa->status == 1 ? 'LULUS' : 'TIDAK LULUS' }}</h1></b></u></center>
        <h3>Surat Keterangan Keterangan Lulus ini dibuat untuk dapat dipergunakan sebagaimana mestinya, dan berlaku
          sampai
          dengan Ijazah Asli siswa/siswi diterbitkan.<br> </h3>
      </td>
    </tr>
    <tr>
      <td align="right">
        <table>
          <tr>
            <td>
              <h3 style="margin: 0;">{{ $sekolah->kota }}, {{ $tglPengumuman }}</h3>
            </td>
          </tr>
          <tr>
            <td>
              <h3 style="margin: 0;">Kepala Sekolah,</h3>
              <br>
            </td>
          </tr>
          <tr>
            <td>
              <img src="{{ url('base/assets/images/settings/' . $sekolah->ttd) }}" width="200">
              <br>
            </td>
          </tr>
          <tr>
            <td>
              <h3 style="margin: 0; text-decoration: underline;">{{ $sekolah->kepsek }}</h3>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</div>
