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
                                <svg data-testid="CarrefourLogo" viewBox="0 0 730.69 182.35" class="css-1bah3pf">
                                    <path
                                        fill="#fff"
                                        d="M786.84,73.58v34H615.08V63.74c0-3.44-1.79-5.16-5.38-5.66V56.61a24.11,24.11,0,0,0,16.94-7.14h1.52l-1,11.81V95.73H774.53V85.64H727.06V65.47l37.2-16,1.8,3.68L738.61,71.62v2Zm-412,22.15L374.61,93a25.82,25.82,0,0,0-2.32-7.87c-4.62.75-7.7,3.94-9,10.59Zm161.31-16-.26-11.81c-7.46,1.48-11.29,4.19-11.29,7.88,0,2.71,1.54,3.93,4.63,3.93Zm13.34,27.81H386.93l-.52,3.19a20.71,20.71,0,0,1-7.7,11.31,23.56,23.56,0,0,1-13.09,4.18,21.63,21.63,0,0,1-14.11-4.67c-4.35-3.19-7.18-7.87-8.22-14h2.06A16.28,16.28,0,0,0,351,115.4a14.63,14.63,0,0,0,18,.24,12.33,12.33,0,0,0,4.87-8.1H351.26L351,99.9l1-7.37a28.55,28.55,0,0,1,4.89-10.82,23.89,23.89,0,0,1,8.2-5.67,49.52,49.52,0,0,1,12.58-3.93q6.9,6.63,9.24,22.88v.74h150V91.55h-9.75a15.39,15.39,0,0,1-10-3.46,12.46,12.46,0,0,1-4.62-9.58c0-5.67,3.86-11.07,11.57-15.75,7.44-4.43,15.88-6.65,25.65-6.65Zm42.18-26.82-.75-3.94A24.23,24.23,0,0,1,575,89.32v1.24a11.61,11.61,0,0,1,8,4,14,14,0,0,1,3.07,8.6c0,4.66-1.79,8.11-4.62,11.31a15.8,15.8,0,0,1-11.28,4.43,20.46,20.46,0,0,1-12.82-4.18,20.49,20.49,0,0,0,7.43,8.35,23.06,23.06,0,0,0,12.31,3.7c5.91,0,10.78-2.22,15.14-6.65,4.88-4.92,7.2-10.82,7.2-18.19,0-4.19-1.3-8.62-3.59-13.3Zm-261.2,0-.78-3.94a24.73,24.73,0,0,1-15.9,12.54v1.24a11.58,11.58,0,0,1,7.94,4,12.59,12.59,0,0,1,3.09,8.6,15.23,15.23,0,0,1-4.63,11.31,15.82,15.82,0,0,1-11.28,4.43,19.75,19.75,0,0,1-12.58-4.18,16.8,16.8,0,0,0,7.18,8.35,22.45,22.45,0,0,0,12.33,3.7c5.63,0,10.78-2.22,15.39-6.65a26.48,26.48,0,0,0,6.92-18.19q0-5.91-3.85-13.3Zm284.6,26.81H786.84M519,54.64h.25a8.44,8.44,0,0,0,4.9-2,6.91,6.91,0,0,0,1.78-4.42,5.94,5.94,0,0,0-2-4.18,7.57,7.57,0,0,0-4.88-2,6.35,6.35,0,0,0-4.35,2,6,6,0,0,0-2.07,4.18,6.19,6.19,0,0,0,2.07,4.67A6.09,6.09,0,0,0,519,54.64M643.45,168.52c8.27,0,15.47,2.81,20.55,7.72s8.1,11.9,8.1,20.14a27.39,27.39,0,0,1-8.35,20.26A29.86,29.86,0,0,1,643,224.45h0a29,29,0,0,1-20.18-7.75,27.49,27.49,0,0,1-8.39-20.32c0-16.57,13.68-27.84,29.08-27.86m.09,47.33c7.48,0,12.91-6.32,13-18.67,0-6.45-1.48-11.61-3.93-15.1a11.45,11.45,0,0,0-9.62-5.37c-7.78,0-12.61,6.72-12.66,18.14,0,14.67,6.7,21,13.26,21m134.24-47.21c-4.81,0-9.68,3.18-12.75,8-1.06-4.12-3.61-7.32-8.29-7.31a14.23,14.23,0,0,0-3.87.59c-3.42,1-8.53,3.33-8.62,7.79a6.25,6.25,0,0,0,.51,2.4l.2.44.49-.07a14.82,14.82,0,0,1,2.61-.27c3.26.09,4.17,1.4,4.27,5.15v22.35c0,4.42-.56,6-2,7.12a9.19,9.19,0,0,1-3.8,1.65l-.3,0-.13.27a5.93,5.93,0,0,0-.65,2.42c0,1.92,1.56,3.17,4,3.8a42.66,42.66,0,0,0,10.62.93c4.56,0,7.91-.23,10.19-.89s3.7-1.84,3.68-3.64a6.28,6.28,0,0,0-.72-2.62l-.13-.27-.3,0c-1-.18-3.73-.66-5.09-1.65s-1.95-2.71-2-7.12V194.21c0-11,3.77-14.18,6.42-15a7.16,7.16,0,0,0,7.22,5.41,7.63,7.63,0,0,0,7.49-7.8c0-5.36-4.54-8.17-9.06-8.17m-313.92.09c-4.79,0-9.68,3.14-12.76,7.89-1.11-4.06-3.64-7.22-8.35-7.21a13.87,13.87,0,0,0-3.8.59c-3.46,1-8.57,3.31-8.65,7.76a6.23,6.23,0,0,0,.52,2.43l.18.44.52-.07a13.73,13.73,0,0,1,2.58-.28c3.28.09,4.19,1.41,4.31,5.16v22.34c0,4.43-.58,6-2,7.15a10,10,0,0,1-3.85,1.63l-.31.05-.13.27a5.6,5.6,0,0,0-.65,2.42c0,1.89,1.54,3.16,3.95,3.8a43.3,43.3,0,0,0,10.63.93c4.56,0,7.93-.24,10.22-.89s3.72-1.85,3.7-3.66a6,6,0,0,0-.71-2.6l-.12-.27-.3-.05c-1-.18-3.78-.66-5.08-1.65s-2.06-2.71-2.08-7.13V194.32c.05-11,3.84-14.2,6.51-15a7.08,7.08,0,0,0,7.16,5.4,7.63,7.63,0,0,0,7.55-7.79c0-5.37-4.6-8.18-9.06-8.18m275.56,45.32-.45.06c-.5,0-.94.06-1.37.06-4-.06-5.46-1.93-5.58-6.08,0-1,.12-4.2.12-10.28,0-14.38.18-17.83.18-19.76a10,10,0,0,0-2-6.64c-1.43-1.68-3.66-2.61-6.7-2.61a26.31,26.31,0,0,0-3.71.39c-3.74.75-10.07,3.31-10.19,8.08a5.44,5.44,0,0,0,.45,2.13l.18.41.47,0a16,16,0,0,1,1.65-.1c3.87.1,5.2,1.46,5.3,5.48v13.66c0,3.52-.62,7.17-2.32,9.9s-4.4,4.52-8.81,4.54c-4.07,0-6.29-1.44-7.75-4.42S697,201.17,697,195l.11-16.89a10.11,10.11,0,0,0-2-6.65c-1.41-1.68-3.65-2.61-6.68-2.61a26.44,26.44,0,0,0-3.72.39c-3.72.75-10,3.31-10.17,8.08a5.62,5.62,0,0,0,.45,2.13l.17.41.47,0a16.19,16.19,0,0,1,1.65-.1c3.87.11,5.19,1.46,5.31,5.48V195c0,10.27,0,17.5,5,23.19,3.25,3.67,8.35,5.88,14.34,5.88A20.87,20.87,0,0,0,716,218.71c1-.91,1.67-1.57,2.24-2.18a13.68,13.68,0,0,0,2.05,5.06c1.21,1.61,3.12,2.57,6,2.57h.1a25.07,25.07,0,0,0,3.47-.38c3.67-.7,10-2.56,10.2-7.23a5.73,5.73,0,0,0-.46-2.08ZM569.24,196.36h-34.8c.58,9.68,7,16.45,18.26,16.49,6.9,0,12.22-3.62,14-5.79l.37-.46.48.35a4.8,4.8,0,0,1,2.06,4.35c0,5.58-6.87,12.72-22,12.73-15.41,0-27.93-11.75-28-27.08,0-8.39,2.88-15.63,7.94-20.78S539.83,168,548.38,168c7.79,0,13.56,2.75,17.34,6.7a20.06,20.06,0,0,1,5.59,13.77,14.92,14.92,0,0,1-1.89,7.58ZM556.74,188a4.36,4.36,0,0,0,.26-2c-.1-5.1-4.25-9.81-10.63-9.81-8,0-11.3,6.15-11.8,12.36h20.54c1.11,0,1.4-.27,1.63-.59m55.19-17.81H597.76v-8.45c0-3,.38-5.7,1.53-7.51s3-2.91,6.3-2.94a8.88,8.88,0,0,1,5.32,1.49,7.25,7.25,0,0,0-1.22,3.89c0,3.81,3.5,6.81,7.25,6.83a7.31,7.31,0,0,0,7.44-7.42c0-7.64-9-12.39-19.7-12.4-8.51,0-14.09,3.28-17.3,8.05-2.09,3-3.63,7.46-3.63,15.32v3.25h-3.61c-2.88,0-5.2,1.91-5.21,4.76a7,7,0,0,0,.64,2.77l.14.34,8.25.27v29.36c0,4.43-.58,6-2,7.14a9.41,9.41,0,0,1-3.83,1.64l-.32.05-.14.27a5.63,5.63,0,0,0-.62,2.41c0,1.91,1.55,3.16,4,3.8a42.51,42.51,0,0,0,10.67.95,45.13,45.13,0,0,0,11.12-1c2.58-.67,4.31-1.94,4.31-3.95a5,5,0,0,0-.59-2.22l-.12-.28-.31-.05c-1-.17-4.53-.69-5.77-1.64-1.42-1.15-2.18-2.74-2.18-7.14V178.65c1.73,0,4.07.2,6.42.2a31.11,31.11,0,0,0,3.18-.11,5.33,5.33,0,0,0,5-5.38,7.24,7.24,0,0,0-.63-2.83Zm-101.35-1.44c-4.8,0-9.69,3.14-12.76,7.9-1.1-4.07-3.65-7.23-8.35-7.22a13.88,13.88,0,0,0-3.81.59c-3.45,1-8.56,3.31-8.65,7.76a6.25,6.25,0,0,0,.53,2.43l.19.44.5-.07a13.92,13.92,0,0,1,2.6-.28c3.26.09,4.18,1.41,4.31,5.16v22.34c0,4.43-.6,6-2,7.15a9.74,9.74,0,0,1-3.83,1.63l-.3.05-.14.27a6.08,6.08,0,0,0-.66,2.42c0,1.89,1.55,3.16,4,3.8a43.15,43.15,0,0,0,10.62.93c4.55,0,7.94-.24,10.22-.89s3.71-1.85,3.69-3.66a6.2,6.2,0,0,0-.69-2.6l-.14-.27-.3-.05c-1-.18-3.77-.66-5.07-1.65s-2.05-2.71-2.08-7.13V194.32c0-11,3.84-14.2,6.52-15a7.05,7.05,0,0,0,7.14,5.4,7.64,7.64,0,0,0,7.56-7.79c0-5.37-4.61-8.18-9.06-8.18M354.11,193.1a9.22,9.22,0,0,0-6.16,2.22,8.12,8.12,0,0,0-2.61,6.19,8.77,8.77,0,0,0,2.89,6.3c-2.25,3.77-6.72,6.81-13.72,6.83-6,0-11.08-2.94-14.79-8.12s-5.93-12.61-5.93-21.42,2.13-16.29,5.75-21.48,8.62-8.15,14.57-8.16c7,0,11.47,3.1,13.73,6.85a8.89,8.89,0,0,0-2.9,6.34,8.07,8.07,0,0,0,2.61,6.16,9.07,9.07,0,0,0,6.17,2.22c4.75,0,8.27-4.12,8.28-9.42-.07-9.92-12.2-21.41-29.37-21.44A35.4,35.4,0,0,0,307.29,157c-6.68,6.86-11,16.63-11,28.21,0,12.09,4.38,21.8,11.16,28.45A36.34,36.34,0,0,0,333,223.93c17.17,0,29.3-11.45,29.37-21.45,0-5.28-3.53-9.38-8.28-9.38m64.14,17c.07,3.79,2.3,4.8,7.21,5.53l.56.07,0,.54c-.29,5.16-4.25,7.29-8.51,7.6-.37,0-.74,0-1.1,0a10.88,10.88,0,0,1-10.15-5.95c-2.62,2.12-8.57,6.09-16.26,6.09-11.4,0-20.08-7.38-20.11-17.46a14.85,14.85,0,0,1,6.58-12.52c4.13-2.92,9.88-4.45,16.55-4.45a32.12,32.12,0,0,1,11.46,2v-6c-.09-6-2.48-9.42-9.52-9.5a25.32,25.32,0,0,0-6.71,1.12,10.21,10.21,0,0,1,.37,2.61,7.6,7.6,0,0,1-1.93,5.22,7.22,7.22,0,0,1-5.41,2.19,7.08,7.08,0,0,1-7.17-7.12c.1-7.3,9.36-12.2,21.75-12.2,9.82,0,16,2.2,19.27,6.26,3,3.63,3.14,8.93,3.14,16.43V210.1m-13.79-8.16c0-1-.72-2.16-2.23-3.06a13.55,13.55,0,0,0-6.8-1.54c-6.16.06-10.32,2.82-10.35,8.31,0,5.16,3.7,8.65,9.44,8.69a13.49,13.49,0,0,0,9.94-4.82ZM147.49,60a56.42,56.42,0,0,0-12.91,6.19c-22.5,14-32.58,39.69-33.6,64.56-.07,1.42-.08,2.83-.08,4.23h0c0,.13,0,.85,0,1.09v88.36h29.27V136.09a18,18,0,0,1,6.49-13.87l11.55,13.87,11.53-13.86a18,18,0,0,1,6.5,13.86v88.36h29.26V136.09a47.29,47.29,0,0,0-64.77-44h0c6-7,15-10.53,24.94-10.74h0a47.59,47.59,0,0,1,9.45.75c25.9,4.24,45.63,26,45.73,52.13,0,1,.07,2,.07,3v87.16h29.28V136.56c0-38.07-22.88-68.59-61.87-77.68-1.42-.33-3.68-.78-5.7-1.05a67.66,67.66,0,0,0-8.89-.7A47.48,47.48,0,0,0,147.49,60"
                                        transform="translate(-56.15 -42.1)"
                                    ></path>
                                    <path fill="#ee2527" d="M141.87,56.11c-50.47,0-85.72,34-85.72,79.13v89.2H85.44s0-49.07,0-89.27c0-41.95,31.82-71.88,63.76-78.37,1.3-.28,2.82-.69,1.3-.69Z" transform="translate(-56.15 -42.1)"></path>
                                </svg>
                            </a>

                            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                <a class="nav-address" aria-current="page" href="#">Select Your Address</a>

                                <form class="d-flex">
                                    <div class="input-group search-div">
                                        <input type="text" class="form-control col-md-6" aria-label="Text input with dropdown button" />

                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary bg-search-left" type="button"><i class="fas fa-search" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ul-nav-custom">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Hello,sign in <br />
                                            <strong>Account & List</strong>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
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

                    <nav class="navbar navbar-expand-lg second-nav">
                     
<div class="collapse navbar-collapse container" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           All Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
     
    </ul>
    <ul class="navbar-nav mr-auto scnd-ul">
     <li class="nav-item dropdown dropdown1">
        <a class="nav-link drop-a" href="#">
         Beverages
        </a>
        <div class="dropdown-menu dropdown-content">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
       <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Electronics & Appliances
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
       <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Food Cupboard
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
       <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Smartphones, Tablets & Wearables
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
       <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Fresh Food
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
       <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Baby Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
 <!--    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">
        <svg data-testid="QuickBuy" viewBox="0 0 24 21" class="css-ekjjru"><path d="M22.9817 5.83424C24.3066 8.95462 24.3404 12.3503 23.0728 15.3954C22.2514 17.3688 20.921 19.056 19.2284 20.2965L19.8155 21.3441L16.2925 21.2104L18.0527 18.1984L18.634 19.2356C20.1184 18.1186 21.2608 16.6362 21.9847 14.8997C23.1276 12.151 23.0985 9.08545 21.9015 6.26631L22.9817 5.83424ZM18.3004 6.95135V13.8965L12.2864 17.3692L12.2863 10.4239L18.3004 6.95135ZM5.90253 6.95135L8.33242 8.35423V10.2613L8.36127 10.377L8.41485 10.2917L8.46132 10.4328L8.53635 10.3385L8.56932 10.4809L8.63639 10.3906L8.68314 10.5384L8.75391 10.4694L8.80024 10.6042L8.88167 10.5484L8.91947 10.6792L8.9982 10.6102L9.04296 10.7408L9.10264 10.6619L9.16219 10.7968L9.20638 10.7139V8.85899L11.9165 10.4239L11.9164 17.3692L5.90239 13.8965L5.90253 6.95135ZM3.92613 0L7.44983 0.0535538L5.75762 3.10737L5.15444 2.08368C3.77729 3.17255 2.69242 4.61394 2.00357 6.26696C0.839656 9.0642 0.908694 12.2976 2.19158 15.14L1.12298 15.5982C-0.298476 12.4522 -0.373636 8.8699 0.915463 5.77122C1.68737 3.91567 2.90971 2.30688 4.46751 1.08979L4.53681 1.03609L3.92613 0ZM15.4123 5.07028L18.1154 6.63104L12.1014 10.1037L9.39809 8.54295L15.4123 5.07028ZM12.1014 3.15851L14.5178 4.55386L8.50381 8.02639L6.08727 6.63104L12.1014 3.15851Z" fill="#E3870F"></path></svg>
        <p>Quick</p><p>BUY AGAIN</p>
        </a>
      
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#">
            <svg data-testid="ShopNow" viewBox="0 0 24 18" class="css-ekjjru"><path d="M20.2864 16.391C19.122 16.2453 18.183 15.3279 18.0346 14.1941C17.902 13.1817 18.3823 12.2654 19.1616 11.7476L20.2955 14.0197C20.36 14.1499 20.4937 14.225 20.6319 14.225C20.727 14.225 20.8233 14.1897 20.9026 14.1135C21.017 14.0031 21.0329 13.8287 20.9626 13.6873L19.8345 11.4286C20.1867 11.3182 20.5707 11.2784 20.9706 11.3281C22.1441 11.4738 23.091 12.4001 23.2326 13.5449C23.4376 15.2064 21.9934 16.6052 20.2864 16.391ZM18.6055 9.54847C16.9947 10.2683 15.9175 11.7918 15.7816 13.4953H1.19225C1.38028 11.6549 2.97741 10.212 4.91548 10.212H7.53432C7.54338 10.212 7.55017 10.2109 7.5581 10.2098C7.7416 11.6483 9.00345 12.7655 10.5281 12.7655H13.148C14.7961 12.7655 16.1384 11.4595 16.1418 9.85317C16.1463 9.68095 16.1803 7.35482 14.7191 5.47141H16.69L19.3066 9.29675C19.0676 9.36299 18.8331 9.44579 18.6055 9.54847ZM4.91548 16.4131C3.59814 16.4131 2.50507 15.4604 2.3227 14.225H7.50713C7.32476 15.4604 6.23283 16.4131 4.91548 16.4131ZM2.29552 6.92979C2.04858 6.92979 1.85715 6.69684 1.94098 6.44624C1.99082 6.29388 2.14826 6.20115 2.31251 6.20115H10.5122C10.6753 6.20115 10.8328 6.29388 10.8826 6.44624C10.9653 6.69684 10.775 6.92979 10.5281 6.92979H2.29552ZM14.2706 3.28218H15.1677C15.1688 3.28218 15.1699 3.28329 15.1711 3.28329L15.1722 3.28218H16.5156V4.74166H14.2706V3.28218ZM21.0351 10.6006C20.4948 10.5376 19.976 10.6039 19.5048 10.7673L19.1752 10.1082C19.6396 9.93597 20.1278 9.84765 20.6319 9.84765C21.6287 9.84765 22.5881 10.1987 23.3379 10.8368C23.4625 10.9417 23.6426 10.9792 23.7854 10.8964C24.0198 10.7618 24.0357 10.4637 23.8499 10.3036C22.9619 9.53963 21.819 9.11901 20.6319 9.11901C20.454 9.11901 20.2773 9.12784 20.1029 9.14661L17.2643 4.99558V2.91786C17.2643 2.71694 17.0967 2.55354 16.8894 2.55354H15.4044L14.2332 0.205343C14.1698 0.0805917 14.0395 0 13.8956 0H12.4152C12.2521 0 12.0935 0.0938397 12.0448 0.246191C11.9621 0.497902 12.1535 0.729742 12.3993 0.729742H13.6623L14.573 2.55354H13.8956C13.6895 2.55354 13.5218 2.71694 13.5218 2.91786V5.10598C13.5218 5.20866 13.5649 5.30029 13.634 5.36653C15.4531 7.11195 15.3942 9.81011 15.3931 9.83661V9.85317C15.4225 11.0609 14.3759 12.0369 13.1367 12.0369H10.5915C9.49844 12.0369 8.51411 11.3016 8.32042 10.2517C8.06669 8.88386 9.13031 7.68602 10.4828 7.65953C11.0038 7.64959 11.4875 7.33937 11.6144 6.84588C11.8012 6.12166 11.2417 5.47141 10.5281 5.47141H2.33969C1.80052 5.47141 1.30439 5.82137 1.19678 6.33694C1.04953 7.03908 1.5989 7.65953 2.29552 7.65953H2.8664C1.2908 8.62663 0.587383 9.99338 0.274754 11.083C-0.155677 12.5834 0.0459459 13.864 0.0550076 13.9181C0.0844582 14.0947 0.240773 14.225 0.424272 14.225H1.56831C1.75521 15.8633 3.1847 17.1429 4.91548 17.1429C6.64627 17.1429 8.07462 15.8633 8.26152 14.225H16.1418C16.3491 14.225 16.5156 14.0594 16.5156 13.8563C16.5167 12.4487 17.2836 11.1471 18.5024 10.4272L18.832 11.0874C17.7729 11.7432 17.1114 12.9598 17.2938 14.3045C17.492 15.7573 18.6961 16.9265 20.1867 17.1142C22.3831 17.3902 24.2407 15.5884 23.9745 13.4522C23.7899 11.9684 22.5564 10.775 21.0351 10.6006Z" fill="#0E5AA7"></path></svg>
            <p>Shop</p><p>NOW ITEMS</p>
        </a>
     </li>
    </ul> -->
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
                    <div class="container">
                        <div class="row">
                            <h3 class="head-3">Our topselling electronics</h3>
                            <div class="col-md-2 border">
                                <p>kdsjjd</p>
                            </div>
                            <div class="col-md-2 border">
                                <p>kdsjjd</p>
                            </div>
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
                                <a class="footer-brand-a" href="#">
                                    <svg data-testid="CarrefourLogo" viewBox="0 0 730.69 182.35" class="css-1bah3pf">
                                        <path
                                            fill="#fff"
                                            d="M786.84,73.58v34H615.08V63.74c0-3.44-1.79-5.16-5.38-5.66V56.61a24.11,24.11,0,0,0,16.94-7.14h1.52l-1,11.81V95.73H774.53V85.64H727.06V65.47l37.2-16,1.8,3.68L738.61,71.62v2Zm-412,22.15L374.61,93a25.82,25.82,0,0,0-2.32-7.87c-4.62.75-7.7,3.94-9,10.59Zm161.31-16-.26-11.81c-7.46,1.48-11.29,4.19-11.29,7.88,0,2.71,1.54,3.93,4.63,3.93Zm13.34,27.81H386.93l-.52,3.19a20.71,20.71,0,0,1-7.7,11.31,23.56,23.56,0,0,1-13.09,4.18,21.63,21.63,0,0,1-14.11-4.67c-4.35-3.19-7.18-7.87-8.22-14h2.06A16.28,16.28,0,0,0,351,115.4a14.63,14.63,0,0,0,18,.24,12.33,12.33,0,0,0,4.87-8.1H351.26L351,99.9l1-7.37a28.55,28.55,0,0,1,4.89-10.82,23.89,23.89,0,0,1,8.2-5.67,49.52,49.52,0,0,1,12.58-3.93q6.9,6.63,9.24,22.88v.74h150V91.55h-9.75a15.39,15.39,0,0,1-10-3.46,12.46,12.46,0,0,1-4.62-9.58c0-5.67,3.86-11.07,11.57-15.75,7.44-4.43,15.88-6.65,25.65-6.65Zm42.18-26.82-.75-3.94A24.23,24.23,0,0,1,575,89.32v1.24a11.61,11.61,0,0,1,8,4,14,14,0,0,1,3.07,8.6c0,4.66-1.79,8.11-4.62,11.31a15.8,15.8,0,0,1-11.28,4.43,20.46,20.46,0,0,1-12.82-4.18,20.49,20.49,0,0,0,7.43,8.35,23.06,23.06,0,0,0,12.31,3.7c5.91,0,10.78-2.22,15.14-6.65,4.88-4.92,7.2-10.82,7.2-18.19,0-4.19-1.3-8.62-3.59-13.3Zm-261.2,0-.78-3.94a24.73,24.73,0,0,1-15.9,12.54v1.24a11.58,11.58,0,0,1,7.94,4,12.59,12.59,0,0,1,3.09,8.6,15.23,15.23,0,0,1-4.63,11.31,15.82,15.82,0,0,1-11.28,4.43,19.75,19.75,0,0,1-12.58-4.18,16.8,16.8,0,0,0,7.18,8.35,22.45,22.45,0,0,0,12.33,3.7c5.63,0,10.78-2.22,15.39-6.65a26.48,26.48,0,0,0,6.92-18.19q0-5.91-3.85-13.3Zm284.6,26.81H786.84M519,54.64h.25a8.44,8.44,0,0,0,4.9-2,6.91,6.91,0,0,0,1.78-4.42,5.94,5.94,0,0,0-2-4.18,7.57,7.57,0,0,0-4.88-2,6.35,6.35,0,0,0-4.35,2,6,6,0,0,0-2.07,4.18,6.19,6.19,0,0,0,2.07,4.67A6.09,6.09,0,0,0,519,54.64M643.45,168.52c8.27,0,15.47,2.81,20.55,7.72s8.1,11.9,8.1,20.14a27.39,27.39,0,0,1-8.35,20.26A29.86,29.86,0,0,1,643,224.45h0a29,29,0,0,1-20.18-7.75,27.49,27.49,0,0,1-8.39-20.32c0-16.57,13.68-27.84,29.08-27.86m.09,47.33c7.48,0,12.91-6.32,13-18.67,0-6.45-1.48-11.61-3.93-15.1a11.45,11.45,0,0,0-9.62-5.37c-7.78,0-12.61,6.72-12.66,18.14,0,14.67,6.7,21,13.26,21m134.24-47.21c-4.81,0-9.68,3.18-12.75,8-1.06-4.12-3.61-7.32-8.29-7.31a14.23,14.23,0,0,0-3.87.59c-3.42,1-8.53,3.33-8.62,7.79a6.25,6.25,0,0,0,.51,2.4l.2.44.49-.07a14.82,14.82,0,0,1,2.61-.27c3.26.09,4.17,1.4,4.27,5.15v22.35c0,4.42-.56,6-2,7.12a9.19,9.19,0,0,1-3.8,1.65l-.3,0-.13.27a5.93,5.93,0,0,0-.65,2.42c0,1.92,1.56,3.17,4,3.8a42.66,42.66,0,0,0,10.62.93c4.56,0,7.91-.23,10.19-.89s3.7-1.84,3.68-3.64a6.28,6.28,0,0,0-.72-2.62l-.13-.27-.3,0c-1-.18-3.73-.66-5.09-1.65s-1.95-2.71-2-7.12V194.21c0-11,3.77-14.18,6.42-15a7.16,7.16,0,0,0,7.22,5.41,7.63,7.63,0,0,0,7.49-7.8c0-5.36-4.54-8.17-9.06-8.17m-313.92.09c-4.79,0-9.68,3.14-12.76,7.89-1.11-4.06-3.64-7.22-8.35-7.21a13.87,13.87,0,0,0-3.8.59c-3.46,1-8.57,3.31-8.65,7.76a6.23,6.23,0,0,0,.52,2.43l.18.44.52-.07a13.73,13.73,0,0,1,2.58-.28c3.28.09,4.19,1.41,4.31,5.16v22.34c0,4.43-.58,6-2,7.15a10,10,0,0,1-3.85,1.63l-.31.05-.13.27a5.6,5.6,0,0,0-.65,2.42c0,1.89,1.54,3.16,3.95,3.8a43.3,43.3,0,0,0,10.63.93c4.56,0,7.93-.24,10.22-.89s3.72-1.85,3.7-3.66a6,6,0,0,0-.71-2.6l-.12-.27-.3-.05c-1-.18-3.78-.66-5.08-1.65s-2.06-2.71-2.08-7.13V194.32c.05-11,3.84-14.2,6.51-15a7.08,7.08,0,0,0,7.16,5.4,7.63,7.63,0,0,0,7.55-7.79c0-5.37-4.6-8.18-9.06-8.18m275.56,45.32-.45.06c-.5,0-.94.06-1.37.06-4-.06-5.46-1.93-5.58-6.08,0-1,.12-4.2.12-10.28,0-14.38.18-17.83.18-19.76a10,10,0,0,0-2-6.64c-1.43-1.68-3.66-2.61-6.7-2.61a26.31,26.31,0,0,0-3.71.39c-3.74.75-10.07,3.31-10.19,8.08a5.44,5.44,0,0,0,.45,2.13l.18.41.47,0a16,16,0,0,1,1.65-.1c3.87.1,5.2,1.46,5.3,5.48v13.66c0,3.52-.62,7.17-2.32,9.9s-4.4,4.52-8.81,4.54c-4.07,0-6.29-1.44-7.75-4.42S697,201.17,697,195l.11-16.89a10.11,10.11,0,0,0-2-6.65c-1.41-1.68-3.65-2.61-6.68-2.61a26.44,26.44,0,0,0-3.72.39c-3.72.75-10,3.31-10.17,8.08a5.62,5.62,0,0,0,.45,2.13l.17.41.47,0a16.19,16.19,0,0,1,1.65-.1c3.87.11,5.19,1.46,5.31,5.48V195c0,10.27,0,17.5,5,23.19,3.25,3.67,8.35,5.88,14.34,5.88A20.87,20.87,0,0,0,716,218.71c1-.91,1.67-1.57,2.24-2.18a13.68,13.68,0,0,0,2.05,5.06c1.21,1.61,3.12,2.57,6,2.57h.1a25.07,25.07,0,0,0,3.47-.38c3.67-.7,10-2.56,10.2-7.23a5.73,5.73,0,0,0-.46-2.08ZM569.24,196.36h-34.8c.58,9.68,7,16.45,18.26,16.49,6.9,0,12.22-3.62,14-5.79l.37-.46.48.35a4.8,4.8,0,0,1,2.06,4.35c0,5.58-6.87,12.72-22,12.73-15.41,0-27.93-11.75-28-27.08,0-8.39,2.88-15.63,7.94-20.78S539.83,168,548.38,168c7.79,0,13.56,2.75,17.34,6.7a20.06,20.06,0,0,1,5.59,13.77,14.92,14.92,0,0,1-1.89,7.58ZM556.74,188a4.36,4.36,0,0,0,.26-2c-.1-5.1-4.25-9.81-10.63-9.81-8,0-11.3,6.15-11.8,12.36h20.54c1.11,0,1.4-.27,1.63-.59m55.19-17.81H597.76v-8.45c0-3,.38-5.7,1.53-7.51s3-2.91,6.3-2.94a8.88,8.88,0,0,1,5.32,1.49,7.25,7.25,0,0,0-1.22,3.89c0,3.81,3.5,6.81,7.25,6.83a7.31,7.31,0,0,0,7.44-7.42c0-7.64-9-12.39-19.7-12.4-8.51,0-14.09,3.28-17.3,8.05-2.09,3-3.63,7.46-3.63,15.32v3.25h-3.61c-2.88,0-5.2,1.91-5.21,4.76a7,7,0,0,0,.64,2.77l.14.34,8.25.27v29.36c0,4.43-.58,6-2,7.14a9.41,9.41,0,0,1-3.83,1.64l-.32.05-.14.27a5.63,5.63,0,0,0-.62,2.41c0,1.91,1.55,3.16,4,3.8a42.51,42.51,0,0,0,10.67.95,45.13,45.13,0,0,0,11.12-1c2.58-.67,4.31-1.94,4.31-3.95a5,5,0,0,0-.59-2.22l-.12-.28-.31-.05c-1-.17-4.53-.69-5.77-1.64-1.42-1.15-2.18-2.74-2.18-7.14V178.65c1.73,0,4.07.2,6.42.2a31.11,31.11,0,0,0,3.18-.11,5.33,5.33,0,0,0,5-5.38,7.24,7.24,0,0,0-.63-2.83Zm-101.35-1.44c-4.8,0-9.69,3.14-12.76,7.9-1.1-4.07-3.65-7.23-8.35-7.22a13.88,13.88,0,0,0-3.81.59c-3.45,1-8.56,3.31-8.65,7.76a6.25,6.25,0,0,0,.53,2.43l.19.44.5-.07a13.92,13.92,0,0,1,2.6-.28c3.26.09,4.18,1.41,4.31,5.16v22.34c0,4.43-.6,6-2,7.15a9.74,9.74,0,0,1-3.83,1.63l-.3.05-.14.27a6.08,6.08,0,0,0-.66,2.42c0,1.89,1.55,3.16,4,3.8a43.15,43.15,0,0,0,10.62.93c4.55,0,7.94-.24,10.22-.89s3.71-1.85,3.69-3.66a6.2,6.2,0,0,0-.69-2.6l-.14-.27-.3-.05c-1-.18-3.77-.66-5.07-1.65s-2.05-2.71-2.08-7.13V194.32c0-11,3.84-14.2,6.52-15a7.05,7.05,0,0,0,7.14,5.4,7.64,7.64,0,0,0,7.56-7.79c0-5.37-4.61-8.18-9.06-8.18M354.11,193.1a9.22,9.22,0,0,0-6.16,2.22,8.12,8.12,0,0,0-2.61,6.19,8.77,8.77,0,0,0,2.89,6.3c-2.25,3.77-6.72,6.81-13.72,6.83-6,0-11.08-2.94-14.79-8.12s-5.93-12.61-5.93-21.42,2.13-16.29,5.75-21.48,8.62-8.15,14.57-8.16c7,0,11.47,3.1,13.73,6.85a8.89,8.89,0,0,0-2.9,6.34,8.07,8.07,0,0,0,2.61,6.16,9.07,9.07,0,0,0,6.17,2.22c4.75,0,8.27-4.12,8.28-9.42-.07-9.92-12.2-21.41-29.37-21.44A35.4,35.4,0,0,0,307.29,157c-6.68,6.86-11,16.63-11,28.21,0,12.09,4.38,21.8,11.16,28.45A36.34,36.34,0,0,0,333,223.93c17.17,0,29.3-11.45,29.37-21.45,0-5.28-3.53-9.38-8.28-9.38m64.14,17c.07,3.79,2.3,4.8,7.21,5.53l.56.07,0,.54c-.29,5.16-4.25,7.29-8.51,7.6-.37,0-.74,0-1.1,0a10.88,10.88,0,0,1-10.15-5.95c-2.62,2.12-8.57,6.09-16.26,6.09-11.4,0-20.08-7.38-20.11-17.46a14.85,14.85,0,0,1,6.58-12.52c4.13-2.92,9.88-4.45,16.55-4.45a32.12,32.12,0,0,1,11.46,2v-6c-.09-6-2.48-9.42-9.52-9.5a25.32,25.32,0,0,0-6.71,1.12,10.21,10.21,0,0,1,.37,2.61,7.6,7.6,0,0,1-1.93,5.22,7.22,7.22,0,0,1-5.41,2.19,7.08,7.08,0,0,1-7.17-7.12c.1-7.3,9.36-12.2,21.75-12.2,9.82,0,16,2.2,19.27,6.26,3,3.63,3.14,8.93,3.14,16.43V210.1m-13.79-8.16c0-1-.72-2.16-2.23-3.06a13.55,13.55,0,0,0-6.8-1.54c-6.16.06-10.32,2.82-10.35,8.31,0,5.16,3.7,8.65,9.44,8.69a13.49,13.49,0,0,0,9.94-4.82ZM147.49,60a56.42,56.42,0,0,0-12.91,6.19c-22.5,14-32.58,39.69-33.6,64.56-.07,1.42-.08,2.83-.08,4.23h0c0,.13,0,.85,0,1.09v88.36h29.27V136.09a18,18,0,0,1,6.49-13.87l11.55,13.87,11.53-13.86a18,18,0,0,1,6.5,13.86v88.36h29.26V136.09a47.29,47.29,0,0,0-64.77-44h0c6-7,15-10.53,24.94-10.74h0a47.59,47.59,0,0,1,9.45.75c25.9,4.24,45.63,26,45.73,52.13,0,1,.07,2,.07,3v87.16h29.28V136.56c0-38.07-22.88-68.59-61.87-77.68-1.42-.33-3.68-.78-5.7-1.05a67.66,67.66,0,0,0-8.89-.7A47.48,47.48,0,0,0,147.49,60"
                                            transform="translate(-56.15 -42.1)"
                                        ></path>
                                        <path fill="#ee2527" d="M141.87,56.11c-50.47,0-85.72,34-85.72,79.13v89.2H85.44s0-49.07,0-89.27c0-41.95,31.82-71.88,63.76-78.37,1.3-.28,2.82-.69,1.3-.69Z" transform="translate(-56.15 -42.1)"></path>
                                    </svg>
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

                            <div class="consumer-logo">
                                <img src="{{asset('assets/frontend/img/consumer-rights-logo1.png')}}" />
                            </div>
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
                        <a href="#" target="_blank" class="css-ddwsoi">
                            <svg data-testid="MafLogoEn" height="48" width="164" viewBox="0 0 164 48" class="css-n2huxd">
                                <g>
                                    <polygon
                                        id="Path"
                                        fill="#FFFFFF"
                                        points="48.7084545 45.879672 45.9200112 40.0252519 44.2323651 40.0252519 44.2323651 47.8412567 45.6101842 47.8412567 45.6101842 42.5631784 48.1216057 47.8412567 49.2333379 47.8412567 51.6973741 42.5766601 51.6973741 47.8412567 53.0788382 47.8412567 53.0788382 40.0252519 51.4422224 40.0252519"
                                    ></polygon>
                                    <polygon
                                        id="Path"
                                        fill="#FFFFFF"
                                        points="57.8288342 40.0252519 54.439834 47.8412567 55.9207996 47.8412567 58.4797703 41.7273142 59.5681077 44.315797 58.21113 44.315797 57.7978373 45.5156666 60.0743913 45.5156666 61.0525174 47.8412567 62.6058091 47.8412567 59.1961443 40.0252519"
                                    ></polygon>
                                    <path
                                        d="M65.7796389,45.502185 C65.7796389,46.2841225 65.2823821,46.6447575 64.2134757,46.6447575 L63.966805,46.6447575 L63.966805,47.8412567 L64.2134757,47.8412567 C66.8211375,47.8412567 67.3692946,46.5672378 67.3692946,45.502185 L67.3692946,40.0252519 L65.7718081,40.0252519 L65.7796389,45.502185 Z"
                                        id="Path"
                                        fill="#FFFFFF"
                                    ></path>
                                    <rect id="Rectangle" fill="#FFFFFF" x="70.0912863" y="40.0252519" width="1.36099585" height="7.81600474"></rect>
                                    <path
                                        d="M77.3722423,40.0252519 L74.1742739,40.0252519 L74.1742739,47.8412567 L77.3722423,47.8412567 C80.2169467,47.8412567 81.659751,46.4593843 81.659751,43.7327143 C81.659751,41.2723074 80.2169467,40.0252519 77.3722423,40.0252519 M77.3722423,46.6447575 L75.6951681,46.6447575 L75.6951681,41.2217511 L77.3722423,41.2217511 C79.2315262,41.2217511 80.1388568,42.0407633 80.1388568,43.7327143 C80.1388568,45.6942989 79.2352448,46.6447575 77.3722423,46.6447575"
                                        id="Shape"
                                        fill="#FFFFFF"
                                    ></path>
                                    <polygon
                                        id="Path"
                                        fill="#FFFFFF"
                                        points="90.4947486 40.0252519 87.1037344 47.8412567 88.5875183 47.8412567 91.1454101 41.7273142 92.2332888 44.315797 90.8768831 44.315797 90.4637647 45.5156666 92.7393589 45.5156666 93.7170726 47.8412567 95.2697095 47.8412567 91.8614822 40.0252519"
                                    ></polygon>
                                    <polygon id="Path" fill="#FFFFFF" points="98.7386745 40.0252519 97.3112033 40.0252519 97.3112033 47.8412567 102.755187 47.8412567 102.755187 46.6447575 98.7386745 46.6447575"></polygon>
                                    <polygon
                                        id="Path"
                                        fill="#FFFFFF"
                                        points="109.560166 47.8412567 110.987467 47.8412567 110.987467 44.4809476 114.815704 44.4809476 114.815704 43.281078 110.987467 43.281078 110.987467 41.2183807 115.004149 41.2183807 115.004149 40.0252519 109.560166 40.0252519"
                                    ></polygon>
                                    <path
                                        d="M122.424784,44.7449807 C122.424784,46.0470903 121.797276,46.6529562 120.448133,46.6529562 C119.09899,46.6529562 118.471482,46.0470903 118.471482,44.7449807 L118.471482,40.0252519 L117.045643,40.0252519 L117.045643,44.7449807 C117.045643,46.8002385 118.192589,47.8412567 120.448133,47.8412567 C122.703677,47.8412567 123.850622,46.8002385 123.850622,44.7449807 L123.850622,40.0252519 L122.424784,40.0252519 L122.424784,44.7449807 Z"
                                        id="Path"
                                        fill="#FFFFFF"
                                    ></path>
                                    <polygon
                                        id="Path"
                                        fill="#FFFFFF"
                                        points="125.892116 41.2183807 128.25295 41.2183807 128.25295 47.8412567 129.652342 47.8412567 129.652342 41.2183807 132.016598 41.2183807 132.016598 40.0252519 125.892116 40.0252519"
                                    ></polygon>
                                    <polygon
                                        id="Path"
                                        fill="#FFFFFF"
                                        points="134.058091 41.2183807 136.418925 41.2183807 136.418925 47.8412567 137.818318 47.8412567 137.818318 41.2183807 140.182573 41.2183807 140.182573 40.0252519 134.058091 40.0252519"
                                    ></polygon>
                                    <polygon
                                        id="Path"
                                        fill="#FFFFFF"
                                        points="144.252071 40.0252519 140.863071 47.8412567 142.344036 47.8412567 144.903007 41.7273142 145.994788 44.315797 144.637811 44.315797 144.221074 45.5156666 146.497628 45.5156666 147.475754 47.8412567 149.029046 47.8412567 145.619381 40.0252519"
                                    ></polygon>
                                    <rect id="Rectangle" fill="#FFFFFF" x="151.070539" y="40.0252519" width="1.36099585" height="7.81600474"></rect>
                                    <polygon
                                        id="Path"
                                        fill="#FFFFFF"
                                        points="159.629616 45.879672 156.841173 40.0252519 155.153527 40.0252519 155.153527 47.8412567 156.531346 47.8412567 156.531346 42.5631784 159.039122 47.8412567 160.158145 47.8412567 162.622181 42.5766601 162.622181 47.8412567 164 47.8412567 164 40.0252519 162.363384 40.0252519"
                                    ></polygon>
                                    <rect id="Rectangle" fill="#FFFFFF" x="59.8838174" y="35.4659158" width="1.36099585" height="1.30266746"></rect>
                                    <rect id="Rectangle" fill="#FFFFFF" x="62.6058091" y="35.4659158" width="1.36099585" height="1.30266746"></rect>
                                    <rect id="Rectangle" fill="#FFFFFF" x="93.9087137" y="23.7419087" width="1.36099585" height="1.30266746"></rect>
                                    <path
                                        d="M110.921162,31.8374708 L110.921162,25.0445762 L109.480738,25.0445762 L109.480738,31.398995 C109.514652,31.8228664 109.45037,32.2487717 109.292702,32.644823 C109.133049,32.95802 108.8031,33.1111385 108.288663,33.1111385 L97.0420017,33.1111385 C96.7240892,33.1121295 96.408003,33.0639795 96.1053713,32.9684599 C96.5894264,32.6810255 96.9958598,32.2835614 97.2903507,31.809631 C97.6477268,31.2482793 97.8359125,30.5992142 97.8331706,29.9374091 C97.8529038,29.1393057 97.5566185,28.3647433 97.0065233,27.7763499 C95.634597,26.488189 93.4717833,26.488189 92.099857,27.7763499 C91.5404753,28.361447 91.2384152,29.1390288 91.2590183,29.940889 C91.2661359,31.1743338 91.9168655,32.3182472 92.9832698,32.9719398 C92.6819221,33.0677247 92.3669599,33.1158859 92.0501872,33.1146185 L82.8932056,33.1146185 C82.8932056,32.9684599 82.8932056,32.8292612 82.8932056,32.6900626 C82.8932056,29.4049742 81.665652,27.7380702 79.2495713,27.7380702 C77.5785374,27.7380702 75.8897643,28.9212588 74.8254116,30.7621611 L75.0240908,25.0758959 L73.5481883,25.0758959 L73.5481883,33.1285383 L64.0080396,33.1285383 C64.1277538,32.7180191 64.183963,32.2921985 64.1747882,31.8653105 L64.1747882,27.7380702 L62.737912,27.7380702 L62.737912,31.398995 C62.7668508,31.8258051 62.7039958,32.2538155 62.5534241,32.6552629 C62.3902234,32.9614999 62.060274,33.1111385 61.542289,33.1111385 L57.1607034,33.1111385 C56.5707244,33.1481914 55.990201,32.9518748 55.5488576,32.5660577 C55.1075141,32.1802406 54.8421384,31.6370826 54.8120317,31.0579583 C54.5956133,28.9699784 53.4496601,27.7519901 51.6686432,27.7519901 L47.4928325,27.7519901 C45.3286485,27.7519901 44.2323651,29.1230969 44.2323651,31.8339908 L44.2323651,36.7685833 L45.6515022,36.7685833 L45.6515022,31.8757504 C45.6515022,30.0870476 46.3326879,29.0221779 47.4750932,29.0221779 L48.9580914,29.0221779 C48.5475192,29.6361952 48.3382938,30.3587242 48.358506,31.0927579 C48.358506,33.1424582 49.6144423,34.4648455 51.5515644,34.4648455 C52.6099868,34.5247285 53.6156869,34.0067369 54.1663243,33.1180984 C54.7233356,34.0402896 55.7486621,34.510085 57.2281125,34.510085 L91.1809658,34.510085 C91.7452411,34.5247945 92.3098337,34.4968723 92.8697389,34.4265658 C93.4555383,34.3029404 94.0173231,34.0879302 94.533677,33.789732 C95.0423058,34.08816 95.597133,34.303259 96.1763281,34.4265658 C96.7315086,34.496529 97.2913578,34.5244513 97.8509098,34.510085 L108.583134,34.510085 C109.647486,34.510085 110.892779,34.0472495 110.892779,31.8409507 M94.5443205,28.0686671 C95.0372651,28.0437592 95.5171388,28.2289915 95.8605701,28.5767422 C96.1684653,28.8991168 96.3320017,29.3289593 96.314694,29.7703707 C96.3060623,30.2530303 96.1449085,30.7211629 95.8534745,31.1101578 C95.5321801,31.5708179 95.0844253,31.9327864 94.5620598,32.1541477 C94.026632,31.9401076 93.5666587,31.5772336 93.2387145,31.1101578 C92.9494445,30.7198398 92.7941415,30.2494391 92.7952342,29.7668907 C92.7729864,29.3083032 92.9512437,28.8621853 93.2852476,28.5405522 C93.6192515,28.2189191 94.0772776,28.0523203 94.5443205,28.0825869 M81.4350423,32.4499449 C81.4350423,32.6622228 81.4350423,32.8849407 81.4102074,33.1111385 L74.8857249,33.1111385 C75.6201283,30.9187596 77.5749896,29.0500176 79.1857101,29.0500176 C80.5729165,29.0500176 81.4350423,30.3515251 81.4350423,32.4499449 M51.5799471,33.1250584 C50.6149339,33.1250584 50.0366356,32.3942654 50.0366356,31.1623573 C50.0366356,29.8295301 50.6184818,29.0743774 51.6331647,29.0743774 C52.5768909,29.0743774 53.1161629,29.7703707 53.1161629,31.0231586 C53.1161629,32.9162604 52.2398458,33.1354983 51.5799471,33.1354983"
                                        id="Shape"
                                        fill="#FFFFFF"
                                    ></path>
                                    <rect id="Rectangle" fill="#FFFFFF" x="113.643154" y="25.0445762" width="1.36099585" height="9.1186722"></rect>
                                    <path
                                        d="M140.182573,32.6200885 C140.182573,29.7241585 138.268631,27.8536616 135.311362,27.8536616 C133.714648,27.8536616 132.491558,28.3580278 131.645617,29.3533993 L131.522251,29.4970267 L131.659716,29.6306337 C132.117934,30.0581758 132.364667,30.2986682 132.509182,30.448976 L132.706568,30.6594069 L132.861657,30.4189145 C133.386846,29.5938918 134.194015,29.1964112 135.328986,29.1964112 C137.42269,29.1964112 138.575285,30.3855127 138.575285,32.5365841 C138.575285,32.6234286 138.575285,32.7136133 138.575285,32.8104783 L125.42795,32.8104783 C125.216465,29.386801 123.570404,27.6499111 120.528541,27.6499111 L120.310006,27.6499111 L120.310006,28.9525785 L120.895116,28.9525785 C121.889965,28.9523753 122.813006,29.443526 123.330721,30.2485657 C123.78115,31.033792 124.007155,31.916955 123.986325,32.8104783 L118.406639,32.8104783 L118.406639,34.1632484 L140.182573,34.1632484 L140.182573,32.6200885 Z"
                                        id="Path"
                                        fill="#FFFFFF"
                                    ></path>
                                    <rect id="Rectangle" fill="#FFFFFF" x="134.738589" y="35.4659158" width="1.36099585" height="1.30266746"></rect>
                                    <path
                                        d="M144.339881,34.2740754 L158.31756,34.2740754 C158.899537,35.0662343 159.862163,35.5146685 160.866949,35.4616948 C161.756787,35.494637 162.612797,35.1304378 163.187771,34.4742741 C163.741489,33.8229197 164.029156,32.9986037 163.996542,32.1567197 C164.034685,31.3138979 163.756232,30.4861193 163.212386,29.8255925 C162.625427,29.1829014 161.767804,28.8321494 160.881014,28.8721038 C159.993365,28.8338623 159.134009,29.1782427 158.535577,29.8120197 C157.951597,30.472245 157.645438,31.3197964 157.677576,32.1872585 C157.677496,32.4308935 157.701041,32.6740013 157.747904,32.9134029 C152.853079,32.9134029 144.797012,32.9134029 144.578996,32.9134029 C144.320034,32.9013854 144.080732,32.7765648 143.928462,32.5740831 C143.734721,32.1918862 143.650924,31.7664883 143.685831,31.3423521 L143.685831,25.0445762 L142.230042,25.0445762 L142.230042,31.8988366 C142.182084,32.5621144 142.424421,33.2144241 142.898158,33.6972317 C143.274799,34.0724014 143.795102,34.2810872 144.336364,34.2740754 M160.863432,34.1790658 C160.383838,34.2061564 159.924671,33.9884806 159.653791,33.6056153 C159.389759,33.192627 159.259937,32.7128048 159.281053,32.2279769 C159.25343,31.7157125 159.383092,31.206974 159.653791,30.7655084 C159.926818,30.3504889 160.411057,30.1103625 160.919694,30.1377667 C161.386155,30.1097603 161.831689,30.3279697 162.083622,30.707824 C162.325056,31.1209248 162.440842,31.5913628 162.41768,32.0651033 C162.41768,33.4902466 161.911319,34.182459 160.863432,34.182459"
                                        id="Shape"
                                        fill="#FFFFFF"
                                    ></path>
                                    <path
                                        d="M17.5424593,17.9364771 C16.6667297,18.2106655 15.8312219,18.5885065 15.0558443,19.060997 C10.7275578,21.6047154 8.78914473,26.2789249 8.60641078,30.8041017 C8.60641078,31.0615219 8.60641078,31.315555 8.60641078,31.5729753 L8.60641078,31.5729753 C8.60641078,31.6000721 8.60641078,31.7287823 8.60641078,31.7728147 L8.60641078,47.8412567 L14.2389161,47.8412567 L14.2389161,31.7694276 C14.2357563,30.7955832 14.6930669,29.8713428 15.4858066,29.249419 L17.7072781,31.7694276 L19.9287497,29.249419 C20.7214894,29.8713428 21.1788,30.7955832 21.1756402,31.7694276 L21.1756402,47.8378696 L26.8045625,47.8378696 L26.8045625,31.7694276 C26.8034591,28.9184214 25.3089331,26.2529471 22.8136515,24.6516718 C20.3183699,23.0503966 17.1461938,22.721149 14.3428236,23.7724648 L14.3428236,23.7724648 C15.4965556,22.4921378 17.2379027,21.8587485 19.1440686,21.8214903 L19.1440686,21.8214903 C19.7528929,21.8082767 20.3615591,21.853672 20.9606591,21.9569747 C25.944638,22.7292354 29.7390547,26.6752166 29.7605528,31.4408781 C29.7605528,31.6203948 29.7605528,31.8066858 29.7605528,31.9895896 L29.7605528,47.8412567 L35.3858921,47.8412567 C35.3858921,47.8412567 35.3858921,31.9794283 35.3858921,31.8574924 C35.3858921,24.9342429 30.9859452,19.3827723 23.4866872,17.7298635 C23.2107948,17.6722826 22.7700835,17.590992 22.3902835,17.5401854 C21.8229169,17.4624613 21.2508313,17.4194684 20.6776006,17.4114753 C19.6124924,17.412081 18.5559118,17.5909723 17.5567913,17.9398642 M16.4818858,17.2285714 C6.77190523,17.2285714 0,23.4134313 0,31.6170077 L0,47.8412567 L5.60025814,47.8412567 C5.60025814,47.8412567 5.60025814,38.9162262 5.60025814,31.6068464 C5.60025814,23.9756913 11.723637,18.5326081 17.864931,17.3538944 C18.1157423,17.3030878 18.4095498,17.2285714 18.1193253,17.2285714 L16.4818858,17.2285714 Z"
                                        id="Shape"
                                        fill="#B4975A"
                                    ></path>
                                    <path
                                        d="M2.81445962,7.73522517 C5.05786947,7.73522517 5.75128705,6.9641623 5.75128705,5.71484523 C5.75128705,4.75833685 5.04767215,4.14343861 4.25228139,4.00679455 C4.94569897,3.81158876 5.39438094,3.19669052 5.39438094,2.59155257 C5.39438094,1.38127666 4.58879286,0.766378414 2.85524889,0.766378414 C2.24340984,0.766378414 1.12170492,0.844460731 0.876969303,0.903022468 L0.876969303,7.63762228 C1.40722981,7.69618402 1.79472787,7.73522517 2.81445962,7.73522517 Z M2.73288108,3.74326674 L1.89670105,3.74326674 L1.89670105,1.70336621 C2.22301521,1.65456477 2.48814546,1.6252839 2.81445962,1.6252839 C4.01774308,1.6252839 4.33385993,1.98641461 4.33385993,2.61107314 C4.33385993,3.23573168 3.93616454,3.74326674 2.73288108,3.74326674 Z M3.12037915,6.87631969 C2.5085401,6.87631969 2.22301521,6.8665594 1.89670105,6.83727853 L1.89670105,4.56313106 L3.01840597,4.56313106 C4.30326797,4.56313106 4.69076604,5.04138525 4.69076604,5.69532465 C4.69076604,6.34926405 4.34405724,6.87631969 3.12037915,6.87631969 Z M8.06607812,7.65714286 L8.06607812,4.7095354 C8.06607812,3.89943137 8.36180033,3.46021834 9.24896695,3.46021834 C9.41212403,3.46021834 9.56508379,3.48949921 9.7486355,3.54806094 L9.7486355,2.62083343 C9.66705696,2.60131285 9.54468915,2.58179228 9.38153207,2.58179228 C8.85127156,2.58179228 8.31081374,2.88436125 8.01509153,3.32357428 C8.01509153,3.08932733 8.00489421,2.87460096 7.92331568,2.67939517 L7.07693832,2.67939517 L7.07693832,7.65714286 L8.06607812,7.65714286 Z M12.6038844,7.77426633 C14.0722981,7.77426633 14.9288728,6.72991535 14.9288728,5.16826901 C14.9288728,3.60662268 14.0722981,2.5622717 12.6038844,2.5622717 C11.1354707,2.5622717 10.278896,3.60662268 10.278896,5.16826901 C10.278896,6.72991535 11.1354707,7.77426633 12.6038844,7.77426633 Z M12.6038844,6.97392259 C11.6657312,6.97392259 11.2986278,6.24190087 11.2986278,5.16826901 C11.2986278,4.09463716 11.6657312,3.36261544 12.6038844,3.36261544 C13.5420376,3.36261544 13.909141,4.09463716 13.909141,5.16826901 C13.909141,6.24190087 13.5420376,6.97392259 12.6038844,6.97392259 Z M17.8351083,7.78402662 C18.6916829,7.78402662 19.1709568,7.4326562 19.4768764,6.88607998 C19.4768764,7.12032693 19.497271,7.46193707 19.5788495,7.65714286 L20.4252269,7.65714286 L20.4252269,2.67939517 L19.4360871,2.67939517 L19.4360871,5.19754988 C19.4360871,6.42734637 18.9466159,6.92512114 18.1104358,6.92512114 C17.6515565,6.92512114 17.376229,6.70063448 17.2640585,6.36878463 C17.1981681,6.17057568 17.1670331,6.03058194 17.162633,5.42678563 L17.1620853,2.67939517 L16.1729455,2.67939517 L16.1729455,5.58796147 C16.1729455,6.18333913 16.2239321,6.59327129 16.3666945,6.90560056 C16.6624167,7.54977967 17.2946504,7.78402662 17.8351083,7.78402662 Z M23.7801443,9.70680367 C25.1771768,9.70680367 26.2478952,8.81861732 26.2478952,7.26673127 L26.2478952,2.67939517 L25.4015178,2.67939517 C25.3199393,2.87460096 25.2995446,3.06004647 25.2995446,3.29429342 C24.9936251,2.85508038 24.5653378,2.5622717 23.9127095,2.5622717 C22.4442958,2.5622717 21.7508782,3.60662268 21.7508782,5.05114554 C21.7508782,6.4956684 22.4442958,7.54001938 23.9127095,7.54001938 C24.5347458,7.54001938 24.9426385,7.27649156 25.2587554,6.87631969 L25.2587554,7.32529301 C25.2587554,8.11587647 24.8100734,8.88693934 23.7903417,8.88693934 C23.1785026,8.88693934 22.6074528,8.67221297 22.1587709,8.34036313 L22.1587709,9.25783035 C22.4442958,9.4920773 22.9643589,9.70680367 23.7801443,9.70680367 Z M24.0146826,6.73967564 C23.0765294,6.73967564 22.7706099,6.00765392 22.7706099,5.05114554 C22.7706099,4.09463716 23.0765294,3.36261544 24.0146826,3.36261544 C24.9528359,3.36261544 25.2587554,4.09463716 25.2587554,5.05114554 C25.2587554,6.00765392 24.9528359,6.73967564 24.0146826,6.73967564 Z M28.8686058,7.65714286 L28.8686058,5.13898815 C28.8686058,3.90919166 29.3784716,3.41141689 30.2146517,3.41141689 C30.673531,3.41141689 30.9488585,3.63590355 31.061029,3.9677534 C31.1324102,4.18247977 31.1630022,4.32888411 31.1630022,5.07066612 L31.1630022,7.65714286 L32.152142,7.65714286 L32.152142,4.74857656 C32.152142,4.1531989 32.1011554,3.74326674 31.958393,3.43093747 C31.6626707,2.78675836 31.0304371,2.55251141 30.4899792,2.55251141 C29.6334046,2.55251141 29.1541307,2.91364212 28.8686058,3.42117718 L28.8686058,0.590693202 L27.879466,0.590693202 L27.879466,7.65714286 L28.8686058,7.65714286 Z M35.4866648,7.73522517 C35.8945575,7.73522517 36.2412663,7.65714286 36.3636341,7.6181017 L36.3636341,6.78847708 C36.2412663,6.84703882 35.8741629,6.93488143 35.6294272,6.93488143 C35.0175882,6.93488143 34.915615,6.73967564 34.915615,5.97837305 L34.915615,3.43093747 L36.200477,3.43093747 L36.200477,2.67939517 L34.915615,2.67939517 L34.915615,1.23487231 C34.4057491,1.28367376 34.0284484,1.43007811 33.9264752,1.47887955 L33.9264752,2.67939517 L33.212663,2.67939517 L33.212663,3.43093747 L33.9264752,3.43093747 L33.9264752,6.01741421 C33.9264752,7.11056664 34.3445652,7.73522517 35.4866648,7.73522517 Z M41.594858,7.73522517 C42.0027507,7.73522517 42.3494595,7.65714286 42.4718273,7.6181017 L42.4718273,6.78847708 C42.3494595,6.84703882 41.982356,6.93488143 41.7376204,6.93488143 C41.1257814,6.93488143 41.0238082,6.73967564 41.0238082,5.97837305 L41.0238082,3.43093747 L42.3086702,3.43093747 L42.3086702,2.67939517 L41.0238082,2.67939517 L41.0238082,1.23487231 C40.5139423,1.28367376 40.1366416,1.43007811 40.0346684,1.47887955 L40.0346684,2.67939517 L39.3208562,2.67939517 L39.3208562,3.43093747 L40.0346684,3.43093747 L40.0346684,6.01741421 C40.0346684,7.11056664 40.4527584,7.73522517 41.594858,7.73522517 Z M45.5514171,7.77426633 C47.0198309,7.77426633 47.8764055,6.72991535 47.8764055,5.16826901 C47.8764055,3.60662268 47.0198309,2.5622717 45.5514171,2.5622717 C44.0830034,2.5622717 43.2264288,3.60662268 43.2264288,5.16826901 C43.2264288,6.72991535 44.0830034,7.77426633 45.5514171,7.77426633 Z M45.5514171,6.97392259 C44.6132639,6.97392259 44.2461605,6.24190087 44.2461605,5.16826901 C44.2461605,4.09463716 44.6132639,3.36261544 45.5514171,3.36261544 C46.4895704,3.36261544 46.8566738,4.09463716 46.8566738,5.16826901 C46.8566738,6.24190087 46.4895704,6.97392259 45.5514171,6.97392259 Z M51.649413,9.70680367 C52.8730911,9.70680367 53.4543382,8.66245268 53.8622309,7.78402662 C54.6780163,6.0271745 55.3204473,4.25080179 55.6875507,2.67939517 L54.637227,2.67939517 C54.3924914,4.04583571 53.8418362,5.72460552 53.2911811,6.95440201 C53.2707865,6.72015506 53.2299972,6.32974347 53.0668401,5.9295716 C52.8832884,5.48059828 52.3734225,4.04583571 52.0878976,2.67939517 L51.0375739,2.67939517 C51.4862559,4.4362473 52.2102655,6.22238029 52.4346064,6.72991535 C52.5569742,7.00320346 52.7201313,7.42289591 52.7201313,7.81330749 C52.7201313,8.37940429 52.2408574,8.90645992 51.649413,8.90645992 C51.4046774,8.90645992 51.0579686,8.80885703 50.9356008,8.75029529 L50.9356008,9.59944048 C51.0579686,9.65800222 51.3434935,9.70680367 51.649413,9.70680367 Z M58.6039835,7.77426633 C60.0723972,7.77426633 60.9289719,6.72991535 60.9289719,5.16826901 C60.9289719,3.60662268 60.0723972,2.5622717 58.6039835,2.5622717 C57.1355698,2.5622717 56.2789951,3.60662268 56.2789951,5.16826901 C56.2789951,6.72991535 57.1355698,7.77426633 58.6039835,7.77426633 Z M58.6039835,6.97392259 C57.6658303,6.97392259 57.2987269,6.24190087 57.2987269,5.16826901 C57.2987269,4.09463716 57.6658303,3.36261544 58.6039835,3.36261544 C59.5421367,3.36261544 59.9092401,4.09463716 59.9092401,5.16826901 C59.9092401,6.24190087 59.5421367,6.97392259 58.6039835,6.97392259 Z M63.8352074,7.78402662 C64.691782,7.78402662 65.171056,7.4326562 65.4769755,6.88607998 C65.4769755,7.12032693 65.4973701,7.46193707 65.5789487,7.65714286 L66.425326,7.65714286 L66.425326,2.67939517 L65.4361862,2.67939517 L65.4361862,5.19754988 C65.4361862,6.42734637 64.946715,6.92512114 64.1105349,6.92512114 C63.6516557,6.92512114 63.3763281,6.70063448 63.2641576,6.36878463 C63.1982672,6.17057568 63.1671322,6.03058194 63.1627321,5.42678563 L63.1621844,2.67939517 L62.1730446,2.67939517 L62.1730446,5.58796147 C62.1730446,6.18333913 62.2240312,6.59327129 62.3667937,6.90560056 C62.6625159,7.54977967 63.2947495,7.78402662 63.8352074,7.78402662 Z M72.5233219,7.77426633 C73.9713409,7.77426633 74.8381129,6.71039477 74.8381129,5.16826901 C74.8381129,3.684705 74.2466685,2.5622717 72.8394387,2.5622717 C72.2174023,2.5622717 71.6973391,2.84532009 71.371025,3.35285515 L71.371025,0.590693202 L70.3818852,0.590693202 L70.3818852,4.94378235 C70.3818852,6.41758608 70.5756342,7.77426633 72.5233219,7.77426633 Z M72.5233219,6.97392259 C71.6769445,6.97392259 71.3506303,6.48590811 71.3506303,5.16826901 C71.3506303,4.09463716 71.6871418,3.4016566 72.625295,3.4016566 C73.5634482,3.4016566 73.8183812,4.09463716 73.8183812,5.16826901 C73.8183812,6.24190087 73.4614751,6.97392259 72.5233219,6.97392259 Z M76.1025803,9.70680367 C77.3262584,9.70680367 77.9075055,8.66245268 78.3153982,7.78402662 C79.1311836,6.0271745 79.7736146,4.25080179 80.140718,2.67939517 L79.0903943,2.67939517 C78.8456587,4.04583571 78.2950035,5.72460552 77.7443484,6.95440201 C77.7239538,6.72015506 77.6831645,6.32974347 77.5200074,5.9295716 C77.3364557,5.48059828 76.8265898,4.04583571 76.5410649,2.67939517 L75.4907412,2.67939517 C75.9394232,4.4362473 76.6634327,6.22238029 76.8877737,6.72991535 C77.0101415,7.00320346 77.1732986,7.42289591 77.1732986,7.81330749 C77.1732986,8.37940429 76.6940247,8.90645992 76.1025803,8.90645992 C75.8578447,8.90645992 75.5111359,8.80885703 75.3887681,8.75029529 L75.3887681,9.59944048 C75.5111359,9.65800222 75.7966608,9.70680367 76.1025803,9.70680367 Z"
                                        id="Broughttoyouby"
                                        fill="#FFFFFF"
                                    ></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="col-md-6 footer-last-sub2">
                        <span>©2021 Carrefour. All rights reserved.</span>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /Main Wrapper -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
            $(document).ready(function () {
                $("#myCarousel").carousel({
                    interval: 5000,
                });
            });
        </script>
        <!-- <script src="{{asset('plugins/bootstrap-5.0.2/js/bootstrap.min.js')}}"></script> -->
        <!-- Development version -->
        <!-- <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script> -->

        <!-- Production version -->
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".carousel").carousel();
            });
        </script>
    </body>
</html>
