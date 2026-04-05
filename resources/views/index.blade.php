@extends('Main_Design')

@section('content')
    <!-- banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Improving workplace <span>Productivity.</span></h3>
                        <p>Hire. Train. Retain.</p>

                    </div>
                </div>
            </div>
            <div class="item item2">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Inspiring leadership <span>innovation.</span></h3>
                        <p>Hire. Train. Retain.</p>
                        <div class="agileits-button top_ban_agile">
                            <a class="btn btn-primary btn-lg" href="single.html">Read More »</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item3">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Improving workplace <span>Productivity.</span></h3>
                        <p>Hire. Train. Retain.</p>

                    </div>
                </div>
            </div>
            <div class="item item4">
                <div class="container">
                    <div class="carousel-caption">

                        <h3>Inspiring leadership <span>innovation.</span></h3>
                        <p>Hire. Train. Retain.</p>

                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- The Modal -->
    </div>
    <!--//banner -->

    <!--/search_form -->

    <!--//search_form -->
    <div class="banner-bottom">
        <div class="container">
            <div class="tittle_head_w3ls">
                <h3 class="tittle">About Us</h3>
            </div>
            <div class="inner_sec_grids_info_w3ls">
                <div class="col-md-6 banner_bottom_left">
                    <h4>Employment opportunities for <span>Professionals</span></h4>
                    @foreach ($tblPages as $tblPage)
                        @if ($loop->first)
                            <p>{{ $tblPage->PageDescription }}</p>
                            {{-- <div class="clearfix"> </div> --}}
                </div>
                @endif
                @endforeach
                <div class="col-md-6 banner_bottom_right">
                    <div class="agileits_w3layouts_banner_bottom_grid">
                        <img src="images/ab.png" alt=" " class="img-responsive" />
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>

    <!--team member-->
    <section class="our-members py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Meet Our Member</h2><br>
            <div class="row justify-content-center">
                @foreach ($Employers as $employer)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="member-card text-center">
                            <div class="profile-image-wrapper">
                                <img src="{{ $employer->ProfilePic && file_exists('images/employee/') . $employer->ProfilePic ? asset('images/employee/') . $employer->ProfilePic : ($employer->Gender == 'Female' ? asset('images/defaultFemaleUser.jpg') : asset('images/defaultMaleUser.jpg')) }}"
                                    alt="#{{ $employer->EmpName }}" class="profile-image">
                            </div><br>
                            <h3 class="member-name mt-3">{{ $employer->EmpName }}</h3>
                            <h5 class="member-designation mt-3">{{ $employer->Designation }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- //banner-bottom -->
    <div class="team_work_agile">
        <h4>Whether we play a large or small role, by working together we achieve our objectives.</h4>
    </div>
@endsection
