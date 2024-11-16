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
                    <li><a href="{{ route('pages.products') }}">Products</a></li>
                    <li class="active">{{ $product_details->title }}</li>
                </ol>
            </div>

        </div>
    </div>
</section>




<section id="content" class="light_section blog-single right-sidebar">
	<div class="container">
		<div class="row">

			<!-- content -->
			<div class="col-sm-8 col-md-8 col-lg-9">
				<article class="post type-post blog-item">
                    <header class="entry-header">
                        <h2 class="entry-title">
                            <a href="blog-single-right.html" rel="bookmark">{{ $product_details->title }}</a>
                        </h2>
                        {{-- <div class="entry-meta">
                            <span class="date">
                                <time datetime="2014-11-15T15:05:23+00:00" class="entry-date">15.11.2014</time>
                            </span>

                            <span class="categories-links">
                                Posted In
                                <a rel="category" href="#">Graphic Design</a>,
                                <a rel="category" href="#">Photography</a>
                            </span>
                            <span class="comments-link">
                                <a href="#">13 comments</a>
                            </span>
                        </div> --}}
                        <!-- .entry-meta -->

                    </header>
                    <!-- .entry-header -->

					<div class="entry-thumbnail">
                        <div class="blog-author-meta">
                            <a href="blog-right.html" class="media-left">
                                <img src="{{ url('public/assets/products/').'/'.$product_details->image }}" alt="{{ $product_details->title }}"/>
                            </a>
                            <div class="media-left">
                                <p class="media-heading">
                                    Posted By
                                </p>
                                <p class="from-blog-author">
                                    <strong>
                                        <a href="blog-right.html">Michael Johnson</a>
                                    </strong>
                                </p>
                            </div>
                        </div>
						<img src="{{ url('public/assets/products/').'/'.$product_details->image }}" alt="{{ $product_details->title }}"/>
					</div>

                    <div class="entry-excerpt">
                        {!! $product_details->description !!}
                    </div>

                </article>

			</div>
			<!-- eof content -->

                <!-- Sidebar -->
                <aside class="col-sm-4 col-md-4 col-lg-3">

                    {{-- <div class="widget widget_search">
                        <form role="search" method="get" id="searchform" class="searchform form-inline" action="https://html.modernwebtemplates.com/">
                            <div class="form-group">
                                <label class="screen-reader-text" for="search">Search for:</label>
                                <input type="text" value="" name="search" id="search" class="form-control" placeholder="Search...">
                            </div>
                            <button type="submit" id="searchsubmit" class="theme_button">Search</button>
                        </form>
                    </div> --}}

                    <div class="widget widget_text">
                        <h3 class="widget-title">Product Details</h3>
                        <div class="textwidget">
                           @if ($product_details->product_code)
                            <p><b>Product Code:</b> {{ $product_details->product_code }}</p>
                           @endif
                           @if ($product_details->remarks)
                            <p><b>Remarks:</b> {{ $product_details->remarks }}</p>
                           @endif
                        </div>
                    </div>

                    <div class="widget widget_tag_cloud">
                        <h3 class="widget-title">Tag Brands</h3>
                        <div class="tagcloud">
                            @foreach ($brands as $brand)
                                <a href="#" title="{{ $brand->name }}">{{ $brand->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            @foreach ($random_categories as $random_category)
                                <li>
                                    <a href="{{ route('pages.categoryList',\Illuminate\Support\Str::slug($random_category->name)) }}" title="">{{ $random_category->name }}</a>
                                    <span class="badge badge-primary">{{ $random_category->products_count }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>

                <div class="col-12 col-md-12">
                    <div class="widget widget_popular_entries">
                        <h3 class="widget-title">Related Products</h3>
                        <div class="owl-carousel">
                            @foreach ($random_products as $random_product)
                                @if($random_product->category_id == $product_details->category_id)
                                <div class="item">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <a class="media-left" href="{{ route('pages.singleproduct',$random_product->slug) }}">
                                                <img class="media-object" src="{{ url('public/assets/products/').'/'.$random_product->image }}" alt="{{ $random_product->title }}">
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <p class="post-date media-heading">{{ \Carbon\Carbon::parse($random_product->created_at)->format('F j, Y') }}</p>
                                            <p>
                                                <a href="{{ route('pages.singleproduct',$random_product->slug) }}">{{ \Illuminate\Support\Str::limit($random_product->title, 25, '...') }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            <!-- Add more items as needed -->
                        </div>
                    </div>

                </div>
                <!-- eof sidebar -->

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
        .owl-carousel .item {
            text-align: center;
            padding: 10px;
        }

        .owl-carousel .item img {
            display: block;
            width: 100%;
            height: auto;
            border-radius: 8px;
            object-fit: cover;
        }

    </style>

@endpush

@push('scripts')
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,               // Enable infinite looping
                margin: 10,               // Margin between items
                nav: true,                // Show next/prev buttons
                autoplay: true,           // Enable auto-slide
                autoplayTimeout: 3000,    // Auto-slide interval (3 seconds)
                autoplayHoverPause: true, // Pause on hover
                responsive: {
                    0: {
                        items: 1          // 1 item for screens < 600px
                    },
                    600: {
                        items: 2          // 2 items for screens >= 600px
                    },
                    1000: {
                        items: 4          // 4 items for screens >= 1000px
                    }
                }
            });
        });
    </script>
@endpush

