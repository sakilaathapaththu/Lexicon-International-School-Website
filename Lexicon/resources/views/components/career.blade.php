@extends('layouts.app')

@section('title', 'Careers - Lexicon International School')

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/careers.css') }}">
@endsection

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Join Our Team</h1>
            <p class="hero-subtitle">Shape the Future of Education with Lexicon International School</p>
            <div class="hero-divider"></div>
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
                        <button class="btn apply-btn mt-auto w-100 openDrawerBtn"
                            data-title="{{ $career->title }}"
                            data-description="{{ $career->description }}"
                            data-location="{{ $career->location }}"
                            data-type="{{ $career->job_type }}"
                            data-email="{{ $career->email }}"
                            data-contact="{{ $career->contact_no }}"
                            data-deadline="{{ \Carbon\Carbon::parse($career->deadline)->format('F d, Y') }}">
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

<!-- Drawer Backdrop -->
<div id="drawerBackdrop" class="drawer-backdrop"></div>

<!-- Sliding Application Drawer -->
<div id="applicationDrawer">
    <div class="container" style="max-width: 700px;">
        <form action="/submit-application" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 id="drawerJobTitle" class="fw-bold">Apply for Position</h4>
                <button type="button" id="closeDrawerBtn" class="btn btn-sm btn-outline-secondary">
                    <i class="fas fa-times"></i>
                </button>
            </div>
           <div class="mb-3 job-details-box p-3 rounded-3 shadow-sm bg-white">
                <p><i class="fas fa-map-marker-alt text-primary me-2"></i><strong>Location:</strong> <span id="drawerJobLocation"></span></p>
                <p><i class="fas fa-briefcase text-primary me-2"></i><strong>Type:</strong> <span id="drawerJobType"></span></p>
                <p><i class="fas fa-envelope text-primary me-2"></i><strong>Email:</strong> <span id="drawerJobEmail"></span></p>
                <p><i class="fas fa-phone text-primary me-2"></i><strong>Contact:</strong> <span id="drawerJobContact"></span></p>
                <p><i class="fas fa-calendar-alt text-primary me-2"></i><strong>Deadline:</strong> <span id="drawerJobDeadline"></span></p>
                <p id="drawerJobDescription" class="text-muted mt-3 fst-italic"></p>
            </div>

            <input type="hidden" name="position" id="drawerPosition">

            <!-- Input Fields -->
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-user me-2"></i>Full Name</label>
                <input type="text" name="name" class="form-control" required placeholder="Your full name">
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-envelope me-2"></i>Email Address</label>
                <input type="email" name="email" class="form-control" required placeholder="you@example.com">
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-phone me-2"></i>Phone Number</label>
                <input type="tel" name="phone" class="form-control" required placeholder="+94 77 123 4567">
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fab fa-linkedin me-2"></i>LinkedIn Profile (optional)</label>
                <input type="url" name="linkedin" class="form-control" placeholder="https://linkedin.com/in/yourprofile">
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-file-alt me-2"></i>Cover Letter</label>
                <textarea name="cover_letter" class="form-control" rows="4" placeholder="Why do you want to join us?"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-upload me-2"></i>Upload Resume (PDF only)</label>
                <label class="custom-file-upload w-100">
                    <i class="fas fa-file-upload"></i>
                    <span>Choose a PDF file</span>
                    <input type="file" name="resume" accept=".pdf" required>
                </label>
            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn apply-btn px-4 py-2">Submit Application</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Open Drawer
    document.querySelectorAll('.openDrawerBtn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.getElementById('drawerPosition').value = btn.dataset.title;
            document.getElementById('drawerJobTitle').textContent = btn.dataset.title;
            document.getElementById('drawerJobDescription').textContent = btn.dataset.description;
            document.getElementById('drawerJobLocation').textContent = btn.dataset.location;
            document.getElementById('drawerJobType').textContent = btn.dataset.type;
            document.getElementById('drawerJobEmail').textContent = btn.dataset.email;
            document.getElementById('drawerJobContact').textContent = btn.dataset.contact;
            document.getElementById('drawerJobDeadline').textContent = btn.dataset.deadline;

            document.getElementById('applicationDrawer').classList.add('active');
            document.getElementById('drawerBackdrop').classList.add('active');
        });
    });

    // Close Drawer
    document.getElementById('closeDrawerBtn').addEventListener('click', () => {
        document.getElementById('applicationDrawer').classList.remove('active');
        document.getElementById('drawerBackdrop').classList.remove('active');
    });

    document.getElementById('drawerBackdrop').addEventListener('click', () => {
        document.getElementById('applicationDrawer').classList.remove('active');
        document.getElementById('drawerBackdrop').classList.remove('active');
    });

    // Animate job cards on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.job-card').forEach(card => {
        observer.observe(card);
    });
</script>
@endsection
