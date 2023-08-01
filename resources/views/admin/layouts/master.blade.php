<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trendsetters | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->~
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">About us</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Services</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Blogs</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">

                <span class="brand-text font-weight-light">Welcome To Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('/assets/img/logo/logo.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Trendsetters</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Meta Tags
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.metatag.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View tags</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.metatag.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add tags</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Slider
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.slider.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Slider</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.slider.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Slider</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Partner
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.partner.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Partner</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.partner.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Partner</p>
                                    </a>
                                </li>

                            </ul>
                        </li> --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    About Us
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.about.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View About Us</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.about.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add About Us</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Service
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.service.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View service</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.service.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add service</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Blogs
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.blog.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Blogs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.blog.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Blogs</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Gallery
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.gallery.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Gallery</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.gallery.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Gallery</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Testimonials
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.testimonial.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Testimonials</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.testimonial.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Testimonials</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Team Members
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.team.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Team Members</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.team.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Team Members</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Counter
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.counter.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Counter</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.counter.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Counter</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Category
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.category.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.category.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View category</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Upload Media
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.media.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View media</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.media.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>add media</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Contact Form Data
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.contact.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Contact Form Data</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Project
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.project.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Project</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.project.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Project</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Newsletter
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.newsletter.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Newsletter</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Faq
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.faq.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Faq</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.faq.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Faq</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    career
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.carrier.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View career</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.carrier.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add career</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.carrier.form.list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Career Form</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        @yield('content')
    </div>

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('dist/js/demo.js') }}"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
    @stack('scripts')
</body>

</html>
