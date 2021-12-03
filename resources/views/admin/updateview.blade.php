<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    @include("admin.admincss");

  </head>
  <body>
    
    <div class="container-scroller">
      
    @include("admin.navbar");
    <!-- include는 어떠한 부분에 부분적 보기를 하기위해 사용하는 것-->

    <div style="position: relative; top: 60px; right:-150px">
        <!-- 여기서 메뉴를 등록-->
            <form action="{{ url('/update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div >
                    <label>Title</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="title" placeholder="Write a menu" value="{{ $data->title }}" required>
                </div>
                <div>
                    <label>Price</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="num" name="price" placeholder="price" value="{{ $data->price }}" required>
                </div>
                <div>
                    <label>Description</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="description" value="{{ $data->description }}" placeholder="Description" required>
                </div>
                <div>
                    <label>Old Image</label>
                    <img src="/foodimage/{{ $data->image }}" height="200px" width="200px">
                </div>

                <div>
                    <label>New Image</label>
                    <input type="file" name="image" required>
                </div>

                <div>
                    <input style="color:blue" style="color: black" type=submit value="Save">
                </div>
            </form>
    
        <div>

    
    </div>

    @include("admin.adminscript");
    

  </body>
</html>