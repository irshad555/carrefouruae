@extends('frontend.layouts.app')
@section('title','dasbazar')
@section('top_scripts')
@endsection
@section('style')
@endsection
@section('content')
 <div class="main-body">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset('assets/frontend/img/pr_banner_2.jfif')}}" class="d-block w-100" alt="product-banner" />
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <span class="head_navigate"><a href="{{url('/')}}">Home</a>&nbsp;&nbsp;<i class='fas fa-angle-right'></i>&nbsp;&nbsp;<a href="{{url('category')}}">Baby Products</a>&nbsp;&nbsp;<i class='fas fa-angle-right'></i>&nbsp;&nbsp;Changing & Bathing</span>
    </div>
<section>
<div class="container">
    <div class="row main_row_pr">
     <div class="col-3 side_col">col-4
     </div>
     <div class="col-9 body_col">
  <div class="row">
     <div class="col-6">
        <h3>Changing & Bathing</h3>
        <h6>Showing 3 items of 315</h6>

     </div>
     <div class="col-6">
        
<div class="dropdown">
 <div class="dropdown show">
  <a style="float: right;background: #fff;" class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sort By:
Relevance
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
</div>
     </div>

        <div class="row" style="grid-column-gap:4%; row-gap:1rem;">
    <!--product card  -->
        <div class="col-2 border sl_divp">   
            <div class="discount col-2">
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
                            <div class="col-2 border sl_divp">   
            <div class="discount col-2">
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
                            <div class="col-2 border sl_divp">   
            <div class="discount col-2">
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

<div class="col-2 border sl_divp">   
            <div class="discount col-2">
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

<div class="col-2 border sl_divp">   
            <div class="discount col-2">
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

<div class="col-2 border sl_divp">   
            <div class="discount col-2">
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



   
                             
        <!--/product card  -->
      </div>
    </div>
  </div>
</div>
</section>
 </div>
@endsection
@section('bottom_scripts')
@endsection