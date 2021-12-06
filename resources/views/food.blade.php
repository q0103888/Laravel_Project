
<!-- ***** Menu Area Starts ***** --> 
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>메뉴</h6>
                    <h2>원하시는 메뉴를 골라주세요</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">

                @foreach ($data as $data)

                <form action="{{ url('/addcart', $data->id)}}" method="post">
                    <!-- 카트에 주문을 추가 하기 위한 메소드 -->
                    @csrf
                <!-- 각각의 메뉴 표시 창 마다 해당하는 정보를 $data에서 가져옴 -->
                <div class="item">
                    <div style="background-image: url('/foodimage/{{ $data->image }}');" class='card'>
                        <div class="price"><h6>{{ $data->price}}₩</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{ $data->title }}</h1>
                          <p class='description'>{{ $data->description }}</p>
                          
                        </div>
                    </div>

                    <input type="number" name="quantity" min="1" value="1" style="width:80px">
                    <input type="submit" value="add cart">

                </div>
                </form>

                @endforeach
                
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->