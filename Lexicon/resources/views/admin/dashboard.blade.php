@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="container-fluid">
    <h4 class="mb-4">👋 Welcome, <strong>{{ $admin->fullName ?? $admin->username }}</strong></h4>

    <div class="row g-4">
        <!-- Profile Card -->
        <div class="col-md-6 col-xl-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title mb-3">👤 Admin Profile</h5>
                    <p><strong>Username:</strong> {{ $admin->username }}</p>
                    <p><strong>Email:</strong> {{ $admin->email }}</p>
                    <p><strong>Phone:</strong> {{ $admin->phone ?? '-' }}</p>
                    <p><strong>Role:</strong> <span class="badge bg-primary">{{ ucfirst($admin->role) }}</span></p>
                    <p><strong>Last Login:</strong> {{ $admin->last_login ?? 'Never' }}</p>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-md-6 col-xl-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title mb-3">⚡ Quick Actions</h5>
                    <a href="{{ route('posts.index') }}" class="btn btn-outline-primary btn-sm d-block mb-2">📄 Manage Posts</a>
                    <a href="{{ route('careers.index') }}" class="btn btn-outline-secondary btn-sm d-block mb-2">📢 Manage Careers</a>
                    <a href="{{ route('gallery.index') }}" class="btn btn-outline-success btn-sm d-block mb-2">🖼️ Manage Gallery</a>
                    @if($admin->role === 'superadmin')
                        <a href="{{ route('admin.settings') }}" class="btn btn-outline-dark btn-sm d-block">⚙️ Admin Settings</a>
                    @endif
                </div>
            </div>
        </div>

        <!-- System Info or Stats -->
        <div class="col-md-12 col-xl-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title mb-3">📊 System Info</h5>
                    <p><strong>Date:</strong> {{ now()->format('F d, Y') }}</p>
                    <p><strong>Time:</strong> {{ now()->format('h:i A') }}</p>
                    <p><strong>Status:</strong> <span class="badge bg-success">Online</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
