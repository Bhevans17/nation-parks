@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row py-5">
        @foreach($parks as $park)
        <div class="col-md-4">
            <div class="card my-2">
                <img src="{{ $park['images'][0]['url'] }}" class="card-img-top img-fluid thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $park['name'] }}</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-md-12">
    </div>
</div>
<!--/ab -->
<section class="about py-lg-5 py-md-5 py-5">
    <div class="container">
        <div class="inner-sec-w3pvt py-lg-5 py-3">
            <h3 class="tittle text-center mb-lg-5 mb-3 px-lg-5">Discover Our National Parks</h3>
            <div class="feature-grids row mt-3 mb-lg-5 mb-3 mt-lg-5 text-center">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="bottom-gd px-3">
                        <span class="fa fa-bus" aria-hidden="true"></span>
                        <h3 class="my-4"> Sit Amet Mattis</h3>
                        <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="bottom-gd2-active px-3">
                        <span class="fa fa-car" aria-hidden="true"></span>
                        <h3 class="my-4"> Ultricies Velit</h3>
                        <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="bottom-gd px-3">
                        <span class="fa fa-rocket" aria-hidden="true"></span>
                        <h3 class="my-4">Amet Mattis Quam</h3>
                        <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.
                        </p>
                    </div>
                </div>

            </div>
            <div class="fetured-info pt-lg-5">

                <div class="row fetured-sec mt-lg-5 mt-3">
                    <div class="col-lg-6 p-0">
                        <div class="img-effect">
                            <img src="images/img1.jpg" alt="" class="img-fluid image1">
                        </div>

                    </div>
                    <div class="col-lg-6 serv_bottom feature-grids pl-lg-5">
                        <div class="featured-left text-left">
                            <div class="bottom-gd px-3">
                                <span class="fa fa-plane" aria-hidden="true"></span>
                                <h3 class="my-4"> Ultricies Velit</h3>
                                <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui
                                    turpis.</p>
                            </div>
                            <div class="bottom-gd fea active p-4" data-aos="fade-left">
                                <span class="fa fa-rocket" aria-hidden="true"></span>
                                <h3 class="my-3 ">Mattis Quam</h3>
                                <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui
                                    turpis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->
</section>
<!-- //ab -->
<!--/counter-->
<section class="stats py-lg-5">
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <span class="fa fa-briefcase"></span>
                    <h3 class="timer count-title count-number">12</h3>
                    <p class="count-text">Years Of Experience</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <span class="fa fa-user"></span>
                    <h3 class="timer count-title count-number">120</h3>
                    <p class="count-text">Our Agents</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <span class="fa fa-smile-o"></span>
                    <h3 class="timer count-title count-number">1280</h3>
                    <p class="count-text">Happy Customers</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <span class="fa fa-users"></span>
                    <h3 class="timer count-title count-number">10200</h3>
                    <p class="count-text">Clients</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//counter-->
<!--//team -->
<section class="banner-bottom py-lg-5 py-4">
    <div class="container">
        <div class="inner-sec-w3pvt speak">
            <h3 class="tittle  text-center my-lg-5 my-3">Our Travel Agents</h3>
            <div class="row mt-lg-5 mt-4">
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <img src="images/team.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <div class="team-info">
                        <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Agent</span> Jason Donoghue</h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <ul class="top-right-info text-center mt-md-4 mt-3">

                            <li class="mr-1">
                                <a href="#">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-4 team-gd second text-center">
                    <div class="team-img mb-4">
                        <img src="images/team1.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <div class="team-info">
                        <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Agent</span> Mariana Noe</h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <ul class="top-right-info text-center mt-md-4 mt-3">

                            <li class="mr-1">
                                <a href="#">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <span class="fa fa-dribbble"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <img src="images/team2.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <div class="team-info">
                        <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Agent</span> Daniel Doe</h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <ul class="top-right-info text-center mt-md-4 mt-3">

                            <li class="mr-1">
                                <a href="#">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!--//team -->
@endsection