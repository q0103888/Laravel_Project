
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      
      <ul class="nav">
       
        <li class="nav-item nav-category">
          <span class="nav-link">관리 목록</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/users') }}">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">유저</span>
          </a>
        </li>
        
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/foodmenu') }}">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">메뉴</span>
          </a>
        </li>
        

        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/orders') }}">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">주문목록</span>
          </a>
        </li>

      
      </ul>
    </nav>