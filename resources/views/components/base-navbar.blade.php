<nav class="navbar navbar-expand-md bg-primary navbar-dark shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">{{ \App\Models\Setting::first()->sekolah }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-md-4 mt-md-0 mt-2">
        <li class="nav-item">
          <a class="nav-link {{ Route::current()->getName() === 'home' ? 'active' : '' }}"
            href="{{ route('home') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::current()->getName() === 'about' ? 'active' : '' }}"
            href="{{ route('about') }}">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::current()->getName() === 'contact' ? 'active' : '' }}"
            href="{{ route('contact') }}">Kontak</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mt-2 mt-md-0">
        <li class="nav-item">
          @auth
            <a class="btn btn-outline-light" href="{{ route('admin.dashboard') }}">Dasbor</a>
          @else
            <a class="btn btn-outline-light" href="{{ route('login') }}">Masuk</a>
          @endauth
        </li>
      </ul>
    </div>
  </div>
</nav>
