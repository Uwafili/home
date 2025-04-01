@extends('layouts.layout')
@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">About Us</h1>
    <div class="row align-items-center">
        <!-- About Content -->
        <div class="col-md-6">
            <h2>Welcome to Woodstock Properties</h2>
            <p>At Woodstock Properties, we are passionate about delivering high-quality wooden materials and furniture. Our team of skilled craftsmen and designers work tirelessly to bring your vision to life with sustainable and innovative solutions.</p>
            <p>Whether you're building a home, furnishing your space, or creating custom wooden pieces, we are here to provide exceptional craftsmanship and premium materials.</p>
            <ul class="list-unstyled">
                <li><i class="fas fa-check-circle text-success"></i> Sustainable and eco-friendly materials.</li>
                <li><i class="fas fa-check-circle text-success"></i> Expert craftsmanship with attention to detail.</li>
                <li><i class="fas fa-check-circle text-success"></i> Nationwide delivery and support.</li>
            </ul>
        </div>
        <!-- About Image -->
        <div class="col-md-6">
            <img src="{{ asset('image/office.jpg') }}" alt="About Us" class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Slideshow Section -->
    <div id="aboutCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('image/open.png') }}" class="d-block w-100" alt="Wood Material 1" style="height: 400px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Premium Oak Wood</h5>
                    <p>Strong and durable, perfect for furniture and flooring.</p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('image/doble.jpg') }}" class="d-block w-100" alt="Wood Material 2" style="height: 400px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Exquisite Mahogany</h5>
                    <p>Rich reddish-brown wood, ideal for luxury interiors.</p>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="{{ asset('image/chair.jpg') }}" class="d-block w-100" alt="Wood Material 3" style="height: 400px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Weather-Resistant Teak</h5>
                    <p>Perfect for outdoor furniture and long-lasting designs.</p>
                </div>
            </div>
        </div>
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection