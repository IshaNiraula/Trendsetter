@extends('client.layouts.master')
@section('metadata')
    @if (isset($metatag))
        <title>{{ $metatag->title }}</title>
        <meta name="description" content="{{ $metatag->description }}">
        <meta name="keywords" content="{{ $metatag->keywords }}">
        <meta name="trendsetters design studio"
            content="A renowned interior design company, we are passionate about transforming spaces into captivating realms that reflect your unique style and vision.">
        <meta image="{{ env('APP_URL') . '/assets/img/logo.jpeg' }}">
        <link rel="canonical" href="{{ env('APP_URL') . 'contact' }}" />
        <link rel="image_src" href="{{ env('APP_URL') . 'uploads/metatag/' . $metatag->image }}" />
        <meta property="og:determiner" content="An" />
        <meta property="og:site_name" content="Trendsetters Design studio" />
        <meta property="og:type" content="Homepage" />
        <meta property="og:url" content="{{ env('APP_URL') . 'contact' }}" />
        <meta property="og:title" content="Home page" />
        <meta property="og:image" content="{{ env('APP_URL') . 'uploads/metatag/' . $metatag->image }}" />
        <meta property="og:image:width" content="960" />
        <meta property="og:image:height" content="400" />
        <meta property="og:locale" content="en_GB" />
    @endif
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="contact-form-container ">
                <div class="contact-us rounded">
                    <div class="contact-header">
                        <h1>⏵⏵⏵&nbsp;&nbsp;If you have any Queries<br> CONTACT US</h1>
                        <div class="contact-info">
                            <div class="address">

                                <h3><i style="margin-right: 5px" class="fas fa-map-marker-alt"></i>Kathmandu</h3>

                            </div>
                            <div class="phone">

                                <h3> <i style="margin-right: 5px" class="fas fa-phone-alt"></i><a
                                        href="tel:985-1324752">985-1324752</a></h3>

                            </div>
                            <div class="email">

                                <h3><i style="margin-right: 5px" class="fas fa-envelope"></i><a href="mailto:trendsettersdesign63@gmail.com">trendsettersdesign63@gmail.com<a>

                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="social-bar">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100093427325606"> <i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/profile.php?id=100093427325606"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100093427325606"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100093427325606"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="contact-form header ">


                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <h5 style="padding: 2rem 0">
                            If you have any queries, feel free to ask, and we'll get back to you as soon as possible</h5>

                        <input type="text" placeholder="Name" name="name" required>
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="text" placeholder="Phone" name="phone" required>
                        <input type="text" placeholder="Subject" name="subject" required>
                        <textarea rows="4" placeholder="Message" name="message" required></textarea>
                        <div class="buttons">
                            <button type="submit" class="theme-button">SEND <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <section class="shadow">
        <div class="container">
            <div class="contact-box">
                <h2>CONTACT INFO</h2>
                <div class="location">
                    <i class="fas fa-location-arrow"></i>
                    <p>Sallaghari, Kathmandu</p>
                </div>
                <div class="phon">
                    <i class="fas fa-phone-volume"></i>
                    <p><a href="tel:123456789"> 123456789</a></p>
                </div>
                <div class="mail">
                    <i class="fas fa-envelope"></i>
                    <p><a href="mailto:info@gmail.com">info@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-map">

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3532.97192842128!2d85.35627931506164!3d27.687262482800325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjfCsDQxJzE0LjIiTiA4NcKwMjEnMzAuNSJF!5e0!3m2!1sen!2snp!4v1689224295474!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
