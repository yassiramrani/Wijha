@extends('layouts.app')
@section('content')

<main>
  <!-- Signup Section -->
  <section class="auth-section">
    <div class="container">
      <div class="auth-container">
        <div class="auth-form-container">
          <h1>Create an Account</h1>
          <p class="auth-subtitle">Join WIJHA and start planning your perfect trip</p>
          
          <form action="{{ route('register') }}" method="POST" class="auth-form">
            @csrf

            <div class="form-group">
              <label for="nom">Full Name</label>
              <input type="text" id="nom" name="nom" placeholder="John Doe" required>
            </div>

            <div class="form-group">
              <label for="prenom">First Name</label>
              <input type="text" id="prenom" name="prenom" placeholder="John" required>
            </div>
            
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="your@email.com" required>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="number" id="tel" name="tel" placeholder="your number" required>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="date" id="date_de_naissance" name="date_de_naissance" placeholder="date de naissance" required>
            </div>
            
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="••••••••" required minlength="8">
              <small class="password-hint">Password must be at least 8 characters</small>
            </div>

            <div class="form-group">
              <label for="password_confirmation">Confirm Password</label>
              <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required minlength="8">
            </div>
            
            <div class="terms-checkbox">
              <input type="checkbox" id="terms" name="terms" required>
              <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
          </form>
          
          <div class="auth-separator">
            <span>OR</span>
          </div>
          
          <div class="social-auth">
            <button class="btn btn-outline social-btn">
              <!-- Facebook Icon -->
              Sign up with Facebook
            </button>
            <button class="btn btn-outline social-btn">
              <!-- Google Icon -->
              Sign up with Google
            </button>
          </div>
          
          <div class="auth-switch">
            Already have an account? 
            <a href="{{ route('login') }}" class="switch-auth-link">Login</a>
          </div>
        </div>
        
        <div class="auth-image">
          <div class="auth-image-content">
            <h2>Join Our Community of Travelers</h2>
            <p>Create an account to save your favorite destinations, get personalized recommendations, and plan your trips with ease.</p>
            <div class="auth-image-features">
              <div class="auth-feature">
                <span>Save Itineraries</span>
              </div>
              <div class="auth-feature">
                <span>Travel Guides</span>
              </div>
              <div class="auth-feature">
                <span>Travel Support</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection
