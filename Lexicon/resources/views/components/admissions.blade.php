@extends('layouts.app')

@section('title', 'Admissions - Lexicon International School')

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admissions.css') }}">
@endsection

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Admissions</h1>
            <p class="hero-subtitle">Excellence in Educational Leadership & Teaching</p>
            <div class="hero-divider"></div>
        </div>
    </div>
</section>

<!-- Admissions Section -->
<section class="container py-5">
    <div class="row">
        <!-- Left Side Text -->
        <div class="col-md-6 mb-4">
            <p class="text-uppercase text-muted">School Admissions</p>
            <h2 class="fw-bold">Apply Now</h2>
            <p>
                Admissions for Lexicon International School (LIS) and Lexicon Leaf School (LLS) are open throughout the year 
                and applicants are selected according to availability.
            </p>

            <h5 class="fw-semibold mt-4">How to apply?</h5>
            <ul>
                <li>Access the application form by clicking ‘Apply Now’</li>
                <li>Select the applicable school.</li>
                <li>Fill out the information accordingly.</li>
                <li>Upload the birth certificate.</li>
                <li>Submit the form.</li>
            </ul>

            <p>
                Once the form has been submitted your child’s application will be 
                <strong>‘shortlisted’</strong> and you will be contacted by the School Admissions Office for an interview.
            </p>

            <p>
                If there are no vacancies, the application will be transferred to the 
                <strong>‘Waiting List’</strong> and priority will be given according to the date of receipt of the application.
            </p>
        </div>

        <!-- Right Side Form -->
        <div class="col-md-5 offset-md-1 mt-md-4">
            <div class="admission-form-card shadow">
                <h5 class="fw-bold mb-3">Lexicon School Admissions</h5>
                <p class="mb-4">
                    Please enter your child’s birthday below to get started with the admissions procedure. 
                    Then select the desired branch or leaf location and the “Apply Now” button will take you 
                    to the corresponding application portal where you can complete your admission.
                </p>

                <form id="admissionForm" method="POST">
                    @csrf

                    <div class="mb-3 form-step active" id="step1">
                        <select class="form-select" required>
                            <option value="">Academic Year</option>
                            <option>2024/2025</option>
                            <option>2025/2026</option>
                        </select>
                    </div>

                    <div class="mb-3 form-step" id="step2">
                        <select class="form-select" required disabled>
                            <option value="">Birth Year</option>
                            @for ($i = date('Y'); $i >= 2005; $i--)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="mb-3 form-step" id="step3">
                        <select class="form-select" required disabled>
                            <option value="">Birth Month</option>
                            @foreach (['January','February','March','April','May','June','July','August','September','October','November','December'] as $month)
                                <option>{{ $month }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 form-step" id="step4">
                        <select class="form-select" required disabled>
                            <option value="">Birth Day</option>
                            @for ($i = 1; $i <= 31; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="mb-4 form-step" id="step5">
                        <select class="form-select" required disabled>
                            <option value="">Select Location</option>
                            <option>Lexicon Colombo</option>
                            <option>Lexicon Kandy</option>
                            <option>Lexicon Galle</option>
                        </select>
                    </div>

                    <button type="submit" class="btn w-100">Apply Now</button>
                </form>
            </div>
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
