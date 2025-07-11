<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - Lexicon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Animate.css (optional animations) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .login-card {
            background: #1e1e2f;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.4);
            width: 100%;
            max-width: 420px;
            animation: fadeInUp 0.6s ease-in-out;
        }

        label {
            color: #ccc;
        }

        .form-control,
        .form-control:focus {
            background-color: #2c2c3e;
            border-color: #444;
            color: #fff;
        }

        .form-control::placeholder {
            color: #aaa;
        }

        .btn-primary {
            background-color: #4a90e2;
            border-color: #4a90e2;
        }

        .btn-primary:hover {
            background-color: #357ABD;
            border-color: #357ABD;
        }

        .input-group-text {
            background: #2c2c3e;
            color: #ccc;
            border-color: #444;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

<div class="login-card animate__animated animate__fadeInUp">
    <h3 class="text-center mb-4 text-light">Admin Login</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ url('/admin/login') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter username" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <div class="input-group">
                <input type="password" name="password" id="passwordInput" class="form-control" placeholder="Enter password" required>
                <span class="input-group-text" onclick="togglePassword()">
                    <i id="toggleIcon" class="fas fa-eye"></i>
                </span>
            </div>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
    </form>
</div>

<!-- JS for Password Toggle -->
<script>
    function togglePassword() {
        const input = document.getElementById('passwordInput');
        const icon = document.getElementById('toggleIcon');
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
