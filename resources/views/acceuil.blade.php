@extends('layouts.app')
@section('content')

<main>
    <!-- Hero Section -->
    @if(session('success'))
      <div id="success-message" class="relative bg-gradient-to-r from-emerald-500 via-green-500 to-lime-400 text-white p-5 rounded-2xl shadow-xl mb-6 max-w-xl mx-auto transform hover:scale-105 transition-all duration-300 ease-in-out border border-white/20 backdrop-blur-md">
          <div class="flex items-center space-x-3">
              <svg class="w-6 h-6 text-white animate-bounce" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-lg font-semibold">{{ session('success') }}</span>
          </div>
      </div>

      <script>
          // Supprime le message après 3 secondes
          setTimeout(() => {
              const msg = document.getElementById('success-message');
              if (msg) {
                  msg.classList.add('opacity-0', 'translate-y-[-10px]', 'transition', 'duration-500');
                  setTimeout(() => msg.remove(), 500); // Attends la transition avant de le retirer
              }
          }, 3000);
      </script>
  @endif


    <section class="hero">
      <div class="hero-overlay"></div>
      <div class="container">
        <div class="hero-content">
          <div class="hero-text">
            <h1>Plan Your Perfect Trip with <span class="highlight">WIJHA</span></h1>
            <p>Your all-in-one travel companion that helps you plan your journey from visa requirements to local attractions.</p>
            <div class="hero-buttons">
              <a href="#" class="btn btn-primary">
                Get Started
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="btn btn-outline">Learn More</a>
            </div>
          </div>
          
          <div class="search-card">
            <h2>Where do you want to go?</h2>
            <form action="{{ route('visa.check') }}" method="POST" class="search-form">
              @csrf
              <div class="form-row">
                <div class="form-group">
                  <label for="nationality">Your Nationality</label>
                  <input type="text" id="passport_code" name="passport_code" required>
                </div>
                <div class="form-group">
                  <label for="destination">Destination</label>
                  <input type="text" id="destination" name="destination" required>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary btn-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                  <circle cx="11" cy="11" r="8"></circle>
                  <path d="m21 21-4.3-4.3"></path>
                </svg>
                Check Visa
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
      <div class="container">
        <div class="section-header">
          <h2>Everything You Need in One Place</h2>
          <p>WIJHA brings together all the essential travel information you need, customized based on your nationality and destination.</p>
        </div>
        
        <div class="features-grid">
          <div class="feature-card">
            <div class="feature-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path>
              </svg>
            </div>
            <h3>Visa Requirements</h3>
            <p>Instantly check if you need a visa for your destination based on your nationality.</p>
          </div>
          
          <div class="feature-card">
            <div class="feature-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"></path>
              </svg>
            </div>
            <h3>Flight Comparison</h3>
            <p>Find and compare the best flight deals from multiple airlines and booking platforms.</p>
          </div>
          
          <div class="feature-card">
            <div class="feature-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16"></path>
                <path d="M1 21h22"></path>
                <path d="M8 9h8"></path>
                <path d="M8 13h8"></path>
                <path d="M8 17h8"></path>
              </svg>
            </div>
            <h3>Accommodation Options</h3>
            <p>Discover hotels, hostels, and vacation rentals that match your budget and preferences.</p>
          </div>
          
          <div class="feature-card">
            <div class="feature-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
            </div>
            <h3>Local Attractions</h3>
            <p>Explore popular attractions, activities, and hidden gems at your destination.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="how-it-works">
      <div class="container">
        <div class="section-header">
          <h2>How WIJHA Works</h2>
          <p>Planning your trip with WIJHA is simple, fast, and personalized to your needs.</p>
        </div>
        
        <div class="steps">
          <div class="step">
            <div class="step-number">1</div>
            <h3>Enter Your Details</h3>
            <p>Select your nationality and destination to get personalized travel information.</p>
          </div>
          
          <div class="step">
            <div class="step-number">2</div>
            <h3>Review Requirements</h3>
            <p>Get instant information about visa requirements, passport validity, and other travel documents.</p>
          </div>
          
          <div class="step">
            <div class="step-number">3</div>
            <h3>Plan Your Trip</h3>
            <p>Book flights, find accommodation, and discover attractions all in one place.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Popular Destinations -->
    <section id="destinations" class="destinations">
      <div class="container">
        <div class="section-header">
          <h2>Popular Destinations</h2>
          <p>Explore some of our users' favorite destinations with comprehensive travel guides.</p>
        </div>
        
        <div class="destinations-grid">
          <div class="destination-card">
            <div class="destination-image">
              <img src="https://placehold.co/600x400" alt="Paris, France">
            </div>
            <div class="destination-info">
              <h3>Paris, France</h3>
              <a href="#" class="btn btn-outline btn-sm">Explore</a>
            </div>
          </div>
          
          <div class="destination-card">
            <div class="destination-image">
              <img src="https://placehold.co/600x400" alt="Tokyo, Japan">
            </div>
            <div class="destination-info">
              <h3>Tokyo, Japan</h3>
              <a href="#" class="btn btn-outline btn-sm">Explore</a>
            </div>
          </div>
          
          <div class="destination-card">
            <div class="destination-image">
              <img src="https://placehold.co/600x400" alt="Barcelona, Spain">
            </div>
            <div class="destination-info">
              <h3>Barcelona, Spain</h3>
              <a href="#" class="btn btn-outline btn-sm">Explore</a>
            </div>
          </div>
          
          <div class="destination-card">
            <div class="destination-image">
              <img src="https://placehold.co/600x400" alt="New York, USA">
            </div>
            <div class="destination-info">
              <h3>New York, USA</h3>
              <a href="#" class="btn btn-outline btn-sm">Explore</a>
            </div>
          </div>
          
          <div class="destination-card">
            <div class="destination-image">
              <img src="https://placehold.co/600x400" alt="Rome, Italy">
            </div>
            <div class="destination-info">
              <h3>Rome, Italy</h3>
              <a href="#" class="btn btn-outline btn-sm">Explore</a>
            </div>
          </div>
          
          <div class="destination-card">
            <div class="destination-image">
              <img src="https://placehold.co/600x400" alt="Marrakech, Morocco">
            </div>
            <div class="destination-info">
              <h3>Marrakech, Morocco</h3>
              <a href="#" class="btn btn-outline btn-sm">Explore</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="section-header">
          <h2>What Our Users Say</h2>
          <p>Hear from travelers who have used WIJHA to plan their perfect trips.</p>
        </div>
        
        <div class="testimonials-grid">
          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="testimonial-avatar">S</div>
              <div class="testimonial-author">
                <h4>Sarah L.</h4>
                <p>United States</p>
              </div>
            </div>
            <p class="testimonial-text">"WIJHA saved me hours of research. I instantly knew what visa I needed for my trip to Japan and found great flight deals!"</p>
          </div>
          
          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="testimonial-avatar">M</div>
              <div class="testimonial-author">
                <h4>Mohammed A.</h4>
                <p>Morocco</p>
              </div>
            </div>
            <p class="testimonial-text">"As someone who travels frequently, having all my travel information in one place has been a game-changer. Highly recommended!"</p>
          </div>
          
          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="testimonial-avatar">E</div>
              <div class="testimonial-author">
                <h4>Elena K.</h4>
                <p>Spain</p>
              </div>
            </div>
            <p class="testimonial-text">"The local attractions feature helped me discover hidden gems I wouldn't have found otherwise. My trip was unforgettable thanks to WIJHA."</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
      <div class="container">
        <div class="cta-content">
          <h2>Ready to Plan Your Next Adventure?</h2>
          <p>Join thousands of travelers who use WIJHA to plan their trips with confidence.</p>
          <div class="cta-buttons">
            <a href="signup.html" class="btn btn-light">Sign Up Now</a>
            <a href="#" class="btn btn-outline-light">Learn More</a>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
