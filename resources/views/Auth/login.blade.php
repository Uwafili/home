@extends('layouts.layout')
@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Welcome Back</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('login') }}" method="POST">
                @csrf
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
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                @error('failed')
                    <p style="color:red">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn w-100 btn-login" style="background-color: #70767A">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection