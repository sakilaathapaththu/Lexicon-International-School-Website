
@php
    $admin = Auth::guard('admin')->user();
    $profileImage = $admin->profileImage && file_exists(public_path($admin->profileImage))
        ? asset($admin->profileImage)
        : 'https://via.placeholder.com/60';
@endphp

<nav class="col-md-3 col-lg-2 sidebar d-md-block text-white">
    <div class="text-center py-4">
        <img src="{{ $profileImage }}" alt="Profile Image" class="profile-img mb-2" />
        

        <h6>{{ $admin->fullName ?? $admin->username }}</h6>
    </div>

    <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <i class="fas fa-home me-2"></i> Dashboard
    </a>
    
    <a href="{{ route('careers.index') }}" class="{{ request()->is('admin/careers*') ? 'active' : '' }}">
        <i class="fas fa-briefcase me-2"></i> Careers
    </a>

    <a href="{{ route('posts.index') }}" class="{{ request()->is('admin/posts*') ? 'active' : '' }}">
        <i class="fas fa-briefcase me-2"></i> News&Blogs
    </a>

    <a href="{{ route('gallery.index') }}" class="{{ request()->is('admin/gallery*') ? 'active' : '' }}">
        <i class="fas fa-briefcase me-2"></i> Gallery
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
