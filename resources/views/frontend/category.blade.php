@extends('frontend.layouts.app')
@section('title','dasbazar')
@section('top_scripts')
@endsection
@section('style')
@endsection
@section('content')
 <div class="main-body">
    
    <div class="row">
        <span class="head_navigate"><a href="#">Home</a>&nbsp;&nbsp;<i class='fas fa-angle-right'></i>&nbsp;&nbsp;Baby Products</span>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 pr_banner">
                    <img src="{{asset('assets/frontend/img/pr_banner_1.webp')}}" class="d-block w-100" alt="product-banner" />

                </div>
                  <div class="col-md-4 pr_banner_off">
                        <h1><span>Up to 40% off for your little one</span></h1>
                        <h3>Browse from a wide range of baby products</h3>
                    </div>
            </div>
        </div>
    </section>
     <section class="list-img-sec">
                    <div class="container">
                        <div class="row row-cols-10 row-cols-lg-10 g-2">
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img pr-img">
                                        <img src="{{asset('assets/frontend/img/pr_round_1.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                   
                                    <h5>Diapers, Wipes & Diaper Cream</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img pr-img">
                                        <img src="{{asset('assets/frontend/img/pr_round_2.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                 
                                    <h5>Feeding Accessories</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img pr-img">
                                        <img src="{{asset('assets/frontend/img/pr_round_3.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                   
                                    <h5>Milk, Food & Juices</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img pr-img">
                                        <img src="{{asset('assets/frontend/img/pr_round_4.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                   
                                    <h5>Baby Healthcare</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img pr-img">
                                        <img src="{{asset('assets/frontend/img/pr_round_5.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                    
                                    <h5>Toiletries</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img pr-img">
                                        <img src="{{asset('assets/frontend/img/pr_round_6.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                  
                                    <h5>Baby Travelling</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img pr-img">
                                        <img src="{{asset('assets/frontend/img/pr_round_7.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                   
                                    <h5>Pull-ups & Swimming Pants</h5>
                                </a>
                            </div>
                            <div class="col">
                                <a class="list-img-a" href="#">
                                    <div class="border list-img pr-img">
                                        <img src="{{asset('assets/frontend/img/pr_round_8.webp')}}" class="d-block w-100" alt="list-img" />
                                    </div>
                                   
                                    <h5>Baby Detergent</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                  <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{asset('assets/frontend/img/pr_banner_2.jfif')}}" class="d-block w-100" alt="product-banner" />
                            </div>
                        </div>
                    </div>
                </section>
                  <section>
                    <div class="container main">
                        <h3 class="head-3">Top Products</h3>

                        <div class="row slider slider-nav">
                            <div class="col-md-2 border sl_div">
                                  <div class="discount col">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                                <div class="discount col" style="display: none;">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                                  <div class="discount col">
                                    <span><p>55% DISCOUNT</p></span>
                                </div>
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
                                <div class="discount col" style="display:none;">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                                <div class="discount col" style="display:none">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                                  <div class="discount col" style="display:none">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                                  <div class="discount col" style="display:none">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                                  <div class="discount col" style="display:none">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                 <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 pr_banner">
                                <img src="{{asset('assets/frontend/img/pr_banner_3.webp')}}" class="d-block w-100" alt="product-banner" />

                            </div>
                              <div class="col-md-4 pr_banner_off">
                                    <h1><span>Up to 20% Off</span></h1>
                                    <h3>Eco Friendly Baby Food</h3>
                                </div>
                        </div>
                    </div>
                </section>
                  <section>
                    <div class="container">
                        <div class="row banner_col4_row">
                          
                         <div class="col-md-4 banner_col4_main">
                         <div class="banner_col4">
                            <img src="{{asset('assets/frontend/img/pr_banner_4.webp')}}"  alt="product-banner" />
                         </div>
                         <div class="col-md-2 banner_col4_off">
                                    <h2><span>Up to 20% Off</span></h2>
                                    <h3>Eco Friendly Baby Food</h3>
                        </div>
                         </div>
                         <div class="col-md-4 banner_col4_main">
                            <div class="banner_col4">
                            <img src="{{asset('assets/frontend/img/pr_banner_5.webp')}}"  alt="product-banner" />
                         </div>
                         <div class="col-md-2 banner_col4_off">
                                    <h2><span>Up to 20% Off</span></h2>
                                    <h3>Eco Friendly Baby Food</h3>
                        </div>
                         </div>
                         <div class="col-md-4 banner_col4_main">
                         <div class="banner_col4">
                            <img src="{{asset('assets/frontend/img/pr_banner_6.webp')}}"  alt="product-banner" />
                         </div>
                         <div class="col-md-2 banner_col4_off">
                                    <h2><span>Up to 20% Off</span></h2>
                                    <h3>Eco Friendly Baby Food</h3>
                                </div>
                         </div>
                            
                        </div>
                    </div>
                </section>

                <section>
                    <div class="container main">
                        <h3 class="head-3">Baby Products</h3>

                        <div class="row slider slider-nav">
                            <div class="col-md-2 border sl_div">
                                  <div class="discount col">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                                <div class="discount col" style="display: none;">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                                  <div class="discount col">
                                    <span><p>55% DISCOUNT</p></span>
                                </div>
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
                                <div class="discount col" style="display:none;">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                                <div class="discount col" style="display:none">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                                  <div class="discount col" style="display:none">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                                  <div class="discount col" style="display:none">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                                  <div class="discount col" style="display:none">
                                    <span><p>15% DISCOUNT</p></span>
                                </div>
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
                <section>
                    <div class="container">
                          <div class="row">
                            <div class="col" >
                              <div class="bg-pr img-span-main">
                                  <img src="{{asset('assets/frontend/img/pr_lst_1.webp')}}" class="d-block w-100 bg-pr"  alt="electro-img" /> 
                                  <h2 class="h-h2">UP to 50% Off</h2>
                              </div>
                            </div>
                            <div class="col">
                             <div class="img-span-div">
                              <img src="{{asset('assets/frontend/img/pr_lst_2.webp')}}" class="d-block w-100 bg-pr" alt="electro-img" />
                              <h2 class="h-h2">UP to 50% Off</h2>
                             </div>
                             <div class="img-span-div" >
                             <img src="{{asset('assets/frontend/img/pr_lst_3.webp')}}" class="d-block bg-pr w-100" alt="electro-img" />
                             <h2 class="h-h2">UP to 50% Off</h2>
                             </div>
                            </div>
                            <div class="col">
                              <div class="img-span-div"> 
                                <img src="{{asset('assets/frontend/img/pr_lst_4.webp')}}" class="d-block w-100 bg-pr" alt="electro-img" />
                                 <h2 class="h-h2">UP to 50% Off</h2>
                            </div>
                              <div class="img-span-div">
                                <img src="{{asset('assets/frontend/img/pr_lst_5.jfif')}}" class="d-block w-100 bg-pr" alt="electro-img" />
                                <h2 class="h-h2">UP to 50% Off</h2>
                            </div>
                            </div>
                          </div>
                    </div>
                </section>
 </div>
@endsection
@section('bottom_scripts')
@endsection