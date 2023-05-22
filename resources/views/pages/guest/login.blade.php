<x-guest-layout title="Login">
  <div class="card mb-0">
    <div class="card-body">
      <a href="{{ route('home') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
        <img src="{{ url('base/assets/images/settings/' . \App\Models\Setting::first()->logo) }}" width="150"
          alt="image">
      </a>
      <p class="text-center fw-semibold">{{ \App\Models\Setting::first()->sekolah }}</p>
      <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
            id="username" placeholder="Masukkan username" value="{{ old('username') }}" autofocus>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
            id="password" placeholder="Masukkan password">
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Masuk</button>
      </form>
    </div>
  </div>
</x-guest-layout>
