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
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
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
                                            <!-- x-app-layout을 가져온 이유는 JetStream은 로그인 후 로그아웃이나 프로필을 볼수있는데 그것을 home에서도 가능하도록 여기로 가져옴 -->
                                            <x-app-layout>
                                                
                                            </x-app-layout>
                                        
                                        </li>    
                                    @else
                                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                        </li>
                                        <!-- 기존에 welcome.blade에 있던 로그인을 할 수 있게 해주는 것을 Home에서도 가능하도록 여기로 가져옴-->
                                        @if (Route::has('register'))
                                        <li>    
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        </li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            {{-- 기존 welcome에 있는 Login, Register을 여기로 가져옴 홈에서 로그인이 가능하게 끔 --}}
                            </li>   

                        </ul>        
                        {{-- 이거 뭔지 모르겠음 --}}
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
                                <img src="assets/mcimages/main2.jpg" alt="">
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
                            <h6>브랜드 소개</h6>
                            <h2>세계 1위의 푸드서비스 기업 <br>맥도날드</h2>
                        </div>
                        <p style="color: #808080; font-weight: bolder">전세계 120개국 3만 7천여 개의 매장에서 매일 6,900만명의 고객들에게 제품과 서비스를 제공하고 있는 맥도날드는 전세계인들이 사랑하는
                            퀵 서비스 레스토랑(QSR, Quick Service Restaurant)이자 세계 1위의 푸드서비스 기업으로, 고객에게 더 나은 경험을 제공함으로써
                            '고객이 가장 좋아하는 장소이자 음식을 즐기는 <br>최고의 방법(Our Customer’s Favorite Place and Way to Eat)'이<br> 되기 위해 노력하고 있습니다.</p>
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
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>ㅡ메뉴 소개ㅡ</h6>
                        <h2>주문 즉시 바로 조리해 더욱 맛있는, 맥도날드의 다양한 버거를 소개합니다.</h2>
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
                                          <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">맥모닝</a></li>
                                          <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">버거</a></a></li>
                                          <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">사이드 메뉴</a></a></li>
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
                                                            <h4>에그 맥머핀</h4>
                                                            <p>캐나디안 스타일 베이컨과 계란의 클래식한 만남,
                                                                맥도날드의 아침을 탄생하게 한 바로 그 메뉴.</p>
                                                            <div class="price">
                                                                <h6>$10.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/morning2.png" alt="">
                                                            <h4>치킨 치즈 맥머핀</h4>
                                                            <p>바삭한 치킨 패티와 고소한 치즈로 아침에도 든든하게!</p>
                                                            <div class="price">
                                                                <h6>$8.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/morning3.jpg" alt="">
                                                            <h4>베이컨 에그 맥머핀</h4>
                                                            <p>부드러운 계란, 바삭바삭한 베이컨과 고소한 치즈가<br>
                                                                &nbsp갓 구워진 따뜻한 맥머핀</p>
                                                            <div class="price">
                                                                <h6>$9.90</h6>
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
                                                            <h4>소시지 에그 맥머핀</h4>
                                                            <p>잉글리쉬 머핀 위에 먹음직스럽게 올려진 치즈와 계란,
                                                                그리고 촉촉한 소시지 패티의 맛있는 조화!</p>
                                                            <div class="price">
                                                                <h6>$6.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/morning5.jpg" alt="">
                                                            <h4>디럭스 브렉퍼스티</h4>
                                                            <p>정통 아메리칸 스타일의 브렉퍼스트와 달콤한 핫케익을 함께~
                                                                프리미엄한 주말 브런치를 매일 즐겨보세요.
                                                                </p>
                                                            <div class="price">
                                                                <h6>$5.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/mcimages/morning6.png" alt="">
                                                            <h4>상하이 치킨 스낵랩</h4>
                                                            <p>매콤한 치킨에 달콤한 화이트 마요 소스로 매콤달콤하게!
                                                                베이컨에 양상추, 또띠아까지 어우러져
                                                                씹는 맛까지 즐겁다!</p>
                                                            <div class="price">
                                                                <h6>$4.10</h6>
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
                                                            <img src="assets/images/tab-item-04.png" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$14</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-05.png" alt="">
                                                            <h4>Dollma Pire</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$18</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-06.png" alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$22</h6>
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
                                                            <img src="assets/images/tab-item-01.png" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-02.png" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$20</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-03.png" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$30</h6>
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
                                                            <img src="assets/images/tab-item-05.png" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$14</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-03.png" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$18</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-02.png" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$10</h6>
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
                                                            <img src="assets/images/tab-item-06.png" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$8.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-01.png" alt="">
                                                            <h4>Dollma Pire</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$9</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-04.png" alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$11</h6>
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
                        <p>© 2019 ALL RIGHTS RESERVED BY McDonald's.
                        <br>한국맥도날드(유)
                        <br>대표이사: 앤토니 마티네즈</p>
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