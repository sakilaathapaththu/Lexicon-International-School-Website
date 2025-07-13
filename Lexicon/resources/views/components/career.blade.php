@extends('layouts.app')

@section('title', 'Careers - Lexicon International School')

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --seashell-white: #FFF8F0;
            --light-blue: #E8F4FD;
            --cool-blue: #2196F3;
            --dark-blue: #1976D2;
            --text-primary: #1A1A1A;
            --text-secondary: #6B7280;
            --border-color: #E5E7EB;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            --btn-hover: #8dbbe7;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--cool-blue), var(--dark-blue));
            color: white;
            padding: 60px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1000 1000'><polygon fill='rgba(255,255,255,0.05)' points='0,0 1000,300 1000,1000 0,700'/></svg>");
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            margin-top: 0.5rem;
            opacity: 0.9;
        }

        .job-card {
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 24px;
            transition: transform 0.3s ease;
            box-shadow: var(--shadow);
        }

        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .apply-btn {
            background-color: var(--cool-blue);
            color: white;
        }

        .apply-btn:hover {
            background-color: var(--btn-hover);
            color: white;
        }

        .modal-header {
            background-color: var(--cool-blue);
            color: white;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.25);
        }
    </style>
@endsection

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Join Our Team</h1>
            <p class="hero-subtitle">Shape the Future of Education with Lexicon International School</p>
        </div>
    </div>
</section>

<!-- Careers Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            @php
                $jobs = [
                    ['title' => 'Primary School Teacher', 'location' => 'Colombo', 'type' => 'Full Time'],
                    ['title' => 'ICT Lab Assistant', 'location' => 'Kandy', 'type' => 'Full Time'],
                    ['title' => 'Administrative Coordinator', 'location' => 'Galle', 'type' => 'Contract'],
                    ['title' => 'Secondary Mathematics Teacher', 'location' => 'Jaffna', 'type' => 'Part Time'],
                ];
            @endphp

            @foreach ($jobs as $index => $job)
                <div class="col-md-6 col-lg-4">
                    <div class="job-card h-100">
                        <h5 class="fw-bold mb-2">{{ $job['title'] }}</h5>
                        <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>{{ $job['location'] }}</p>
                        <p class="mb-3"><i class="fas fa-briefcase me-2"></i>{{ $job['type'] }}</p>
                        <button class="btn apply-btn mt-auto w-100" data-bs-toggle="modal" data-bs-target="#applyModal" data-job="{{ $job['title'] }}">Apply Now</button>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<!-- Application Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="/submit-application" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="applyModalLabel">Apply for Position</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="position" id="jobPosition">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" required class="form-control" placeholder="Your full name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" required class="form-control" placeholder="you@example.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Resume (URL or Text)</label>
                <textarea name="resume" rows="4" required class="form-control" placeholder="Paste your resume or share a URL"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn apply-btn">Submit Application</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script>
    const applyModal = document.getElementById('applyModal');
    applyModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const jobTitle = button.getAttribute('data-job');
        const jobInput = applyModal.querySelector('#jobPosition');
        const modalTitle = applyModal.querySelector('.modal-title');
        jobInput.value = jobTitle;
        modalTitle.textContent = 'Apply for ' + jobTitle;
    });
</script>
@endsection
