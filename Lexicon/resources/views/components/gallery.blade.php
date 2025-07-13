@extends('layouts.app')

@section('title', 'Gallery - Lexicon International School')

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
            /* Gallery Categories */
            .gallery-categories {
                padding: 60px 0 40px;
                background: #f8f9fa;
            }

            .category-filters {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                gap: 20px;
            }

            .filter-btn {
                background: transparent;
                border: none;
                padding: 10px 20px;
                font-size: 14px;
                font-weight: 600;
                color: #666;
                cursor: pointer;
                transition: all 0.3s ease;
                position: relative;
            }

            .filter-btn::after {
                content: '';
                position: absolute;
                bottom: -5px;
                left: 50%;
                transform: translateX(-50%);
                width: 0;
                height: 2px;
                background: #007bff;
                transition: width 0.3s ease;
            }

            .filter-btn.active,
            .filter-btn:hover {
                color: #007bff;
            }

            .filter-btn.active::after,
            .filter-btn:hover::after {
                width: 100%;
            }

            /* Gallery Grid */
            .gallery-grid {
                padding: 40px 0 80px;
                background: #fff;
            }

            .masonry-grid {
                columns: 4;
                column-gap: 20px;
                margin: 0 auto;
            }

            .gallery-item {
                display: inline-block;
                width: 100%;
                margin-bottom: 20px;
                break-inside: avoid;
                position: relative;
                overflow: hidden;
                border-radius: 8px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .gallery-item:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            }

            .gallery-image {
                position: relative;
                overflow: hidden;
            }

            .gallery-image img {
                width: 100%;
                height: auto;
                display: block;
                transition: transform 0.3s ease;
            }

            .gallery-item:hover .gallery-image img {
                transform: scale(1.05);
            }

            .gallery-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%);
                display: flex;
                align-items: flex-end;
                padding: 20px;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .gallery-item:hover .gallery-overlay {
                opacity: 1;
            }

            .gallery-content {
                color: white;
            }

            .gallery-title {
                font-size: 18px;
                font-weight: 600;
                margin: 0 0 5px;
                line-height: 1.3;
            }

            .gallery-category {
                font-size: 12px;
                color: rgba(255, 255, 255, 0.8);
                margin: 0;
                text-transform: uppercase;
                letter-spacing: 1px;
            }

            /* Responsive Design */
            @media (max-width: 1200px) {
                .masonry-grid {
                    columns: 3;
                }
            }

            @media (max-width: 768px) {
                .masonry-grid {
                    columns: 2;
                    column-gap: 15px;
                }
                
                .gallery-item {
                    margin-bottom: 15px;
                }
                
                .category-filters {
                    gap: 15px;
                }
                
                .filter-btn {
                    padding: 8px 16px;
                    font-size: 12px;
                }
            }

            @media (max-width: 480px) {
                .masonry-grid {
                    columns: 1;
                }
                
                .gallery-categories {
                    padding: 40px 0 30px;
                }
                
                .gallery-grid {
                    padding: 30px 0 60px;
                }
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

<!-- Gallery Categories -->
<section class="gallery-categories">
    <div class="container">
        <div class="category-filters">
            <button class="filter-btn active" data-filter="all">ALL</button>
            <button class="filter-btn" data-filter="photography">PHOTOGRAPHY</button>
            <button class="filter-btn" data-filter="travel">TRAVEL</button>
            <button class="filter-btn" data-filter="nature">NATURE</button>
            <button class="filter-btn" data-filter="fashion">FASHION</button>
            <button class="filter-btn" data-filter="lifestyle">LIFE STYLE</button>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="gallery-grid">
    <div class="container">
        <div class="masonry-grid" id="galleryGrid">
            <!-- Gallery Item 1 -->
            <div class="gallery-item" data-category="photography travel">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Mountain Landscape">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Mountain Adventure</h3>
                            <p class="gallery-category">Photography • Travel</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="gallery-item" data-category="nature">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Geometric Design">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Geometric Patterns</h3>
                            <p class="gallery-category">Nature • Design</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="gallery-item" data-category="lifestyle">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Culinary Art">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Culinary Masterpiece</h3>
                            <p class="gallery-category">Life Style • Food</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="gallery-item" data-category="fashion">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Fashion Portrait">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Fashion Portrait</h3>
                            <p class="gallery-category">Fashion • Photography</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="gallery-item" data-category="photography">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Abstract Art">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Abstract Creativity</h3>
                            <p class="gallery-category">Photography • Art</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="gallery-item" data-category="lifestyle">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Connection">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Human Connection</h3>
                            <p class="gallery-category">Life Style • Emotion</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 7 -->
            <div class="gallery-item" data-category="nature">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Pet Photography">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Pet Companion</h3>
                            <p class="gallery-category">Nature • Photography</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 8 -->
            <div class="gallery-item" data-category="lifestyle">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Coffee Culture">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Coffee Culture</h3>
                            <p class="gallery-category">Life Style • Food</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 9 -->
            <div class="gallery-item" data-category="photography">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Artistic Expression">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Artistic Expression</h3>
                            <p class="gallery-category">Photography • Art</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 10 -->
            <div class="gallery-item" data-category="travel">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Body Art">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Body Art Expression</h3>
                            <p class="gallery-category">Travel • Culture</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 11 -->
            <div class="gallery-item" data-category="travel">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Automotive">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Automotive Beauty</h3>
                            <p class="gallery-category">Travel • Photography</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 12 -->
            <div class="gallery-item" data-category="lifestyle">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Gentle Touch">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Gentle Moments</h3>
                            <p class="gallery-category">Life Style • Emotion</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Gallery Categories */
.gallery-categories {
    padding: 60px 0 40px;
    background: #f8f9fa;
}

.category-filters {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.filter-btn {
    background: transparent;
    border: none;
    padding: 10px 20px;
    font-size: 14px;
    font-weight: 600;
    color: #666;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
}

.filter-btn::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 2px;
    background: #007bff;
    transition: width 0.3s ease;
}

.filter-btn.active,
.filter-btn:hover {
    color: #007bff;
}

.filter-btn.active::after,
.filter-btn:hover::after {
    width: 100%;
}

/* Gallery Grid */
.gallery-grid {
    padding: 40px 0 80px;
    background: #fff;
}

.masonry-grid {
    columns: 4;
    column-gap: 20px;
    margin: 0 auto;
}

.gallery-item {
    display: inline-block;
    width: 100%;
    margin-bottom: 20px;
    break-inside: avoid;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.gallery-image {
    position: relative;
    overflow: hidden;
}

.gallery-image img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s ease;
}

.gallery-item:hover .gallery-image img {
    transform: scale(1.05);
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%);
    display: flex;
    align-items: flex-end;
    padding: 20px;
    opacity: 1;
    transition: opacity 0.3s ease;
}

.gallery-content {
    color: white;
}

.gallery-title {
    font-size: 18px;
    font-weight: 600;
    margin: 0 0 5px;
    line-height: 1.3;
}

.gallery-category {
    font-size: 12px;
    color: rgba(255, 255, 255, 0.8);
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Responsive Design */
@media (max-width: 1200px) {
    .masonry-grid {
        columns: 3;
    }
}

@media (max-width: 768px) {
    .masonry-grid {
        columns: 2;
        column-gap: 15px;
    }
    
    .gallery-item {
        margin-bottom: 15px;
    }
    
    .category-filters {
        gap: 15px;
    }
    
    .filter-btn {
        padding: 8px 16px;
        font-size: 12px;
    }
}

@media (max-width: 480px) {
    .masonry-grid {
        columns: 1;
    }
    
    .gallery-categories {
        padding: 40px 0 30px;
    }
    
    .gallery-grid {
        padding: 30px 0 60px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            
            galleryItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category').includes(filterValue)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>

@endsection
@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            
            galleryItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category').includes(filterValue)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
@endsection
