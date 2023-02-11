@extends('frontend.layouts.main')
@section('main-container')
    <!-- ==========Header Section Ends Here========== -->

    <!-- ==========Page Header Section Start Here========== -->

    <!-- ==========Page Header Section Ends Here========== -->


    <!-- ==========Member page Section Start Here========== -->
    <section class="member-page-section">
        <div class="container">
            <div class="member-filter">
                <div class="member-filter-inner">
                    <form action="https://labartisan.net/" class="filter-form">
                        <div class="gender">
                            <div class="custom-select right w-100">
                                <select name="gender" id="gender" class="">
                                    <option value="0">I am a </option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="person">
                            <div class="custom-select right w-100">
                                <select name="gender" id="gender-two" class="">
                                    <option value="0">Looking for</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="age">
                            <div class="right d-flex justify-content-between w-100">
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
                                        <option value="1">36</option>
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
                            <div class="custom-select right w-100">
                                <select name="country" id="country" class="">
                                    <option value="0">Choose Your Country
                                    </option>
                                    <option value="1">USA</option>
                                    <option value="2">UK</option>
                                    <option value="3">Spain</option>
                                    <option value="4">Brazil</option>
                                    <option value="5">France</option>
                                    <option value="6">Newzeland</option>
                                    <option value="7">Australia</option>
                                    <option value="8">Bangladesh</option>
                                    <option value="9">Turki</option>
                                    <option value="10">Chine</option>
                                    <option value="11">India</option>
                                    <option value="12">Canada</option>
                                </select>
                            </div>
                        </div>
                        <button class="lab-btn" type="submit">Search now <i class="icofont-search-2"></i></button>
                    </form>
                </div>
            </div>
            <div class="member-wrapper">
                <ul class="member-info mb-4">
                    <li class="all-member">
                        <p>All Members </p>
                        <p>20 365 587</p>
                    </li>
                    <li class="member-cat">
                        <div class="custom-select right w-100">
                            <select name="member" id="member-cat" class="">
                                <option value="0">Newest Registerd</option>
                                <option value="1">Oldest</option>
                                <option value="2">Popular</option>
                                <option value="3">Most Active</option>
                            </select>
                        </div>
                    </li>
                </ul>
                <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/01.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Tenma Shyna</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/02.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Maya Statham</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/03.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Cristina Maria</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/04.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Gaurav-Singh</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/05.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Gihan-Fernando</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/06.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/07.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Sweet Admin</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/08.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Gyan-Baffour</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/09.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Zeahra Maria</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/10.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/11.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/12.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/13.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/14.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/15.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/16.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/17.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/18.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/19.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/member/20.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="profile.html">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="paginations">
                    <ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
                        <li>
                            <a href="#"><i class="icofont-rounded-double-left"></i></a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="d-none d-sm-block">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">...</a>
                        </li>
                        <li class="d-none d-sm-block">
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a href="#"><i class="icofont-rounded-double-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Member page Section Ends Here========== -->

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
                                    <img src="assets/images/app/apple.png" alt="apple">
                                </div>
                                <div class="app-content">
                                    <p>Available on the</p>
                                    <h4>App Store</h4>
                                </div>
                            </a></li>
                        <li class="d-inline-block">
                            <a href="#" class="d-flex flex-wrap align-items-center">
                                <div class="app-thumb">
                                    <img src="assets/images/app/playstore.png" alt="playstore">
                                </div>
                                <div class="app-content">
                                    <p>Available on the</p>
                                    <h4>Google Play</h4>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="mobile-app">
                    <img src="assets/images/app/mobile-view.png" alt="mbl-view">
                </div>
            </div>
        </div>
    </section>
    <!-- ================ App Section end Here =============== -->



    <!-- ================ footer Section start Here =============== -->
   @endsection
