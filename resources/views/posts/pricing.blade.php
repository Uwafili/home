@extends('layouts.layout')
@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Our Pricing Plans</h1>
    <p class="text-center">Choose a plan that fits your needs. We offer flexible pricing for individuals, businesses, and enterprises.</p>
    <div class="row">
        <!-- Basic Plan -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Basic Plan</h4>
                </div>
                <div class="card-body text-center">
                    <h2 class="card-title">$49</h2>
                    <p class="card-text">Perfect for individuals starting out.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-success"></i> Access to basic features</li>
                        <li><i class="fas fa-check-circle text-success"></i> Email support</li>
                        <li><i class="fas fa-check-circle text-success"></i> 10 projects</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Choose Plan</a>
                </div>
            </div>
        </div>
        <!-- Standard Plan -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-header text-center bg-success text-white">
                    <h4>Standard Plan</h4>
                </div>
                <div class="card-body text-center">
                    <h2 class="card-title">$99</h2>
                    <p class="card-text">Ideal for small businesses.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-success"></i> Access to all features</li>
                        <li><i class="fas fa-check-circle text-success"></i> Priority email support</li>
                        <li><i class="fas fa-check-circle text-success"></i> 50 projects</li>
                    </ul>
                    <a href="#" class="btn btn-success">Choose Plan</a>
                </div>
            </div>
        </div>
        <!-- Premium Plan -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-header text-center bg-warning text-white">
                    <h4>Premium Plan</h4>
                </div>
                <div class="card-body text-center">
                    <h2 class="card-title">$199</h2>
                    <p class="card-text">Best for enterprises and large teams.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-success"></i> Unlimited features</li>
                        <li><i class="fas fa-check-circle text-success"></i> Dedicated support</li>
                        <li><i class="fas fa-check-circle text-success"></i> Unlimited projects</li>
                    </ul>
                    <a href="#" class="btn btn-warning">Choose Plan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection