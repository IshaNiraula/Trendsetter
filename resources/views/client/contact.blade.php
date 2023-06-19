@extends('client.layouts.master')
@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95"
            style="background-image:url(assets/img/bg/breadcrumb-bg-6.jpg);">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Would you like to ask a question or speak to one of our expert consultants about your Australian study
                    dream?</p>

            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="{{route('home')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact Us</span></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="contact-us-area pt-5 pb-5">
        <div class="container">
            <center>
                <p>The experts in our Sydney, Kathmandu and Birtamod offices are more than happy to discuss your educational
                    dreams with you. If you have a question or would like to have a discussion, please feel free to make
                    contact via the following details</p>
            </center>
            <div class="row my-4">
                <div class="col-lg-4">
                    <div class="shadow p-3 rounded mb-3">
                        <h3 class="">Australia Office
                        </h3>
                        <p><i class="fa fa-location-arrow mx-2 text-danger bg-white p-2 rounded"></i>Suite 28, level 4 301
                            Castlereagh Street, Sydney NSW 2000</p>
                        <p class=""><i class="fas fa-phone mx-2 text-danger bg-white p-2 rounded"></i>
                            0281238313
                            | 04 32260192</p>
                        <p class=""><i class="fas fa-envelope mx-2 text-danger bg-white p-2 rounded"></i>
                            jay@bjeducation.com.au</p>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="shadow p-3 rounded mb-3">
                        <h3 class="">Kathmandu Office</h3>
                        <p><i class="fa fa-location-arrow mx-2 text-danger bg-white p-2 rounded"></i>Putlisadak (4th
                            Buliding North of Sharemarket Complex) , 4th Floor, Kathmandu</p>
                        <p class=""><i class="fas fa-phone mx-2 text-danger bg-white p-2 rounded"></i>9851064265
                            | 977-1-42458899</p>
                        <p class=""><i
                                class="fas fa-envelope mx-2 text-danger bg-white p-2 rounded"></i>basu@bjeducation.com.au
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shadow p-3 rounded mb-3">
                        <h3 class="">Birtamod Office</h3>
                        <p><i class="fa fa-location-arrow mx-2 text-danger bg-white p-2 rounded"></i>Shanischare Road
                            Chamlagain Complex, 1st Floor</p>
                        <p class=""><i class="fas fa-phone mx-2 text-danger bg-white p-2 rounded"></i>9842629472
                            | 023-542953</p>
                        <p class=""><i
                                class="fas fa-envelope mx-2 text-danger bg-white p-2 rounded"></i>raj@bjeducation.com.au
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="register-area bg-img pt-130 pb-130 contact-sec">
            <div class="container">
                <div class="section-title-2 mb-75 white-text">
                    <h2>Contact <span>Now</span></h2>
                </div>
                <div class="register-wrap">
                    <div class="row">
                        <div class="col-lg-10 col-md-8">
                            <div class="register-form">
                                <form method="POST" action="{{route('contact.store')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="contact-form-style mb-20">
                                                <input name="firstName" placeholder="First Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="contact-form-style mb-20">
                                                <input name="lastName" placeholder="Last Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="contact-form-style mb-20">
                                                <input name="phone" placeholder="Phone" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="contact-form-style mb-20">
                                                <input name="email" placeholder="Email" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact-form-style">
                                                <textarea name="message" placeholder="Message"></textarea>
                                                <button class="submit default-btn" type="submit">SUBMIT NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
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
