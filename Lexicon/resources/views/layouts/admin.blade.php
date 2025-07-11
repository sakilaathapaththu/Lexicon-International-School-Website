<!DOCTYPE html>
<html lang="en" data-bs-theme="light"> <!-- Will toggle between light/dark -->
<head>
    <title>Admin | @yield('title', 'Dashboard')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    @stack('styles')
    <style>
        body {
            overflow-x: hidden;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
        }
        .sidebar a {
            color: white;
            padding: 12px 20px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover, .sidebar .active {
            background-color: #495057;
        }
        .profile-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <x-admin-sidebar /> <!-- ✅ Sidebar component -->

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <div class="d-flex justify-content-between align-items-center">
                <h4>@yield('title')</h4>
                <button id="toggleTheme" class="btn btn-sm btn-outline-secondary">🌙 Toggle Theme</button>
            </div>

            <hr>
            @yield('content')
        </main>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('toggleTheme').addEventListener('click', function () {
        const html = document.documentElement;
        const current = html.getAttribute('data-bs-theme');
        html.setAttribute('data-bs-theme', current === 'dark' ? 'light' : 'dark');
    });
</script>

@stack('scripts')
</body>
</html>
