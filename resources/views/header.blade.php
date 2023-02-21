<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duluwa.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
    <style>
        @media only screen and (max-width: 576px) {
            .social_icons, .telephone{
                display: none !important;
            }
            
            .quick-email-container{
                margin-top: -15px !important;
            }
            
        }
    </style>
</head>


<body class="homepage" id="homepage">
    <div class="container-fluid">
        <div class="row" style="background-color: white;">
            <div class="col-3 offset-1">
                <img src="{{url('/images/duluwa-(1)-transformed.png')}}" alt="duluwa.com" style="width: 130px; height: 80px;">
            </div>
            <div class="col-3">
            </div>
            <div class="header-contact-container container col-5">
                <div class="conatcts-display-container row">
                    <div class="col-md-3 col-sm-2 pt-4" style="text-align:right">
                        <i class="telephone fas fa-phone pt-3" style="font-size: xx-large;"></i>
                    </div>
                    <div class="quick-email-container  col-md-5 col-sm-10 pt-3 pb-0">
                        <span class="phone-email col-12" style="text-align:centre; font-family:Verdana, Geneva, Tahoma, sans-serif"><em>Quick Questions? Contact Us!</em></span>
                        <a href="mailto:duluwa@gmail.com" class="col-12" id="email" target="_blank" style="text-align:centre; font-weight:bolder; font-family:Verdana, Geneva, Tahoma, sans-serif">duluwa@gmail.com</a>
                        <span id="phone" class="col-12" style="text-align:centre; color:teal; font-weight:bolder; font-family:Verdana, Geneva, Tahoma, sans-serif">+9779846906735</span>
                    </div>
                    <div class="media-container social_icons row col-md-2 col-sm-12 col-xs-10 pt-2 pb-1 pr-0">
                        <div style="align-items:center" class="col-md-6 col-sm-3 col-xs-2">
                            <a href="https://call.whatsapp.com/video/z4ALPx5RWqxxPDcXt2u8qw" target="_blank">
                                <img src="{{url('/images/whatsapp.png')}}" alt="fb-icon" style="width: 32px; height: 32px; padding:5px">
                            </a>
                        </div>
                        <div style="align-items:center" class="col-md-6 col-sm-3 col-xs-2">
                            <a href="https://www.facebook.com/keshav.baniya/" target="_blank">
                                <img src="{{url('/images/facebook.png')}}" alt="fb-icon" style="width: 32px; height: 32px; padding:5px">
                            </a>
                        </div>
                        <div style="align-items:center" class="col-md-6 col-sm-3 col-xs-2">
                            <a href="https://www.instagram.com/keshavbaniya38/" target="_blank">
                                <img src="{{url('/images/instagram.png')}}" alt="fb-icon" style="width: 32px; height: 32px; padding:5px">
                            </a>
                        </div>
                        <div style="align-items:center" class="col-md-6 col-sm-3 col-xs-2">
                            <a href="https://vb.me/letsChatOnViber" target="_blank">
                                <img src="{{url('/images/viber.png')}}" alt="fb-icon" style="width: 32px; height: 32px; padding:5px">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            

            <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #3F4E4F;">
                <div class="container-fluid" style="background-color: #EFEFEF" >
                    <a class="navbar-brand" style="font-family: fantasy; color:#3F4E4F" href="#">DULUWA</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Packages</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Destinations
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Pokhara</a></li>
                                    <li><a class="dropdown-item" href="#">Kathmandu</a></li>
                                    <li><a class="dropdown-item" href="#">Mustang</a></li>
                                    <li><a class="dropdown-item" href="#">Chitwan</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                            @if (Route::has('login'))
                            <li class="nav-item me-2">
                                @auth
                                <a href="{{ url('/logout') }}"><button class="btn btn-primary nav-link">Logout</button></a>
                                @else
                            </li>
                            <li class="nav-item me-2">
                                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            </li>
                            <li class="nav-item me-2">
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                                @endif
                                @endauth
                            </li>
                            @endif
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary float-left" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>


<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
