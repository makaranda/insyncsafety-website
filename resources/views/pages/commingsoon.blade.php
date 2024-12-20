<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Material Design Coming Soon Template">
        <meta name="keywords" content="coming soon template, material comingsoon, material under construction, site under construction, countdown, mailchimp, responsive, material comingsoon design">
        <meta name="author" content="trendytheme.net">

        <title>Material Design Coming Soon Template</title>

        <!--  favicon -->
        <link rel="shortcut icon" href="{{ url('public/coming-soon/img/ico/favicon.png') }}">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('public/coming-soon/img/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('public/coming-soon/img/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('public/coming-soon/img/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ url('public/coming-soon/img/ico/apple-touch-icon-57-precomposed.png') }}">

        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- FontAwesome CSS -->
        <link href="{{ url('public/coming-soon/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Material Icons CSS -->
        <link href="{{ url('public/coming-soon/fonts/iconfont/material-icons.css') }}" rel="stylesheet">
        <!-- materialize -->
        <link href="{{ url('public/coming-soon/materialize/css/materialize.min.css') }}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ url('public/coming-soon/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Style CSS -->
        <link href="{{ url('public/coming-soon/style.css?v=3364') }}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ url('public/coming-soon/css/custom.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min..js') }}"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min..js') }}"></script>
        <![endif]-->

        <style>
            p.sub-intro.lead.text-dark {
                color: black;
                font-weight: 500;
            }
            .fs-16{
                font-size: 16px;
                a{
                    color: black !important;
                }
            }
        </style>
    </head>

    <body id="top">

        <section class="banner-1 bg-fixed parallax-bg fullscreen-banner valign-wrapper" data-stellar-background-ratio="0.5">
            <div class="valign-cell">
              <div class="container">

              	<div class="comingsoon-wrapper text-center">
	                <div class="logo">
	                    <a href="#">
	                    	<img src="{{ url('public/assets/img/insyncsafety_logo.jpg') }}" alt="">
	                    </a>
	                </div><!-- /.logo -->

	                <div class="mb-50">
	                    <h1 class="intro-title black-text text-uppercase">Coming soon</h1>
	                    <p class="sub-intro lead text-dark">An awesome new company for web resources is coming very soon. Enter your email to request an early invitation!</p>
	                </div>

	                <div class="countdown-wrapper mb-30 white-text">
	                    <ul class="countdown">
	                        <li>
	                            <span class="days white-text">00</span>
	                            <p>days</p>
	                        </li>
	                        <li>
	                            <span class="hours white-text">00</span>
	                            <p>hours </p>
	                        </li>
	                        <li>
	                            <span class="minutes white-text">00</span>
	                            <p>minutes</p>
	                        </li>
	                        <li>
	                            <span class="seconds white-text">00</span>
	                            <p>seconds</p>
	                        </li>
	                    </ul><!-- /countdown -->
	                </div><!-- /.countdown-wrapper -->

		            <div class="row">
		                <div class="col-md-6 col-md-offset-3">
		                  <div class="subscribe-wrapper text-center">
		                      <form class="subscribe-form mailchimp white-form" method="post">

		                          <div class="input-field">
		                          	{{-- <label class="sr-only" for="email">Email</label> --}}
		                            {{-- <input id="subscribeEmail" type="email" name="subscribeEmail" class="validate" autocomplete="off" > --}}

                                	<!-- to showing error message -->
		                            {{-- <label for="subscribeEmail" data-error="wrong" data-success="right">Type your email</label> --}}
		                          </div>

		                          <a href="tel:94741052055" class="btn btn-lg pink waves-effect waves-light mt-30 text-capitalize">Click to Call</a>

		                          <!-- to showing success messages -->
		                          <p class="subscription-success text-center fs-16"><a href="mailto:sujith@insyncsafety.com">sujith@insyncsafety.com</a></p>
		                      </form>
		                  </div><!-- /.subscribe-wrapper -->
		                </div><!-- /.col-md-6 -->
		            </div><!-- /.row -->

	            </div><!-- /.comingsoon-wrapper -->

              </div><!-- /.container -->
            </div><!-- /.valign-cell -->

            {{-- <div class="mouse-icon hidden-sm hidden-xs">
                <div class="wheel"></div>
            </div> --}}
        </section>


        <!-- Preloader -->
        <div id="preloader">
          <div class="preloader-position">
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
        <!-- End Preloader -->


        <!-- jQuery -->
        <script src="{{ url('public/coming-soon/js/jquery-2.1.3.min.js') }}"></script>
        <script src="{{ url('public/coming-soon/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('public/coming-soon/materialize/js/materialize.min.js') }}"></script>
        <script src="{{ url('public/coming-soon/js/jquery.easing.min.js') }}"></script>
        <script src="{{ url('public/coming-soon/js/coundown-timer.js?v=6667') }}"></script>
        {{-- <script src="{{ url('public/coming-soon/js/smoothscroll.min.js') }}"></script> --}}
        <script src="{{ url('public/coming-soon/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ url('public/coming-soon/js/imagesloaded.js') }}"></script>
        <script src="{{ url('public/coming-soon/js/jquery.inview.min.js') }}"></script>
        <script src="{{ url('public/coming-soon/js/ajaxchimp.js') }}"></script>
        <script src="{{ url('public/coming-soon/js/ajaxchimp-config.js') }}"></script>
        <script src="{{ url('public/coming-soon/js/scripts.js') }}"></script>

    </body>

</html>
