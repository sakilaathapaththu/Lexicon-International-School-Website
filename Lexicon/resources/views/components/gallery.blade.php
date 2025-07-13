@extends('layouts.app')

@section('title', 'Gallery - Lexicon International School')

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <Style>
          :root {
            --seashell-white: #FFF8F0;
            --light-blue: #E8F4FD;
            --cool-blue: #2196F3;
            --dark-blue: #1976D2;
            --text-primary: #1A1A1A;
            --text-secondary: #6B7280;
            --border-color: #E5E7EB;
        }
        /* Hero Section */
.hero-section {
    background: linear-gradient(135deg, var(--cool-blue) 0%, var(--dark-blue) 100%);
    color: white;
    padding: 50px 0 50px;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1000 1000'><polygon fill='rgba(255,255,255,0.05)' points='0,0 1000,300 1000,1000 0,700'/></svg>");
    background-size: cover;
}

.hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    animation: fadeInUp 1s ease-out;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}

.hero-subtitle {
    font-size: 1.3rem;
    font-weight: 300;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto;
}

.hero-divider {
    width: 80px;
    height: 4px;
    background: var(--seashell-white);
    margin: 2rem auto;
    border-radius: 2px;
    animation: expandWidth 1s ease-out 0.5s both;
}

    </Style>
@endsection

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Gallery</h1>
            <p class="hero-subtitle">Excellence in Educational Leadership & Teaching</p>
            <div class="hero-divider"></div>
        </div>
    </div>
</section>


@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const steps = document.querySelectorAll('.form-step');

        function activateNextStep(index) {
            if (index < steps.length - 1) {
                const nextStep = steps[index + 1];
                const nextSelect = nextStep.querySelector('select');
                nextStep.classList.add('active');
                nextSelect.removeAttribute('disabled');
            }
        }

        steps.forEach((step, index) => {
            const select = step.querySelector('select');
            if (index === 0) step.classList.add('active');

            select.addEventListener('change', function () {
                step.classList.add('active');
                activateNextStep(index);
            });
        });
    });
</script>
@endsection
