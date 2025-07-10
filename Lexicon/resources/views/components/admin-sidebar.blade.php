@php
    $admin = Auth::guard('admin')->user();
@endphp

<nav class="col-md-3 col-lg-2 sidebar d-md-block text-white">
    <div class="text-center py-4">
        <img src="{{ $admin->profileImage ?? 'https://via.placeholder.com/60' }}" class="profile-img mb-2" alt="Profile">
        <h6>{{ $admin->fullName ?? $admin->username }}</h6>
    </div>
    <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <i class="fas fa-home me-2"></i> Dashboard
    </a>
    <a href="{{ route('admin.settings') }}" class="{{ request()->is('admin/settings') ? 'active' : '' }}">
        <i class="fas fa-cog me-2"></i> Settings
    </a>
    <form method="POST" action="{{ url('/admin/logout') }}">
        @csrf
        <button class="btn btn-danger w-100 mt-3">
            <i class="fas fa-sign-out-alt me-1"></i> Logout
        </button>
    </form>
</nav>
