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
        display: flex;
        flex-direction: column;
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
            @forelse ($careers as $career)
                <div class="col-md-6 col-lg-4">
                    <div class="job-card h-100">
                        <h5 class="fw-bold mb-2">{{ $career->title }}</h5>
                        <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>{{ $career->location }}</p>
                        <p class="mb-1"><i class="fas fa-briefcase me-2"></i>{{ $career->job_type }}</p>
                        <p class="mb-2 text-muted">Deadline: {{ \Carbon\Carbon::parse($career->deadline)->format('F d, Y') }}</p>
                        <button class="btn apply-btn mt-auto w-100"
                            data-bs-toggle="modal"
                            data-bs-target="#applyModal"
                            data-title="{{ $career->title }}"
                            data-description="{{ $career->description }}"
                            data-location="{{ $career->location }}"
                            data-type="{{ $career->job_type }}"
                            data-email="{{ $career->email }}"
                            data-contact="{{ $career->contact_no }}"
                            data-deadline="{{ \Carbon\Carbon::parse($career->deadline)->format('F d, Y') }}"
                            data-image="{{ asset($career->image ?? 'images/default-career.jpg') }}">
                            Apply Now
                        </button>
                    </div>
                </div>
            @empty
                <p class="text-muted text-center">No current job openings.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Application Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <form action="/submit-application" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="applyModalLabel">Apply for Position</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <!-- Job Summary -->
            <div class="row mb-4 align-items-center">
                <div class="col-md-4 text-center">
                    <img id="jobImage" src="" alt="Job Image" class="img-fluid rounded shadow" style="max-height: 180px;">
                </div>
                <div class="col-md-8">
                    <h4 id="modalJobTitle" class="fw-bold mb-2"></h4>
                    <p class="mb-1 text-muted"><i class="fas fa-map-marker-alt me-2"></i><span id="modalJobLocation"></span></p>
                    <p class="mb-1 text-muted"><i class="fas fa-briefcase me-2"></i><span id="modalJobType"></span></p>
                    <p class="mb-1 text-muted"><i class="fas fa-envelope me-2"></i><span id="modalJobEmail"></span></p>
                    <p class="mb-1 text-muted"><i class="fas fa-phone me-2"></i><span id="modalJobContact"></span></p>
                    <p class="mb-1 text-muted"><i class="fas fa-calendar-day me-2"></i><span id="modalJobDeadline"></span></p>
                </div>
            </div>

            <div class="mb-4">
                <p class="text-dark" id="modalJobDescription"></p>
            </div>

            <input type="hidden" name="position" id="jobPosition">

            <!-- Applicant Info -->
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" required class="form-control" placeholder="Your full name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" required class="form-control" placeholder="you@example.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Upload Resume (PDF)</label>
                <input type="file" name="resume" accept=".pdf" required class="form-control">
                <small class="text-muted">Only PDF files up to 2MB allowed.</small>
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
document.getElementById('applyModal').addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    this.querySelector('#jobPosition').value = button.getAttribute('data-title');
    this.querySelector('#modalJobTitle').textContent = button.getAttribute('data-title');
    this.querySelector('#modalJobDescription').textContent = button.getAttribute('data-description');
    this.querySelector('#modalJobLocation').textContent = button.getAttribute('data-location');
    this.querySelector('#modalJobType').textContent = button.getAttribute('data-type');
    this.querySelector('#modalJobEmail').textContent = button.getAttribute('data-email');
    this.querySelector('#modalJobContact').textContent = button.getAttribute('data-contact');
    this.querySelector('#modalJobDeadline').textContent = button.getAttribute('data-deadline');
    this.querySelector('#jobImage').src = button.getAttribute('data-image');
});
</script>
@endsection
