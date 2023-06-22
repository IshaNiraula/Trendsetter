@extends('client.layouts.master')
@section('content')
    <div class="contact-form-container">
        <div class="contact-us">
            <div class="contact-header">
                <h1>⏵⏵⏵&nbsp;&nbsp;If you have any Queries<br> CONTACT US</h1>
                <div class="contact-info">
                    <div class="address">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Sallaghari, Kathmandu</h3>

                    </div>
                    <div class="phone">
                        <i class="fas fa-phone-alt"></i>
                        <h3><a href="tel:123456789">123456789</a></h3>
                        <h3><a href="tel:987654321">987654321</a></h3>
                    </div>
                    <div class="email">
                        <i class="fas fa-envelope"></i>
                        <h3><a href="mailto:trendsetter@gmailcom">trendsetter@gmailcom</a></h3>
                    </div>
                </div>
            </div>
            <div class="social-bar">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.linkdin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="header">
            <h1>Let's Get Started</h1>
        </div>

        <div class="contact-form">
            <form method="POST" action="{{ route('contact.store') }}">
              @csrf
                <input type="text" placeholder="Name" name="name" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="text" placeholder="Phone" name="phone" required>
                <input type="text" placeholder="Subject" name="subject" required>
                <textarea rows="4" placeholder="Message" name="message" required></textarea>
                <button type="submit">SEND  <i class="fas fa-arrow-right"></i></button>
            </form>
        </div>

    </div>

    <section class="map" style="width:100vw;">
     
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.3648361466367!2d85.40703257539013!3d27.675116676201075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a90f3fe73bd%3A0x6717557a3e66a878!2sSallaghari%20Shopping%20Complex!5e0!3m2!1sen!2snp!4v1687411672822!5m2!1sen!2snp" width="100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   </div>
   
    </section>
@endsection

<script>
    document.querySelector('#contact-form').addEventListener('submit', (e) => {
        e.preventDefault();
        e.target.elements.name.value = '';
        e.target.elements.email.value = '';
        e.target.elements.message.value = '';
    });
</script>
