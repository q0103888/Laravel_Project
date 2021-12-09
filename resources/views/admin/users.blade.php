<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- 이 페이지는 일반회원들의 정보를 확인할 수 있는 페이지-->
</head>
<body>
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
    <!-- include는 어떠한 부분에 부분적 보기를 하기위해 사용하는 것-->
    <div style="position: relative; top: 60px; right: -150px">
        <table bgcolor="grey" border="3px">
            <tr align="center">
                <th style="padding: 30px 70px 30px 70px">이름</th>
                <th style="padding: 30px 70px 30px 70px">Email</th>
                <th style="padding: 30px 70px 30px 70px">삭제</th>
            </tr>

            @foreach ($data as $data)
            <!-- adminController에서 만든 $data를 가져온후 루프 돌려서 각 해당 사항마다 출력 -->
            <tr align="center">
                <td style="padding: 10px 70px 10px 70px">{{ $data->name }}</td>
                <td style="padding: 10px 70px 10px 70px">{{ $data->email }}</td>

                @if($data->usertype=="0")
                <td style="padding: 10px 70px 10px 70px"><a href="{{ url('/deleteuser',$data->id)}}">Delete</a></td>
                @else
                <td><a>Not Allowed</a></td>
                @endif
                <!-- 관리자는 삭제가 불가능 하기 때문에 if문으로 usertype를 구별한 후 판단-->

            </tr>
            @endforeach

        </table>    
    </div>

    </div>

    @include("admin.adminscript");
    
  </body>
</html>
</body>
</html>