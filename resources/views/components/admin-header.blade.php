<!--  Header Start -->
<header class="app-header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item d-block d-xl-none">
        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>
    </ul>
    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
      <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
            aria-expanded="false">
            <span class="fs-2 me-2">{{ auth()->user()->username }}</span>
            <img src="{{ url('base/assets/images/settings/' . \App\Models\Setting::first()->logo) }}" alt="profile"
              width="35" height="35" class="rounded-circle">
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
            <div class="message-body">
              <a href="{{ route('admin.profile.show') }}" class="d-flex align-items-center gap-2 dropdown-item">
                <i class="ti ti-user fs-6"></i>
                <p class="mb-0 fs-3">Profil Saya</p>
              </a>
              <button class="btn btn-outline-primary mx-3 mt-2 d-block" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <i class="ti ti-door-exit"></i>
                <span>Keluar</span>
              </button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!--  Header End -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Keluar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin keluar dari akun ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-text" data-bs-dismiss="modal">
          <i class="ti ti-arrow-back"></i>
          <span>Kembali</span>
        </button>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-primary">
            <i class="ti ti-door-exit"></i>
            <span>Keluar</span>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
