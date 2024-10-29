@extends('layouts.app')

@section('content')
<section id="mainslider" class="darkgrey_section action_section">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="{{ url('public/assets/example/slide01.jpg') }}" alt="">
                <div class="slide_description_wrapper">
                    <div class="slide_description">
                        <p data-animation="fadeInLeft">Comprehensive Safety Solutions:</p>
                        <h3 data-animation="fadeInLeft">
                            <strong>
                                <span class="highlight">Providing innovative solutions to protect your </span> workforce
                            </strong> and environment.<br>
                            Unique <strong>&amp; Flexible</strong>
                        </h3>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ url('public/assets/example/slide02.jpg') }}" alt="">
                <div class="slide_description_wrapper">
                    <div class="slide_description">
                        <p data-animation="fadeInLeft">Quality You Can Trust:</p>
                        <h3 data-animation="fadeInLeft">
                            <strong>
                                <span class="highlight">High-quality safety equipment meeting </span> global standards
                            </strong> for every industry.<br>
                            Reliable <strong>&amp; Durable</strong>
                        </h3>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ url('public/assets/example/slide03.jpg') }}" alt="">
                <div class="slide_description_wrapper">
                    <div class="slide_description">
                        <p data-animation="fadeInLeft">Empowering Safer Workplaces:</p>
                        <h3 data-animation="fadeInLeft">
                            <strong>
                                <span class="highlight">Comprehensive solutions from PPE to </span> environmental safety
                            </strong> for all sectors.<br>
                            Complete <strong>&amp; Effective</strong>
                        </h3>
                    </div>
                </div>
            </li>
        </ul>
    </div>


    <section id="features" class="light_section">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-3 to_animate" data-animation="fadeInLeft">
                    <div class="square_teaser">
                        <i class="rt-icon-user3"></i>
                        <h4>
                            <a href="#"><strong>Easy</strong> Consultation</a>
                        </h4>
                        <p>Get expert advice on safety products tailored to your specific industry needs.</p>
                    </div>
                </div>

                <div class="col-sm-3 to_animate" data-animation="fadeInLeft">
                    <div class="square_teaser">
                        <i class="rt-icon-cog"></i>
                        <h4>
                            <a href="#"><strong>Quality</strong> Assurance</a>
                        </h4>
                        <p>Our products meet rigorous local and international safety standards.</p>
                    </div>
                </div>

                <div class="col-sm-3 to_animate" data-animation="fadeInLeft">
                    <div class="square_teaser">
                        <i class="rt-icon-support"></i>
                        <h4>
                            <a href="#"><strong>Reliable</strong> Support</a>
                        </h4>
                        <p>24/7 customer service to help you with product information and technical support.</p>
                    </div>
                </div>

                <div class="col-sm-3 to_animate" data-animation="fadeInLeft">
                    <div class="square_teaser">
                        <i class="rt-icon-star"></i>
                        <h4>
                            <a href="#"><strong>Expert</strong> Guidance</a>
                        </h4>
                        <p>Benefit from our industry expertise to enhance workplace safety efficiently.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

<section class="grey_section bg_image table_section">
    <div id="team_carousel">
        <div class="item">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-4 col-md-offset-2">
                        <h3>
                            <strong>Jennifer</strong> Anderson
                        </h3>
                        <p class="highlight">
                            Manager, Microsoft
                        </p>
                        <blockquote>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitsed diam nonumy eirmod tempor invidunt erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
                        </blockquote>

                        <img src="{{ url('public/assets/example/teamslide01_signature.png') }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="{{ url('public/assets/example/teamslide01.png') }}" alt="">
                    </div>


                </div>
            </div>
        </div>

        <div class="item">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-4 col-md-offset-2">
                        <h3>
                            <strong>Samantha</strong> Smith
                        </h3>
                        <p class="highlight">
                            Web Developer, Apple
                        </p>
                        <blockquote>
                            Lorem ipsum dolor diam nonumy eirmod tempor invidunt ut labore et dolore magna ayam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
                        </blockquote>

                        <img src="{{ url('public/assets/example/teamslide02_signature.png') }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="{{ url('public/assets/example/teamslide02.png') }}" alt="">
                    </div>


                </div>
            </div>
        </div>

        <div class="item">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <h3>
                            <strong>William</strong> Riley
                        </h3>
                        <p class="highlight">
                            Sales Manager, Samsung
                        </p>
                        <blockquote>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitsed diam nonumy eirmod tempor invidunt ut labore et ayam erat, justo duo dolores et ea rebum. Stet clita kasd gubergren.
                        </blockquote>

                        <img src="{{ url('public/assets/example/teamslide03_signature.png') }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="{{ url('public/assets/example/teamslide03.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="folio" class="light_section bottom_section gallery">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section_header text-center"><strong>Our</strong> Gallery</h2>

                <div id="isotope_filters">
                    <a href="#" data-filter="*" class="selected">Show All</a>
                    <a href="#" data-filter=".webdesign">Safety Gear</a>
                    <a href="#" data-filter=".development">Research</a>
                    <a href="#" data-filter=".photography">Our Team</a>
                    <a href="#" data-filter=".programming">Projects</a>
                </div>

                <div id="isotope_container" class="isotope row masonry-layout to_animate">
                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 webdesign photography">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/example/gallery/01.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/01.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="gallery-single.html">Safety at Heights</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Equipment</a>, <a href="portfolio.html">Protective Gear</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-6 col-md-6 col-sm-6 photography webdesign">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/example/gallery/02.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/02.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                        <div class="gallery-big-item-description">
                            <a class="display_table_cell" href="gallery-single.html">
                                <i class="rt-icon-search3"></i>
                            </a>
                            <div class="display_table_cell big-item-description">
                                <h3>
                                    <a href="gallery-single.html">Employee Training</a>
                                </h3>
                                <p>Expert-led training sessions ensure safe practices in all environments...</p>
                            </div>
                            <div class="display_table_cell big-item-social">
                                <a class="socialico-facebook" href="#" title="Facebook" data-toggle="tooltip">#</a>
                                <a class="socialico-twitter" href="#" title="Twitter" data-toggle="tooltip">#</a>
                                <a class="socialico-google" href="#" title="Google" data-toggle="tooltip">#</a>
                            </div>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 development">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/example/gallery/03.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/03.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="gallery-single.html">Environmental Protection</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Services</a>, <a href="portfolio.html">Solutions</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 development">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/example/gallery/04.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/04.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="gallery-single.html">Quality Assurance</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Service</a>, <a href="portfolio.html">Safety</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 webdesign">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/example/gallery/05.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/05.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="gallery-single.html">Safety Gear</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Products</a>, <a href="portfolio.html">Protection</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 photography">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/example/gallery/06.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/06.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="gallery-single.html">Protective Helmets</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Headgear</a>, <a href="portfolio.html">Safety</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 development programming">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/example/gallery/07.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/07.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="gallery-single.html">Lifeline Solutions</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Fall</a>, <a href="portfolio.html">Protection</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 programming">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/example/gallery/08.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/08.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="gallery-single.html">Emergency Gear</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Response</a>, <a href="portfolio.html">Equipment</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 programming">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/example/gallery/12.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/12.jpg"></a>
                                <a class="p-link" title="" href="gallery-single.html"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="gallery-single.html">Spill Control</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Containment</a>, <a href="portfolio.html">Solutions</a></p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<section class="grey_section action_section table_section bg_image">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 to_animate" data-animation="pullDown">
                <h3><strong>Do You Like Us?</strong> Contact us today for an evaluation!</h3>
            </div>
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <a href="#" class="theme_button inverse">Call Now</a>
                <a href="#" class="theme_button">Contact From</a>
            </div>

        </div>
    </div>
</section>

<section id="services" class="light_section action_section parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-5 to_animate">
                <h2>Check Our</h2>
                <h2 class="section_header big">
                    <span class="highlight">
                        <strong>Services</strong>
                    </span>
                </h2>

                <div class="side_teaser_small media" data-animation="fadeInLeft">
                    <div class="media-left">
                        <i class="rt-icon-rescue highlight"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="#"><strong>Rescue</strong> Solutions</a>
                        </h3>
                        <p>Height rescue services, tailored for complex workplace safety needs.</p>
                    </div>
                </div>
                <div class="side_teaser_small media" data-animation="fadeInLeft">
                    <div class="media-left">
                        <i class="fa fa-fire-extinguisher highlight"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="#"><strong>Flame</strong> Retardant</a>
                        </h3>
                        <p>Inherent flame-retardant solutions for high-risk work environments.</p>
                    </div>
                </div>
                <div class="side_teaser_small media" data-animation="fadeInLeft">
                    <div class="media-left">
                        <i class="rt-icon-thermometer highlight"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="#"><strong>Heat</strong> Protection</a>
                        </h3>
                        <p>Heat-resistant solutions ensuring safety in extreme conditions.</p>
                    </div>
                </div>
                <div class="side_teaser_small media" data-animation="fadeInLeft">
                    <div class="media-left">
                        <i class="rt-icon-scissors highlight"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="#"><strong>Cut</strong> Protection</a>
                        </h3>
                        <p>Durable cut protection gear tailored to industrial needs.</p>
                    </div>
                </div>
                <div class="side_teaser_small media" data-animation="fadeInLeft">
                    <div class="media-left">
                        <i class="fa fa-bolt highlight"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="#"><strong>Arc Flash</strong> Protection</a>
                        </h3>
                        <p>Specialized gear for arc flash protection in electrical settings.</p>
                    </div>
                </div>
                <div class="side_teaser_small media" data-animation="fadeInLeft">
                    <div class="media-left">
                        <i class="rt-icon-ladder highlight"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="#"><strong>Height</strong> Access</a>
                        </h3>
                        <p>Safe height access solutions for high-elevation tasks.</p>
                    </div>
                </div>
                <div class="side_teaser_small media" data-animation="fadeInLeft">
                    <div class="media-left">
                        <i class="rt-icon-snowflake highlight"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="#"><strong>Cold</strong> Protection</a>
                        </h3>
                        <p>Cold and cryo protection for sub-zero working environments.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="progress" class="dark_section parallax">
    <div class="container">

        <div class="side_teaser table_section to_animate" data-animation="stretchRight">
            <div class="row">
                <div class="col-sm-5">
                    <h3 class="counter text-md-right" data-from="0" data-to="42854" data-speed="1800">0</h3>
                    <h4 class="text-md-right">Satisfied Clients</h4>
                </div>

                <div class="col-sm-1 text-center">
                    <i class="rt-icon-like"></i>
                </div>

                <div class="col-sm-5">
                    <p>Delivering top-tier safety solutions with a customer-focused approach.</p>
                </div>
            </div>
        </div>

        <div class="side_teaser table_section to_animate" data-animation="stretchLeft">
            <div class="row">
                <div class="col-sm-5">
                    <p class="text-md-right">
                        Reliable safety products for diverse industrial applications.
                    </p>
                </div>

                <div class="col-sm-1 text-center">
                    <i class="rt-icon-display"></i>
                </div>

                <div class="col-sm-5">
                    <h3 class="counter" data-from="0" data-to="3568" data-speed="1800">0</h3>
                    <h4>Projects Completed</h4>
                </div>
            </div>
        </div>

        <div class="side_teaser table_section to_animate" data-animation="stretchRight">
            <div class="row">
                <div class="col-sm-5">
                    <h3 class="counter text-md-right" data-from="0" data-to="134672" data-speed="1800">0</h3>
                    <h4 class="text-md-right">Product Enquiries</h4>
                </div>

                <div class="col-sm-1 text-center">
                    <i class="rt-icon-bubble"></i>
                </div>

                <div class="col-sm-5">
                    <p>
                        Continuous engagement to provide up-to-date product information and support.
                    </p>
                </div>
            </div>
        </div>

        <div class="side_teaser table_section to_animate" data-animation="stretchLeft">
            <div class="row">
                <div class="col-sm-5">
                    <p class="text-md-right">
                        Fostering relationships through exceptional service and reliable products.
                    </p>
                </div>

                <div class="col-sm-1 text-center">
                    <i class="rt-icon-mail2"></i>
                </div>

                <div class="col-sm-5">
                    <h3 class="counter" data-from="0" data-to="21249" data-speed="1800">0</h3>
                    <h4>Orders Processed</h4>
                </div>
            </div>
        </div>

    </div>
</section>


{{-- <section id="blog" class="grey_section bg_image">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 to_animate">
                <h2 class="section_header text-center"><strong>Latest</strong> from the Blog</h2>
            </div>
        </div>
        <div class="row">
            <div id="from-blog-widget" data-prev-text="prev" data-next-text="next" class="to_animate">
                <div class="item">
                    <div class="blog-item">
                        <img src="{{ url('public/assets/example/gallery/15.jpg') }}" alt="">
                        <div class="blog-author-meta">
                            <a href="blog-right.html" class="media-left">
                                <img src="{{ url('public/assets/example/team/01.jpg') }}" alt="">
                            </a>
                            <div class="media-left">
                                <p class="media-heading">
                                    November 12 ‘14
                                </p>
                                <p class="from-blog-author">
                                    <strong>
                                        <a href="blog-right.html">Michael Johnson</a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                        <h3>
                            <a href="blog-single-right.html">Duis autem veleum</a>
                        </h3>
                    </div>
                </div>

                <div class="item">

                    <div class="blog-item">
                        <img src="{{ url('public/assets/example/gallery/02.jpg') }}" alt="">
                        <div class="blog-author-meta">
                            <a href="blog-right.html" class="media-left">
                                <img src="{{ url('public/assets/example/team/01.jpg') }}" alt="">
                            </a>
                            <div class="media-left">
                                <p class="media-heading">
                                    November 12 ‘14
                                </p>
                                <p class="from-blog-author">
                                    <strong>
                                        <a href="blog-right.html">Michael Johnson</a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                        <h3>
                            <a href="blog-single-right.html">Duis autem veleum</a>
                        </h3>
                    </div>

                </div>

                <div class="item">

                    <div class="blog-item">
                        <img src="{{ url('public/assets/example/gallery/03.jpg') }}" alt="">
                        <div class="blog-author-meta">
                            <a href="blog-right.html" class="media-left">
                                <img src="{{ url('public/assets/example/team/01.jpg') }}" alt="">
                            </a>
                            <div class="media-left">
                                <p class="media-heading">
                                    November 12 ‘14
                                </p>
                                <p class="from-blog-author">
                                    <strong>
                                        <a href="blog-right.html">Michael Johnson</a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                        <h3>
                            <a href="blog-single-right.html">Duis autem veleum</a>
                        </h3>
                    </div>

                </div>

                <div class="item">

                    <div class="blog-item">
                        <img src="{{ url('public/assets/example/gallery/04.jpg') }}" alt="">
                        <div class="blog-author-meta">
                            <a href="blog-right.html" class="media-left">
                                <img src="{{ url('public/assets/example/team/01.jpg') }}" alt="">
                            </a>
                            <div class="media-left">
                                <p class="media-heading">
                                    November 12 ‘14
                                </p>
                                <p class="from-blog-author">
                                    <strong>
                                        <a href="blog-right.html">Michael Johnson</a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                        <h3>
                            <a href="blog-single-right.html">Duis autem veleum</a>
                        </h3>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 to_animate">
                <p class="text-center divider40">
                    <a href="blog-right.html" class="theme_button">View All Posts</a>
                </p>
                <hr>
            </div>
            <div class="col-sm-12 to_animate" data-animation="fadeInDown">
                <blockquote class="blockquote-big">
                    At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren no sea takimata.
                    <h3>
                        <span class="highlight">Lynda May,</span> Manager
                    </h3>
                </blockquote>
            </div>


        </div>

    </div>
</section> --}}

<section id="team" class="light_section bottom_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center to_animate">
                <h2 class="section_header">
                    <strong>About</strong> company
                </h2>
                <p>Meet our Dedicated Team</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 to_animate" data-animation="fadeInLeft">
                <div class="team-item left-side-item">
                    <div class="team-item-image">
                        <img src="{{ url('public/assets/example/team/01.jpg') }}" alt="">
                    </div>
                    <div class="team-item-description">
                        <h3 class="media-heading">
                            Daniel Willis
                        </h3>
                        <p class="team-job">
                            <span class="highlight">Fonder, Director</span>
                        </p>
                        <p>Daniel leads with a commitment to safety standards, bringing years of experience in providing reliable safety solutions.</p>

                        <p class="social-icons">
                            <a class="socialico-facebook" href="#" title="Facebook" data-toggle="tooltip">#</a>
                            <a class="socialico-twitter" href="#" title="Twitter" data-toggle="tooltip">#</a>
                            <a class="socialico-google" href="#" title="Google" data-toggle="tooltip">#</a>
                        </p>
                    </div>

                </div>

            </div>

            <div class="col-sm-6 to_animate" data-animation="fadeInRight">
                <div class="team-item right-side-item">
                    <div class="team-item-image">
                        <img src="{{ url('public/assets/example/team/02.jpg') }}" alt="">
                    </div>
                    <div class="team-item-description">
                        <h3 class="media-heading">
                            Bill  Anderson
                        </h3>
                        <p class="team-job">
                            <span class="highlight">Web Developer</span>
                        </p>
                        <p>Bill specializes in technical support and ensures our products meet rigorous safety regulations and client needs.</p>

                        <p class="social-icons">
                            <a class="socialico-facebook" href="#" title="Facebook" data-toggle="tooltip">#</a>
                            <a class="socialico-twitter" href="#" title="Twitter" data-toggle="tooltip">#</a>
                            <a class="socialico-google" href="#" title="Google" data-toggle="tooltip">#</a>
                        </p>
                    </div>

                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 to_animate" data-animation="fadeInLeft">
                <div class="team-item left-side-item">
                    <div class="team-item-image">
                        <img src="{{ url('public/assets/example/team/03.jpg') }}" alt="">
                    </div>
                    <div class="team-item-description">
                        <h3 class="media-heading">
                            Jason Edyson
                        </h3>
                        <p class="team-job">
                            <span class="highlight">Fonder, Director</span>
                        </p>
                        <p>Jason oversees day-to-day operations, ensuring efficient service delivery and top-notch product availability.</p>

                        <p class="social-icons">
                            <a class="socialico-facebook" href="#" title="Facebook" data-toggle="tooltip">#</a>
                            <a class="socialico-twitter" href="#" title="Twitter" data-toggle="tooltip">#</a>
                            <a class="socialico-google" href="#" title="Google" data-toggle="tooltip">#</a>
                        </p>
                    </div>

                </div>

            </div>

            <div class="col-sm-6 to_animate" data-animation="fadeInRight">
                <div class="team-item right-side-item">
                    <div class="team-item-image">
                        <img src="{{ url('public/assets/example/team/04.jpg') }}" alt="">
                    </div>
                    <div class="team-item-description">
                        <h3 class="highlight">
                            Jinney Odrey
                        </h3>
                        <p class="team-job">
                            <span class="highlight">Cofounder, CEO</span>
                        </p>
                        <p>Jinney drives the vision of INSYNC, focusing on strategic growth and innovation in workplace safety.</p>

                        <p class="social-icons">
                            <a class="socialico-facebook" href="#" title="Facebook" data-toggle="tooltip">#</a>
                            <a class="socialico-twitter" href="#" title="Twitter" data-toggle="tooltip">#</a>
                            <a class="socialico-google" href="#" title="Google" data-toggle="tooltip">#</a>
                        </p>
                    </div>

                </div>

            </div>
        </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center topmargin40">
                        <a href="about.html" class="theme_button">About Us Page</a>
                    </div>
                </div>

            </div>

    </div>
</section>


@endsection

@push('css')
    <style>

    </style>
@endpush

@push('scripts')
    <script>

    </script>
@endpush

