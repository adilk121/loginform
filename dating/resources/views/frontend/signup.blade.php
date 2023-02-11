@extends('frontend.layouts.main')
@section('main-container')
    <!-- ==========Header Section Ends Here========== -->

    <!-- ==========Page Header Section Start Here========== -->

    <!-- ==========Page Header Section Ends Here========== -->

    <!-- ==========Sign up Section start Here========== -->
    <div class="login-section padding-tb">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">Register Now</h3>
                <form class="account-form" action="" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="Name" name="name" value="{{old('name')}}">
                        <span class="text-danger">
                            @error('name'){{$message}}@enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Email" name="email"  value="{{old('email')}}">
                        <span class="text-danger">
                            @error('email'){{$message}}@enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password">
                        <span class="text-danger">
                            @error('password'){{$message}}@enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirm Password" name="password_confirmation">
                        <span class="text-danger">
                            @error('password_confirmation'){{$message}}@enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <button class="d-block lab-btn"><span>Get Started Now</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Are you a member? <a href="login.html">Login</a></span>
                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">Register With Social Media</h5>
                    <ul class="social-media social-color justify-content-center d-flex lab-ul">
                        <li>
                            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" class="pinterest"><i class="icofont-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Sign up Section ends Here========== -->

    <!-- ================ footer Section start Here =============== -->
   @endsection
