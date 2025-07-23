@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
        <meta name="author" content="Zoyothemes"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('upload/adminicon.png')}} ">

        <!-- App css -->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-white">

        <div class="account-page">
            <div class="container-fluid p-0">

                        <div class="row" style="max-width: 50%; margin: 0 auto;">
                            <div class="col-md-7 mx-auto">
                                <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                                    <div class="mb-4 p-0 text-center">
                                        <a href="index.html" class="auth-logo">
                                            <img src="{{asset('upload/adminicon.png')}}" alt="logo-dark" class="mx-auto" height="28" style="width:30%; heigh:30%;" />
                                        </a>
                                    </div>

                                    <div class="pt-0">
                                        <form method="POST" action="{{ route('login') }}" class="my-4">
                                            @csrf

                                            @if (session('error'))
                                                <div class="alert alert-danger">
                                                    {{session('error')}}
                                                </div>
                                            @endif 
                                            <div class="form-group mb-3">
                                                <label for="emailaddress" class="form-label">Email address</label>
                                                <input class="form-control" type="email" id="email" name="email" required="" placeholder="Enter your email">
                                                @error('email') 
                                                    <small class="danger" style="color: red"> {{ $message }} </small>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
                                                @error('password') 
                                                    <small class="danger"> {{ $message }} </small>
                                                @enderror
                                            </div>
                                            </div>
                                            
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button class="btn btn-primary" type="submit"> Log In </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        

                                        <div class="text-center text-muted mb-4">
                                            <p class="saprator my-4 mb-0">Don't have an account ?<a class='text-primary ms-2 fw-medium' href='{{ route('register') }}'>Sign up</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    
            </div>
        </div>
        
        <!-- END wrapper -->

        <!-- Vendor -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>

        <!-- App js-->
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>
        
    </body>
</html>
@endsection