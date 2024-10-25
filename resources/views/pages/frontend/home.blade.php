@extends('layouts.app')

@section('content')
<section id="mainslider" class="darkgrey_section action_section">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="{{ url('public/assets/example/slide01.jpg') }}" alt="">
                <div class="slide_description_wrapper">
                    <div class="slide_description">
                        <p data-animation="fadeInLeft">Meriada Pro Presents:</p>

                        <h3 data-animation="fadeInLeft">
                            <strong>
                                <span class="highlight">Everything</span> You
                            </strong> Need<br>
                            Unique <strong>&amp; Flexible</strong>
                        </h3>

                    </div>
                </div>
            </li>
            <li>
                <img src="{{ url('public/assets/example/slide02.jpg') }}" alt="">
                <div class="slide_description_wrapper">
                    <div class="slide_description">
                        <p data-animation="expandUp">Meriada Pro Presents:</p>

                        <h3 data-animation="fadeInLeft">
                            <strong>
                                <span class="highlight">We</span> Generate
                            </strong> Most<br>
                            Creative <strong> Ideas</strong>
                        </h3>

                    </div>
                </div>
            </li>
            <li>
                <img src="{{ url('public/assets/example/slide03.jpg') }}" alt="">
                <div class="slide_description_wrapper">
                    <div class="slide_description">
                        <p data-animation="expandUp">Meriada Pro Presents:</p>

                        <h3 data-animation="fadeInLeft">
                            <strong>
                                <span class="highlight">Innovate</span> Template
                            </strong> Most<br>
                            Designed <strong> with</strong> Love
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
                            <a href="#"><strong>Easy</strong> Customize</a>
                        </h4>
                        <p>Duiautem eumre dolor hendrerit <br>
                            vulputate velit esse molestie.</p>
                    </div>

                </div>

                <div class="col-sm-3 to_animate" data-animation="fadeInLeft">

                    <div class="square_teaser">
                        <i class="rt-icon-bulb"></i>
                        <h4>
                            <a href="#"><strong>Unique</strong> Design</a>
                        </h4>
                        <p>Consequat, vel illum dolore eu feugiat<br>
                         nulla facilisis at vero.</p>
                    </div>

                </div>

                <div class="col-sm-3 to_animate" data-animation="fadeInLeft">

                    <div class="square_teaser">
                        <i class="rt-icon-wallet"></i>
                        <h4>
                            <a href="#"><strong>Retina</strong> Ready</a>
                        </h4>
                        <p>Eros et accumsusto odio dignissim qui <br>
                         blandit praesent.</p>
                    </div>

                </div>

                <div class="col-sm-3 to_animate" data-animation="fadeInLeft">

                    <div class="square_teaser">
                        <i class="rt-icon-wallet"></i>
                        <h4>
                            <a href="#"><strong>24/7</strong> Support</a>
                        </h4>
                        <p>Eros et accumsusto odio dignissim qui <br>
                            blandit praesent.</p>
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
                    <a href="#" data-filter=".webdesign">Web Design</a>
                    <a href="#" data-filter=".development">Development</a>
                    <a href="#" data-filter=".photography">Photography</a>
                    <a href="#" data-filter=".programming">Programming</a>
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
                            <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Media</a>, <a href="portfolio.html">Web design</a></p>
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
                                    <a href="gallery-single.html">Young female passenger</a>
                                </h3>
                                <p>Lorem ipsudolor consetetur sadipscing elitr sed diam nonumy tempor...</p>
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
                            <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Media</a>, <a href="portfolio.html">Web design</a></p>

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
                            <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Media</a>, <a href="portfolio.html">Web design</a></p>

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
                            <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Media</a>, <a href="portfolio.html">Web design</a></p>

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
                            <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Media</a>, <a href="portfolio.html">Web design</a></p>

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
                            <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Media</a>, <a href="portfolio.html">Web design</a></p>

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
                            <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Media</a>, <a href="portfolio.html">Web design</a></p>

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
                            <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                            <p class="gallery-meta"><a href="portfolio.html">Media</a>, <a href="portfolio.html">Web design</a></p>

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
                <h3><strong>Like this theme?</strong> Get your copy of this great theme now!</h3>
            </div>
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <a href="#" class="theme_button inverse">View Features</a>
                <a href="#" class="theme_button">Buy This Theme</a>
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
                        <i class="rt-icon-pen2 highlight"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="#"><strong>Web</strong> Design</a>
                        </h3>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod</p>
                    </div>
                </div>
                <div class="side_teaser_small media" data-animation="fadeInLeft">
                    <div class="media-left">
                        <i class="fa fa-code highlight"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="#"><strong>Pure</strong> Code</a>
                        </h3>
                        <p>Tempor invidunt ut labore et dolore magna</p>
                    </div>
                </div>
                <div class="side_teaser_small media" data-animation="fadeInLeft">
                    <div class="media-left">
                        <i class="rt-icon-lab2 highlight"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="#"><strong>CEO</strong> Research</a>
                        </h3>
                        <p>At vero eos et accusam et justo duo dolores rebum</p>
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
                    <h4 class="text-md-right">Happy Clients</h4>
                </div>

                <div class="col-sm-1 text-center">
                    <i class="rt-icon-like"></i>
                </div>

                <div class="col-sm-5">
                    <p>Consetetur sadipscing elitr diam nonumy eirmod tempor.</p>
                </div>
            </div>
        </div>

        <div class="side_teaser table_section to_animate" data-animation="stretchLeft">
            <div class="row">
                <div class="col-sm-5">
                    <p class="text-md-right">
                        Invidunt ut labore et dolore magna aliquyam erat.
                    </p>
                </div>

                <div class="col-sm-1 text-center">
                    <i class="rt-icon-display"></i>
                </div>

                <div class="col-sm-5">
                    <h3 class="counter" data-from="0" data-to="3568" data-speed="1800">0</h3>
                    <h4>Projects Made</h4>
                </div>
            </div>
        </div>


        <div class="side_teaser table_section to_animate" data-animation="stretchRight">
            <div class="row">
                <div class="col-sm-5">
                    <h3 class="counter text-md-right" data-from="0" data-to="134672" data-speed="1800">0</h3>
                    <h4 class="text-md-right">Comments</h4>
                </div>

                <div class="col-sm-1 text-center">
                    <i class="rt-icon-bubble"></i>
                </div>

                <div class="col-sm-5">
                    <p>
                        Ut labore et dolore magna aliquyam erat, sed diam voluptua vero eos et accusam et justo.
                    </p>
                </div>
            </div>
        </div>


        <div class="side_teaser table_section to_animate" data-animation="stretchLeft">
            <div class="row">
                <div class="col-sm-5">
                    <p class="text-md-right">
                        Duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
                    </p>
                </div>

                <div class="col-sm-1 text-center">
                    <i class="rt-icon-mail2"></i>
                </div>

                <div class="col-sm-5">
                    <h3 class="counter" data-from="0" data-to="21249" data-speed="1800">0</h3>
                    <h4>Letters Sent</h4>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="blog" class="grey_section bg_image">
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
</section>

<section id="team" class="light_section bottom_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center to_animate">
                <h2 class="section_header">
                    <strong>About</strong> company
                </h2>
                <p>Meet our members</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 to_animate" data-animation="fadeInLeft">
                <div class="team-item left-side-item">
                    <div class="team-item-image">
                        <img src="{{ url('public/assets/example/team/01.jpg') }}" alt="">
                    </div>
                    <div class="team-item-description">
                        <h3>
                            Daniel Willis
                        </h3>
                        <p class="team-job">
                            <span class="highlight">Fonder, Director</span>
                        </p>
                        <p>Namliber tempor cum soluta nobis eleifend option.</p>

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
                        <h3>
                            Bill  Anderson
                        </h3>
                        <p class="team-job">
                            <span class="highlight">Web Developer</span>
                        </p>
                        <p>Namliber tempor cum soluta nobis eleifend option.</p>

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
                        <h3>
                            Jason Edyson
                        </h3>
                        <p class="team-job">
                            <span class="highlight">Fonder, Director</span>
                        </p>
                        <p>Namliber tempor cum soluta nobis eleifend option.</p>

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
                        <h3>
                            Jinney Odrey
                        </h3>
                        <p class="team-job">
                            <span class="highlight">Cofounder, CEO</span>
                        </p>
                        <p>Namliber tempor cum soluta nobis eleifend option.</p>

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

