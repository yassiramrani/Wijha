@extends('layouts.app')
@section('content')

  <main>
    <!-- Login Section -->
    <section class="auth-section">
      <div class="container">
        <div class="auth-container">
          <div class="auth-form-container">
            <h1>Welcome Back</h1>
            <p class="auth-subtitle">Login to access your WIJHA account</p>
            
            <form action="{{ route('login') }}" method="POST" class="auth-form">
              @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="your@email.com" required>
              </div>
              
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
                <div class="password-options">
                  <div class="remember-me">
                    <input type="checkbox" id="remember-me" name="remember">
                    <label for="remember-me">Remember me</label>
                  </div>
                  <a href="#" class="forgot-password">Forgot password?</a>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            
            <div class="auth-separator">
              <span>OR</span>
            </div>
            
            <div class="social-auth">
              <button class="btn btn-outline social-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                </svg>
                Continue with Facebook
              </button>
              <button class="btn btn-outline social-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                </svg>
                Continue with Google
              </button>
            </div>
            
            <div class="auth-switch">
              Don't have an account? <a href="signup.html" class="switch-auth-link">Sign up</a>
            </div>
          </div>
          
          <div class="auth-image">
            <div class="auth-image-content">
              <h2>Explore the World with WIJHA</h2>
              <p>Your all-in-one travel companion that helps you plan your journey from visa requirements to local attractions.</p>
              <div class="auth-image-features">
                <div class="auth-feature">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path>
                  </svg>
                  <span>Visa Requirements</span>
                </div>
                <div class="auth-feature">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"></path>
                  </svg>
                  <span>Flight Comparison</span>
                </div>
                <div class="auth-feature">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                  </svg>
                  <span>Local Attractions</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  @endsection

