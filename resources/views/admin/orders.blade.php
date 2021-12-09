<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss");
 

  </head>
  <body>
    
    <div class="container-scroller">

      @include("admin.navbar");

      <div class="container">
    <!-- include는 어떠한 부분에 부분적 보기를 하기위해 사용하는 것-->
    
        <h1>검색</h1>

        <form action="{{ url('/search') }}" method="get">
          @csrf

          <input type="text" name="search" style="width: 300px" placeholder="주문자or메뉴를 입력하세요" >

          <input type="submit" value="search" class="btn btn-success">

        </form>

        <table>

            <tr align="center">
                <td style="padding: 30px">주문자</td>
                <td style="padding: 30px">전화번호</td>
                <td style="padding: 30px">요구사항</td>
                <td style="padding: 30px">메뉴</td>
                <td style="padding: 30px">가격</td>
                <td style="padding: 30px">수량</td>
                <td style="padding: 30px">총 금액</td>
            </tr>

            @foreach($data as $data)
            <tr align="center" style="background-color:black">
                <td>{{ $data->name }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->foodname }}</td>
                <td>{{ $data->price }}₩</td>
                <td>{{ $data->quantity }}</td>
                <td>{{ $data->price * $data->quantity}}₩</td>
            </tr>
            @endforeach
        </table>
    </div>
    </div>

    @include("admin.adminscript");
    

  </body>
</html>