@extends('layouts.app')

@section('content')

<section id="mainslider" class="darkgrey_section action_section">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="{{ url('public/assets/gallery/gallery_images_7.jpg') }}" alt="">
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
                <img src="{{ url('public/assets/gallery/gallery_images_1.jpg') }}" alt="">
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
                <img src="{{ url('public/assets/gallery/gallery_images_8.jpg') }}" alt="">
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
</section>

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

{{-- <section class="grey_section bg_image table_section">
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
</section> --}}

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
                            <img src="{{ url('public/assets/gallery/gallery_images_4.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="gallery/gallery_images_4.jpg"></a>
                                <a class="p-link" title="" href="#"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="#">Safety at Heights</a></h3>
                            <p class="gallery-meta"><a href="#">Equipment</a>, <a href="#">Protective Gear</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-6 col-md-6 col-sm-6 photography webdesign">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/gallery/gallery_images_2.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="gallery/gallery_images_2.jpg"></a>
                                <a class="p-link" title="" href="#"></a>
                            </div>
                        </div>
                        <div class="gallery-big-item-description">
                            <a class="display_table_cell" href="#">
                                {{-- <i class="rt-icon-search3"></i> --}}
                            </a>
                            <div class="display_table_cell big-item-description">
                                <h3>
                                    <span href="#">Employee Training</span>
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
                            <img src="{{ url('public/assets/gallery/gallery_images_3.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="gallery/gallery_images_3.jpg"></a>
                                <a class="p-link" title="" href="#"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="#">Environmental Protection</a></h3>
                            <p class="gallery-meta"><a href="#">Services</a>, <a href="#">Solutions</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 development">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/gallery/gallery_images_5.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="gallery/gallery_images_5.jpg"></a>
                                <a class="p-link" title="" href="#"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="#">Quality Assurance</a></h3>
                            <p class="gallery-meta"><a href="#">Service</a>, <a href="#">Safety</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 webdesign">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/gallery/gallery_images_9.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="gallery/gallery_images_9.jpg"></a>
                                <a class="p-link" title="" href="#"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="#">Safety Gear</a></h3>
                            <p class="gallery-meta"><a href="#">Products</a>, <a href="#">Protection</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 photography">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/gallery/gallery_images_11.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="gallery/gallery_images_11.jpg"></a>
                                <a class="p-link" title="" href="#"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="#">Protective Helmets</a></h3>
                            <p class="gallery-meta"><a href="#">Headgear</a>, <a href="#">Safety</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 development programming">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/gallery/gallery_images_12.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="gallery/gallery_images_12.jpg"></a>
                                <a class="p-link" title="" href="#"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="#">Lifeline Solutions</a></h3>
                            <p class="gallery-meta"><a href="#">Fall</a>, <a href="#">Protection</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 programming">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/example/INHERENT FLAME RETARDANT.jpg') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/INHERENT FLAME RETARDANT.jpg"></a>
                                <a class="p-link" title="" href="#"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="#">Emergency Gear</a></h3>
                            <p class="gallery-meta"><a href="#">Response</a>, <a href="#">Equipment</a></p>
                        </div>
                    </div>

                    <div class="isotope-item gallery-item col-lg-3 col-md-6 col-sm-6 programming">
                        <div class="gallery-image">
                            <img src="{{ url('public/assets/example/HEAT PROTECTION SOLUTIONS.png') }}" alt="">
                            <div class="gallery-image-links">
                                <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/HEAT PROTECTION SOLUTIONS.png"></a>
                                <a class="p-link" title="" href="#"></a>
                            </div>
                        </div>
                        <div class="gallery-item-description">
                            <h3><a href="#">Spill Control</a></h3>
                            <p class="gallery-meta"><a href="#">Containment</a>, <a href="#">Solutions</a></p>
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
                <a href="tel:0771234567" class="theme_button inverse">Call Now</a>
                <a href="#" class="theme_button">Contact From</a>
            </div>

        </div>
    </div>
</section>

<section id="middle" class="light_section blog-grid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div id="isotope_container" class="isotope row masonry-layout">
                    <div class="isotope-item isotope-item-blog  col-md-4 col-sm-6">
                        <article class="post format-standard blog-grid">
                            <div class="entry-thumbnail">
                                <img alt="" src="{{ url('public/assets/example/RESCUE FROM HEIGHT SOLUTIONS.png') }}">
                            </div>
                            <div class="post-content">
                                <h3 class="entry-title-small">
                                    <a href="#" rel="bookmark">Rescue from Height Solutions</a>
                                </h3>

                                <div class="entry-content">
                                    <p>Offering advanced equipment and training to ensure safety during high-altitude rescues, tailored to industrial and emergency settings.</p>
                                    <p>
                                        <a href="#" class="theme_button">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="isotope-item isotope-item-blog  col-md-4 col-sm-6">
                        <article class="post format-standard blog-grid">
                            <div class="entry-thumbnail">
                                <img alt="" src="{{ url('public/assets/example/INHERENT FLAME RETARDANT.jpg') }}">
                            </div>
                            <div class="post-content">
                                <h3 class="entry-title-small">
                                    <a href="#" rel="bookmark">Inherent Flame Retardant</a>
                                </h3>

                                <div class="entry-content">
                                    <p>Our flame-resistant products are designed for high-heat environments, ensuring worker safety without compromising comfort.</p>
                                    <p>
                                        <a href="#" class="theme_button">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="isotope-item isotope-item-blog  col-md-4 col-sm-6">
                        <article class="post format-standard blog-grid">
                            <div class="entry-thumbnail">
                                <img alt="" src="{{ url('public/assets/example/HEAT PROTECTION SOLUTIONS.png') }}">
                            </div>
                            <div class="post-content">
                                <h3 class="entry-title-small">
                                    <a href="#" rel="bookmark">Heat Protection Solutions</a>
                                </h3>

                                <div class="entry-content">
                                    <p>Protective gear designed to withstand high temperatures, offering reliable safety for workers in extreme heat environments.</p>
                                    <p>
                                        <a href="#" class="theme_button">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="isotope-item isotope-item-blog  col-md-4 col-sm-6">
                        <article class="post format-standard blog-grid">
                            <div class="entry-thumbnail">
                                <img alt="" src="{{ url('public/assets/example/CUT PROTECTION SOLUTIONS.jpg') }}">
                            </div>
                            <div class="post-content">
                                <h3 class="entry-title-small">
                                    <a href="#" rel="bookmark">Cut Protection Solutions</a>
                                </h3>

                                <div class="entry-content">
                                    <p>Cut-resistant gloves and apparel to protect workers handling sharp tools or materials, enhancing workplace safety.</p>
                                    <p>
                                        <a href="#" class="theme_button">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="isotope-item isotope-item-blog  col-md-4 col-sm-6">
                        <article class="post format-standard blog-grid">
                            <div class="entry-thumbnail">
                                <img alt="" src="{{ url('public/assets/example/ARC FLASH PROTECTION.jpg') }}">
                            </div>
                            <div class="post-content">
                                <h3 class="entry-title-small">
                                    <a href="#" rel="bookmark">Arc Flash Protection</a>
                                </h3>

                                <div class="entry-content">
                                    <p>Specialized PPE to safeguard against arc flash incidents, protecting against severe electrical hazards.</p>
                                    <p>
                                        <a href="#" class="theme_button">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="isotope-item isotope-item-blog  col-md-4 col-sm-6">
                        <article class="post format-standard blog-grid">
                            <div class="entry-thumbnail">
                                <img alt="" src="{{ url('public/assets/example/HEIGHT ACCESS SOLUTIONS.jpg') }}">
                            </div>
                            <div class="post-content">
                                <h3 class="entry-title-small">
                                    <a href="#" rel="bookmark">Height Access Solutions</a>
                                </h3>

                                <div class="entry-content">
                                    <p>Comprehensive solutions for safe access to high areas, including ladders, scaffolding, and fall protection systems.</p>
                                    <p>
                                        <a href="#" class="theme_button">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="isotope-item isotope-item-blog  col-md-4 col-sm-6">
                        <article class="post format-standard blog-grid">
                            <div class="entry-thumbnail">
                                <img alt="" src="{{ url('public/assets/example/CRYOCOLD PROTECTION.png') }}">
                            </div>
                            <div class="post-content">
                                <h3 class="entry-title-small">
                                    <a href="#" rel="bookmark">Cryo/Cold Protection</a>
                                </h3>

                                <div class="entry-content">
                                    <p>Insulated gear to protect workers in extremely cold environments, ideal for handling frozen or cryogenic materials.</p>
                                    <p>
                                        <a href="#" class="theme_button">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<section id="progress" class="dark_section parallax statistics-section">
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
                            <a href="#" class="media-left">
                                <img src="{{ url('public/assets/example/team/01.jpg') }}" alt="">
                            </a>
                            <div class="media-left">
                                <p class="media-heading">
                                    November 12 ‘14
                                </p>
                                <p class="from-blog-author">
                                    <strong>
                                        <a href="#">Michael Johnson</a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                        <h3>
                            <a href="#">Duis autem veleum</a>
                        </h3>
                    </div>
                </div>

                <div class="item">

                    <div class="blog-item">
                        <img src="{{ url('public/assets/example/gallery/02.jpg') }}" alt="">
                        <div class="blog-author-meta">
                            <a href="#" class="media-left">
                                <img src="{{ url('public/assets/example/team/01.jpg') }}" alt="">
                            </a>
                            <div class="media-left">
                                <p class="media-heading">
                                    November 12 ‘14
                                </p>
                                <p class="from-blog-author">
                                    <strong>
                                        <a href="#">Michael Johnson</a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                        <h3>
                            <a href="#">Duis autem veleum</a>
                        </h3>
                    </div>

                </div>

                <div class="item">

                    <div class="blog-item">
                        <img src="{{ url('public/assets/example/gallery/03.jpg') }}" alt="">
                        <div class="blog-author-meta">
                            <a href="#" class="media-left">
                                <img src="{{ url('public/assets/example/team/01.jpg') }}" alt="">
                            </a>
                            <div class="media-left">
                                <p class="media-heading">
                                    November 12 ‘14
                                </p>
                                <p class="from-blog-author">
                                    <strong>
                                        <a href="#">Michael Johnson</a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                        <h3>
                            <a href="#">Duis autem veleum</a>
                        </h3>
                    </div>

                </div>

                <div class="item">

                    <div class="blog-item">
                        <img src="{{ url('public/assets/example/gallery/04.jpg') }}" alt="">
                        <div class="blog-author-meta">
                            <a href="#" class="media-left">
                                <img src="{{ url('public/assets/example/team/01.jpg') }}" alt="">
                            </a>
                            <div class="media-left">
                                <p class="media-heading">
                                    November 12 ‘14
                                </p>
                                <p class="from-blog-author">
                                    <strong>
                                        <a href="#">Michael Johnson</a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                        <h3>
                            <a href="#">Duis autem veleum</a>
                        </h3>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 to_animate">
                <p class="text-center divider40">
                    <a href="#" class="theme_button">View All Posts</a>
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

{{-- <section id="team" class="light_section bottom_section">
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
                        <a href="#" class="theme_button">About Us Page</a>
                    </div>
                </div>

            </div>

    </div>
</section>

--}}

@endsection

@push('css')

    <style>

        /* Main section styling */
        .light_section {
        padding: 4rem 0;
        background: #fff;
        }

        .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
        }

        /* Grid layout fixes */
        #isotope_container.isotope.row {
        display: flex;
        flex-wrap: wrap;
        margin: -15px;
        width: calc(100% + 30px);
        }

        .isotope-item-blog {
        padding: 15px;
        width: 33.333%;
        }

        /* Blog post card styling */
        .post.format-standard.blog-grid {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        border-radius: 0 !important;
        }

        .post-content h3.entry-title-small a {
            color: white !important;
        }

        /* Image container */
        .entry-thumbnail {
        position: relative;
        padding-top: 66.67%;
        overflow: hidden;
        }

        .entry-thumbnail img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        }

        /* Content area */
        .post-content {
        padding: 1.5rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        }

        .entry-title-small {
        margin: 0 0 1rem;
        }

        .entry-title-small a {
        color: #ffffff;
        text-decoration: none;
        font-size: 1.25rem;
        font-weight: 600;
        transition: color 0.2s;
        }

        .entry-title-small a:hover {
        color: #e84855;
        }

        .entry-content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        }

        .entry-content p {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 1.5rem;
        line-height: 1.6;
        flex-grow: 1;
        }

        .entry-content p:last-child {
        margin-bottom: 0;
        margin-top: auto;
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            .isotope-item {
                width: 50%;
            }
        }

        @media (max-width: 767px) {
            .isotope-item {
                width: 100%;
            }

            .container {
                padding: 0 20px;
            }

            .post-content {
                padding: 1.25rem;
            }
        }

        /* Dark theme background for cards */
        .post.format-standard.blog-grid {
            background: linear-gradient(135deg, #1e3d59, #2b5278);
        }


        /* the main slider style */
        h3.counter.counted.animated.fadeInUp {
            color: white;
        }

        h4.text-md-right {
            color: white !important;
        }

        .statistics-section p,.statistics-section h4 {
            color: white !important;
        }

        .flexslider .slides img{
            filter: brightness(0.7) !important;
        }

        @media (min-width: 1024px) {
            .flexslider .slides img {
                height: 80vh !important;
                object-fit: cover !important;
                background-size: cover !important;
            }
        }

        /* .gradient:after, #header:after {
            opacity: 10 !important;
            background: #db2450 !important;
        } */

        @media (min-width: 768px) {
            .sf-menu>li>a:hover, .sf-menu>li.active>a {
                color: #0f0f0f;
            }
        }
    </style>

@endpush

@push('scripts')
    <script>

    </script>
@endpush

