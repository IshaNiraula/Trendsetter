<header id="main-header">
    <!--//==Navbar Start==//-->
    <div id="main-menu" class="wa-main-menu">
        <div class="wathemes-menu relative">
            <div class="navbar navbar-default navbar-bg-light" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <!-- Button For Responsive toggle -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span></button> 
                                <!-- Logo -->
                                <a class="navbar-brand" href="{{route('home')}}">
                                <img class="site_logo" alt="Logo"  src="{{asset('assets/img/logo.jpeg')}}" />
                                </a>
                            </div>
                            <!-- Navbar Collapse -->
                            <div class="navbar-collapse collapse">
                                <!-- nav -->
                                <ul class="nav navbar-nav">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li>
                                        <a href="{{route('about')}}">About Us</a>
                                        
                                    </li>
                                    <li>
                                        <a href="{{route('service')}}">Services</a>
                                        
                                    </li>
                                    <li>
                                        <a href="#">Projects</a>
                                    </li>
                                    <li>
                                        <a href="{{route('blog')}}">blog</a> 
                                    </li>
                                    <li >
                                        <a href="#">Gallery</a>
                                       
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contact</a>
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