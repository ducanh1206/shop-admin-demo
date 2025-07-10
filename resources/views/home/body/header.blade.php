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
        <div class="col">
          <div class="lonyo-main-menu-item">
            <nav class="main-menu menu-style1 d-none d-lg-block menu-left">
              <ul>

                <li>
                  <a href="">Home</a>
                </li>

                <li class="menu-item-has-children">
                  <a href="#">Product</a>
                  <ul class="sub-menu">
                    <li>
                      <a href="">
                        Product 01
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Product 02
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Product 03
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item-has-children">
                  <a href="#">About</a>
                  <ul class="sub-menu">
                    <li><a href="">#</a></li>
                    <li><a href="">#</a></li>
                    <li class="menu-item-has-children">
                      <a class="no-border" href="#">#</a>
                      <ul class="sub-menu">
                        <li><a href="">#</a></li>
                        <li><a href="">#</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children">
                      <a class="no-border" href="#">Team</a>
                      <ul class="sub-menu">
                        <li><a href="">team</a></li>
                        <li><a href="">team details</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children">
                      <a class="no-border" href="#">Service</a>
                      <ul class="sub-menu">
                        <li><a href="">Service</a></li>
                        <li><a href="">Service Details</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children">
                      <a class="no-border" href="#">Career</a>
                      <ul class="sub-menu">
                        <li><a href="">Career</a></li>
                        <li><a href="">Career details</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children">
                      <a class="no-border" href="#">Utility</a>
                      <ul class="sub-menu">
                        <li><a href="">faq</a></li>
                        <li><a href="">errors 404</a></li>
                        <li><a href="">Cooming Soon</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children">
                      <a class="no-border" href="#">Accounts</a>
                      <ul class="sub-menu">
                        <li><a href="">Sign Up</a></li>
                        <li><a href="">Sign In</a></li>
                        <li><a href="">Reset Password</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                
                <li>
                  <a href="contact-us.html">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        
        <div class="col-auto d-flex align-items-center">
          <div class="lonyo-header-info-wraper2">
            
            @auth
                <div class="lonyo-header-info-content">
                    <ul>
                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
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
              <!-- Brand Logo-->
              <!-- mobile menu trigger -->
              <button class="lonyo-menu-toggle d-inline-block d-lg-none">
                <span></span>
              </button>
              <!--/.Mobile Menu Hamburger Ends-->
            </nav>
          </div>
        </div>
      </div>
    </div>

  </header>