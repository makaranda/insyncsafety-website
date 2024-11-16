@extends('layouts.app')

@section('content')


<section id="breadcrumbs" class="grey_section bg_image">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1><strong>Products</strong></h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('pages.home') }}">Home</a>
                    </li>
                    <li class="active">Products</li>
                </ol>
            </div>

        </div>
    </div>
</section>




<section id="middle" class="light_section blog-grid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div id="isotope_container" class="isotope row masonry-layout">
                    <div class="isotope-item col-md-4 col-sm-6">
                        <article class="post format-standard blog-grid">
                            <div class="entry-thumbnail">
                                <img alt="" src="example/gallery/01.jpg">
                            </div>
                            <div class="post-content">
                                <h3 class="entry-title-small">
                                    <a href="blog-single-right.html" rel="bookmark">Consetetur sadipscing</a>
                                </h3>

                                <div class="entry-content">
                                    <p>Nam tempor doming quod mazim placerat cusoluta nobislefend option congue nihiiperdiet doming quod mazim placerat doming quod mazim facer.</p>
                                    <p>
                                        <a href="blog-single-right.html" class="theme_button">Read More</a>
                                    </p>
                                </div>
                                <!-- .entry-content -->

                            </div><!-- .post-content -->
                        </article>
                        <!-- .post -->
                    </div>
                </div>
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
    <script>

    </script>
@endpush

