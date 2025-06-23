<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - WIJHA</title>
  <meta name="description" content="Create your WIJHA account to access personalized travel information and plan your trips.">
  <link rel="stylesheet" href="{{ asset('styles.css') }}">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  @stack('scripts')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
</head>
<body>
  <!-- Navigation -->
  <header class="header">
    <div class="container">
      <div class="header-content">
        <div class="logo">
          <a href="index.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
              <circle cx="12" cy="12" r="10"></circle>
              <path d="M12 2a14.5 14.5 0 0 0 0 20a14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path>
            </svg>
            <span>WIJHA</span>
          </a>
        </div>
        
        <nav class="main-nav">
          <ul>
            <li><a href="index.html#features">Features</a></li>
            <li><a href="index.html#how-it-works">How It Works</a></li>
            <li><a href="index.html#destinations">Destinations</a></li>
            <li><a href="index.html#testimonials">Testimonials</a></li>
          </ul>
        </nav>
        
        
        @guest
          <div class="auth-buttons">
            <a href="{{ route('login') }}" class="login-link active">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
          </div>
        @endguest

        @auth
          {{--<a href="{{ route('profile') }}" class="text-white text-lg hover:text-gray-300 transition duration-300">Profile</a>--}}
          <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="logout btn btn-primary">Déconnexion</button>
          </form>
        @endauth
        
        <button class="mobile-menu-toggle" aria-label="Toggle menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <main>
    <!-- Signup Section -->
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="footer footer-slim">
    <div class="container">
      <div class="footer-slim-content">
        <div class="logo">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M12 2a14.5 14.5 0 0 0 0 20a14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path>
          </svg>
          <span>WIJHA</span>
        </div>
        
        <div class="footer-links-horizontal">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
          <a href="#">Contact Us</a>
          <a href="#">Help Center</a>
        </div>
        
        <div class="social-links">
          <a href="#" aria-label="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
            </svg>
          </a>
          <a href="#" aria-label="Twitter">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
            </svg>
          </a>
          <a href="#" aria-label="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
          </a>
        </div>
      </div>
      
      <div class="footer-bottom">
        <p>&copy; <span id="current-year"></span> WIJHA. All rights reserved.</p>
      </div>
    </div>
  </footer>
</body>
</html>
