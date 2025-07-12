@extends('layouts.app')

@section('title', 'Contact - Lexicon International School')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Lexicon International School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>

<body>
<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-6">
                <div class="hero-content" data-aos="fade-up">
                    <h1 class="display-4 fw-bold text-primary mb-4">Get in Touch</h1>
                    <p class="lead text-secondary mb-4">
                        We're here to help! Whether you're a prospective student, parent, teacher, or community member, 
                        we'd love to hear from you and answer any questions you may have.
                    </p>
                    <div class="hero-stats row g-4">
                        <div class="col-4">
                            <div class="stat-item text-center">
                                <div class="stat-icon">
                                    <i class="fas fa-clock text-cool-blue"></i>
                                </div>
                                <div class="stat-number">24/7</div>
                                <div class="stat-label">Support</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-item text-center">
                                <div class="stat-icon">
                                    <i class="fas fa-users text-cool-blue"></i>
                                </div>
                                <div class="stat-number">1000+</div>
                                <div class="stat-label">Students</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-item text-center">
                                <div class="stat-icon">
                                    <i class="fas fa-award text-cool-blue"></i>
                                </div>
                                <div class="stat-number">15+</div>
                                <div class="stat-label">Years</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                        alt="Lexicon International School" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-form-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-header text-center mb-5" data-aos="fade-up">
                    <h2 class="display-5 fw-bold text-primary">Send Us a Message</h2>
                    <p class="lead text-secondary">Fill out the form below and we'll get back to you as soon as possible.</p>
                </div>
                
                <div class="contact-form-card" data-aos="fade-up" data-aos-delay="200">
                    <form id="contactForm" action="{{ route('contact.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        
                        <!-- User Type Selection -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <label class="form-label fw-semibold">I am a:</label>
                                <div class="user-type-selection">
                                    <div class="row g-3">
                                        <div class="col-6 col-md-3">
                                            <input type="radio" class="btn-check" name="user_type" id="student" value="student" required>
                                            <label class="btn btn-outline-primary w-100 user-type-btn" for="student">
                                                <i class="fas fa-user-graduate mb-2"></i>
                                                <div>Student</div>
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <input type="radio" class="btn-check" name="user_type" id="parent" value="parent" required>
                                            <label class="btn btn-outline-primary w-100 user-type-btn" for="parent">
                                                <i class="fas fa-heart mb-2"></i>
                                                <div>Parent</div>
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <input type="radio" class="btn-check" name="user_type" id="teacher" value="teacher" required>
                                            <label class="btn btn-outline-primary w-100 user-type-btn" for="teacher">
                                                <i class="fas fa-chalkboard-teacher mb-2"></i>
                                                <div>Teacher</div>
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <input type="radio" class="btn-check" name="user_type" id="other" value="other" required>
                                            <label class="btn btn-outline-primary w-100 user-type-btn" for="other">
                                                <i class="fas fa-user-friends mb-2"></i>
                                                <div>Other</div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Personal Information -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                                    <label for="first_name">First Name *</label>
                                    <div class="invalid-feedback">
                                        Please provide your first name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                                    <label for="last_name">Last Name *</label>
                                    <div class="invalid-feedback">
                                        Please provide your last name.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                                    <label for="email">Email Address *</label>
                                    <div class="invalid-feedback">
                                        Please provide a valid email address.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="mb-4">
                            <div class="form-floating">
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="">Choose a subject...</option>
                                    <option value="admissions">Admissions Inquiry</option>
                                    <option value="academic">Academic Information</option>
                                    <option value="facilities">Facilities & Campus</option>
                                    <option value="extracurricular">Extracurricular Activities</option>
                                    <option value="fees">Fees & Financial Aid</option>
                                    <option value="transport">Transportation</option>
                                    <option value="complaint">Complaint/Concern</option>
                                    <option value="suggestion">Suggestion</option>
                                    <option value="other">Other</option>
                                </select>
                                <label for="subject">Subject *</label>
                                <div class="invalid-feedback">
                                    Please select a subject.
                                </div>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="mb-4">
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" style="height: 120px" placeholder="Your Message" required></textarea>
                                <label for="message">Your Message *</label>
                                <div class="invalid-feedback">
                                    Please provide your message.
                                </div>
                            </div>
                        </div>

                        <!-- Priority Level -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Priority Level</label>
                            <div class="priority-selection">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="priority" id="low" value="low" checked>
                                    <label class="form-check-label" for="low">
                                        <span class="badge bg-success">Low</span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="priority" id="medium" value="medium">
                                    <label class="form-check-label" for="medium">
                                        <span class="badge bg-warning">Medium</span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="priority" id="high" value="high">
                                    <label class="form-check-label" for="high">
                                        <span class="badge bg-danger">High</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Agreement -->
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="agreement" name="agreement" required>
                                <label class="form-check-label" for="agreement">
                                    I agree to the <a href="#" class="text-cool-blue">Privacy Policy</a> and <a href="#" class="text-cool-blue">Terms of Service</a> *
                                </label>
                                <div class="invalid-feedback">
                                    You must agree to the terms before submitting.
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5 py-3 submit-btn">
                                <span class="btn-text">Send Message</span>
                                <span class="btn-loader d-none">
                                    <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                                    Sending...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="contact-info-section py-5 bg-light-blue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-header text-center mb-5" data-aos="fade-up">
                    <h2 class="display-5 fw-bold text-primary">Visit Our School</h2>
                    <p class="lead text-secondary">Come see what makes Lexicon International School special</p>
                </div>
                
                <div class="row g-4">
                    <!-- Address -->
                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="contact-info-card h-100">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h4>Our Address</h4>
                            <p class="text-secondary">
                                Lexicon International School<br>
                                Academic District<br>
                                Kurunegala, Sri Lanka
                            </p>
                            <a href="#" class="btn btn-outline-primary">Get Directions</a>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-info-card h-100">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h4>Phone Numbers</h4>
                            <p class="text-secondary">
                                <strong>Main Office:</strong> +94 11 123 4567<br>
                                <strong>Admissions:</strong> +94 11 123 4568<br>
                                <strong>Emergency:</strong> +94 11 123 4569
                            </p>
                            <a href="tel:+94111234567" class="btn btn-outline-primary">Call Now</a>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-info-card h-100">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h4>Email Us</h4>
                            <p class="text-secondary">
                                <strong>General:</strong> info@lexiconschool.lk<br>
                                <strong>Admissions:</strong> admissions@lexiconschool.lk<br>
                                <strong>Support:</strong> support@lexiconschool.lk
                            </p>
                            <a href="mailto:info@lexiconschool.lk" class="btn btn-outline-primary">Send Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Office Hours Section -->
<section class="office-hours-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="office-hours-card" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold text-primary mb-3">Office Hours</h3>
                            <div class="hours-list">
                                <div class="hour-item">
                                    <span class="day">Monday - Friday</span>
                                    <span class="time">8:00 AM - 3:00 PM</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Saturday & Sunday</span>
                                    <span class="time">Closed</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="quick-contact">
                                <h4 class="text-primary mb-3">Quick Contact</h4>
                                <p class="text-secondary mb-3">Need immediate assistance? Use our emergency contact line.</p>
                                <a href="tel:+94111234569" class="btn btn-primary">Emergency Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <div class="container-fluid p-0">
        <div class="map-container" data-aos="fade-up">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.798467590949!2d79.86131181477!3d6.9270785951089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25963120b1509%3A0x2db2c18a68712863!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1642658523789!5m2!1sen!2slk" 
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5 bg-seashell-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-header text-center mb-5" data-aos="fade-up">
                    <h2 class="display-5 fw-bold text-primary">Frequently Asked Questions</h2>
                    <p class="lead text-secondary">Quick answers to common questions</p>
                </div>
                
                <div class="accordion" id="faqAccordion" data-aos="fade-up">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How long does it take to receive a response?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We typically respond to all inquiries within 24-48 hours during business days. Emergency matters are addressed immediately.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                What information should I include in my message?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Please include your full name, contact information, your relationship to the school, and a detailed description of your inquiry or concern.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Can I schedule a campus visit?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! We offer campus tours for prospective students and parents. Please mention your interest in a campus visit in your message, and we'll coordinate a convenient time.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            </body>
@endsection

@section('styles')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS (Animate On Scroll)
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 100
    });

    // Form validation
    const form = document.getElementById('contactForm');
    const submitBtn = form.querySelector('.submit-btn');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoader = submitBtn.querySelector('.btn-loader');

    // Bootstrap form validation
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        event.stopPropagation();

        if (form.checkValidity()) {
            // Show loading state
            submitBtn.disabled = true;
            btnText.classList.add('d-none');
            btnLoader.classList.remove('d-none');

            // Submit the form using fetch API
            const formData = new FormData(form);
            
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showSuccessMessage();
                    resetForm();
                    clearSavedData();
                } else {
                    showErrorMessage(data.message || 'An error occurred. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showErrorMessage('An error occurred. Please try again.');
            })
            .finally(() => {
                // Reset button state
                submitBtn.disabled = false;
                btnText.classList.remove('d-none');
                btnLoader.classList.add('d-none');
            });
        }

        form.classList.add('was-validated');
    });

    // Real-time validation
    const inputs = form.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            if (this.classList.contains('is-invalid')) {
                validateField(this);
            }
        });
    });

    function validateField(field) {
        if (field.checkValidity()) {
            field.classList.remove('is-invalid');
            field.classList.add('is-valid');
        } else {
            field.classList.remove('is-valid');
            field.classList.add('is-invalid');
        }
    }

    function showSuccessMessage() {
        const alertHtml = `
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                <strong>Success!</strong> Your message has been sent successfully. We'll get back to you within 24-48 hours.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        `;
        
        form.insertAdjacentHTML('beforebegin', alertHtml);
        
        // Scroll to alert
        document.querySelector('.alert').scrollIntoView({ 
            behavior: 'smooth',
            block: 'center'
        });
    }

    function showErrorMessage(message) {
        const alertHtml = `
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle me-2"></i>
                <strong>Error!</strong> ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        `;
        
        form.insertAdjacentHTML('beforebegin', alertHtml);
        
        // Scroll to alert
        document.querySelector('.alert').scrollIntoView({ 
            behavior: 'smooth',
            block: 'center'
        });
    }

    function resetForm() {
        form.reset();
        form.classList.remove('was-validated');
        
        // Remove validation classes
        inputs.forEach(input => {
            input.classList.remove('is-valid', 'is-invalid');
        });
    }

    // Rest of your existing JavaScript code...
    // (Keep all the other functions like smooth scrolling, hover effects, etc.)
    
    // Form auto-save functionality (keep existing code)
    const formData = {};
    inputs.forEach(input => {
        // Load saved data
        const savedValue = sessionStorage.getItem(`contact_form_${input.name}`);
        if (savedValue && input.type !== 'radio' && input.type !== 'checkbox') {
            input.value = savedValue;
        } else if (savedValue && input.type === 'radio' && input.value === savedValue) {
            input.checked = true;
        }
        
        // Save data on change
        input.addEventListener('change', function() {
            if (this.type === 'radio') {
                sessionStorage.setItem(`contact_form_${this.name}`, this.value);
            } else {
                sessionStorage.setItem(`contact_form_${this.name}`, this.value);
            }
        });
    });

    function clearSavedData() {
        inputs.forEach(input => {
            sessionStorage.removeItem(`contact_form_${input.name}`);
        });
    }
});
</script>

@endsection