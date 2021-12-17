<!DOCTYPE html>
<html lang="en">

  <head>
      <base href="/public"

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Mcdonald</title>
<!--
-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    <style>
        tr{
            text-align: center;
        }
        button {
            width: 150px;
        }
    </style>
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
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
                            <li class="scroll-to-section">
                           	

                            <li class="scroll-to-section">
                            @auth
                                <a href="{{ url('/showcart', Auth::user()->id) }}">
                                Cart[{{ $count }}]
                                
                            @endauth    

                            @guest
                                Please Login
                            @endguest

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
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="top">
        <table style="margin: 0 auto">

            <tr>
                <th style="padding: 30px">메뉴</th>
                <th style="padding: 30px">가격</th>
                <th style="padding: 30px">수량</th>
                <th style="padding: 30px">취소</th>
            </tr>
    
            <form action="{{url('orderconfirm')}}" method="post">
                @csrf
            @foreach ($data as $data)
            <tr align="center" style="line-height:2">
                <td><input type="text" name="foodname[]" value="{{ $data->title }}" hidden="" >{{ $data->title }}</td>
                <td><input type="text" name="price[]" value="{{ $data->price }}" hidden="">{{ $data->price }}₩</td>
                <td><input type="text" name="quantity[]" value="{{ $data->quantity }}" hidden="">{{ $data->quantity }}</td>
                
            </tr> 
            @endforeach
            
            @foreach ($data2 as $data2)
            <tr >
            <td style="position: relative; top: -40px; right: -270px;"><a href="{{ url('/remove', $data2->id) }}" class="btn btn-warnig">Remove</a></td>
            </tr>
            @endforeach
    
        </table>

    <div align="center" style="padding: 10px">
        <button class="btn btn-primary" type="button" id="order">Order Now</button>
    </div>


    <div id="appear" align="center" style="padding: 10px; display: none">
        <div style="padding: 10px">
            <label>이름</label>
            <input type="text" name="name" placeholder="이름">
        </div>

        <div style="padding: 10px">
            <label>전화번호</label>
            <input type="number" name="phone" placeholder="전화번호">
        </div>

        <div style="padding: 10px">
            <label>요구사항</label>
            <input type="text" name="address" placeholder="요구사항">
        </div>

        <div style="padding: 10px">
            <input class="btn btn-success" type="submit" value="주문하기">

            <button id="close" type="button" class="btn btn-danger">취소</button>
        </div>
    </div>
</form>

    </div>

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

        <script type="text/javascript">
            $("#order").click(
                function()
                {
                    $("#appear").show();
                }
            );

            $("#close").click(
                function()
                {
                    $("#appear").hide();
                }
            );

        </script>

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