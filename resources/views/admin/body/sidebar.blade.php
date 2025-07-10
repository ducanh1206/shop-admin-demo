<div class="app-sidebar-menu">
                <div class="h-100" data-simplebar>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <div class="logo-box">
                            
                            <a href="" class="logo logo-dark">
                                <span class="logo-sm" style="color: black">
                                    <img src="{{ asset('upload/adminicon.png') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg" style="color: black">
                                    <img src="{{ asset('upload/adminicon.png') }}" alt="" height="24"> Welcome to Admin Page
                                </span>
                            </a>
                        </div>

                        <ul id="side-menu">

                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('dashboard') }}" class="tp-link">
                                    <i data-feather="home"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li class="menu-title">Pages</li>

                            <li>
                                <a href="#sidebarAuth" data-bs-toggle="collapse">
                                    <i data-feather="users"></i>
                                    <span> Product List </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarAuth">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.product') }}" class="tp-link">All Product</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.product') }}" class="tp-link">Add Product</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarError" data-bs-toggle="collapse">
                                    <i data-feather="alert-octagon"></i>
                                    <span> Reviews </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarError">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.review') }}" class="tp-link">All Review</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.review') }}" class="tp-link">Add Review</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarExpages" data-bs-toggle="collapse">
                                    <i data-feather="file-text"></i>
                                    <span> FAQs List </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarExpages">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.faq') }}" class="tp-link">All FAQ</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.faq') }}" class="tp-link">Add FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                           

                            

                        </ul>
            
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
            </div>