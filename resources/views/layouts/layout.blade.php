<!-- filepath: c:\Users\Bishop\woodstock\resources\views\layouts\layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woodstock Properties</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #70767A;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="{{ asset('image/office.jpg') }}" alt="Woodstock Properties Logo" width="30" height="30" class="d-inline-block align-text-top">
                Woodstock Properties
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                        
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('posts.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('pricing') }}">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                    </li>
                    @else
                    <!-- Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('https://picsum.photos/200/300') }}" alt="User Icon" width="40" height="40" style="border-radius: 50%;" class="d-inline-block align-text-top">
                            Menu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <p style="color:#70767A; font-size: 18px; text-align: center;">{{ auth()->user()->name }}</p>
                            <li><a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('content')
    
    <footer class="text-center mt-4 py-4" style="background-color: #70767A; color: white;">
        <div class="container"  >
            <div class="row" >
                <div class="col-md-4 mb-2">
                    <h5>Follow Us</h5>
                    <a  href="https://www.facebook.com" target="_blank" style="text-decoration:none;" class="text-white me-3">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="https://www.twitter.com" target="_blank" style="text-decoration:none;" class="text-white me-3"> 
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" style="text-decoration:none;" class="text-white me-3">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="https://www.linkedin.com" target="_blank" style="text-decoration:none;" class="text-white me-3">
                        <i class="fab fa-linkedin fa-lg"></i>
                    </a>
                    <a href="https://www.youtube.com" target="_blank" style="text-decoration:none;" class="text-white me-3">
                        <i class="fab fa-youtube fa-lg"></i>
                    </a>
                </div>
    
                <!-- Useful Links -->
                <div class="col-md-4 mb-3">
                    <h5>Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('posts.index') }}" class="text-white">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-white">About Us</a></li>
                        <li><a href="{{ route('pricing') }}" class="text-white">Pricing</a></li>
                        <li><a href="{{ route('contact') }}" class="text-white">Contact Us</a></li>
                    </ul>
                </div>
    
                <!-- Contact Us -->
                <div class="col-md-4 mb-3">
                    <h5>Contact Us</h5>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Main Street, Woodstock</p>
                    <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                    <p><i class="fas fa-envelope"></i> info@woodstockproperties.com</p>
                </div>
            </div>
            <hr style="border-color: white;">
            <p>&copy; {{ date('Y') }} Woodstock Properties. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>