@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woodstock Properties</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Josefin+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/asset/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div id="container">
    <div class="min_tex">
        <div class="lft_sid">
        <h1>Welcome to Wooden Properties Masters of Woodwork</h1>
        <p class="sub_text">At Wooden Properties, we take pride in being the leaders in wooden home construction and custom wooden creations. With years of experience and a passion for craftsmanship, we bring your visions to life with high-quality materials and exceptional design.</p>
    </div>
</div>
  <div id="job_done">
    <div class="child">
        <i class="fa fa-building" aria-hidden="true"> 100</i>
        <p>Properties listed and managed by us, with a focus on quality and customer satisfaction.</p>
    </div>
    <div class="child">
        <i class="fa fa-users" aria-hidden="true"> 100</i>
        <p>Vendors and agents trust us for listing and managing properties.</p>
    </div>
    <div class="child">
        <i class="fas fa-hand-holding-dollar" aria-hidden="true"> 100</i>
       <p>Offering various subscription plans to suit every vendor’s needs.</p>
    </div>
    <div class="child">
        <i class="fa fa-handshake" aria-hidden="true"> 250+</i>
        <p>Hundreds of properties listed, diverse options for everyone.</p>
    </div>

  </div>
  <div id="list">
  <div class="container mt-5">
    <h2 class="text-center mb-4">Our Latest Sales</h2>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('image/two.jpg') }}" class="card-img-top" alt="Sale 1">
                <div class="card-body">
                    <h5 class="card-title">Luxury Wooden House</h5>
                    <p class="card-text">A beautiful wooden house with modern interiors. Perfect for families.</p>
                    <p class="text-muted">Created by: <strong>John Doe</strong></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="btn" style="background: #70767A;">View Details</a>
                        <i class="fas fa-heart text-danger" style="cursor: pointer;"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('image/open_1.png') }}" class="card-img-top" alt="Sale 2">
                <div class="card-body">
                    <h5 class="card-title">Cozy Cabin</h5>
                    <p class="card-text">A cozy cabin in the woods, ideal for a peaceful retreat.</p>
                    <p class="text-muted">Created by: <strong>Jane Smith</strong></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="btn" style="background: #70767A;">View Details</a>
                        <i class="fas fa-heart text-danger" style="cursor: pointer;"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('image/three.jpg') }}" class="card-img-top" alt="Sale 2">
                <div class="card-body">
                    <h5 class="card-title">Modern Wooden Villa</h5>
                    <p class="card-text">A cozy cabin in the woods, ideal for a peaceful retreat.</p>
                    <p class="text-muted">Created by: <strong>Michael Brown</strong></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="btn" style="background: #70767A;">View Details</a>
                        <i class="fas fa-heart text-danger" style="cursor: pointer;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div id="why_chos">
    <div class="properties">
        <spam style="color: yellow; font-family: "Josefin Sans", sans-serif;">Why Choose Wooden Properties?</spam>
        <h1>Our Great Services Waiting For You</h1>
        <p>At Woodstock, we are passionate about
             delivering excellence in wood products, 
             craftsmanship, and innovative solutions. 
             Whether you're a builder, furniture maker, or
              wood enthusiast, our premium services ensure you get the best 
             materials and expertise for your projects.</p>

             <div class="opt">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                <i class="fab fa-instagram" aria-hidden="true" ></i>
                <i class="fab fa-facebook" aria-hidden="true"></i>
                <i class="fab fa-github" aria-hidden="true"></i>
                <i class="fab fa-google" aria-hidden="true"></i>
                <i class="fab fa-tiktok" aria-hidden="true"></i>
                <i class="fab fa-twitter" aria-hidden="true" ></i>
            </div>
    </div>
    <div class="properties">
        <img src="{{ asset('image/work.png') }}" alt="">
    </div>
</div>
  <!-- filepath: c:\Users\Bishop\woodstock\resources\views\posts\index.blade.php -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Our Featured Projects</h2>
    <div class="row">
        <!-- Image 1 -->
        <div class="col-md-4 mb-4">
            <img src="{{ asset('image/open.png') }}" alt="Project 1" class="img-fluid rounded">
        </div>
        <!-- Image 2 -->
        <div class="col-md-4 mb-4">
            <img src="{{ asset('image/long-table.jpg') }}" alt="Project 2" class="img-fluid rounded">
        </div>
        <!-- Image 3 -->
        <div class="col-md-4 mb-4">
            <img src="{{ asset('image/photo.jpg') }}" alt="Project 3" class="img-fluid rounded">
        </div>
        <!-- Image 4 -->
        <div class="col-md-4 mb-4">
            <img src="{{ asset('image/two.jpg') }}" alt="Project 4" class="img-fluid rounded">
        </div>
        <!-- Image 5 -->
        <div class="col-md-4 mb-4">
            <img src="{{ asset('image/room.jpg') }}" alt="Project 5" class="img-fluid rounded">
        </div>
        <!-- Image 6 -->
        <div class="col-md-4 mb-4">
            <img src="{{ asset('image/comfortable.jpg') }}" alt="Project 6" class="img-fluid rounded">
        </div>
    </div>
</div>
<!-- filepath: c:\Users\Bishop\woodstock\resources\views\posts\index.blade.php -->
<div class="container mt-5">
    <h2 class="text-center mb-4">What Our Clients Say</h2>
    <div class="row">
        <!-- Testimony 1 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('image/office.jpg') }}" class="card-img-top rounded-circle mx-auto mt-3" alt="Client 1" style="width: 100px; height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <p class="card-text">"Woodstock Properties transformed my dream home into reality. Their craftsmanship is unmatched!"</p>
                    <p class="text-muted"><strong>- Jane Doe</strong></p>
                </div>
            </div>
        </div>
        <!-- Testimony 2 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('image/happy.jpg') }}" class="card-img-top rounded-circle mx-auto mt-3" alt="Client 2" style="width: 100px; height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <p class="card-text">"The quality of their wooden materials is top-notch. Highly recommended for any project."</p>
                    <p class="text-muted"><strong>- John Smith</strong></p>
                </div>
            </div>
        </div>
        <!-- Testimony 3 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('image/young.jpg') }}" class="card-img-top rounded-circle mx-auto mt-3" alt="Client 3" style="width: 100px; height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <p class="card-text">"Their attention to detail and customer service is exceptional. I couldn't be happier!"</p>
                    <p class="text-muted"><strong>- Sarah Johnson</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
  
<!-- filepath: c:\Users\Bishop\woodstock\resources\views\posts\index.blade.php -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Our Products</h2>
    <div class="row">
        <!-- Product 1 -->
        @foreach($posts as $post)

    
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('image/chair.jpg') }}" class="card-img-top" alt="Product 1" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{Str::words($post->body, 15)}}</p>
                    <p class="text-muted"><i class="fas fa-map-marker-alt text-danger"></i> {{$post->location}}</p>
                    <p class="text-muted">Posted by: <strong>{{Auth::user()->name;}}</strong></p>
                    <span>posted {{$post->created_at->diffForHumans()}}</span>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        
        @endforeach
        <!-- Product 3 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('image/open.png') }}" class="card-img-top" alt="Product 3" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Rustic Wooden Bed</h5>
                    <p class="card-text">A rustic wooden bed frame that adds charm to your bedroom.</p>
                    <p class="text-muted"><i class="fas fa-map-marker-alt text-danger"></i> Port Harcourt, Nigeria</p>
                    <p class="text-muted">Posted by: <strong>Michael Brown</strong></p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>
@endsection