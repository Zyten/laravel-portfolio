<!--
==================================================
Header Section Start
================================================== -->
<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->
            
            <!-- logo -->
            <div class="navbar-brand">
                <a href="{{URL::to('index')}}" >
                    <img src="public/assets/global/images/logo.png" alt="">
                </a>
            </div>
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{URL::to('index')}}" >Home</a>
                    </li>
                    <li><a href="{{URL::to('about')}}">About</a></li>
                    <li><a href="{{URL::to('service')}}">Service</a></li>
                    <li><a href="{{URL::to('contact')}}">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>