<footer id="main-footer" class="dark-footer footer-style1">
    <!--Upper Footer Block-->

    <div class="upper-footer wv_footer">
        <div class="container">
            <div class="row pad-s15">
                <div class=" col-lg-4 col-md-6 col-sm-12">
                    <div class="widget">
                        <h4>Find Us</h4>
                        <p>Trendsetters is a leading design-build firm that delivers customized and visionary interior and exterior solutions, surpassing expectations and reflecting clients' aspirations.</p>
                        <div class="info">
                            <div class="location">
                                <p>  <i class="fas fa-location-arrow"></i>
                                    Kathmandu, Nepal</p>
                            </div>
                            <div class="phone">
                                <i class="fas fa-phone-alt"></i>
                                <p><a href="tel:985-1324752">985-1324752</a></p>
                            </div>
                            <div class="email">
                                <i class="fas fa-envelope"></i>
                                <p><a href="mailto:trendsettersdesign63@gmail.com">trendsettersdesign63@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Widget Block-->
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="widget">
                        <h4>Quick links</h4>
                        <ul>
                            <li><a href="{{ route('about') }}"><i class="fa fa-angle-right"></i> About Us</a></li>
                            <li><a href="{{ route('blog') }}"><i class="fa fa-angle-right"></i>Blogs</a></li>
                            <li><a href="{{ route('service') }}"><i class="fa fa-angle-right"></i>Services</a></li>
                            <li><a href="{{ route('gallery') }}"><i class="fa fa-angle-right"></i>Gallery</a></li>
                            <li><a href="{{ route('contact') }}"><i class="fa fa-angle-right"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <!--Widget Block-->
                <div class="col-lg-3 col-md-12 col-sm-12 home">
                    <div class="widget">
                        <h4>Location</h4>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d220.81057279229927!2d85.3587431!3d27.6873479!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf42d8084a086fe9%3A0x8741dcaae7113173!2sTrendsetters%20Design%20Studio!5e0!3m2!1sen!2snp!4v1697192474297!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//======= Newsletter Area Start=======//-->
    <div id="news-letter-section" class="wa-theme-bg padTB40">
        <div class="container">
            <div class="row">
                <!--//======= Section Heading Start=======//-->
                <div class="col-md-6 col-sm-8">
                    <div class="news-letter-heading">
                        <h2>SUBSCRIBE NEWS LETTER</h2>
                        <h5>To get all our news feeds and notifications</h5>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <!--//======= Newsletter Form=======//-->
                    <div class="news-letter-form">
                        <form method="post" action="{{route('newsletter.store')}}">
                            @csrf
                            <div class="form-group clearfix">
                                <input type="email" name="email" value="" placeholder="Your Email Here">
                                <button type="submit" class="button"><i class="fa fa-paper-plane"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//======= Newsletter Area End=======//-->
    <!--Copyright Footer Block-->
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 copy-right">
                    <p>Copyright © 2023 All Rights Reserved by TrendsettersDesignStudio</p>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <!--//======= Social =======//-->
                    <ul class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100093427325606"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100093427325606"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100093427325606"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100093427325606"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
