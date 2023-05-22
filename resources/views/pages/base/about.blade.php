<x-base-layout title="Tentang">
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Tentang Kami</h2>
          <hr>
          <div class="alert alert-primary" role="alert">
            <strong>Website Informasi {{ \App\Models\Setting::first()->sekolah }}</strong>
            <br>
            {{ \App\Models\Setting::first()->about }}
          </div>
        </div>
      </div>
    </div>
  </section>
</x-base-layout>
