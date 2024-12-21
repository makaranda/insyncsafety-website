@extends('layouts.app')

@section('content')


<section id="breadcrumbs" class="grey_section bg_image">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1><strong>Contact</strong> Us</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('pages.home') }}">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>

        </div>
    </div>
</section>




<section id="map1" class="">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.70422326337!2d79.96201936345766!3d6.908281050134969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256d59601df81%3A0x31a1dd96e8d49ba!2sMalabe!5e0!3m2!1sen!2slk!4v1731682812982!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="light_section">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 text-center to_animate" data-animation="expandOpen">
                <h3>
                    <a href="#"><span class="__cf_email__" data-cfemail="a4edeae2ebe4e9e1f6ede5e0e5f4f6eb8ae7ebe9">[email&#160;protected]</span></a>
                </h3>
                <h2 class="section_header big">
                    <span class="highlight">
                        <strong>94 (74) 105-2055</strong>
                    </span>
                </h2>
                <p>
                    Malabe, Sri Lanka
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-sm-push-3 to_animate">
                <form class="contact-form" method="post" id="contactForm" action="#">
                    @csrf
                    <p class="contact-form-name">
                        <label for="name">Full Name <span class="required">*</span></label>
                        <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control text-center" placeholder="Name">
                    </p>
                    <p class="contact-form-email">
                        <label for="email">Email address<span class="required">*</span></label>
                        <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control text-center" placeholder="Email">
                    </p>
                    <p class="contact-form-message">
                        <label for="message">Message</label>
                        <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control text-center" placeholder="Message"></textarea>
                    </p>
                    <p><div class="g-recaptcha" data-sitekey="6LcdaaIqAAAAAJhquSWuLD7j3VyLCUJEphmjXqI3"></div></p>
                    <p class="contact-form-submit text-center topmargin40">
                        <button type="reset" class="theme_button inverse">Clear Fields</button>
                        <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button"> Send Message</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>

    </script>
@endpush

