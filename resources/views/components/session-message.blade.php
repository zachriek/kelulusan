@if (session('success'))
  <div class="alert alert-success" role="alert">
    <i class="ti ti-circle-check"></i> {{ session('success') }}
  </div>
@elseif (session('error'))
  <div class="alert alert-danger" role="alert">
    <i class="ti ti-circle-x"></i> {{ session('error') }}
  </div>
@endif
