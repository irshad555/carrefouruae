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
 </div>
@endsection
@section('bottom_scripts')
@endsection