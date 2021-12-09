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
    
    <div style="position: relative; top: 60px; right:-150px">
    <!-- 여기서 메뉴를 등록-->
        <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
            
            @csrf
            <div >
                <label>메뉴이름</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="title" placeholder="메뉴 이름을 적어주세요" required>
            </div>
            <div>
                <label>가격</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="num" name="price" placeholder="가격을 적어주세요" required>
            </div>
            <div>
                <label>메뉴 설명</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="description" placeholder="설명을 적어주세요" required>
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image" required style="padding: 10px">
            </div>
            <div>
                <input class="btn btn-success" style="color: white; width:120px; height:40px;" type=submit value="Save">
            </div>
        </form>

    <div>
        <!-- 메뉴를 삭제 할 수 있는 곳 -->
        <table bgcolor="black"style="padding: 15px">
            <tr>
                <th style="padding: 30px">메뉴이름</th>
                <th style="padding: 30px">가격</th>
                <th style="padding: 30px">설명</th>
                <th style="padding: 30px">Image</th>
                <th style="padding: 30px">Delete</th>
                <th style="padding: 30px">Update</th>
            </tr>
            @foreach ($data as $data)
                
            <tr align="center">
                <td>{{ $data->title }}</td>
                <td>{{ $data->price }}₩</td>
                <td>{{ $data->description }}</td>
                <td><img src="/foodimage/{{ $data->image }}" height="200px" width="200px"></td>
                <td><a href="{{ url('/deletemenu',$data->id) }}">Delete</a></td>

                <td><a href="{{ url('/updateview',$data->id) }}">Update</a></td>
            </tr>

            @endforeach
        </table>
    </div>


    </div>

    </div>

    @include("admin.adminscript");
    
  </body>
</html>