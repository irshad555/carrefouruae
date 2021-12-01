<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title></title>



       

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
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />

        <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->


         <!-- slick -->
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth > 992) {

    document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

        everyitem.addEventListener('mouseover', function(e){

            let el_link = this.querySelector('a[data-bs-toggle]');

            if(el_link != null){
                let nextEl = el_link.nextElementSibling;
                el_link.classList.add('show');
                nextEl.classList.add('show');
            }

        });
        everyitem.addEventListener('mouseleave', function(e){
            let el_link = this.querySelector('a[data-bs-toggle]');

            if(el_link != null){
                let nextEl = el_link.nextElementSibling;
                el_link.classList.remove('show');
                nextEl.classList.remove('show');
            }


        })
    });

}
// end if innerWidth
}); 

</script>

<style type="text/css">


</style>

<script type="text/javascript">
    window.addEventListener("resize", function() {
        "use strict"; window.location.reload(); 
    });


    document.addEventListener("DOMContentLoaded", function(){
        
        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element){
            element.addEventListener('click', function (e) {
              e.stopPropagation();
            });
        });

        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

            // close all inner dropdowns when parent is closed
            document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
                everydropdown.addEventListener('hidden.bs.dropdown', function () {
                    // after dropdown is hidden, then find all submenus
                      this.querySelectorAll('.megasubmenu').forEach(function(everysubmenu){
                        // hide every submenu as well
                        everysubmenu.style.display = 'none';
                      });
                })
            });

            document.querySelectorAll('.has-megasubmenu a').forEach(function(element){
                element.addEventListener('click', function (e) {
        
                    let nextEl = this.nextElementSibling;
                    if(nextEl && nextEl.classList.contains('megasubmenu')) {    
                        // prevent opening link if link needs to open dropdown
                        e.preventDefault();

                        if(nextEl.style.display == 'block'){
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }

                    }
                });
            })
        }
        // end if innerWidth
    }); 
    // DOMContentLoaded  end
</script>
    </head>
    <body>
        <!-- Main Wrapper -->
        <div class="main-wrapper">
            <!-- Header -->
            <div class="header-nav">
                <header>
                    <nav class="navbar navbar-expand-lg fixed-top navbar-light custom-nav">
                        <div class="container nav-div">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand nav-div-a" href="#">
                                DASBAZAR
                            </a>

                            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                <a class="nav-address" aria-current="page" href="#">Hello,<br><i class="fa fa-map-marker" aria-hidden="true"></i><strong>Select Your Address</strong></a>

                                <form class="d-flex">
                                    <div class="input-group search-div">
                                        <input type="text" class="form-control col-md-6" aria-label="Text input with dropdown button" />

                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary bg-search-left" type="button"><i class="fas fa-search" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ul-nav-custom">
                                    <li class="nav-item dropdown has-megamenu">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Hello,sign in <br />
                                            <strong>Account & List</strong>
                                        </a>

                                        <div class="dropdown-menu megamenu nav-sign-li">
                                            <div class="row" >
                                                <div class="col-md-12 nav-sign-d12">
                                                <button type="button" class="btn nav-sign-btn btn-sm col-md-4">Sign in</button><br>
                                                <span>New customer?<a href="#">Start here.</a></span>
                                                </div>
                                                <div class="col-md-6 nav-sign-d61 nav-sign-li-a">
                                                    <ul>
                                                        <li><a href="">link </a></li>
                                                        <li><a href="">link </a></li>
                                                        <li><a href="">link </a></li>
                                                        <li><a href="">link </a></li>
                                                        <li><a href="">link </a></li>
                                                    </ul>

                                                </div>
                                                <div class="col-md-6 nav-sign-d62 nav-sign-li-a">
                                                     <ul>
                                                        <li><a href="">link </a></li>
                                                        <li><a href="">link </a></li>
                                                        <li><a href="">link </a></li>
                                                        <li><a href="">link </a></li>
                                                        <li><a href="">link </a></li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            Returns<br />
                                            <strong>&Orders</strong>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <svg data-testid="CartInverse" viewBox="0 0 24 24" class="css-ekjjru">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M5.75 20C6.7165 20 7.5 20.7835 7.5 21.75C7.5 22.7165 6.7165 23.5 5.75 23.5C4.7835 23.5 4 22.7165 4 21.75C4 20.7835 4.7835 20 5.75 20ZM19.75 20C20.7165 20 21.5 20.7835 21.5 21.75C21.5 22.7165 20.7165 23.5 19.75 23.5C18.7835 23.5 18 22.7165 18 21.75C18 20.7835 18.7835 20 19.75 20ZM4.5 0V4H21.7106L19.3356 13.5H4.5V14.75C4.5 15.3972 4.99187 15.9295 5.62219 15.9935L5.75 16H22.5V17.5H5.75C4.28747 17.5 3.0916 16.3583 3.00502 14.9175L3 14.75V1.5H0V0H4.5ZM19.789 5.5H4.5V12H18.164L19.789 5.5Z"
                                                    fill="white"
                                                ></path>
                                            </svg>
                                            <strong>Cart</strong>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
<nav class="navbar navbar-expand-lg fixed-top nav_scnd" style="top: 81px;">
<div class="container">
    <div class="collapse navbar-collapse" id="main_nav">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" style="color:black !important">All Categories</a>
            <ul class="dropdown-menu">
              <li class="has-megasubmenu">
                 <a class="dropdown-item" href="#"> Dropdown item 4 &raquo; </a>
                 <div class="megasubmenu dropdown-menu">
                   <div class="row">
                        <div class="col-6">
                                <h6 class="title">Title Menu One</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                        </div><!-- end col-3 -->
                        <div class="col-6">
                            <h6 class="title">Title Menu Two</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                        </div><!-- end col-3 -->
                    </div><!-- end row -->
                 </div>
              </li>
           
          
            </ul>
        </li>
        
    </ul>
        <ul class="navbar-nav menu-ul2">
       <li class="nav-item dropdown has-megamenu">
        <a class="nav-link " href="#">
         Beverages
        </a>
        <div class="dropdown-menu megamenu">
            <div class="row">
                <div class="col-md-3">
                    <h6 class="dropdown-item-head">Coffee</h6>
                     <a class="dropdown-item" href="#">Coffee Drinks</a>
                     <a class="dropdown-item" href="#">Cold Coffee</a>
                     <a class="dropdown-item" href="#">Decaffeinated Coffee</a>
                     <a class="dropdown-item" href="#">Ground Coffee & Beans</a>
                     <a class="dropdown-item" href="#">Instant Coffee & Sachets</a>
                     <a class="dropdown-item" href="#">Capsules</a>
                </div>
                 <div class="col-md-3">
                    <h6 class="dropdown-item-head">Juices</h6>
                     <a class="dropdown-item" href="#">Coffee Drinks</a>
                     <a class="dropdown-item" href="#">Cold Coffee</a>
                     <a class="dropdown-item" href="#">Decaffeinated Coffee</a>
                     <a class="dropdown-item" href="#">Ground Coffee & Beans</a>
                     <a class="dropdown-item" href="#">Instant Coffee & Sachets</a>
                     <a class="dropdown-item" href="#">Capsules</a>
                </div>
                 <div class="col-md-3">
                    <h6 class="dropdown-item-head">Tea</h6>
                     <a class="dropdown-item" href="#">Coffee Drinks</a>
                     <a class="dropdown-item" href="#">Cold Coffee</a>
                     <a class="dropdown-item" href="#">Decaffeinated Coffee</a>
                     <a class="dropdown-item" href="#">Ground Coffee & Beans</a>
                     <a class="dropdown-item" href="#">Instant Coffee & Sachets</a>
                     <a class="dropdown-item" href="#">Capsules</a>
                </div>
                   <div class="col-md-3">
                    <h6 class="dropdown-item-head">Water</h6>
                     <a class="dropdown-item" href="#">Coffee Drinks</a>
                     <a class="dropdown-item" href="#">Cold Coffee</a>
                     <a class="dropdown-item" href="#">Decaffeinated Coffee</a>
                     <a class="dropdown-item" href="#">Ground Coffee & Beans</a>
                     <a class="dropdown-item" href="#">Instant Coffee & Sachets</a>
                     <a class="dropdown-item" href="#">Capsules</a>
                </div>
            </div>
          
        </div>
      </li>
       <li class="nav-item dropdown has-megamenu">
        <a class="nav-link " href="#">
         Electronics & Appliances
        </a>
        <div class="dropdown-menu megamenu">
            <div class="row">
                <div class="col-md-3">
                    <h6 class="dropdown-item-head">Batteries & Power</h6>
                     <a class="dropdown-item" href="#">Batteries</a>
                     <a class="dropdown-item" href="#">Extension Leads & Cables</a>
                     <a class="dropdown-item" href="#">Cameras Accessories</a>
                     <a class="dropdown-item" href="#">Action & Instant Cameras</a>
                     <a class="dropdown-item" href="#">Cameras Accessories</a>
                     
                </div>
               <div class="col-md-3">
                  <h6 class="dropdown-item-head">Cameras & Camcorders</h6>
                 
                      <a class="dropdown-item" href="#">Power Adaptors & Sockets</a>
                      <a class="dropdown-item" href="#">Camcorders</a>
                      <a class="dropdown-item" href="#">Cameras Bags</a>
                      <a class="dropdown-item" href="#">Digital Cameras</a>
                      <a class="dropdown-item" href="#">Cameras Lenses, Filters & Flashes</a>
                      </div>
                 <div class="col-md-3">
                    <h6 class="dropdown-item-head">Gadgets</h6>
                     <a class="dropdown-item" href="#">Binoculars</a>
                     <a class="dropdown-item" href="#">Drones</a>
                     <a class="dropdown-item" href="#">Photo Frames</a>
                     
                    
                </div>
                   <div class="col-md-3">
                    <h6 class="dropdown-item-head">Small Appliances</h6>
                    <a class="dropdown-item" href="#">Accessories & Spare Parts</a>
                    <a class="dropdown-item" href="#">Coolers, Heaters & Air Treatment</a>
                    <a class="dropdown-item" href="#">Food Preparation</a>
                    <a class="dropdown-item" href="#">Irons & Steamers</a>
                    <a class="dropdown-item" href="#">Kettles & Coffee Machine</a>
                    <a class="dropdown-item" href="#">Microwave Ovens & Portable Hobs</a>
                </div>
                 <div class="col-md-3">
                    <h6 class="dropdown-item-head">Home Cinema & Audio</h6>
                    <a class="dropdown-item" href="#">Karaoke</a>
                    <a class="dropdown-item" href="#">Recording Devices</a>
                    <a class="dropdown-item" href="#">MP3 & MP4 Player</a>
                    <a class="dropdown-item" href="#">Speakers & Amplifiers</a>
                
                </div>
                   <div class="col-md-3">
                    <h6 class="dropdown-item-head">Home Phones</h6>
                <a class="dropdown-item" href="#">Corded Phones</a>
                <a class="dropdown-item" href="#">Cordless Phones</a>
                <a class="dropdown-item" href="#">Laptops, PCs</a>
                <a class="dropdown-item" href="#">Accessories & Peripherals</a>
                <a class="dropdown-item" href="#">Computer Cables & Adaptors</a>
                <a class="dropdown-item" href="#">Data Storage</a>

                </div>
            </div>
          
        </div>
      </li>
        <li class="nav-item dropdown has-megamenu">
        <a class="nav-link " href="#">
        Food Cupboard
        </a>
        <div class="dropdown-menu megamenu">
            <div class="row">
                <div class="col-md-3">
                    <h6 class="dropdown-item-head">heading</h6>
                     <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                     
                </div>
                 <div class="col-md-3">
                   <h6 class="dropdown-item-head">heading</h6>
                    <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                </div>
                 <div class="col-md-3">
                   <h6 class="dropdown-item-head">heading</h6>
                    <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                </div>
                   <div class="col-md-3">
                    <h6 class="dropdown-item-head">heading</h6>
                   <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                </div>
            </div>
          
        </div>
      </li>
        <li class="nav-item dropdown has-megamenu">
        <a class="nav-link " href="#">
        Smartphones, Tablets & Wearables
        </a>
        <div class="dropdown-menu megamenu">
            <div class="row">
                <div class="col-md-3">
                    <h6 class="dropdown-item-head">heading</h6>
                     <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                </div>
                 <div class="col-md-3">
                   <h6 class="dropdown-item-head">heading</h6>
                     <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                </div>
                 <div class="col-md-3">
                   <h6 class="dropdown-item-head">heading</h6>
                     <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                </div>
                 
            </div>
          
        </div>
      </li>
<li class="nav-item dropdown has-megamenu">
        <a class="nav-link " href="#">
        Fresh Food
        </a>
        <div class="dropdown-menu megamenu">
            <div class="row">
                <div class="col-md-3">
                   <h6 class="dropdown-item-head">heading</h6>
                     <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                </div>
                 <div class="col-md-3">
                   <h6 class="dropdown-item-head">heading</h6>
                     <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                </div>
                 <div class="col-md-3">
                   <h6 class="dropdown-item-head">heading</h6>
                     <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                </div>
                   <div class="col-md-3">
              <h6 class="dropdown-item-head">heading</h6>
                     <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                </div>
            </div>
          
        </div>
      </li>
      <li class="nav-item dropdown has-megamenu">
        <a class="nav-link " href="#">
        Baby Products
        </a>
        <div class="dropdown-menu megamenu">
            <div class="row">
                <div class="col-md-3">
                    <h6 class="dropdown-item-head">heading</h6>
                     <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                </div>
                 <div class="col-md-3">
                   <h6 class="dropdown-item-head">heading</h6>
                     <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                </div>
                 <div class="col-md-3">
                    <h6 class="dropdown-item-head">heading</h6>
                     <a class="dropdown-item" href="#">loreum </a>
                     <a class="dropdown-item" href="#">ipsm</a>
                </div>
                
            </div>
          
        </div>
      </li>

        </ul>
        <ul class="navbar-nav ms-auto menu-ul3">
            <li class="nav-item">
                <a class="nav-link menu-ul3-a1 inline-dispaly" href="#"> <svg data-testid="QuickBuy" viewBox="0 0 24 21" class="css-ekjjru"><path d="M22.9817 5.83424C24.3066 8.95462 24.3404 12.3503 23.0728 15.3954C22.2514 17.3688 20.921 19.056 19.2284 20.2965L19.8155 21.3441L16.2925 21.2104L18.0527 18.1984L18.634 19.2356C20.1184 18.1186 21.2608 16.6362 21.9847 14.8997C23.1276 12.151 23.0985 9.08545 21.9015 6.26631L22.9817 5.83424ZM18.3004 6.95135V13.8965L12.2864 17.3692L12.2863 10.4239L18.3004 6.95135ZM5.90253 6.95135L8.33242 8.35423V10.2613L8.36127 10.377L8.41485 10.2917L8.46132 10.4328L8.53635 10.3385L8.56932 10.4809L8.63639 10.3906L8.68314 10.5384L8.75391 10.4694L8.80024 10.6042L8.88167 10.5484L8.91947 10.6792L8.9982 10.6102L9.04296 10.7408L9.10264 10.6619L9.16219 10.7968L9.20638 10.7139V8.85899L11.9165 10.4239L11.9164 17.3692L5.90239 13.8965L5.90253 6.95135ZM3.92613 0L7.44983 0.0535538L5.75762 3.10737L5.15444 2.08368C3.77729 3.17255 2.69242 4.61394 2.00357 6.26696C0.839656 9.0642 0.908694 12.2976 2.19158 15.14L1.12298 15.5982C-0.298476 12.4522 -0.373636 8.8699 0.915463 5.77122C1.68737 3.91567 2.90971 2.30688 4.46751 1.08979L4.53681 1.03609L3.92613 0ZM15.4123 5.07028L18.1154 6.63104L12.1014 10.1037L9.39809 8.54295L15.4123 5.07028ZM12.1014 3.15851L14.5178 4.55386L8.50381 8.02639L6.08727 6.63104L12.1014 3.15851Z" fill="#E3870F"></path></svg>
                    <span class="inline-dispaly">  <p>Quick</p><p>BUY AGAIN</p></span>
       </a></li>
            <li class="nav-item">
                <a class="nav-link menu-ul3-a2 inline-dispaly" href="#"><svg data-testid="ShopNow" viewBox="0 0 24 18" class="css-ekjjru"><path d="M20.2864 16.391C19.122 16.2453 18.183 15.3279 18.0346 14.1941C17.902 13.1817 18.3823 12.2654 19.1616 11.7476L20.2955 14.0197C20.36 14.1499 20.4937 14.225 20.6319 14.225C20.727 14.225 20.8233 14.1897 20.9026 14.1135C21.017 14.0031 21.0329 13.8287 20.9626 13.6873L19.8345 11.4286C20.1867 11.3182 20.5707 11.2784 20.9706 11.3281C22.1441 11.4738 23.091 12.4001 23.2326 13.5449C23.4376 15.2064 21.9934 16.6052 20.2864 16.391ZM18.6055 9.54847C16.9947 10.2683 15.9175 11.7918 15.7816 13.4953H1.19225C1.38028 11.6549 2.97741 10.212 4.91548 10.212H7.53432C7.54338 10.212 7.55017 10.2109 7.5581 10.2098C7.7416 11.6483 9.00345 12.7655 10.5281 12.7655H13.148C14.7961 12.7655 16.1384 11.4595 16.1418 9.85317C16.1463 9.68095 16.1803 7.35482 14.7191 5.47141H16.69L19.3066 9.29675C19.0676 9.36299 18.8331 9.44579 18.6055 9.54847ZM4.91548 16.4131C3.59814 16.4131 2.50507 15.4604 2.3227 14.225H7.50713C7.32476 15.4604 6.23283 16.4131 4.91548 16.4131ZM2.29552 6.92979C2.04858 6.92979 1.85715 6.69684 1.94098 6.44624C1.99082 6.29388 2.14826 6.20115 2.31251 6.20115H10.5122C10.6753 6.20115 10.8328 6.29388 10.8826 6.44624C10.9653 6.69684 10.775 6.92979 10.5281 6.92979H2.29552ZM14.2706 3.28218H15.1677C15.1688 3.28218 15.1699 3.28329 15.1711 3.28329L15.1722 3.28218H16.5156V4.74166H14.2706V3.28218ZM21.0351 10.6006C20.4948 10.5376 19.976 10.6039 19.5048 10.7673L19.1752 10.1082C19.6396 9.93597 20.1278 9.84765 20.6319 9.84765C21.6287 9.84765 22.5881 10.1987 23.3379 10.8368C23.4625 10.9417 23.6426 10.9792 23.7854 10.8964C24.0198 10.7618 24.0357 10.4637 23.8499 10.3036C22.9619 9.53963 21.819 9.11901 20.6319 9.11901C20.454 9.11901 20.2773 9.12784 20.1029 9.14661L17.2643 4.99558V2.91786C17.2643 2.71694 17.0967 2.55354 16.8894 2.55354H15.4044L14.2332 0.205343C14.1698 0.0805917 14.0395 0 13.8956 0H12.4152C12.2521 0 12.0935 0.0938397 12.0448 0.246191C11.9621 0.497902 12.1535 0.729742 12.3993 0.729742H13.6623L14.573 2.55354H13.8956C13.6895 2.55354 13.5218 2.71694 13.5218 2.91786V5.10598C13.5218 5.20866 13.5649 5.30029 13.634 5.36653C15.4531 7.11195 15.3942 9.81011 15.3931 9.83661V9.85317C15.4225 11.0609 14.3759 12.0369 13.1367 12.0369H10.5915C9.49844 12.0369 8.51411 11.3016 8.32042 10.2517C8.06669 8.88386 9.13031 7.68602 10.4828 7.65953C11.0038 7.64959 11.4875 7.33937 11.6144 6.84588C11.8012 6.12166 11.2417 5.47141 10.5281 5.47141H2.33969C1.80052 5.47141 1.30439 5.82137 1.19678 6.33694C1.04953 7.03908 1.5989 7.65953 2.29552 7.65953H2.8664C1.2908 8.62663 0.587383 9.99338 0.274754 11.083C-0.155677 12.5834 0.0459459 13.864 0.0550076 13.9181C0.0844582 14.0947 0.240773 14.225 0.424272 14.225H1.56831C1.75521 15.8633 3.1847 17.1429 4.91548 17.1429C6.64627 17.1429 8.07462 15.8633 8.26152 14.225H16.1418C16.3491 14.225 16.5156 14.0594 16.5156 13.8563C16.5167 12.4487 17.2836 11.1471 18.5024 10.4272L18.832 11.0874C17.7729 11.7432 17.1114 12.9598 17.2938 14.3045C17.492 15.7573 18.6961 16.9265 20.1867 17.1142C22.3831 17.3902 24.2407 15.5884 23.9745 13.4522C23.7899 11.9684 22.5564 10.775 21.0351 10.6006Z" fill="#0E5AA7"></path></svg>
                    <span class="inline-dispaly"><p>Shop</p><p>NOW ITEMS</p></span>
            </a>
               
            </li>
        </ul>
    </div> <!-- navbar-collapse.// -->
</div> <!-- container-fluid.// -->
</nav>
             
                </header>
                <!-- /Header -->
            </div>
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
       
        <div class="row  slider slider-nav">        
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
            <div class="col-md-2 border sl_div item" >
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

                <div class="sl_bottom col-md-2 border ">
                    <input value="1" type="number" step="1" min="1" name="" />
                    <button class="btn btn-danger">Add</button>
                </div>
            </div>
            <!--  -->
            <div class="col-md-2 border sl_div item" >
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
            <div class="col-md-2 border sl_div item" >
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
            <div class="col-md-2 border sl_div item" >
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
            <div class="col-md-2 border sl_div item" >
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
            <div class="col-md-2 border sl_div item" >
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
            <div class="col-md-2 border sl_div item" >
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

<!-- <section>
<div class="main" style="width:500px;display:block;margin:0 auto;">
  <div class="slider slider-nav">
    <div><h3>1</h3></div>
    <div><h3>2</h3></div>
    <div><h3>3</h3></div>
    <div><h3>4</h3></div>
    <div><h3>5</h3></div>
  </div>
</div>
</section> -->


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
                                    </div class="inline-dispaly div_inner">
                                       
                                   
                                 
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
                                        <div >
                                        <img src="{{asset('assets/frontend/img/kit_1.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                      <div >
                                    <span> <h1 class="h-h1" style="font-size: .6rem;">TVs & Projectors</h1></span>
                                    
                                        </div>

                                    </a>
                            </div>
                              <div class="col-md-2 border background-div text-align">
                              
                                    <a class="style-a" href="">
                                        <div >
                                        <img src="{{asset('assets/frontend/img/kit_2.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                      <div >
                                    <span> <h1 class="h-h1" style="font-size: .6rem;">Built Ins</h1></span>
                                    
                                        </div>

                                    </a>
                            </div>
                              <div class="col-md-2 border background-div text-align">
                              
                                    <a class="style-a" href="">
                                        <div >
                                        <img src="{{asset('assets/frontend/img/kit_3.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                      <div >
                                    <span> <h1 class="h-h1" style="font-size: .6rem;">Washers & Dryers</h1></span>
                                    
                                        </div>

                                    </a>
                            </div>
                              <div class="col-md-2 border background-div text-align">
                              
                                    <a class="style-a" href="">
                                        <div >
                                        <img src="{{asset('assets/frontend/img/kit_4.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                      <div >
                                    <span> <h1 class="h-h1" style="font-size: .6rem;">Iron's & Steamers</h1></span>
                                    
                                        </div>

                                    </a>
                            </div>
                              <div class="col-md-2 border background-div text-align">
                              
                                    <a class="style-a" href="">
                                        <div >
                                        <img src="{{asset('assets/frontend/img/kit_5.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                      <div >
                                    <span> <h1 class="h-h1" style="font-size: .6rem;">Vacuum Cleaners</h1></span>
                                    
                                        </div>

                                    </a>
                            </div>
                              <div class="col-md-2 border background-div text-align">
                              
                                    <a class="style-a" href="">
                                        <div >
                                        <img src="{{asset('assets/frontend/img/kit_6.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                      <div >
                                    <span> <h1 class="h-h1" style="font-size: .6rem;">Coolers, Heaters & Air Treatment</h1></span>
                                    
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
                                        <div >
                                        <img src="{{asset('assets/frontend/img/in_1.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                      <div >
                                    <span> <h1 class="h-h1" style="font-size: .6rem;">Kitchen & Dining</h1></span>
                                    
                                        </div>

                                    </a>
                            </div>
                              <div class="col-md-2 border background-div text-align">
                              
                                    <a class="style-a" href="">
                                        <div >
                                        <img src="{{asset('assets/frontend/img/in_2.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                      <div >
                                    <span> <h1 class="h-h1" style="font-size: .6rem;">Bathroom & More</h1></span>
                                    
                                        </div>

                                    </a>
                            </div>
                              <div class="col-md-2 border background-div text-align">
                              
                                    <a class="style-a" href="">
                                        <div >
                                        <img src="{{asset('assets/frontend/img/in_3.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                      <div >
                                    <span> <h1 class="h-h1" style="font-size: .6rem;">Bedroom</h1></span>
                                    
                                        </div>

                                    </a>
                            </div>
                              <div class="col-md-2 border background-div text-align">
                              
                                    <a class="style-a" href="">
                                        <div >
                                        <img src="{{asset('assets/frontend/img/in_4.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                      <div >
                                    <span> <h1 class="h-h1" style="font-size: .6rem;">Furniture & Decor</h1></span>
                                    
                                        </div>

                                    </a>
                            </div>
                              <div class="col-md-2 border background-div text-align">
                              
                                    <a class="style-a" href="">
                                        <div >
                                        <img src="{{asset('assets/frontend/img/in_5.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                      <div >
                                    <span> <h1 class="h-h1" style="font-size: .6rem;">Camping, Barbeque & Grill</h1></span>
                                    
                                        </div>

                                    </a>
                            </div>
                              <div class="col-md-2 border background-div text-align">
                              
                                    <a class="style-a" href="">
                                        <div >
                                        <img src="{{asset('assets/frontend/img/in_6.webp')}}" class="d-block w-100" alt="electro-img" />
                                    </div>
                                      <div >
                                    <span> <h1 class="h-h1" style="font-size: .6rem;">Garden Equipment</h1></span>
                                    
                                        </div>

                                    </a>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <!-- /Main body -->
            <footer class="footer">
                <div class="row footer-top container-fluid">
                    <span><a href="#">BACK TO TOP</a></span>
                </div>
                <div class="footer-bottom container-fluid">
                    <div class="row">
                        <div class="col-lg-2 footer-col">
                            <div class="footer-brand">
                                <!-- <a class="footer-brand-a" href="#">
                                    
                                </a> -->

                            <a class="navbar-brand nav-div-a" href="#">
                                DASBAZAR
                            </a>
                            </div>
                            <h6 class="social-h6">Stay in touch with us</h6>
                            <ul class="social-links">
                                <li>
                                    <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                </li>
                            </ul>
<!-- 
                            <div class="consumer-logo">
                                
                            </div> -->
                        </div>

                        <div class="col-lg-2 footer-col">
                            <h6 class="head-h6">Customer service</h6>
                            <ul class="footer_list">
                                <li><a href="">Service & Warranty</a></li>
                                <li><a href="">Return & Exchange</a></li>
                                <li><a href="">Secured Online Payments</a></li>
                                <li><a href="">Cash on Delivery</a></li>
                                <li><a href="">Shipping & Delivery</a></li>
                                <li><a href="">Valet Trolley & Home Delivery</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 footer-col">
                            <h6 class="head-h6">About Us</h6>
                            <ul class="footer_list">
                                <li><a href="">About Majid Al Futtaim</a></li>
                                <li><a href="">About Carrefou</a></li>
                                <li><a href="">About Majid Al Futtaim Carrefour &amp; Society</a></li>
                                <li><a href="">Carrefour brands</a></li>
                                <li><a href="">Newsletter</a></li>
                                <li><a href="">News &amp; Press Releases</a></li>
                                <li><a href="">Ways to Shop</a></li>
                                <li><a href="">Sell With Us</a></li>
                                <li><a href="">Advertise With Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 footer-col">
                            <h6 class="head-h6">Helping you save</h6>
                            <ul class="footer_list">
                                <li><a href="">Extended Warranty Retail</a></li>
                                <li><a href="">Easy Payment Plan</a></li>
                                <li><a href="">SHARE Rewards</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 footer-col">
                            <h6 class="head-h6">Help & Support</h6>
                            <ul class="footer_list">
                                <li><a href="">Privacy policy</a></li>
                                <li><a href="">Anti-Fraud Disclaimer</a></li>
                                <li><a href="">Responsible Disclosure Policy</a></li>
                                <li><a href="">Terms & Conditions</a></li>
                                <li><a href="">FAQs</a></li>
                                <li><a href="">Find A Store</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row footer-app container-fluid">
                    <div class="col-lg-12 col-md-12">
                        <ul class="app_link">
                            <li class="list_item"><h6>Get the Dubai Drive app</h6></li>
                            <li class="list_item">
                                <a class="btn" href=""><img src="{{asset('assets/frontend/img/app-store.png')}}" /></a>
                            </li>
                            <li class="list_item">
                                <a class="btn" href=""><img src="{{asset('assets/frontend/img/google-play.png')}}" /></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row footer-last container-fluid">
                    <div class="col-md-6 footer-last-sub">
                        
                           
                    </div>
                    <div class="col-md-6 footer-last-sub2">
                        <span>©2021 Dasbazar. All rights reserved.</span>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /Main Wrapper -->

        <script>
            $(document).ready(function () {
                $("#myCarousel").carousel({
                    interval: 5000,
                });
            });
        </script>
    

        <!-- Production version -->
<!--         <script src="https://unpkg.com/@popperjs/core@2"></script> -->


<script>
        $(document).ready(function () {
            console.log("DSfsda");
            $('.slider-nav').slick({
 
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow:6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows:true,
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 1
          }
        },
            {
          breakpoint: 1024,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 1
          }
        },
            {
          breakpoint: 992,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1
          }
        },

        {
          breakpoint: 768,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },

        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
           breakpoint: 400,
           settings: {
              arrows: false,
              slidesToShow: 2,
              slidesToScroll: 1
           },

        }]
    });



        });
    </script>


    </body>
</html>
