@extends('client.layouts.master')
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
                                <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.linkdin.com/"><i class="fab fa-linkedin-in"></i></a></li>
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
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.31713617815!2d85.2849330560132!3d27.708954252218156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1688533698138!5m2!1sen!2snp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
