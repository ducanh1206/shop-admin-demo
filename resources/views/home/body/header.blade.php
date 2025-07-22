<header class="site-header lonyo-header-section light-bg" id="sticky-menu">
    <div class="container">
      <div class="row gx-3 align-items-center justify-content-between">
        <div class="col-8 col-sm-auto ">
          <div class="header-logo1 ">
            <a href="">
              <img src="{{ asset('upload/shopicon.png') }}" alt="logo" style="width:30px;height:30px">
            </a>
          </div>
        </div>   
        <div class="col-auto d-flex align-items-center">
          <div class="lonyo-header-info-wraper2">
            
            @auth
                <div class="lonyo-header-info-content">
                    <ul>
                        <li><a href="{{ route('all.product') }}">Dashboard</a></li>
                    </ul>
                </div>
              @else
                <div class="lonyo-header-info-content">
                    <ul>
                        <li><a href="{{ route('login') }}">Admin Login</a></li>
                    </ul>
                </div>

            @endauth
          </div>
          <div class="lonyo-header-menu">
            <nav class="navbar site-navbar justify-content-between">

              <button class="lonyo-menu-toggle d-inline-block d-lg-none">
                <span></span>
              </button>
 
            </nav>
          </div>
        </div>
      </div>
    </div>

  </header>