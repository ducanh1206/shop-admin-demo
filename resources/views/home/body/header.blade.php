<header class="site-header lonyo-header-section" style="background-color: rgb(248, 249, 250)" id="sticky-menu">
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
                <li class="menu-item-has-children">
                  <a href="#">Home</a>
                  {{-- <ul class="sub-menu">
                    <li>
                      <a href="">
                        #
                      </a>
                    </li>
                    <li>
                      <a href="">
                        #
                      </a>
                    </li>
                    <li>
                      <a href="">
                        #
                      </a>
                    </li>
                  </ul> --}}
                </li>
                <li class="menu-item-has-children">
                  <a href="#">Product</a>
                  {{-- <ul class="sub-menu">
                    <li>
                      <a href="">
                        Home 01
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Home 02
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Home 03
                      </a>
                    </li>
                  </ul> --}}
                </li>
                <li class="menu-item-has-children">
                  <a href="#">About</a>
                  {{-- <ul class="sub-menu">
                    <li>
                      <a href="">
                        #
                      </a>
                    </li>
                    <li>
                      <a href="">
                        #
                      </a>
                    </li>
                    <li>
                      <a href="">
                        #
                      </a>
                    </li>
                  </ul> --}}
                </li>
                <li class="menu-item-has-children">
                  <a href="#">Blog</a>
                  {{-- <ul class="sub-menu">
                    <li>
                      <a href="">
                        #
                      </a>
                    </li>
                    <li>
                      <a href="">
                        #
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Home 03
                      </a>
                    </li>
                  </ul> --}}
                </li>
                <li>
                  <a href="#">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="col-auto d-flex align-items-center">
          <div class="lonyo-header-info-wraper2" style="margin: 5%">
            
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
