@extends('frontend.layouts.main')
@section('main-container')
    <!-- ==========Header Section Ends Here========== -->


    <!-- ================ Banner Section start Here =============== -->
    <section class="banner-section">
        <div class="container">
            <div class="section-wrapper">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <div class="intro-form">
                                <div class="intro-form-inner">
                                    <h3>Introducing TuruLav</h3>
                                    <p>Serious Dating With <strong>TuruLav </strong> Your Perfect
                                        Match is Just a Click Away.</p>
                                    <form action="" class="banner-form">
                                        <div class="gender">
                                            <label for="gender" class="left">I am a </label>
                                            <div class="custom-select right">
                                                <select name="gender" id="gender" class="">
                                                    <option value="0">Select Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="person">
                                            <label for="gender-two" class="left">Looking for</label>
                                            <div class="custom-select right">
                                                <select name="gender" id="gender-two" class="">
                                                    <option value="0">Select Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="age">
                                            <label for="age" class="left">Age</label>
                                            <div class="right d-flex justify-content-between">
                                                <div class="custom-select">
                                                    <select name="age-start" id="age">
                                                        <option value="1">18</option>
                                                        <option value="2">19</option>
                                                        <option value="3">20</option>
                                                        <option value="4">21</option>
                                                        <option value="5">22</option>
                                                        <option value="6">23</option>
                                                        <option value="7">24</option>
                                                        <option value="8">25</option>
                                                        <option value="9">26</option>
                                                        <option value="10">27</option>
                                                        <option value="11">28</option>
                                                        <option value="13">29</option>
                                                        <option value="14">30</option>
                                                    </select>
                                                </div>

                                                <div class="custom-select">
                                                    <select name="age-end" id="age-two">
                                                        <option value="1">18+</option>
                                                        <option value="2">19</option>
                                                        <option value="3">20</option>
                                                        <option value="4">21</option>
                                                        <option value="5">22</option>
                                                        <option value="6">23</option>
                                                        <option value="7">24</option>
                                                        <option value="8">25</option>
                                                        <option value="9">26</option>
                                                        <option value="10">27</option>
                                                        <option value="11">28</option>
                                                        <option value="13">29</option>
                                                        <option value="14">30</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="city">
                                            <label for="city" class="left">City</label>
                                            <input class="right" type="text" id="city" placeholder="Your City Name..">
                                        </div>
                                        <button class="">Find Your Partner</button>

                                    </form>
                                    <ul class="social-list">
                                        <li class="google"><a href="#">
                                                <img src="{{url('frontend/images/banner/google.png')}}" alt="img">
                                                <span>Continue with google</span>
                                            </a></li>
                                        <li class="facebook"><a href="index-2.html#">
                                                <i class="icofont-facebook"></i>
                                            </a></li>
                                        <li class="twitter"><a href="index-2.html#">
                                                <i class="icofont-twitter"></i>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-thumb">
                            <img src="{{url('frontend/images/banner/01.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-shapes">
            <img src="{{url('frontend/images/banner/banner-shapes/01.png')}}" alt="shape" class="banner-shape shape-1">
            <img src="{{url('frontend/images/banner/banner-shapes/02.png')}}" alt="shape" class="banner-shape shape-2">
            <img src="{{url('frontend/images/banner/banner-shapes/03.png')}}" alt="shape" class="banner-shape shape-3">
            <img src="{{url('frontend/images/banner/banner-shapes/04.png')}}" alt="shape" class="banner-shape shape-4">
            <img src="{{url('frontend/images/banner/banner-shapes/05.png')}}" alt="shape" class="banner-shape shape-5">
            <img src="{{url('frontend/images/banner/banner-shapes/06.png')}}" alt="shape" class="banner-shape shape-6">
            <img src="{{url('frontend/images/banner/banner-shapes/07.png')}}" alt="shape" class="banner-shape shape-7">
            <img src="{{url('frontend/images/banner/banner-shapes/08.png')}}" alt="shape" class="banner-shape shape-8">
        </div>
    </section>
    <!-- ================ Banner Section end Here =============== -->


    <!-- ================ Member Section Start Here =============== -->
    <section class="member-section padding-tb">
        <div class="container">
            <div class="section-header">
                <h4 class="theme-color">Meet New People Today!</h4>
                <h2>New Members in London</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-3 g-md-4">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/01.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/02.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Gihan-Fernando</a></h6>
                                    <p>Active 2 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/03.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Sweet Admin</a></h6>
                                    <p>Active 3 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/04.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Gyan-Baffour</a></h6>
                                    <p>Active 5 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/05.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Teszt Eleking</a></h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/06.jpg')}}" alt="member-img">
                                </div>frontend
                                <div class="lab-content">
                                    <h6><a href="profile.html">Zeahra Guido</a>
                                    </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="member-button-group d-flex flex-wrap justify-content-center">
                    <a href="signup.html" class="lab-btn"><i class="icofont-users"></i> <span>Join Us for
                            Free</span></a>
                    <a href="login.html" class="lab-btn"><i class="icofont-play-alt-1"></i> <span>Our tv
                            commercial</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Member Section end Here =============== -->


    <!-- ================ About Section start Here =============== -->
    <section class="about-section padding-tb bg-img">
        <div class="container">
            <div class="section-header">
                <h4>About Our Turulav</h4>
                <h2>It All Starts With A Date</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="lab-item about-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/about/01.png')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h2 class="counter">29,991</h2>
                                    <p>Members in Total</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="lab-item about-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/about/02.png')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h2 class="counter">29,960</h2>
                                    <p>Members Online</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="lab-item about-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/about/03.png')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h2 class="counter">29,960</h2>
                                    <p>Men Online</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="lab-item about-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/about/04.png')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h2 class="counter">28,960</h2>
                                    <p>Women Online</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ About Section end Here =============== -->


    <!-- ================ Work Section start Here =============== -->
    <section class="work-section padding-tb">
        <div class="container">
            <div class="section-header">
                <h4 class="theme-color">How Does It Work?</h4>
                <h2>You’re Just 3 Steps Away From A Great Date</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-5">
                    <div class="col-lg-4 col-sm-6 col-12 px-4">
                        <div class="lab-item work-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                    <div class="thumb-inner">
                                        <img src="{{url('frontend/images/work/01.png')}}" alt="work-img">
                                        <div class="step">
                                            <span>step</span>
                                            <p>01</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="lab-content">
                                    <h4>Create A Profile</h4>
                                    <p>Continua actualize ailers through robu
                                        and sertively concepze standards compliant
                                        commerce after technica sound.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 px-4">
                        <div class="lab-item work-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                    <div class="thumb-inner">
                                        <img src="{{url('frontend/images/work/02.png')}}" alt="work-img">
                                        <div class="step">
                                            <span>step</span>
                                            <p>02</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="lab-content">
                                    <h4>Find Matches</h4>
                                    <p>Continua actualize ailers through robu
                                        and sertively concepze standards compliant
                                        commerce after technica sound.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 px-4">
                        <div class="lab-item work-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                    <div class="thumb-inner">
                                        <img src="{{url('frontend/images/work/03.png')}}" alt="work-img">
                                        <div class="step">
                                            <span>step</span>
                                            <p>03</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="lab-content">
                                    <h4>Start Dating</h4>
                                    <p>Continua actualize ailers through robu
                                        and sertively concepze standards compliant
                                        commerce after technica sound.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Work Section end Here =============== -->



    <!-- ================ Success Story Section start Here =============== -->

    <!-- ================ Success Story Section end Here =============== -->


    <!-- ================ Top Member Section start Here =============== -->
    <section class="top-member-section padding-tb">
        <div class="container">
            <div class="section-header">
                <h4 class="theme-color">Top Members</h4>
                <h2>Turulav Members Online Now</h2>
            </div>
            <div class="section-wrapper">
                <ul class="button-group filters-button-group w-100 d-flex flex-wrap justify-content-center">
                    <li class="button is-checked filter-btn" data-filter="*"><i class="icofont-heart-alt"></i> Show all
                    </li>
                    <li class="button filter-btn" data-filter=".girl"><i class="icofont-girl"></i> new girl
                        member</li>
                    <li class="button filter-btn" data-filter=".boy"><i class="icofont-hotel-boy"></i> New
                        Boy Member</li>
                </ul>

                <div class="grid-memberlist">
                    <div class="grid-member filter-item girl">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/01.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Johanna</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item girl">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/03.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Selinae</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item boy">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/02.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item boy">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/04.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Rocky deo</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item girl">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/05.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Jhon doe</a> </h6>
                                    <p>Active 5 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item boy">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/06.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Angelina</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item girl">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/07.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item boy">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/08.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Jene Aiko</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item girl">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/09.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Anna haek</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item boy">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('frontend/images/member/10.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrean Puido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Top Member Section end Here =============== -->


    <!-- ================ Active Group Section Start Here =============== -->

    <!-- ================ Review Section end Here =============== -->


    <!-- ================ App Section start Here =============== -->
    <section class="app-section bg-theme">
        <div class="container">
            <div class="section-wrapper padding-tb">
                <div class="app-content">
                    <h4>Download App Our Turulav</h4>
                    <h2>Easy Connect to Everyone</h2>
                    <p>You find us, finally, and you are already in love. More than 5.000.000 around
                        the world already shared the same experience andng ares uses our system
                        Joining us today just got easier!</p>
                    <ul class="app-download d-flex flex-wrap">
                        <li><a href="#" class="d-flex flex-wrap align-items-center">
                                <div class="app-thumb">
                                    <img src="{{url('frontend/images/app/apple.png')}}" alt="apple">
                                </div>
                                <div class="app-content">
                                    <p>Available on the</p>
                                    <h4>App Store</h4>
                                </div>
                            </a></li>
                        <li class="d-inline-block"><a href="#" class="d-flex flex-wrap align-items-center">
                                <div class="app-thumb">
                                    <img src="{{url('frontend/images/app/playstore.png')}}" alt="playstore">
                                </div>
                                <div class="app-content">
                                    <p>Available on the</p>
                                    <h4>Google Play</h4>
                                </div>
                            </a></li>
                    </ul>

                </div>
                <div class="mobile-app">
                    <img src="{{url('frontend/images/app/mobile-view.png')}}" alt="mbl-view">
                </div>
            </div>
        </div>
    </section>
    <!-- ================ App Section end Here =============== -->


    <!-- ================ footer Section start Here =============== -->
   @endsection
