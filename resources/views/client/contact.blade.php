@extends('client.layouts.master')
@section('content')
   
    <div class="contact-form-container">
      <div class="contact-us">
        <div class="contact-header">
          <h1>⏵⏵⏵⏵&nbsp;&nbsp;CONTACT US</h1>
          <div class="contact-info"> 
            <div class="address">
            <i class="fas fa-map-marker-alt"></i>
            <h3>8266 Gygax</h3>
            <h3>Norfolk, VA</h3>
          </div>
          <div class="phone">
            <i class="fas fa-phone-alt"></i>
            <h3>757 287 1608</h3>
          </div>
          <div class="email">
            <i class="fas fa-envelope"></i>
            <h3>hello@adept.com</h3>
          </div>
          </div>
        </div>
        <div class="social-bar">
          <ul>
            <li><i class="fab fa-facebook-f"></i></li>
            <li><i class="fab fa-twitter"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-dribbble"></i></li>
          </ul>
        </div>
      </div>
      <div class="header">
        <h1>Let's Get Started</h1>
        <h2>Contact us to start your next project!</h2>
      </div>
     
      <div class="contact-form">
        <form>
          <input type="text" placeholder="Name">
          <input type="email" placeholder="Email">
          <textarea rows="4" placeholder="Tell us about your project..."></textarea>
          <button type="button">SEND</button>
        </form>
      </div>
    </div>
    
    <!-- Contact Section Start -->
    <div class="py-4">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.4121855187595!2d85.32024191438452!3d27.704557132222885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a83c4f4ed7%3A0xe57aead9ac5a9594!2sBJ%20Education%20Network!5e0!3m2!1sen!2snp!4v1677146127980!5m2!1sen!2snp"
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection

    <script>
        document.querySelector('#contact-form').addEventListener('submit', (e) => {
            e.preventDefault();
            e.target.elements.name.value = '';
            e.target.elements.email.value = '';
            e.target.elements.message.value = '';
        });
    </script>

