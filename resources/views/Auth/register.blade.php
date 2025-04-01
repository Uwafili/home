@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <h2 class="text-center mb-4">Register</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" placeholder="Enter your full name" aria-label="Full Name">
                    @error('name')
                    <p style="color:red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="text" class="form-control" value="{{ old('email') }}" id="email" name="email" placeholder="Enter your email" aria-label="Email Address">
                    @error('email')
                    <p style="color:red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" aria-label="Password">
                    @error('password')
                    <p style="color:red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" aria-label="Confirm Password">
                    @error('password_confirmation')
                    <p style="color:red">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn w-100 btn-register" style="background-color: #70767A">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection