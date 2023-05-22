<x-base-layout title="Kontak">
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Kontak Kami</h2>
          <hr>
          <div class="alert alert-primary" role="alert">
            <strong>Hubungi</strong>
            <br>
            {!! \App\Models\Setting::first()->contact !!}
          </div>
        </div>
      </div>
    </div>
  </section>
</x-base-layout>
