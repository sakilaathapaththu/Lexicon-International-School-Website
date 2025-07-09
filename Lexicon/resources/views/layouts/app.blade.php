<!DOCTYPE html>
<html lang="en">
<head>
    <nav style="display: flex; justify-content: space-between; align-items: center; padding: 1rem 0; max-width: 1200px; margin: 0 auto; padding: 1rem 20px;">
            <div style="font-size: 1.5rem; font-weight: bold; color: #e74c3c;">LexCon International School</div>
            <ul style="display: flex; list-style: none; gap: 2rem; margin: 0;">
                <li><a href="#home" style="text-decoration: none; color: #333; font-weight: 500;">Home</a></li>
                <li><a href="#about" style="text-decoration: none; color: #333; font-weight: 500;">About</a></li>
                <li><a href="#programs" style="text-decoration: none; color: #333; font-weight: 500;">Programs</a></li>
                <li><a href="#contact" style="text-decoration: none; color: #333; font-weight: 500;">Contact</a></li>
            </ul>
            <a href="#apply" style="background: #e74c3c; color: white; padding: 0.8rem 1.5rem; border-radius: 25px; text-decoration: none; font-weight: 500;">Apply Now</a>
        </nav>
    
    <title>@yield('title')</title>
    
    @yield('styles')
</head>
<body>

    @yield('content')

    @yield('scripts')

</body>
</html>
