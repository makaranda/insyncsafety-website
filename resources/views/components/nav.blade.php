<!-- Font Awesome 4.7 CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

<div id="box_wrapper">

    {{-- <section id="topline" class="table_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a href="index.html" class="logo top_logo">
                        <img src="{{ url('public/assets/example/example/logo.png') }}" alt="">
                        <strong>Meriada</strong>Pro
                    </a>
                </div>

                <div class="col-sm-6">
                    <p id="social" class="text-sm-right">
                        <a class="socialico-facebook" href="#" title="Facebook">#</a><a class="socialico-twitter" href="#" title="Twitter">#</a><a class="socialico-google" href="#" title="Google">#</a><a class="socialico-linkedin" href="#" title="LinkedIn">#</a><a class="socialico-dribble" href="#" title="Dribble">#</a>
                    </p>

                </div>


            </div>
        </div>
    </section> --}}



    <header id="header" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav id="mainmenu_wrapper">
                        <a class="navbar-brand" href="{{ route('pages.home') }}"><img src="{{ url('public/assets/img/insyncsafety_logo.jpg') }}" alt=""></a>
                        <ul id="mainmenu" class="nav sf-menu">
                            <li class="{{ request()->routeIs('pages.home') ? 'active' : '' }}">
                                <a href="{{ route('pages.home') }}">Home</a>
                            </li>
                            <li class="{{ request()->routeIs('pages.products') || request()->routeIs('pages.categoryList') || request()->routeIs('pages.singleproduct') ? 'active' : '' }}">
                                <a href="{{ route('pages.products') }}">Products</a>
                                <ul>
                                    <li><a href="personal_protection.html">Personal Protection</a></li>
                                    <li><a href="industrial_protection.html">Industrial Safety</a></li>
                                    <li><a href="lifeline.html">Lifeline & Work at Height Solutions</a></li>
                                    <li><a href="spill_control.html">Spill Control & Management</a></li>
                                    <li><a href="containment.html">Safety Containment Systems</a></li>
                                    <li><a href="environmental_protection.html">Environmental Protection</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('pages.about') ? 'active' : '' }}">
                                <a href="{{ route('pages.about') }}">About Us</a>
                            </li>
                            <li class="{{ request()->routeIs('pages.services*') ? 'active' : '' }}">
                                <a href="">Services</a>
                                <ul>
                                    <li><a href="consultation.html">Consultation</a></li>
                                    <li><a href="training.html">Training & Support</a></li>
                                    <li><a href="technical_support.html">Technical Support</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('pages.contact') ? 'active' : '' }}">
                                <a href="{{ route('pages.contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </header>



    <!-- header toggler -->
    <span id="toggle_menu" class="tgl-hide-defult"><span></span></span>
