@extends('layouts.app')

@section('title', 'LexCon International School')

@section('content')

    <!-- Hero Section -->
    <section class="hero text-white py-5" id="home" data-aos="fade-in">
        <div class="hero-slider">
            <div class="hero-slide active" style="background-image: url('{{ asset('images/hero-bg1.jpg') }}')"></div>
            <div class="hero-slide" style="background-image: url('{{ asset('images/hero-bg2.jpg') }}')"></div>
            <div class="hero-slide" style="background-image: url('{{ asset('images/hero-bg3.jpg') }}')"></div>
            <div class="hero-slide" style="background-image: url('{{ asset('images/hero-bg4.jpg') }}')"></div>
        </div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4 hero-title">Welcome to LexCon International School</h1>
                    <p class="lead mb-4 hero-subtitle">Empowering minds, shaping futures through innovative education and global perspectives</p>
                    <a href="{{ url('/admissions') }}" class="btn btn-light btn-lg px-4 py-2 hero-btn">Apply Now</a>
                </div>
            </div>
        </div>
        <!-- Slider Navigation Dots -->
        <div class="hero-dots">
            <span class="hero-dot active" data-slide="0"></span>
            <span class="hero-dot" data-slide="1"></span>
            <span class="hero-dot" data-slide="2"></span>
            <span class="hero-dot" data-slide="3"></span>
        </div>
    </section>

     <!-- General -->
    <section>
    <div class="general-container" data-aos="fade-up">
        <div class="row-g">
        <!-- Left side (light background with heading) -->
        <div class="left-side" data-aos="fade-right">
            <h1>
            LexCon is the largest network of International Schools in Sri Lanka with over 25,000+ students and over 3,300+ teachers in total and growing!
            </h1>
        </div>
        
        <!-- Right side (dark background with text) -->
        <div class="right-side" data-aos="fade-left">
            <p>At LexCon International School you can:</p>
            <ul>
            <li>Learn from skilled and talented teachers.</li>
            <li>Receive International Educational Certificates.</li>
            <li>Achieve your utmost potential.</li>
            <li>Be a part of a community of inspired, intellectual and talented individuals.</li>
            </ul>
            <p>
            We utilize the best practices available in teaching to develop the skills required for success in higher education.
            </p>
        </div>
        </div>
    </div>
    </section>
    
    <!-- About Section With Background Image -->
    <section class="about-LexCon-section position-relative text-white" style="background-image: url('{{ asset('images/about-lexcon.jpg') }}'); background-size: cover; background-position: center; min-height:150px;" data-aos="fade-right">
        <!-- Dark Overlay -->
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.4);"></div>

        <!-- Centered Box With Space From Top -->
        <div class="container position-relative z-2 h-100 d-flex justify-content-center align-items-start">
            <div class="bg-dark bg-opacity-75 text-white p-4 p-md-5 rounded shadow" style="margin-top: 220px; max-width: 1200px;">
                <h2 class="fw-bold mb-3">About LexCon</h2>
                <p class="mb-3">
                    At LexCon International School, we empower students with knowledge, confidence, and compassion. Our community nurtures each learner through a blend of academic excellence, cultural values, and global perspectives.
                </p>
                <p class="mb-4">
                    Guided by experienced educators and an inclusive vision, LexCon prepares students to succeed in both local and international arenas — from early childhood to advanced levels.
                </p>
                <a href="#about-details" class="btn btn-light btn-sm">Read Full Story <i class="fas fa-arrow-right ms-1"></i></a>
            </div>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section class="about-us-section py-5" id="about" data-aos="fade-up">
        <div class="container">
                      <div class="section-title">
                <h2>Our Mission</h2>
                <p>Making a difference in education and student lives worldwide</p>
            </div>
            <div class="row align-items-center">
                <!-- Left: Image -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="{{ asset('images/hero-bg1.jpg') }}" alt="About LexCon" class="img-fluid rounded shadow">
                    </div>

                    <!-- Right: Text -->
                    <div class="col-md-6">
                        <h2 class="display-5 fw-bold mb-4">About LexCon International School</h2>
                        <p class="text-muted mb-3">At LexCon, we believe in nurturing future leaders through a holistic, globally-aligned education. Our mission is to empower students to reach their full potential in an environment that fosters critical thinking, creativity, and collaboration.</p>
                        <p class="text-muted mb-4">With state-of-the-art facilities, a committed faculty, and a vibrant learning community, LexCon offers a unique educational experience that prepares students for success in the modern world.</p>
                        <a href="#mission" class="btn btn-outline-primary px-4 py-2">Our Mission</a>
                    </div>
                </div>
            </div>
        </section>

    

    <!-- Impact Section -->
    <section class="impact py-5 bg-light" data-aos="zoom-in-up">
        <div class="container">
            <div class="section-title">
                <h2>Our Impact</h2>
                <p>Making a difference in education and student lives worldwide</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card text-center border-0 shadow-sm h-100">
                        <div class="card-body py-5">
                            <div class="display-4 fw-bold text-primary mb-3">2,500+</div>
                            <div class="h5 text-muted">Students Enrolled</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center border-0 shadow-sm h-100">
                        <div class="card-body py-5">
                            <div class="display-4 fw-bold text-primary mb-3">150+</div>
                            <div class="h5 text-muted">Expert Teachers</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center border-0 shadow-sm h-100">
                        <div class="card-body py-5">
                            <div class="display-4 fw-bold text-primary mb-3">95%</div>
                            <div class="h5 text-muted">University Acceptance</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Programs -->
    <section class="programs py-5" id="programs">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center" data-aos="flip-left">
                    <div class="section-title">
                        <h2>Academic Programs</h2>
                        <p>Advanced curriculum preparing students for higher education. Specialized programs for university preparation. Foundation learning with focus on core subjects and character development
                        </p>
                        <!-- <a href="#" class="btn btn-outline-primary mt-3">READ MORE</a> -->
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Primary Education - Big Box -->
                <div class="col-lg-8" data-aos="flip-left">
                    <div class="program-card h-100" >
                        <div class="program-bg" style="background-image: url('{{ asset('images/hero-bg1.jpg') }}');"></div>
                        <div class="program-overlay red-overlay">
                            <div class="program-content" style="color: white;">
                                <!-- <div class="program-number">1</div> -->
                                <h3 class="program-title">Primary Education</h3>
                                <p class="program-subtitle">Foundation learning with focus on core subjects and character development</p>
                                <a href="#" class="btn btn-warning btn-sm">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Secondary Education - Small Box Right -->
                <div class="col-lg-4" data-aos="flip-right">
                    <div class="program-card h-100">
                        <div class="program-bg secondary-bg" style="background-image: url('{{ asset('images/hero-bg1.jpg') }}');"></div>
                        <div class="program-overlay blue-overlay">
                            <div class="program-content" style="color: white;">
                                <!-- <div class="program-number">2</div> -->
                                <h3 class="program-title">Secondary Education</h3>
                                <p class="program-subtitle">Foundation learning with focus on core subjects and character development</p>
                                <ul class="program-features">
                                    <li><i class="fas fa-check"></i> English & Mathematics</li>
                                    <li><i class="fas fa-check"></i> Science & Social Studies</li>
                                    <li><i class="fas fa-check"></i> Arts & Physical Education</li>
                                    <li><i class="fas fa-check"></i> Character Development</li>
                                </ul>
                                <a href="#" class="btn btn-warning btn-sm">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Advanced Level (Left Small Box) -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="program-card h-100">
                        <div class="program-bg" style="background-image: url('{{ asset('images/hero-bg1.jpg') }}');"></div>
                        <div class="program-overlay dark-overlay">
                            <div class="program-content" style="color: white;">
                                <!-- <div class="program-number">3</div> -->
                                <h3 class="program-title">Advanced Level</h3>
                                <p class="program-subtitle">Foundation learning with focus on core subjects and character development</p>
                                <ul class="program-features">
                                    <li><i class="fas fa-check"></i> English & Mathematics</li>
                                    <li><i class="fas fa-check"></i> Science & Social Studies</li>
                                    <li><i class="fas fa-check"></i> Arts & Physical Education</li>
                                    <li><i class="fas fa-check"></i> Character Development</li>
                                </ul>
                                <a href="#" class="btn btn-warning btn-sm">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Advanced Level (Right Small Box) -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="program-card h-100">
                        <div class="program-bg" style="background-image: url('{{ asset('images/hero-bg2.jpg') }}');"></div>
                        <div class="program-overlay orange-overlay">
                            <div class="program-content" style="color: white;">
                                <!-- <div class="program-number">4</div> -->
                                <h3 class="program-title">Advanced Level</h3>
                                <p class="program-subtitle">Specialized training with focus on advanced concepts and practical applications</p>
                                <ul class="program-features">
                                    <li><i class="fas fa-check"></i> Specialized Subjects</li>
                                    <li><i class="fas fa-check"></i> Practical Applications</li>
                                    <li><i class="fas fa-check"></i> Higher Mathematics</li>
                                    <li><i class="fas fa-check"></i> Science & Social Studies</li>
                                </ul>
                                <a href="#" class="btn btn-warning btn-sm">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
<!-- News Cards -->
<section class="news-updates py-5" data-aos="fade-up">
    <div class="container">
        <div class="row mb-4">
            <div class="section-title text-center">
                <h2>News & Updates</h2>
                <p>Latest updates from LexCon International School</p>
            </div>
        </div>

        <!-- Tabs for news/blog -->
        <ul class="nav nav-tabs justify-content-center mb-4">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#newsTab">News</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#blogTab">Blogs</button>
            </li>
        </ul>

        <div class="tab-content">
            <!-- News Tab -->
            <div class="tab-pane fade show active" id="newsTab">
                <div class="row g-4">
                    @forelse ($posts->where('type', 'news') as $post)
                        @php $firstImage = $post->images->first()->image_path ?? 'images/default-news.jpg'; @endphp
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm h-100">
                                <img src="{{ asset($firstImage) }}" class="card-img-top" style="height: 220px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ \Str::limit($post->title, 60) }}</h5>
                                    <p class="card-text">{{ \Str::limit(strip_tags($post->content), 100) }}</p>
                                   
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-muted text-center">No news posts found.</p>
                    @endforelse
                </div>
            </div>

            <!-- Blog Tab -->
            <div class="tab-pane fade" id="blogTab">
                <div class="row g-4">
                    @forelse ($posts->where('type', 'blog') as $post)
                        @php $firstImage = $post->images->first()->image_path ?? 'images/default-news.jpg'; @endphp
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm h-100">
                                <img src="{{ asset($firstImage) }}" class="card-img-top" style="height: 220px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ \Str::limit($post->title, 60) }}</h5>
                                    <p class="card-text">{{ \Str::limit(strip_tags($post->content), 100) }}</p>
                                   
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-muted text-center">No blog posts found.</p>
                    @endforelse
                </div>
            </div>
        </div>

        @if($posts->count())
        <div class="text-center mt-4">

            <a href="{{ url('/news') }}" class="btn btn-light btn-sm">View All News</a>

        </div>
        @endif
    </div>
</section>




    

<!-- Gallery Section -->
<section class="photo-gallery py-5 bg-light" id="gallery"data-aos="fade-up" >
    <div class="container">
        <div class="section-title text-center mb-4">
            <h2>Gallery</h2>
            <p>Explore moments from our vibrant school life and international events</p>
        </div>

        <div class="row g-4">
            @forelse($recentImages as $title => $images)
                <div class="col-md-4">
                    <div class="card bg-dark text-white shadow-sm h-100 position-relative overflow-hidden gallery-card">
                        <div id="carousel-{{ \Illuminate\Support\Str::slug($title) }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($images as $index => $image)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <img src="{{ asset($image->image_path) }}" class="d-block w-100" alt="{{ $image->title }}" style="height: 320px; object-fit: cover;">
                                    </div>
                                @endforeach
                            </div>
                            @if(count($images) > 1)
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ \Illuminate\Support\Str::slug($title) }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{ \Illuminate\Support\Str::slug($title) }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            @endif
                        </div>

                        <div class="card-img-overlay d-flex flex-column justify-content-end p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                            <small class="text-white-50 mb-1">{{ \Carbon\Carbon::parse($images[0]->created_at)->format('F d, Y') }}</small>
                            <h5 class="card-title fw-bold">{{ $title ?? 'Untitled Album' }}</h5>
                            <div class="d-flex gap-1 flex-wrap">
                                <span class="badge bg-light text-dark small">Gallery</span>
                                <span class="badge bg-secondary small">Photos</span>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center text-muted">No recent images found.</div>
            @endforelse
        </div>

        <div class="text-center mt-4">
            <a href="{{ url('/gallery') }}" class="btn btn-outline-primary btn-sm">View Full Gallery</a>
        </div>
    </div>
</section>




@endsection

@section('styles')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
     <!-- Custom Home Page Styles -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    

@endsection

@section('scripts')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Home Page Scripts -->
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: false,
        mirror: true,
    });

    // Optional safety net to refresh AOS every scroll
    window.addEventListener('scroll', function () {
        AOS.refresh();
    });
</script>
    
@endsection