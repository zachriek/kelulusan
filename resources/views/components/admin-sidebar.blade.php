<!-- Sidebar Start -->
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="text-nowrap logo-img">
        <img src="{{ url('base/assets/images/settings/' . \App\Models\Setting::first()->logo) }}" width="50"
          alt="image" />
        <span class="ms-1">{{ \App\Models\Setting::first()->sekolah }}</span>
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <li class="nav-small-cap mb-2">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Menu</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ str_contains(Route::current()->getName(), 'dashboard') ? 'active' : '' }}"
            href="{{ route('admin.dashboard') }}">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dasbor</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ str_contains(Route::current()->getName(), 'profile') ? 'active' : '' }}"
            href="{{ route('admin.profile.show') }}">
            <span>
              <i class="ti ti-user"></i>
            </span>
            <span class="hide-menu">Profil Saya</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ str_contains(Route::current()->getName(), 'users') ? 'active' : '' }}"
            href="{{ route('admin.users.index') }}">
            <span>
              <i class="ti ti-users"></i>
            </span>
            <span class="hide-menu">Manajemen User</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ str_contains(Route::current()->getName(), 'students') ? 'active' : '' }}"
            href="{{ route('admin.students.index') }}">
            <span>
              <i class="ti ti-users"></i>
            </span>
            <span class="hide-menu">Manajemen Siswa</span>
          </a>
        </li>
        <li class="sidebar-item">
          <form method="POST" action="{{ route('admin.students.print') }}">
            @csrf
            <button type="submit" class="sidebar-link btn w-100">
              <span>
                <i class="ti ti-printer"></i>
              </span>
              <span class="hide-menu">Cetak SKL</span>
            </button>
          </form>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ str_contains(Route::current()->getName(), 'settings') ? 'active' : '' }}"
            href="{{ route('admin.settings.edit') }}">
            <span>
              <i class="ti ti-settings"></i>
            </span>
            <span class="hide-menu">Konfigurasi</span>
          </a>
        </li>
      </ul>
      <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded bottom-0">
        <div class="d-flex">
          <div class="unlimited-access-title me-3">
            <a href="{{ route('home') }}" class="btn btn-outline-primary fs-2 fw-semibold lh-sm">
              <i class="ti ti-home"></i>
              <span>Beranda</span>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->
