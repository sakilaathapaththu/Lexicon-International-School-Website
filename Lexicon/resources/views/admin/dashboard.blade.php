<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome, {{ $admin->fullName ?? $admin->username }}!</h1>

    <p>Email: {{ $admin->email }}</p>
    <p>Role: {{ $admin->role }}</p>
    <p>Phone: {{ $admin->phone }}</p>
    <p>Last Login: {{ $admin->last_login }}</p>

    <form method="POST" action="{{ url('/admin/logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html> -->
@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
    <p>Welcome to your dashboard, <strong>{{ $admin->fullName ?? $admin->username }}</strong>.</p>
    <p>Email: {{ $admin->email }}</p>
    <p>Phone: {{ $admin->phone }}</p>
    <p>Role: {{ $admin->role }}</p>
    <p>Last Login: {{ $admin->last_login }}</p>
@endsection
