@extends('frontend.layouts.app')
@section('title','dasbazar')
@section('top_scripts')
@endsection
@section('style')
@endsection
@section('content')
<div class="main-body">
                <section class="first-slider">
                    <div class="container">
                        <div class="row">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('assets/frontend/img/slider_1.webp')}}" class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('assets/frontend/img/slider_2.webp')}}" class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('assets/frontend/img/slider_3.webp')}}" class="d-block w-100" alt="..." />
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 first-banner">
                                <img src="{{asset('assets/frontend/img/2slide_1.webp')}}" class="d-block w-100" alt="banner" />
                            </div>
                        </div>
                    </div>
                </section>
                <section class="list-img-sec">
                    <div class="container">
                        <div class="row row-cols-10 row-cols-lg-10 g-2">
                            <h3 class="head-3">Our top unstoppable deals</h3>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img">
                                        <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                    <!--  <strong>Smartphone</strong> -->
                                    <h5>Smartphone</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img">
                                        <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                    <!--  <strong>Smartphone</strong> -->
                                    <h5>Laptops & Tablets</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img">
                                        <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                    <!--  <strong>Smartphone</strong> -->
                                    <h5>TV's</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img">
                                        <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                    <!--  <strong>Smartphone</strong> -->
                                    <h5>Washers</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img">
                                        <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                    <!--  <strong>Smartphone</strong> -->
                                    <h5>Outdoor</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img">
                                        <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                    <!--  <strong>Smartphone</strong> -->
                                    <h5>Fresh Food</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img">
                                        <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                    <!--  <strong>Smartphone</strong> -->
                                    <h5>Pantry Essentials</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img">
                                        <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                    <!--  <strong>Smartphone</strong> -->
                                    <h5>Cleaning & Household</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img">
                                        <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                    <!--  <strong>Smartphone</strong> -->
                                    <h5>Personal Care</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 first-banner">
                                <img src="{{asset('assets/frontend/img/2nd_banner.webp')}}" class="d-block w-100" alt="banner" />
                            </div>
                        </div>
                    </div>
                </section>

                <section class="electro-sec">
                    <div class="container">
                        <div class="row">
                            <h3 class="head-3">24 Hour Deals On Home & Electronics</h3>
                            <div class="col-md-4 electro-main border">
                                <a href="#">
                                    <div class="head-elecro">
                                        <div>
                                            <span> <h1>Blenders</h1></span>
                                            <span><h2>UP to 60% Off</h2></span>
                                        </div>
                                    </div>

                                    <div class="img-electro">
                                        <img src="{{asset('assets/frontend/img/electro_1.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 electro-main border">
                                <a href="#">
                                    <div class="head-elecro">
                                        <div>
                                            <span> <h1>Printing</h1></span>
                                            <span><h2>UP to 30% Off</h2></span>
                                        </div>
                                    </div>

                                    <div class="img-electro">
                                        <img src="{{asset('assets/frontend/img/electro_2.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 electro-main border">
                                <a href="#">
                                    <div class="head-elecro">
                                        <div>
                                            <span> <h1>Tonkita</h1></span>
                                            <span><h2>Flat 25% Off</h2></span>
                                        </div>
                                    </div>

                                    <div class="img-electro">
                                        <img src="{{asset('assets/frontend/img/electro_3.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="sliderdiv-sec">
                    <div class="container main">
                        <h3 class="head-3">Step into our Offer Zone</h3>

                        <div class="row slider slider-nav">
                            <div class="col-md-2 border sl_div">
                                <a href="#" class="style-a">
                                    <div class="slide-img">
                                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_2.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide-head">
                                        <h6>Carrefour Fine Sugar 2kg</h6>
                                        <p>Size: 2kg</p>
                                        <span class="inline-dispaly">
                                            8.25
                                            <p class="sl_price inline-dispaly">AED</p>
                                        </span>
                                    </div>
                                </a>

                                <div class="sl_bottom col-md-2 border">
                                    <input value="1" type="number" step="1" min="1" name="" />
                                    <button class="btn btn-danger">Add</button>
                                </div>
                            </div>

                            <!--  -->
                            <div class="col-md-2 border sl_div item">
                                <a href="#" class="style-a">
                                    <div class="slide-img">
                                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_2.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide-head">
                                        <h6>Carrefour Fine Sugar 2kg</h6>
                                        <p>Size: 2kg</p>
                                        <span class="inline-dispaly">
                                            8.25
                                            <p class="sl_price inline-dispaly">AED</p>
                                        </span>
                                    </div>
                                </a>

                                <div class="sl_bottom col-md-2 border">
                                    <input value="1" type="number" step="1" min="1" name="" />
                                    <button class="btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-md-2 border sl_div item">
                                <a href="#" class="style-a">
                                    <div class="slide-img">
                                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_2.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide-head">
                                        <h6>Carrefour Fine Sugar 2kg</h6>
                                        <p>Size: 2kg</p>
                                        <span class="inline-dispaly">
                                            8.25
                                            <p class="sl_price inline-dispaly">AED</p>
                                        </span>
                                    </div>
                                </a>

                                <div class="sl_bottom col-md-2 border">
                                    <input value="1" type="number" step="1" min="1" name="" />
                                    <button class="btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="col-md-2 border sl_div item">
                                <a href="#" class="style-a">
                                    <div class="slide-img">
                                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_2.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide-head">
                                        <h6>Carrefour Fine Sugar 2kg</h6>
                                        <p>Size: 2kg</p>
                                        <span class="inline-dispaly">
                                            8.25
                                            <p class="sl_price inline-dispaly">AED</p>
                                        </span>
                                    </div>
                                </a>

                                <div class="sl_bottom col-md-2 border">
                                    <input value="1" type="number" step="1" min="1" name="" />
                                    <button class="btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="col-md-2 border sl_div item">
                                <a href="#" class="style-a">
                                    <div class="slide-img">
                                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_2.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide-head">
                                        <h6>Carrefour Fine Sugar 2kg</h6>
                                        <p>Size: 2kg</p>
                                        <span class="inline-dispaly">
                                            8.25
                                            <p class="sl_price inline-dispaly">AED</p>
                                        </span>
                                    </div>
                                </a>

                                <div class="sl_bottom col-md-2 border">
                                    <input value="1" type="number" step="1" min="1" name="" />
                                    <button class="btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="col-md-2 border sl_div item">
                                <a href="#" class="style-a">
                                    <div class="slide-img">
                                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_2.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide-head">
                                        <h6>Carrefour Fine Sugar 2kg</h6>
                                        <p>Size: 2kg</p>
                                        <span class="inline-dispaly">
                                            8.25
                                            <p class="sl_price inline-dispaly">AED</p>
                                        </span>
                                    </div>
                                </a>

                                <div class="sl_bottom col-md-2 border">
                                    <input value="1" type="number" step="1" min="1" name="" />
                                    <button class="btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="col-md-2 border sl_div item">
                                <a href="#" class="style-a">
                                    <div class="slide-img">
                                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_2.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide-head">
                                        <h6>Carrefour Fine Sugar 2kg</h6>
                                        <p>Size: 2kg</p>
                                        <span class="inline-dispaly">
                                            8.25
                                            <p class="sl_price inline-dispaly">AED</p>
                                        </span>
                                    </div>
                                </a>

                                <div class="sl_bottom col-md-2 border">
                                    <input value="1" type="number" step="1" min="1" name="" />
                                    <button class="btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-md-2 border sl_div item">
                                <a href="#" class="style-a">
                                    <div class="slide-img">
                                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_2.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('assets/frontend/img/sl_1.jpg_200Wx200H')}}" class="d-block w-100" alt="..." />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide-head">
                                        <h6>Carrefour Fine Sugar 2kg</h6>
                                        <p>Size: 2kg</p>
                                        <span class="inline-dispaly">
                                            8.25
                                            <p class="sl_price inline-dispaly">AED</p>
                                        </span>
                                    </div>
                                </a>

                                <div class="sl_bottom col-md-2 border">
                                    <input value="1" type="number" step="1" min="1" name="" />
                                    <button class="btn btn-danger">Add</button>
                                </div>
                            </div>

                            <!-- main carosel -->
                        </div>
                    </div>
                </section>

      
                <section class="off-sec">
                    <div class="container">
                        <div class="row">
                            <h3 class="head-3">Step into our Offer Zone</h3>
                            <div class="col-md-6 electro-main border">
                                <a href="#">
                                    <div class="head-elecro">
                                        <div>
                                            <span> <h1>Best Sellers At Crazy Prices</h1></span>
                                            <span><h2>UP to 70% Off</h2></span>
                                        </div>
                                    </div>
                                    <div class="img-electro">
                                        <img src="{{asset('assets/frontend/img/off_1.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 electro-main border">
                                <a href="#">
                                    <div class="head-elecro">
                                        <div>
                                            <span> <h1>Block Buster Deals</h1></span>
                                            <span><h2>UP to 30% Off</h2></span>
                                        </div>
                                    </div>
                                    <div class="img-electro">
                                        <img src="{{asset('assets/frontend/img/off_2.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 electro-main border">
                                <a href="#">
                                    <div class="head-elecro">
                                        <div>
                                            <span> <h1>Best Prices</h1></span>
                                            <span><h2>UP to 30% Off</h2></span>
                                        </div>
                                    </div>
                                    <div class="img-electro">
                                        <img src="{{asset('assets/frontend/img/off_3.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 electro-main border">
                                <a href="#">
                                    <div class="head-elecro">
                                        <div>
                                            <span> <h1>Rock Bottom Prices</h1></span>
                                            <span><h2>UP to 30% Off</h2></span>
                                        </div>
                                    </div>
                                    <div class="img-electro">
                                        <img src="{{asset('assets/frontend/img/off_4.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 first-banner">
                                <img src="{{asset('assets/frontend/img/banner_4.webp')}}" class="d-block w-100" alt="banner" />
                            </div>
                        </div>
                    </div>
                </section>

                <section class="checklist-sec">
                    <div class="container">
                        <div class="row">
                            <h3 class="head-3">Your shopping checklist</h3>
                            <div class="col-md-4 border background-div text-align">
                                <a class="style-a" href="#">
                                    <div>
                                        <img src="{{asset('assets/frontend/img/check_1.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                    <div>
                                        <span> <h1 class="h-h1">Pantry Essentials</h1></span>
                                        <span><h2 class="h-h2">UP to 50% Off</h2></span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="col-md-4 border background-div inline-dispaly div_sub text-align">
                                    <a class="style-a" href="#">
                                        <div class="inline-dispaly div_inner">
                                            <span> <h1 class="h-h1">Pantry Essentials</h1></span>
                                            <span><h2 class="h-h2">UP to 50% Off</h2></span>
                                        </div>
                                        <div class="inline-dispaly div_inner">
                                            <img src="{{asset('assets/frontend/img/check_2.webp')}}" class="d-block w-100" alt="electro-img" />
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 border background-div inline-dispaly div_sub text-align">
                                    <a class="style-a" href="#">
                                        <div class="inline-dispaly div_inner">
                                            <span> <h1 class="h-h1">Pantry Essentials</h1></span>
                                            <span><h2 class="h-h2">UP to 50% Off</h2></span>
                                        </div>
                                        <div class="inline-dispaly div_inner">
                                            <img src="{{asset('assets/frontend/img/check_3.webp')}}" class="d-block w-100" alt="electro-img" />
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 border background-div inline-dispaly div_sub text-align">
                                    <a class="style-a" href="#">
                                        <div class="inline-dispaly div_inner">
                                            <span> <h1 class="h-h1">Pantry Essentials</h1></span>
                                            <span><h2 class="h-h2">UP to 50% Off</h2></span>
                                        </div>
                                        <div class="inline-dispaly div_inner">
                                            <img src="{{asset('assets/frontend/img/check_4.webp')}}" class="d-block w-100" alt="electro-img" />
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 border background-div inline-dispaly div_sub text-align">
                                    <a class="style-a" href="#">
                                        <div class="inline-dispaly div_inner">
                                            <span> <h1 class="h-h1">Pantry Essentials</h1></span>
                                            <span><h2 class="h-h2">UP to 50% Off</h2></span>
                                        </div>
                                        <div class="inline-dispaly div_inner">
                                            <img src="{{asset('assets/frontend/img/check_5.png')}}" class="d-block w-100" alt="electro-img" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="checklist-sec">
                    <div class="container">
                        <div class="row">
                            <h3 class="head-3">For all your household needs</h3>
                            <div class="col-md-2 border background-div text-align">
                                <a class="style-a" href="">
                                    <div>
                                        <img src="{{asset('assets/frontend/img/kit_1.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                    <div>
                                        <span> <h1 class="h-h1" style="font-size: 0.6rem;">TVs & Projectors</h1></span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 border background-div text-align">
                                <a class="style-a" href="">
                                    <div>
                                        <img src="{{asset('assets/frontend/img/kit_2.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                    <div>
                                        <span> <h1 class="h-h1" style="font-size: 0.6rem;">Built Ins</h1></span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 border background-div text-align">
                                <a class="style-a" href="">
                                    <div>
                                        <img src="{{asset('assets/frontend/img/kit_3.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                    <div>
                                        <span> <h1 class="h-h1" style="font-size: 0.6rem;">Washers & Dryers</h1></span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 border background-div text-align">
                                <a class="style-a" href="">
                                    <div>
                                        <img src="{{asset('assets/frontend/img/kit_4.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                    <div>
                                        <span> <h1 class="h-h1" style="font-size: 0.6rem;">Iron's & Steamers</h1></span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 border background-div text-align">
                                <a class="style-a" href="">
                                    <div>
                                        <img src="{{asset('assets/frontend/img/kit_5.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                    <div>
                                        <span> <h1 class="h-h1" style="font-size: 0.6rem;">Vacuum Cleaners</h1></span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 border background-div text-align">
                                <a class="style-a" href="">
                                    <div>
                                        <img src="{{asset('assets/frontend/img/kit_6.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                    <div>
                                        <span> <h1 class="h-h1" style="font-size: 0.6rem;">Coolers, Heaters & Air Treatment</h1></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="checklist-sec">
                    <div class="container">
                        <div class="row">
                            <h3 class="head-3">For indoors & outdoors</h3>
                            <div class="col-md-2 border background-div text-align">
                                <a class="style-a" href="">
                                    <div>
                                        <img src="{{asset('assets/frontend/img/in_1.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                    <div>
                                        <span> <h1 class="h-h1" style="font-size: 0.6rem;">Kitchen & Dining</h1></span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 border background-div text-align">
                                <a class="style-a" href="">
                                    <div>
                                        <img src="{{asset('assets/frontend/img/in_2.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                    <div>
                                        <span> <h1 class="h-h1" style="font-size: 0.6rem;">Bathroom & More</h1></span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 border background-div text-align">
                                <a class="style-a" href="">
                                    <div>
                                        <img src="{{asset('assets/frontend/img/in_3.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                    <div>
                                        <span> <h1 class="h-h1" style="font-size: 0.6rem;">Bedroom</h1></span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 border background-div text-align">
                                <a class="style-a" href="">
                                    <div>
                                        <img src="{{asset('assets/frontend/img/in_4.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                    <div>
                                        <span> <h1 class="h-h1" style="font-size: 0.6rem;">Furniture & Decor</h1></span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 border background-div text-align">
                                <a class="style-a" href="">
                                    <div>
                                        <img src="{{asset('assets/frontend/img/in_5.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                    <div>
                                        <span> <h1 class="h-h1" style="font-size: 0.6rem;">Camping, Barbeque & Grill</h1></span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 border background-div text-align">
                                <a class="style-a" href="">
                                    <div>
                                        <img src="{{asset('assets/frontend/img/in_6.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                    <div>
                                        <span> <h1 class="h-h1" style="font-size: 0.6rem;">Garden Equipment</h1></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
@endsection
@section('bottom_scripts')
@endsection