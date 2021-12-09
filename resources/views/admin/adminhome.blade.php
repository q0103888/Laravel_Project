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
    
    </div>

    @include("admin.adminscript");
    

  </body>
</html>