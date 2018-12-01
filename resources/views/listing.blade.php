<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>Where2Get/Abuja</title>
    <!-- Bootstrap CSS --> 
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    <!-- Simple line Icon --> 
    <!-- Themify Icon --> 


     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}">
     <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
     <link rel="stylesheet" href="{{ asset('css/set1.css') }}">
     <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
</head>

<body> 
     <!--============================= HEADER =============================-->
     <div class="dark-bg sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/search">Listing</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-menu"></span>
            </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                              
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/search">Home</a>
                                </li>    
                                <li class="nav-item active">
                                    <a class="nav-link" href="/help">About</a>
                                </li>     
                                  <li class="nav-item active">
                                    <a class="nav-link" href="/addproduct">Add listing</a>
                                </li>
                                       </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--//END HEADER -->
    <!--============================= DETAIL =============================-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 responsive-wrap">
                    <div class="row detail-filter-wrap">
                        <div class="col-md-4 featured-responsive">
                            <div class="detail-filter-text">
                                <p>{{$b}} Product on <span> where2get </span></p>
                            </div>
                        </div>
                        <div class="col-md-8 featured-responsive">
                            <div class="detail-filter">
                                
                                <div class="map-responsive-wrap">
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="row detail-checkbox-wrap">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">

                
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                
                        </div>

                       
                  
                   
                    </div>
                    <div class="row light-bg detail-options-wrap">
                    @foreach($a as $aa)

<div class="col-md-4 featured-responsive">
    <div class="featured-place-wrap">
        <a href="detail.html">
            <img src="{{asset('images/'.$aa->image_url)}}" style="height:240px" class="img-fluid" alt="#">
            <!-- <span class="featured-rating-orange">6.5</span> -->
            <div class="featured-title-box">
                <h6>{{$aa->name}}</h6>
                <p>{{$aa->district}} </p> <span> </span>
                <p></p> <span> </span>
                 <ul>
                    <li><span class="icon-location-pin"></span>
                        <p>{{$aa->location}}</p>
                    </li>
                    <li><span class="icon-screen-smartphone"></span>
                        <p>{{$aa->city}}</p>
                    </li>
                    <li><span class="icon-link"></span>
                        <p>{{$aa->description}}</p>
                    </li>

                </ul>
                <div class="bottom-icons">
                    <div class="open-now">NOW OPEN</div>
                    <span class="ti-heart"></span>
                    <span class="ti-bookmark"></span>
                </div>
            </div>
        </a>
    </div>
</div>
@endforeach


                       
                        <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-5 responsive-wrap map-wrap">
                    <div class="map-fix">
                        <!-- data-toggle="affix" -->
                        <!-- Google map will appear here! Edit the Latitude, Longitude and Zoom Level below using data-attr-*  -->
                        <div id="map" data-lat="40.674" data-lon="-73.945" data-zoom="14"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END DETAIL -->
    <!--============================= FOOTER =============================-->
    <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy; 2018 Listing. All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">where2get</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->




    <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('js/popper.min.js') }}"></script> 
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script> 
    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
</body>

</html>
