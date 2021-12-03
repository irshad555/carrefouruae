<!DOCTYPE html>
<html>
<head>
	
	    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>@yield('title')</title>
	 <!-- Bootstrap CSS -->
        <!--  <link rel="stylesheet" href="{{asset('plugins/bootstrap-5.0.2/css/bootstrap.min.css')}}"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free-5.15.4/css/fontawesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free-5.15.4/css/all.min.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}" />
        <!-- Scripts -->
        <script src="{{ asset('assets/frontend/js/app.js')}}" defer></script>
        <!-- slick -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	@yield('top_scripts')
	@yield('style')
</head>
<body>
 <!-- Main Wrapper -->
    <div class="main-wrapper">
    	@include('frontend.layouts.header')
    	@yield('content')
    	@include('frontend.layouts.footer')
    </div>
<!-- /Main Wrapper -->	
<script>
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

            $(document).ready(function () {
                $("#myCarousel").carousel({
                    interval: 5000,
                });
            });
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////

            $(document).ready(function () {
                $(".slider-nav").slick({
                    dots: false,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    // autoplaySpeed:2000,
                    arrows: true,
                    responsive: [
                        {
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 6,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 6,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 5,
                                slidesToScroll: 1,
                            },
                        },

                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1,
                            },
                        },

                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 400,
                            settings: {
                                arrows: false,
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            },
                        },
                    ],
                });
            });
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////
        </script>
@yield('bottom_scripts')
</body>
</html>