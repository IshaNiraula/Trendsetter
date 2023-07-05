<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo.jpg') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interior Design</title>
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="https://www.facebook.com/profile.php?id=100093427325606" id="about"><i class="fab fa-facebook"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100093427325606" id="blog"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100093427325606" id="instagram"><i class="fab fa-instagram"></i></a>
        <a href="tel:985-1324752" id="contact"><i class="fas fa-phone"></i></a>
      </div>
    @include('client.layouts.header')
    @yield('content')
    @include('client.layouts.footer')
  
    <button onclick="ScrollToTop()" id="myBtn" title="Go to top"><i class="fas fa-fighter-jet"></i></button>
    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery-v2.2.4.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- Ajax Mail -->
    <script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{ asset('assets/plugins/menu/js/hover-dropdown-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/menu/js/jquery.hover-dropdown-menu-addon.js') }}">
    </script>
    <script src="{{ asset('assets/plugins/owl-carousel/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/plugins/mixitup/js/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancymedia/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancymedia/js/jquery.fancybox-media.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/counter/js/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/counter/js/jquery.appear.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            slidesPerView: 1,
            spaceBetween: 10,

        });
    </script>
    <script>
        // When the user scrolls down 20px from the top of the document, slide down the navbar
        window.onscroll = function() {
            scrollFunction()
            showScrollToTop()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
                document.getElementById("nav-header").style.top = "0";
            } else {
                document.getElementById("nav-header").style.top = "-100px";
            }
        }

        function showScrollToTop() {
            if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
                let mybutton = document.getElementById("myBtn");
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function ScrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <script>
        var testimonialSwiper = new Swiper(".test-mySwiper", {
            slidesPerView: 1,
            spaceBetween: 15,
            freeMode: true,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                // when window width is >= 480px
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 640px
                768: {
                    slidesPerView: 1,
                    spaceBetween: 20
                }
            },
        });


        var partnerSwiper = new Swiper(".partner-mySwiper", {
            slidesPerView: 5,
            spaceBetween: 2,
            freeMode: true,
            centeredSlides: false,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 1
                },
                // when window width is >= 480px
                640: {
                    slidesPerView: 2,
                    spaceBetween: 1
                },
                // when window width is >= 640px
                768: {
                    slidesPerView: 4,
                    spaceBetween: 10
                }
            },
        });

        var eventSwiper = new Swiper(".event-mySwiper", {
            slidesPerView: 3,
            spaceBetween: 10,
            freeMode: true,
            centeredSlides: false,
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            // },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                // when window width is >= 480px
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 640px
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20
                }
            },
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @stack('scripts')

</body>

</html>
