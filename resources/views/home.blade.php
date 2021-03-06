<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Mcdonalds</title>
    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    {{-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   --}}
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/') }}" class="logo">
                            <img src="assets/mcimages/mcdonalds.png" style="padding-left:70px; padding-top: 15px ">
                            <a class="menu-trigger">
                                <span>Menu</span>
                            </a>
                        </a>
                        
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            @auth
                            <li class="scroll-to-section"><a href="{{ url('/showcart', Auth::user()->id) }}">Cart</a></li>
                                
                            @endauth    


                        </a></li> 


                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <li>
                                            <!-- x-app-layout??? ????????? ????????? JetStream??? ????????? ??? ?????????????????? ???????????? ??????????????? ????????? home????????? ??????????????? ????????? ????????? -->
                                            <x-app-layout>
                                                
                                            </x-app-layout>
                                        
                                        </li>    
                                    @else
                                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                        </li>
                                        <!-- ????????? welcome.blade??? ?????? ???????????? ??? ??? ?????? ????????? ?????? Home????????? ??????????????? ????????? ?????????-->
                                        @if (Route::has('register'))
                                        <li>    
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        </li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            {{-- ?????? welcome??? ?????? Login, Register??? ????????? ????????? ????????? ???????????? ???????????? ??? --}}
                            </li>   

                        </ul>        
                        {{-- ?????? ?????? ???????????? --}}
                        {{-- <a class='menu-trigger'>
                            <span>Menu</span>
                        </a> --}}
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4 style="color:red;">Mcdonald</h4>
                            <h6>THE BEST HAMBUGER</h6>
                            {{-- <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/mcimages/main1.jpg" alt="" style="height: 800px">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/mcimages/main2.jpg" alt="" style="height: 700px">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/mcimages/main3.jpg" alt="" style="width: 100%; height: 800px">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>????????? ??????</h6>
                            <h2>?????? 1?????? ??????????????? ?????? <br>????????????</h2>
                        </div>
                        <p style="color: #808080; font-weight: bolder">????????? 120?????? 3??? 7?????? ?????? ???????????? ?????? 6,900????????? ??????????????? ????????? ???????????? ???????????? ?????? ??????????????? ?????????????????? ????????????
                            ??? ????????? ????????????(QSR, Quick Service Restaurant)?????? ?????? 1?????? ??????????????? ????????????, ???????????? ??? ?????? ????????? ??????????????????
                            '????????? ?????? ???????????? ???????????? ????????? ????????? <br>????????? ??????(Our Customer???s Favorite Place and Way to Eat)'???<br> ?????? ?????? ???????????? ????????????.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/mcimages/about1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/mcimages/about2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/mcimages/about3.jpg" alt="" style="padding-top:60px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="https://www.mcdonalds.co.kr"><i class="fa fa-pagelines "></i></a>
                            <img src="assets/mcimages/brand.jpg" alt="" style="height: 400px" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    @include("food")
    

    

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row" style="text-align: center">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>????????? ?????????</h6>
                        <h2>?????? ?????? ?????? ????????? ?????? ?????????, ??????????????? ????????? ????????? ???????????????.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="assets/mcimages/icon1.png" alt="" width="50px" height="50px">?????????</a></li>
                                          <li style="padding-left: 15px"><a href='#tabs-2'><img src="assets/mcimages/icon2.png" alt="" width="40px" height="40px">??????</a></li>
                                          <li><a href='#tabs-3'><img src="assets/mcimages/icon3.png" alt="" width="35px" height="35px">????????? ??????</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/morning1.jpg" alt="" >
                                                            <h4>?????? ?????????</h4>
                                                            <p style="padding-left: 120px">???????????? ????????? ???????????? ????????? ???????????? ??????,
                                                                ??????????????? ????????? ???????????? ??? ?????? ??? ??????.</p>
                                                            <div class="price">
                                                                <h6>3,500???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/morning2.png" alt="">
                                                            <h4>?????? ?????? ?????????</h4>
                                                            <p style="padding-left: 120px">????????? ?????? ????????? ????????? ????????? ???????????? ????????????!</p>
                                                            <div class="price">
                                                                <h6>4,200???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/morning3.jpg" alt="">
                                                            <h4>????????? ?????? ?????????</h4>
                                                            <p style="padding-left: 120px">???????????? ??????, ??????????????? ???????????? ????????? ?????????
                                                                ??? ????????? ????????? ?????????</p>
                                                            <div class="price">
                                                                <h6>4,000???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/morning4.jpg" alt="">
                                                            <h4>????????? ?????? ?????????</h4>
                                                            <p style="padding-left: 120px">???????????? ?????? ?????? ?????????????????? ????????? ????????? ??????,
                                                                ????????? ????????? ????????? ????????? ????????? ??????!</p>
                                                            <div class="price">
                                                                <h6>4,000???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/morning5.jpg" alt="">
                                                            <h4>????????? ???????????????</h4>
                                                            <p style="padding-left: 120px">?????? ???????????? ???????????? ?????????????????? ????????? ???????????? ??????~
                                                                </p>
                                                            <div class="price">
                                                                <h6>5,800???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/morning6.png" alt="">
                                                            <h4>????????? ?????? ?????????</h4>
                                                            <p style="padding-left: 120px">????????? ????????? ????????? ????????? ?????? ????????? ??????????????????!</p>
                                                            <div class="price">
                                                                <h6>1,500???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/buger1.jpg" alt="">
                                                            <h4>??????</h4>
                                                            <p style="padding-left: 120px">100% ??? ????????? ?????? ??? ?????? ?????????????? ????????? ??????.
                                                                ???????????? ?????? ?????? ????????? ????????? ?????????, ??????, ????????? ????????????.
                                                                50??? ?????? ??? ???????????? ????????? ?????? ?????? ????????? ?????????.
                                                                </p>
                                                            <div class="price">
                                                                <h6>5,900???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/buger2.jpg" alt="">
                                                            <h4>??????????????? ????????? ??????</h4>
                                                            <p style="padding-left: 120px">????????? ???????????? ?????? 100% ????????? ?????? ??????
                                                                ??????????????? ???????????? ????????? ?????????~
                                                                ?????? ??????, ?????? ???????????? ?????? ????????? ???????????????
                                                                ????????? ????????? ????????????!</p>
                                                            <div class="price">
                                                                <h6>5,900???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/buger3.jpg" alt="">
                                                            <h4>1955??????</h4>
                                                            <p style="padding-left: 120px">113g ????????? ??? ????????? ??????,
                                                                ????????? 1955 ????????? ?????? ????????? ????????? ???????????????!
                                                                ??????????????? ?????? ?????? 1955?????? ?????? ??????
                                                                ????????? ???????????? 1955 ??????
                                                                </p>
                                                            <div class="price">
                                                                <h6>7,200???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/buger4.jpg" alt="">
                                                            <h4>????????? ?????? ???????????? ????????? ??????</h4>
                                                            <p style="padding-left: 120px">??? ?????? ?????? ???????????? ?????? ??????????????? 2?????? ????????? ??????,
                                                                ????????? ?????? ????????? ????????? ??????????????? ????????? ??????????????? ?????????
                                                                ??? ???????????? ????????? ?????? ???????????? ????????? ??????</p>
                                                            <div class="price">
                                                                <h6>8,500???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/buger5.jpg" alt="">
                                                            <h4>????????? ????????????</h4>
                                                            <p style="padding-left: 120px">????????? ???????????? ?????? ???????????? ?????? ?????? 2??????
                                                                ????????? ??????????????? ????????? ??????
                                                                ???????????? ???????????? ????????? ????????????!</p>
                                                            <div class="price">
                                                                <h6>6,200???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/buger6.jpg" alt="">
                                                            <h4>????????????</h4>
                                                            <p style="padding-left: 120px">???~?????? ??????????????? ?????? ????????? ?????? ????????????~
                                                                ?????? ??????
                                                                </p>
                                                            <div class="price">
                                                                <h6>7,000???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/side1.jpg" alt="">
                                                            <h4>????????? ?????? ?????????</h4>
                                                            <p style="padding-left: 120px">??? ????????? ????????? ????????? ????????? ??????, ?????????,??????????????? ???????????? ????????? ???!</p>
                                                            <div class="price">
                                                                <h6>1,800???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/side2.jpg" alt="">
                                                            <h4>?????? ???????????? ????????????</h4>
                                                            <p style="padding-left: 120px">?????? ??? ??? ????????? ?????????!
                                                                ?????? ???????????? ????????? ?????? ?????? ?????????
                                                                ???????????? ??????????????? ???????????? ???????????????!</p>
                                                            <div class="price">
                                                                <h6>2,900???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/side3.jpg" alt="">
                                                            <h4>????????? ?????????</h4>
                                                            <p style="padding-left: 120px">????????? ????????? ????????? ?????????????????? ???????????? ????????? ????????? ?????? ?????????!</p>
                                                            <div class="price">
                                                                <h6>1,500???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/side4.jpg" alt="">
                                                            <h4>?????????</h4>
                                                            <p style="padding-left: 120px">???????????? ????????? ????????? ??? ?????? ???!
                                                                ????????? ????????? ????????? ?????? ???????????????!</p>
                                                            <div class="price">
                                                                <h6>2,500???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/side5.jpg" alt="">
                                                            <h4>??????????????? ????????????</h4>
                                                            <p style="padding-left: 120px">???????????? 100% ??????????????? ???????????? ???????????????
                                                                ?????? ???????????? ????????? ?????? ??????!
                                                                2?????? ????????? ????????? ?????? ???????????????!</p>
                                                            <div class="price">
                                                                <h6>5,600???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/side6.jpg" alt="">
                                                            <h4>?????? ?????????</h4>
                                                            <p style="padding-left: 120px">????????? ????????????,
                                                                ?????? ???????????? ????????? ?????????.</p>
                                                            <div class="price">
                                                                <h6>1,000???</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/McDonaldsKorea"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.youtube.com/user/McDonaldsKor"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/mcdonalds_kr/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4 style="color:red; font-family: 'Dancing Script', cursive; font-size: 30px">Mcdonald</h4>
                            <h6 style="color: white">THE BEST HAMBUGER</h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>?? 2019 ALL RIGHTS RESERVED BY McDonald's.
                        <br>??????????????????(???)
                        <br>????????????: ????????? ????????????</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>