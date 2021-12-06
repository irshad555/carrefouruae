@extends('frontend.layouts.app')
@section('title','dasbazar')
@section('top_scripts')

@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<style>
.selector {
    position: relative;
    width: 100%;
  }

.selector ul {
    position: relative;
    display: block;
    overflow: auto;
    min-width: 138px;
    max-height: 200px;
    background: #fff;
    list-style: none;
    white-space: inherit;
    padding-right: 17px;
    width: calc(100% + 17px)
}

.selector li {
    position: relative;
    padding: 3px 20px 3px 25px;
    cursor: pointer
}

.selector li:before {
    position: absolute;
    top: 50%;
    left: 0;
    top: 4px;
    display: inline-block;
    margin-right: 9px;
    width: 17px;
    height: 17px;
    background-color: #f4f4f4;
    border: 1px solid #d5d5d5;
    content: ""
}

.selector li[data-selected="1"]:before {
    border: 1px solid #d7d7d7;
    background-color: #fff
}

.selector li[data-selected="1"]:after {
    position: absolute;
    top: 50%;
    left: 3px;
    top: 11px;
    display: inline-block;
    width: 4px;
    height: 10px;
    border-right: 2px solid;
    border-bottom: 2px solid;
    background: none;
    color: #39c9a9;
    content: "";
    -webkit-transform: rotate(40deg) translateY(-50%);
    transform: rotate(40deg) translateY(-50%)
}

.selector li:hover {
    color: #aaa
}

.selector li .total {
    position: absolute;
    right: 0;
    color: #d7d7d7
}

.selector .price-slider {
    text-align: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    position: relative;
    padding-top: 17px
}

@media (min-width: 768px) {
    .selector .price-slider {
        padding-top:8px
    }
}

.selector .price-slider:before {
    position: absolute;
    top: 50%;
    left: 0;
    margin-top: 0;
    color: #39c9a9;
    content: attr(data-currency);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%)
}

.selector #slider-range {
    width: 90%;
    margin-bottom: 30px;
    border: none;
    background:#0d6efd;
    height: 3px;
    margin-left: 8px;
    margin-right: 8px
}

@media (min-width: 768px) {
     .selector #slider-range {
        width:100%
    }
}

.selector .ui-slider-handle {
    border-radius: 50%;
    background-color:#0d6efd;
    border: none;
    top: -14px;
    width: 28px;
    height: 28px;
    outline: none
}

@media (min-width: 768px) {
    .selector .ui-slider-handle {
        top:-7px;
        width: 16px;
        height: 16px
    }
}

.selector .ui-slider-range {
    background-color:0d6efd;
}

.selector .slider-price {
    position: relative;
    display: inline-block;
    padding:1px 53px;
    width: 40%;
    background-color:#ededed;
    line-height: 28px;
    text-align: center
}

.selector .slider-price:before {
    position: absolute;
    top: 50%;
    left: 13px;
    margin-top: 0;
    color: #6c757d;
    content: attr(data-currency);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%)
}

.selector .show-all {
    position: relative;
    padding-left: 25px;
    color: #39c9a9;
    cursor: pointer;
    line-height: 28px
}

.selector .show-all:after, .selector .show-all:before {
    content: "";
    position: absolute;
    top: 50%;
    left: 4px;
    margin-top: -1px;
    color: #39c9a9;
    width: 10px;
    border-bottom: 1px solid
}

.selector .show-all:after {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg)
}

.selector.open ul {
    max-height: none
}

.selector.open .show-all:after {
    display: none
}


* {
    -webkit-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
}
</style>
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
     <div class="col-3 side_col">
  

  <!-- accordion -->
  <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne8" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Delivery Type
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne8" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">

     <div class="list-group">
      <label class="list-group-item">
        <input class="form-check-input me-1" type="checkbox" value="" />

        <svg data-testid="ExpressNow" viewBox="0 0 76 22" height="22px" width="76px" direction="ltr" class="css-1oteowz"><g id="Asset-Artboard-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="NOW/Main-White"><rect stroke="#0E5AA7" fill="#fff" x="0.5" y="0.5" width="75" height="21" rx="10.5"></rect><text font-family="Roboto-Bold, Roboto" font-size="12" font-weight="bold" fill="#0E5AA7"><tspan x="40" y="15">NOW</tspan></text><g transform="translate(8.000000, 4.500000)" fill="#0E5AA7"><path d="M12.3321111,7.13049316 C13.712823,7.13049316 14.8321111,8.24978129 14.8321111,9.63049316 C14.8321111,11.011205 13.712823,12.1304932 12.3321111,12.1304932 C10.9513993,12.1304932 9.83211114,11.011205 9.83211114,9.63049316 C9.83211114,8.24978129 10.9513993,7.13049316 12.3321111,7.13049316 Z M25.3699529,7.13049316 C26.7506648,7.13049316 27.8699529,8.24978129 27.8699529,9.63049316 C27.8699529,11.011205 26.7506648,12.1304932 25.3699529,12.1304932 C23.9892411,12.1304932 22.8699529,11.011205 22.8699529,9.63049316 C22.8699529,8.24978129 23.9892411,7.13049316 25.3699529,7.13049316 Z M12.3321111,8.13049316 C11.503684,8.13049316 10.8321111,8.80206604 10.8321111,9.63049316 C10.8321111,10.4589203 11.503684,11.1304932 12.3321111,11.1304932 C13.1605383,11.1304932 13.8321111,10.4589203 13.8321111,9.63049316 C13.8321111,8.80206604 13.1605383,8.13049316 12.3321111,8.13049316 Z M25.3699529,8.13049316 C24.5415258,8.13049316 23.8699529,8.80206604 23.8699529,9.63049316 C23.8699529,10.4589203 24.5415258,11.1304932 25.3699529,11.1304932 C26.1983801,11.1304932 26.8699529,10.4589203 26.8699529,9.63049316 C26.8699529,8.80206604 26.1983801,8.13049316 25.3699529,8.13049316 Z M21.6984441,-2.39808173e-14 L24.5497498,6.05401611 C25.779364,5.85402425 26.8344381,6.22600301 27.7149719,7.16995239 C27.6640483,7.2518514 27.5865057,7.36165412 27.4823444,7.49936055 L27.3745192,7.39605546 C26.8435404,6.92002331 26.14191,6.63049316 25.3726562,6.63049316 C23.715802,6.63049316 22.3726562,7.97363891 22.3726562,9.63049316 C22.3726562,9.71789291 22.3763937,9.80441972 22.3837175,9.8899225 L22.3726562,9.89538574 L15.3205311,9.89590935 C15.3281971,9.80845941 15.3321111,9.71993337 15.3321111,9.63049316 C15.3321111,7.97363891 13.9889654,6.63049316 12.3321111,6.63049316 C10.6752569,6.63049316 9.33211114,7.97363891 9.33211114,9.63049316 C9.33211114,9.71993337 9.33602513,9.80845941 9.34369118,9.89590935 L8.67140557,9.89538574 C8.58827223,8.96945375 8.74728915,8.08033429 9.14845635,7.22802734 C9.45938632,6.56743552 10.0124666,5.92398256 10.8076971,5.29766846 L10.8076971,4.32128906 L12.0594951,4.32113171 C13.4519247,4.32055477 14.4460943,4.31786237 16.2088201,4.30529785 C16.4385971,4.4317627 16.4385971,4.68286133 16.2088201,5.05859375 L15.9110296,5.62927246 L17.3377264,7.66601563 L22.1601013,7.66601563 C22.3249901,7.41937774 22.5237612,7.18382273 22.7564148,6.95935059 C22.95883,6.76405344 23.1941409,6.58761098 23.4623474,6.43002319 L21.76,1.845 L20.2634109,2.41241177 C20.155825,2.45320289 20.0376579,2.41487817 19.9729301,2.32625773 L19.9410184,2.26728054 C19.9002273,2.15969461 19.938552,2.04152748 20.0271724,1.97679977 L20.0861496,1.94488804 L21.585,1.375 L21.1324651,0.154663086 L21.6984441,-2.39808173e-14 Z M6.55,7.85 C6.90898509,7.85 7.2,8.14101491 7.2,8.5 C7.2,8.82635008 6.95949181,9.09652646 6.64605224,9.14295233 L6.55,9.15 L0.65,9.15 C0.291014913,9.15 -1.78923543e-12,8.85898509 -1.78923543e-12,8.5 C-1.78923543e-12,8.17364992 0.240508192,7.90347354 0.553947764,7.85704767 L0.65,7.85 L6.55,7.85 Z M6.55,5.85 C6.90898509,5.85 7.2,6.14101491 7.2,6.5 C7.2,6.82635008 6.95949181,7.09652646 6.64605224,7.14295233 L6.55,7.15 L1.65,7.15 C1.29101491,7.15 1,6.85898509 1,6.5 C1,6.17364992 1.24050819,5.90347354 1.55394776,5.85704767 L1.65,5.85 L6.55,5.85 Z M6.55,3.85 C6.90898509,3.85 7.2,4.14101491 7.2,4.5 C7.2,4.82635008 6.95949181,5.09652646 6.64605224,5.14295233 L6.55,5.15 L2.65,5.15 C2.29101491,5.15 2,4.85898509 2,4.5 C2,4.17364992 2.24050819,3.90347354 2.55394776,3.85704767 L2.65,3.85 L6.55,3.85 Z M14.8699529,2.41088867 L14.8699529,3.78991699 L8.86995293,3.78991699 L8.86995293,2.41088867 L14.8699529,2.41088867 Z M14.8699529,1.16369629 L14.8699529,2.1786499 L8.86995293,2.1786499 L8.86995293,1.16369629 C10.3699529,0.663696289 13.3699529,0.663696289 14.8699529,1.16369629 Z"></path><path d="M12.65,8 C13.7545695,8 14.65,8.8954305 14.65,10 C14.65,11.1045695 13.7545695,12 12.65,12 C11.5454305,12 10.65,11.1045695 10.65,10 C10.65,8.8954305 11.5454305,8 12.65,8 Z M25.65,8 C26.7545695,8 27.65,8.8954305 27.65,10 C27.65,11.1045695 26.7545695,12 25.65,12 C24.5454305,12 23.65,11.1045695 23.65,10 C23.65,8.8954305 24.5454305,8 25.65,8 Z" fill-opacity="0.1"></path></g></g></g></svg>
        <span  class="badge bg-primary rounded-pill fl_right">314</span>
      </label>

    </div>

      </div>
    </div>
  </div>
  <!-- /item -->

    <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne7" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
       Deals
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne7" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">

    <div class="list-group">
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    Today's Deals
  </label>
</div>
      </div>
    </div>
  </div>


  <!-- /item -->
    <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne6" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Bulk
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne6" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">

     <div class="list-group">
      <label class="list-group-item">
        <input class="form-check-input me-1" type="checkbox" value="" />

        <svg data-testid="Bulk" width="18" height="18" viewBox="0 0 18 18" class="inline-dispaly"><g fill="none" fill-rule="evenodd"><g transform="translate(-2 -2)" fill="#ee2527"><path d="m11 2c4.9706 0 9 4.0294 9 9 0 4.9706-4.0294 9-9 9-4.9706 0-9-4.0294-9-9 0-4.9706 4.0294-9 9-9zm6 6.3333-5.0804 2.8371-0.077563 5.8296 5.0804-2.8371 0.077563-5.8296zm-11.923 0-0.076534 5.7522 4.9364 2.9145 0.076534-5.7522-4.9364-2.9145zm5.8981-4.3333-5.3114 2.9661 5.2304 3.088 5.3114-2.9661-5.2304-3.088z"></path></g></g></svg>
        <p data-testid="trolly-text" font-weight="700" style="color: #ee2527"  class="inline-dispaly">BULK - SAVE</p>
        <span  class="badge bg-primary rounded-pill fl_right">14</span>
      </label>

    </div>
      </div>
    </div>
  </div>
<!-- item -->

  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne5" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Category
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne5" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">

    <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Baking Ingredients
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Ready Mixes
    <span class="badge bg-primary rounded-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Cake Decorating & Spreads
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
   <li class="list-group-item d-flex justify-content-between align-items-center">
    Food Colouring & Essences
    <span class="badge bg-primary rounded-pill">15</span>
  </li>
   <li class="list-group-item d-flex justify-content-between align-items-center">
   Jellies
    <span class="badge bg-primary rounded-pill">78</span>
  </li>
   <li class="list-group-item d-flex justify-content-between align-items-center">
    Creams
    <span class="badge bg-primary rounded-pill">34</span>
  </li>
</ul>
      </div>
    </div>
  </div>

<!-- /item -->
<div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne4" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Brand
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne4" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">

    <div class="list-group">
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    Al Alali
     <span  class="badge bg-primary rounded-pill fl_right">31</span>
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    Biw Biw
     <span  class="badge bg-primary rounded-pill fl_right">34</span>
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    Dr Oetker
     <span  class="badge bg-primary rounded-pill fl_right">31</span>
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    Foster Clarks
     <span  class="badge bg-primary rounded-pill fl_right">14</span>
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    Deliket
     <span  class="badge bg-primary rounded-pill fl_right">34</span>
  </label>
</div>
      </div>
    </div>
  </div>

<!-- /item -->
<!-- /item -->
<div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne3" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Origin Country
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne3" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">

    <div class="list-group">
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    United States of America
     <span  class="badge bg-primary rounded-pill fl_right">31</span>
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    France
     <span  class="badge bg-primary rounded-pill fl_right">34</span>
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    United Arab Emirates
     <span  class="badge bg-primary rounded-pill fl_right">31</span>
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    United Kingdom
     <span  class="badge bg-primary rounded-pill fl_right">14</span>
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
   Kingdom of Saudi Arabia
     <span  class="badge bg-primary rounded-pill fl_right">34</span>
  </label>
</div>
      </div>
    </div>
  </div>
  <!-- /item -->
<div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne2" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Size
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne2" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">

    <div class="list-group">
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
   500g
     <span  class="badge bg-primary rounded-pill fl_right">31</span>
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    
200g
     <span  class="badge bg-primary rounded-pill fl_right">34</span>
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    
85g
     <span  class="badge bg-primary rounded-pill fl_right">31</span>
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    100g
     <span  class="badge bg-primary rounded-pill fl_right">14</span>
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" />
    80g
     <span  class="badge bg-primary rounded-pill fl_right">34</span>
  </label>
</div>
      </div>
    </div>
  </div>

  <!-- /item -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne1" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Shop By Price
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne1" class="accordion-collapse collapse show" 
    aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">

<div class="selector">
    <div class="price-slider">
        <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            <span tabindex="307" class="ui-slider-handle ui-corner-all ui-state-default"></span>
        </div>
        <span id="min-price" data-currency="AED" class="slider-price">1</span> 
        <span class="seperator">to</span>
        <span id="max-price" data-currency="AED" data-max="307"  class="slider-price">307</span>
    </div> 
</div>

      </div>
    </div>
  </div>
</div>
  <!-- /accordion -->
    
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
    <div class="col-12" style="width: 100%;text-align: center;padding-top: 40px;">
        <button type="button" class="btn" style="background: #fff;">Load More</button>
  </div>
  </div>
  
</div>

</div>
</section>
 </div>
@endsection
@section('bottom_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
$(document).ready(function () {

$('#slider-range').slider({
  range: true, 
  min:1,
  max:307,
  step:1,
  slide: function( event, ui ) {
    $( "#min-price").html(ui.values[ 0 ]);
    
    suffix = '';

    if (ui.values[ 1 ] == $( "#max-price").data('max') )
    {
       suffix = '';
    }
    $( "#max-price").html(ui.values[ 1 ] + suffix);         
  }
});

});

</script>
@endsection