@extends('Main_Design')

@section('content')
    <!-- banner -->
    <div class="inner_page_agile">
        <h3>About Us</h3>
        <p>Add Some Short Description</p>

    </div>
    <!--//banner -->
    <!--/w3_short-->
    <div class="services-breadcrumb_w3layouts">
        <div class="inner_breadcrumb">

            <ul class="short_w3ls" _w3ls>
                <li><a href="index.php">Home</a><span>|</span></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>


    <div class="banner-bottom">
        <div class="container">
            <div class="tittle_head_w3ls">
                <h3 class="tittle">About Us</h3>
            </div>
            <div class="inner_sec_grids_info_w3ls">
                <div class="col-md-6 banner_bottom_left">
                    <h4>Employment opportunities for <span>Professionals</span></h4>
                    {{ $tablePages->PageDescription }}
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 banner_bottom_right">
                    <div class="agileits_w3layouts_banner_bottom_grid">
                        <img src="images/ab.png" alt=" " class="img-responsive" />
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
@endsection
