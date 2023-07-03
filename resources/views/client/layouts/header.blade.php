<header id="main-header">
    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 first-half">
                    <div class="phone">
                        <i class="fas fa-phone"></i>
                        <p><a href="tel:985-1324752"> 985-1324752 </a></p>
                    </div>
                    <div class="email">
                        <i class="fas fa-envelope"></i>
                        <p><a href="mailto:trendsettersdesign63@gmail.com">trendsettersdesign63@gmail.com</a></p>
                    </div>
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
    <!--//==Navbar Start==//-->
    <div id="main-menu" class="wa-main-menu">
        <div class="wathemes-menu relative">
            <div class="navbar navbar-default navbar-bg-light" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <!-- Button For Responsive toggle -->
                                <button onclick="openNav();" type="button" class="navbar-toggle"  >
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Logo -->
                                <a class="navbar-brand" href="{{ route('home') }}">
                                    <img class="site_logo" alt="Logo" src="{{ asset('assets/img/logo.jpeg') }}" />
                                </a>
                            </div>
                            <!-- Navbar Collapse -->
                            <div class="" id="myNavbar">
                                <!-- nav -->
                                <ul class="nav navbar-nav">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li>
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service') }}">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}">blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('gallery') }}">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>

                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

</header>

<header id="nav-header">
    <!--//==Navbar Start==//-->
    <div id="main-menu" class="wa-main-menu">
        <div class="wathemes-menu relative">
            <div class="navbar navbar-default navbar-bg-light" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <!-- Button For Responsive toggle -->
                                <button onclick="openNav();"  type="button" class="navbar-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span></button>
                                <!-- Logo -->
                                <a class="navbar-brand" href="{{ route('home') }}">
                                    <img class="site_logo" alt="Logo" src="{{ asset('assets/img/logo.jpeg') }}" />
                                </a>
                            </div>
                            <!-- Navbar Collapse -->
                            <div class="">
                                <!-- nav -->
                                <ul class="nav navbar-nav" id="myNavbar">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li>
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service') }}">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}">blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('gallery') }}">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
        </div>
    </div>
    <!--//==Navbar End==//-->
</header>
<div id="mySidemenu" class="sidemenu">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul class="d-flex flex-column g-2 list-unstyled" id="myNavbar">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>
            <a href="{{ route('about') }}">About Us</a>
        </li>
        <li>
            <a href="{{ route('service') }}">Services</a>
        </li>
        <li>
            <a href="{{ route('blog') }}">Blogs</a>
        </li>
        <li>
            <a href="{{ route('gallery') }}">Gallery</a>
        </li>
        <li>
            <a href="{{ route('contact') }}">Contact</a>
        </li>
    </ul>
  </div>
<script>
    function openNav() {
  document.getElementById("mySidemenu").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidemenu").style.width = "0";
}
 $(document).ready(function() {
    $('.navbar-toggle').click(function() {
      $('#myNavbar').toggleClass('in');
    });

    $('.navbar-toggle').on('click', function(e) {
      e.stopPropagation();
    });

    $(document).click(function() {
      $('#myNavbar').removeClass('in');
    });
  });

</script>
