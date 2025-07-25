<div class="topbar-custom">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                            <li>
                                <button class="button-toggle-menu nav-link ps-0" style="margin-left: 15px">
                                    <i data-feather="menu" class="noti-icon"></i>
                                </button>
                            </li>
                            
                        </ul>

                        <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                            
                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{url('upload/profile.webp')}}" alt="user-image" class="rounded-circle">
                                    <span class="pro-user-name ms-1">
                                        Administrator <i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>
        
                                    <!-- item-->
                                    <a href="{{ route('admin.profile') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                                        <span>My Account</span>
                                    </a>
        
                                    <div class="dropdown-divider"></div>
        
                                    <!-- item-->
                                    <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                                        <span>Logout</span>
                                    </a>
        
                                </div>
                            </li>
        
                        </ul>
                    </div>

                </div>
               
            </div>