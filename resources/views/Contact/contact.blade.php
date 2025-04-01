@extends('layouts.layout')
@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Contact Us</h1>
    <p class="text-center">We'd love to hear from you! Feel free to reach out to us using the form below or through our contact details.</p>

    <div class="row">
        <!-- Contact Form -->
        <div class="col-md-6">
            <!-- Display Success Message -->
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                   
                </div>
                <button type="submit" class="btn" style="background-color: #70767A">Send Message</button>
            </form>
        </div>

        <!-- Lagos Map -->
        <div class="col-md-6">
            <h3>Our Location</h3>
            <p><i class="fas fa-map-marker-alt text-danger"></i> 123 Wooden Street, Lagos, Nigeria</p>
            <div class="map-container mt-3">
                <!-- Google Map Embed -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126915.73155412345!2d3.3211605!3d6.5243793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b2c2c2c2c2c%3A0x2c2c2c2c2c2c2c2c!2sLagos%2C%20Nigeria!5e0!3m2!1sen!2sng!4v1612345678901!5m2!1sen!2sng" 
                    width="100%" 
                    height="300" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection