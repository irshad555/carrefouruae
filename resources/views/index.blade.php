<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>
	<!-- Bootstrap CSS -->
<!-- 	<link rel="stylesheet" href="{{asset('plugins/bootstrap-5.0.2/css/bootstrap.min.css')}}"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('plugins/fontawesome-free-5.15.4/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/fontawesome-free-5.15.4/css/all.min.css')}}">

	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

	<!-- Scripts -->
	<!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
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
	      <svg data-testid="CarrefourLogo" viewBox="0 0 730.69 182.35" class="css-1bah3pf"><path fill="#fff" d="M786.84,73.58v34H615.08V63.74c0-3.44-1.79-5.16-5.38-5.66V56.61a24.11,24.11,0,0,0,16.94-7.14h1.52l-1,11.81V95.73H774.53V85.64H727.06V65.47l37.2-16,1.8,3.68L738.61,71.62v2Zm-412,22.15L374.61,93a25.82,25.82,0,0,0-2.32-7.87c-4.62.75-7.7,3.94-9,10.59Zm161.31-16-.26-11.81c-7.46,1.48-11.29,4.19-11.29,7.88,0,2.71,1.54,3.93,4.63,3.93Zm13.34,27.81H386.93l-.52,3.19a20.71,20.71,0,0,1-7.7,11.31,23.56,23.56,0,0,1-13.09,4.18,21.63,21.63,0,0,1-14.11-4.67c-4.35-3.19-7.18-7.87-8.22-14h2.06A16.28,16.28,0,0,0,351,115.4a14.63,14.63,0,0,0,18,.24,12.33,12.33,0,0,0,4.87-8.1H351.26L351,99.9l1-7.37a28.55,28.55,0,0,1,4.89-10.82,23.89,23.89,0,0,1,8.2-5.67,49.52,49.52,0,0,1,12.58-3.93q6.9,6.63,9.24,22.88v.74h150V91.55h-9.75a15.39,15.39,0,0,1-10-3.46,12.46,12.46,0,0,1-4.62-9.58c0-5.67,3.86-11.07,11.57-15.75,7.44-4.43,15.88-6.65,25.65-6.65Zm42.18-26.82-.75-3.94A24.23,24.23,0,0,1,575,89.32v1.24a11.61,11.61,0,0,1,8,4,14,14,0,0,1,3.07,8.6c0,4.66-1.79,8.11-4.62,11.31a15.8,15.8,0,0,1-11.28,4.43,20.46,20.46,0,0,1-12.82-4.18,20.49,20.49,0,0,0,7.43,8.35,23.06,23.06,0,0,0,12.31,3.7c5.91,0,10.78-2.22,15.14-6.65,4.88-4.92,7.2-10.82,7.2-18.19,0-4.19-1.3-8.62-3.59-13.3Zm-261.2,0-.78-3.94a24.73,24.73,0,0,1-15.9,12.54v1.24a11.58,11.58,0,0,1,7.94,4,12.59,12.59,0,0,1,3.09,8.6,15.23,15.23,0,0,1-4.63,11.31,15.82,15.82,0,0,1-11.28,4.43,19.75,19.75,0,0,1-12.58-4.18,16.8,16.8,0,0,0,7.18,8.35,22.45,22.45,0,0,0,12.33,3.7c5.63,0,10.78-2.22,15.39-6.65a26.48,26.48,0,0,0,6.92-18.19q0-5.91-3.85-13.3Zm284.6,26.81H786.84M519,54.64h.25a8.44,8.44,0,0,0,4.9-2,6.91,6.91,0,0,0,1.78-4.42,5.94,5.94,0,0,0-2-4.18,7.57,7.57,0,0,0-4.88-2,6.35,6.35,0,0,0-4.35,2,6,6,0,0,0-2.07,4.18,6.19,6.19,0,0,0,2.07,4.67A6.09,6.09,0,0,0,519,54.64M643.45,168.52c8.27,0,15.47,2.81,20.55,7.72s8.1,11.9,8.1,20.14a27.39,27.39,0,0,1-8.35,20.26A29.86,29.86,0,0,1,643,224.45h0a29,29,0,0,1-20.18-7.75,27.49,27.49,0,0,1-8.39-20.32c0-16.57,13.68-27.84,29.08-27.86m.09,47.33c7.48,0,12.91-6.32,13-18.67,0-6.45-1.48-11.61-3.93-15.1a11.45,11.45,0,0,0-9.62-5.37c-7.78,0-12.61,6.72-12.66,18.14,0,14.67,6.7,21,13.26,21m134.24-47.21c-4.81,0-9.68,3.18-12.75,8-1.06-4.12-3.61-7.32-8.29-7.31a14.23,14.23,0,0,0-3.87.59c-3.42,1-8.53,3.33-8.62,7.79a6.25,6.25,0,0,0,.51,2.4l.2.44.49-.07a14.82,14.82,0,0,1,2.61-.27c3.26.09,4.17,1.4,4.27,5.15v22.35c0,4.42-.56,6-2,7.12a9.19,9.19,0,0,1-3.8,1.65l-.3,0-.13.27a5.93,5.93,0,0,0-.65,2.42c0,1.92,1.56,3.17,4,3.8a42.66,42.66,0,0,0,10.62.93c4.56,0,7.91-.23,10.19-.89s3.7-1.84,3.68-3.64a6.28,6.28,0,0,0-.72-2.62l-.13-.27-.3,0c-1-.18-3.73-.66-5.09-1.65s-1.95-2.71-2-7.12V194.21c0-11,3.77-14.18,6.42-15a7.16,7.16,0,0,0,7.22,5.41,7.63,7.63,0,0,0,7.49-7.8c0-5.36-4.54-8.17-9.06-8.17m-313.92.09c-4.79,0-9.68,3.14-12.76,7.89-1.11-4.06-3.64-7.22-8.35-7.21a13.87,13.87,0,0,0-3.8.59c-3.46,1-8.57,3.31-8.65,7.76a6.23,6.23,0,0,0,.52,2.43l.18.44.52-.07a13.73,13.73,0,0,1,2.58-.28c3.28.09,4.19,1.41,4.31,5.16v22.34c0,4.43-.58,6-2,7.15a10,10,0,0,1-3.85,1.63l-.31.05-.13.27a5.6,5.6,0,0,0-.65,2.42c0,1.89,1.54,3.16,3.95,3.8a43.3,43.3,0,0,0,10.63.93c4.56,0,7.93-.24,10.22-.89s3.72-1.85,3.7-3.66a6,6,0,0,0-.71-2.6l-.12-.27-.3-.05c-1-.18-3.78-.66-5.08-1.65s-2.06-2.71-2.08-7.13V194.32c.05-11,3.84-14.2,6.51-15a7.08,7.08,0,0,0,7.16,5.4,7.63,7.63,0,0,0,7.55-7.79c0-5.37-4.6-8.18-9.06-8.18m275.56,45.32-.45.06c-.5,0-.94.06-1.37.06-4-.06-5.46-1.93-5.58-6.08,0-1,.12-4.2.12-10.28,0-14.38.18-17.83.18-19.76a10,10,0,0,0-2-6.64c-1.43-1.68-3.66-2.61-6.7-2.61a26.31,26.31,0,0,0-3.71.39c-3.74.75-10.07,3.31-10.19,8.08a5.44,5.44,0,0,0,.45,2.13l.18.41.47,0a16,16,0,0,1,1.65-.1c3.87.1,5.2,1.46,5.3,5.48v13.66c0,3.52-.62,7.17-2.32,9.9s-4.4,4.52-8.81,4.54c-4.07,0-6.29-1.44-7.75-4.42S697,201.17,697,195l.11-16.89a10.11,10.11,0,0,0-2-6.65c-1.41-1.68-3.65-2.61-6.68-2.61a26.44,26.44,0,0,0-3.72.39c-3.72.75-10,3.31-10.17,8.08a5.62,5.62,0,0,0,.45,2.13l.17.41.47,0a16.19,16.19,0,0,1,1.65-.1c3.87.11,5.19,1.46,5.31,5.48V195c0,10.27,0,17.5,5,23.19,3.25,3.67,8.35,5.88,14.34,5.88A20.87,20.87,0,0,0,716,218.71c1-.91,1.67-1.57,2.24-2.18a13.68,13.68,0,0,0,2.05,5.06c1.21,1.61,3.12,2.57,6,2.57h.1a25.07,25.07,0,0,0,3.47-.38c3.67-.7,10-2.56,10.2-7.23a5.73,5.73,0,0,0-.46-2.08ZM569.24,196.36h-34.8c.58,9.68,7,16.45,18.26,16.49,6.9,0,12.22-3.62,14-5.79l.37-.46.48.35a4.8,4.8,0,0,1,2.06,4.35c0,5.58-6.87,12.72-22,12.73-15.41,0-27.93-11.75-28-27.08,0-8.39,2.88-15.63,7.94-20.78S539.83,168,548.38,168c7.79,0,13.56,2.75,17.34,6.7a20.06,20.06,0,0,1,5.59,13.77,14.92,14.92,0,0,1-1.89,7.58ZM556.74,188a4.36,4.36,0,0,0,.26-2c-.1-5.1-4.25-9.81-10.63-9.81-8,0-11.3,6.15-11.8,12.36h20.54c1.11,0,1.4-.27,1.63-.59m55.19-17.81H597.76v-8.45c0-3,.38-5.7,1.53-7.51s3-2.91,6.3-2.94a8.88,8.88,0,0,1,5.32,1.49,7.25,7.25,0,0,0-1.22,3.89c0,3.81,3.5,6.81,7.25,6.83a7.31,7.31,0,0,0,7.44-7.42c0-7.64-9-12.39-19.7-12.4-8.51,0-14.09,3.28-17.3,8.05-2.09,3-3.63,7.46-3.63,15.32v3.25h-3.61c-2.88,0-5.2,1.91-5.21,4.76a7,7,0,0,0,.64,2.77l.14.34,8.25.27v29.36c0,4.43-.58,6-2,7.14a9.41,9.41,0,0,1-3.83,1.64l-.32.05-.14.27a5.63,5.63,0,0,0-.62,2.41c0,1.91,1.55,3.16,4,3.8a42.51,42.51,0,0,0,10.67.95,45.13,45.13,0,0,0,11.12-1c2.58-.67,4.31-1.94,4.31-3.95a5,5,0,0,0-.59-2.22l-.12-.28-.31-.05c-1-.17-4.53-.69-5.77-1.64-1.42-1.15-2.18-2.74-2.18-7.14V178.65c1.73,0,4.07.2,6.42.2a31.11,31.11,0,0,0,3.18-.11,5.33,5.33,0,0,0,5-5.38,7.24,7.24,0,0,0-.63-2.83Zm-101.35-1.44c-4.8,0-9.69,3.14-12.76,7.9-1.1-4.07-3.65-7.23-8.35-7.22a13.88,13.88,0,0,0-3.81.59c-3.45,1-8.56,3.31-8.65,7.76a6.25,6.25,0,0,0,.53,2.43l.19.44.5-.07a13.92,13.92,0,0,1,2.6-.28c3.26.09,4.18,1.41,4.31,5.16v22.34c0,4.43-.6,6-2,7.15a9.74,9.74,0,0,1-3.83,1.63l-.3.05-.14.27a6.08,6.08,0,0,0-.66,2.42c0,1.89,1.55,3.16,4,3.8a43.15,43.15,0,0,0,10.62.93c4.55,0,7.94-.24,10.22-.89s3.71-1.85,3.69-3.66a6.2,6.2,0,0,0-.69-2.6l-.14-.27-.3-.05c-1-.18-3.77-.66-5.07-1.65s-2.05-2.71-2.08-7.13V194.32c0-11,3.84-14.2,6.52-15a7.05,7.05,0,0,0,7.14,5.4,7.64,7.64,0,0,0,7.56-7.79c0-5.37-4.61-8.18-9.06-8.18M354.11,193.1a9.22,9.22,0,0,0-6.16,2.22,8.12,8.12,0,0,0-2.61,6.19,8.77,8.77,0,0,0,2.89,6.3c-2.25,3.77-6.72,6.81-13.72,6.83-6,0-11.08-2.94-14.79-8.12s-5.93-12.61-5.93-21.42,2.13-16.29,5.75-21.48,8.62-8.15,14.57-8.16c7,0,11.47,3.1,13.73,6.85a8.89,8.89,0,0,0-2.9,6.34,8.07,8.07,0,0,0,2.61,6.16,9.07,9.07,0,0,0,6.17,2.22c4.75,0,8.27-4.12,8.28-9.42-.07-9.92-12.2-21.41-29.37-21.44A35.4,35.4,0,0,0,307.29,157c-6.68,6.86-11,16.63-11,28.21,0,12.09,4.38,21.8,11.16,28.45A36.34,36.34,0,0,0,333,223.93c17.17,0,29.3-11.45,29.37-21.45,0-5.28-3.53-9.38-8.28-9.38m64.14,17c.07,3.79,2.3,4.8,7.21,5.53l.56.07,0,.54c-.29,5.16-4.25,7.29-8.51,7.6-.37,0-.74,0-1.1,0a10.88,10.88,0,0,1-10.15-5.95c-2.62,2.12-8.57,6.09-16.26,6.09-11.4,0-20.08-7.38-20.11-17.46a14.85,14.85,0,0,1,6.58-12.52c4.13-2.92,9.88-4.45,16.55-4.45a32.12,32.12,0,0,1,11.46,2v-6c-.09-6-2.48-9.42-9.52-9.5a25.32,25.32,0,0,0-6.71,1.12,10.21,10.21,0,0,1,.37,2.61,7.6,7.6,0,0,1-1.93,5.22,7.22,7.22,0,0,1-5.41,2.19,7.08,7.08,0,0,1-7.17-7.12c.1-7.3,9.36-12.2,21.75-12.2,9.82,0,16,2.2,19.27,6.26,3,3.63,3.14,8.93,3.14,16.43V210.1m-13.79-8.16c0-1-.72-2.16-2.23-3.06a13.55,13.55,0,0,0-6.8-1.54c-6.16.06-10.32,2.82-10.35,8.31,0,5.16,3.7,8.65,9.44,8.69a13.49,13.49,0,0,0,9.94-4.82ZM147.49,60a56.42,56.42,0,0,0-12.91,6.19c-22.5,14-32.58,39.69-33.6,64.56-.07,1.42-.08,2.83-.08,4.23h0c0,.13,0,.85,0,1.09v88.36h29.27V136.09a18,18,0,0,1,6.49-13.87l11.55,13.87,11.53-13.86a18,18,0,0,1,6.5,13.86v88.36h29.26V136.09a47.29,47.29,0,0,0-64.77-44h0c6-7,15-10.53,24.94-10.74h0a47.59,47.59,0,0,1,9.45.75c25.9,4.24,45.63,26,45.73,52.13,0,1,.07,2,.07,3v87.16h29.28V136.56c0-38.07-22.88-68.59-61.87-77.68-1.42-.33-3.68-.78-5.7-1.05a67.66,67.66,0,0,0-8.89-.7A47.48,47.48,0,0,0,147.49,60" transform="translate(-56.15 -42.1)"></path><path fill="#ee2527" d="M141.87,56.11c-50.47,0-85.72,34-85.72,79.13v89.2H85.44s0-49.07,0-89.27c0-41.95,31.82-71.88,63.76-78.37,1.3-.28,2.82-.69,1.3-.69Z" transform="translate(-56.15 -42.1)"></path></svg>
	    
	    </a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
     
     <a class="nav-address" aria-current="page" href="#">Select Your Address</a>
     
      <form class="d-flex">

        <div class="input-group search-div">
		  
		<input type="text" class="form-control col-md-6" aria-label="Text input with dropdown button">

		  <div class="input-group-append">
		    <button class="btn btn-outline-secondary bg-search-left" type="button">  <i class="fas fa-search" aria-hidden="true"></i></button>
		  </div>
		</div>

      </form>
       <ul class="navbar-nav me-auto mb-2 mb-lg-0 ul-nav-custom">
          <li class="nav-item dropdown">
          	
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          	Hello,sign in <br>
          	<strong>Account & List</strong>
           
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Returns<br>
          	<strong>&Orders</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
          	<svg data-testid="CartInverse" viewBox="0 0 24 24" class="css-ekjjru"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.75 20C6.7165 20 7.5 20.7835 7.5 21.75C7.5 22.7165 6.7165 23.5 5.75 23.5C4.7835 23.5 4 22.7165 4 21.75C4 20.7835 4.7835 20 5.75 20ZM19.75 20C20.7165 20 21.5 20.7835 21.5 21.75C21.5 22.7165 20.7165 23.5 19.75 23.5C18.7835 23.5 18 22.7165 18 21.75C18 20.7835 18.7835 20 19.75 20ZM4.5 0V4H21.7106L19.3356 13.5H4.5V14.75C4.5 15.3972 4.99187 15.9295 5.62219 15.9935L5.75 16H22.5V17.5H5.75C4.28747 17.5 3.0916 16.3583 3.00502 14.9175L3 14.75V1.5H0V0H4.5ZM19.789 5.5H4.5V12H18.164L19.789 5.5Z" fill="white"></path></svg>
          	<strong>Cart</strong></a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg fixed-top second-nav">
  <div class="container">
  
  <a class="nav-link active" aria-current="page" href="#">All Categories</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>

  </div>
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
      <img src="{{asset('assets/frontend/img/slider_1.webp')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/frontend/img/slider_2.webp')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/frontend/img/slider_3.webp')}}" class="d-block w-100" alt="...">
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
      <img src="{{asset('assets/frontend/img/2slide_1.webp')}}" class="d-block w-100" alt="banner">
    </div>
    
    </div>
  </div>
</section>
<section class="list-img-sec">
 <div class="container">
  <div class="row row-cols-10 row-cols-lg-10 g-2">
    <div class="col">
      <a class="list-img-a" href="#">
      <div class="border list-img">
          <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img">
      </div>
     <!--  <strong>Smartphone</strong> -->
     <h5>Smartphone</h5>
      </a>
    </div>
    <div class="col">
      <a class="list-img-a" href="#">
      <div class="border list-img">
          <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img">
      </div>
     <!--  <strong>Smartphone</strong> -->
     <h5>Laptops & Tablets</h5>
      </a>
    </div>
     <div class="col">
      <a class="list-img-a" href="#">
      <div class="border list-img">
          <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img">
      </div>
     <!--  <strong>Smartphone</strong> -->
     <h5>TV's</h5>
      </a>
    </div>
     <div class="col">
      <a class="list-img-a" href="#">
      <div class="border list-img">
          <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img">
      </div>
     <!--  <strong>Smartphone</strong> -->
     <h5>Washers</h5>
      </a>
    </div>
     <div class="col">
      <a class="list-img-a" href="#">
      <div class="border list-img">
          <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img">
      </div>
     <!--  <strong>Smartphone</strong> -->
     <h5>Outdoor</h5>
      </a>
    </div>
     <div class="col">
      <a class="list-img-a" href="#">
      <div class="border list-img">
          <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img">
      </div>
     <!--  <strong>Smartphone</strong> -->
     <h5>Fresh Food</h5>
      </a>
    </div>
     <div class="col">
      <a class="list-img-a" href="#">
      <div class="border list-img">
          <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img">
      </div>
     <!--  <strong>Smartphone</strong> -->
     <h5>Pantry Essentials</h5>
      </a>
    </div>
     <div class="col">
      <a class="list-img-a" href="#">
      <div class="border list-img">
          <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img">
      </div>
     <!--  <strong>Smartphone</strong> -->
     <h5>Cleaning & Household</h5>
      </a>
    </div>
     <div class="col">
      <a class="list-img-a" href="#">
      <div class="border list-img">
          <img src="{{asset('assets/frontend/img/lst-img-1.webp')}}" class="d-block w-100" alt="list-img">
      </div>
     <!--  <strong>Smartphone</strong> -->
     <h5>Personal Care</h5>
      </a>
    </div>


  </div>
</div>
</section>
</div>
<!-- /Main body -->
</div>
<!-- /Main Wrapper -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	<!-- <script src="{{asset('plugins/bootstrap-5.0.2/js/bootstrap.min.js')}}"></script> -->
	<!-- Development version -->
<!-- <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script> -->

<!-- Production version -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script type="text/javascript">
$('.carousel').carousel();
</script>
</body>
</html>