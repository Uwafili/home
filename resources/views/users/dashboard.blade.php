@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <!-- User Profile Section -->
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title">User Profile</h4>
                <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
                <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                <p><strong>Joined:</strong> {{ auth()->user()->created_at->format('M d, Y') }}</p>
            </div>
        </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Create a New Post</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('posts.store')}}" method="POST">
                    @csrf
                     <div class="mb-3">
                        <label for="title" class="form-label">Post Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Enter the title">
                    @error('title')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Post Body</label>
                        <textarea class="form-control" id="body" name="body" rows="5" placeholder="Write your post here...">{{ old('body') }}</textarea>
                    
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Locations</label>
                        <input type="text" class="form-control" id="title" name="location" value="{{ old('location') }}" placeholder="Enter the title">
                    @error('location')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                    </div>  
                    
                    <button type="submit" class="btn btn-primary w-100">Create Post</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection