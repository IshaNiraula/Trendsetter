<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo.jpg') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="HbwF0Pi52FtB7KNMJx6qv9FTH8xRyGWLbgfNh_01lCo" />
    @yield('metadata')
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
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "GeneralContractor",
          "name": "Trendsettersdesignstudio",
          "image": "https://trendsettersdesignstudio.com/assets/img/logo.jpeg",
          "@id": "",
          "url": "https://trendsettersdesignstudio.com/",
          "telephone": "985-1324752",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "सर्वेश्वर सडक",
            "addressLocality": "Kathmandu, Nepal",
            "postalCode": "44600",
            "addressCountry": "NP"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 27.693526,
            "longitude": 85.2906239
          },
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday"
            ],
            "opens": "09:00",
            "closes": "06:00"
          },
          "sameAs": [
            "https://www.facebook.com/people/Trendsetters-design-studio/100093427325606/",
            "",
            "https://www.tiktok.com/@trendsettersdesign"
          ] 
        }
        </script>
    <!-- Google tag (gtag.js) -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "BreadcrumbList", 
          "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Home",
            "item": "https://trendsettersdesignstudio.com/"  
          },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "About",
            "item": "https://trendsettersdesignstudio.com/about"  
          },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "Service",
            "item": "https://trendsettersdesignstudio.com/service"  
          },{
            "@type": "ListItem", 
            "position": 4, 
            "name": "Interior Designer",
            "item": "https://trendsettersdesignstudio.com/service/interior-design"  
          },{
            "@type": "ListItem", 
            "position": 5, 
            "name": "Commercial design",
            "item": "https://trendsettersdesignstudio.com/service/commercial-design"  
          },{
            "@type": "ListItem", 
            "position": 6, 
            "name": "Residential design",
            "item": "https://trendsettersdesignstudio.com/service/residential-design"  
          },{
            "@type": "ListItem", 
            "position": 7, 
            "name": "Architectural design",
            "item": "https://trendsettersdesignstudio.com/service/architectural-design"  
          },{
            "@type": "ListItem", 
            "position": 8, 
            "name": "Customized Interior Design",
            "item": "https://trendsettersdesignstudio.com/service/tailor-made-service"  
          },{
            "@type": "ListItem", 
            "position": 9, 
            "name": "Space Planning Services",
            "item": "https://trendsettersdesignstudio.com/service/space-planning"  
          },{
            "@type": "ListItem", 
            "position": 10, 
            "name": "Furniture Design",
            "item": "https://trendsettersdesignstudio.com/service/furniture-design"  
          },{
            "@type": "ListItem", 
            "position": 11, 
            "name": "Mechanical and Electrical Services",
            "item": "https://trendsettersdesignstudio.com/service/mechanical-electrical-and-plumbing-mep"  
          },{
            "@type": "ListItem", 
            "position": 12, 
            "name": "Gallary",
            "item": "https://trendsettersdesignstudio.com/gallery"  
          },{
            "@type": "ListItem", 
            "position": 13, 
            "name": "Blog",
            "item": "https://trendsettersdesignstudio.com/blog"  
          },{
            "@type": "ListItem", 
            "position": 14, 
            "name": "contact",
            "item": "https://trendsettersdesignstudio.com/contact"  
          }]
        }
    </script>
    <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "Corporation",
              "name": "Trendsetters Design studio",
              "url": "https://trendsettersdesignstudio.com/",
              "logo": "https://trendsettersdesignstudio.com/assets/img/logo.jpeg",
              "sameAs": "https://www.facebook.com/people/Trendsetters-design-studio/100093427325606/"
            }
    </script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [{
            "@type": "Question",
            "name": "Which is the best interior designer in Nepal?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Trendsetters Design studio is one of the best Interior Designer in Nepal."
            }
          },{
            "@type": "Question",
            "name": "How do you determine the Budget for interior Design?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "At trendsetters Design studio, we assess various factors such as project scope, client preferences, and desired quality to determine an appropriate budget. We also consider any specific materials, furnishings, or customizations requested by the client. Our goal is to provide a comprehensive estimate that aligns with the client's vision and financial resources."
            }
          },{
            "@type": "Question",
            "name": "What is the cost of house design in Nepal?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The cost of designing a house in Nepal can differ based on several factors such as the size of the house, intricacy of the design, materials used, and the architect or design firm selected. To get an accurate cost estimate that meets your requirements, it's best to consult with local architects or design professionals in Nepal."
            }
          },{
            "@type": "Question",
            "name": "How to design a room living room?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Designing a living room involves several key steps that can help you create a functional and aesthetically pleasing space. First, consider the purpose of the room and how you plan to use it. This will help you determine the furniture and accessories needed. Next, choose a color scheme that complements your style and the overall aesthetic of your home. Select furniture that is comfortable, functional, and fits the size and layout of your living room. Incorporate different types of lighting to create a warm and inviting atmosphere, and accessorize with decorative elements such as artwork, throw pillows, and rugs. Finally, consider the flow of the living room and arrange furniture in a way that encourages conversation and interaction. By following these steps, you can design a living room that meets your needs and reflects your style."
            }
          },{
            "@type": "Question",
            "name": "Why choose interior design in Nepal?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Interior design offers several advantages, including enhancing aesthetics, optimizing functionality, utilizing space effectively, creating a cohesive style, saving time and effort, and providing access to expertise and resources. By choosing interior design, you can transform your space into a visually appealing and functional environment that reflects your personal style, while benefiting from professional guidance and efficient execution."
            }
          },{
            "@type": "Question",
            "name": "",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": ""
            }
          }]
        }
    </script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Corporation",
          "name": "Trendsetters  Design studio",
          "url": "https://trendsettersdesignstudio.com/",
          "logo": "https://trendsettersdesignstudio.com/assets/img/logo.jpeg",
          "sameAs": [
            "https://www.facebook.com/people/Trendsetters-design-studio/100093427325606/",
            "https://twitter.com/TrendsettersDes",
            "https://www.pinterest.com/trendsettersdesignstudio172/",
            "https://trendsettersdesignstudio.com/"
          ]
        }
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T9V2RJJTZC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-T9V2RJJTZC');
    </script>

</head>

<body>
    @if (Session::has('success'))
        <div id="message" class="alert alert-success">
            {{ Session::get('success') }}
            <button onclick="hideMessage();" style="margin-left: 25px">Close</button>
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif
    <div id="mySidenav" class="sidenav">
        <a href="https://www.facebook.com/profile.php?id=100093427325606" id="about"><i
                class="fab fa-facebook"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100093427325606" id="blog"><i
                class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100093427325606" id="instagram"><i
                class="fab fa-instagram"></i></a>
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

    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

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
    <script>
        function hideMessage() {
            const message = document.getElementById('message');
            message.style.display = "none";
        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @stack('scripts')

</body>

</html>
