@extends('Main_Design')

@section('content')
    <div class="inner_page_agile">
        <h3>Contact</h3>
        <p>Add Some Short Description</p>
    </div>
    <div class="services-breadcrumb_w3layouts">
        <div class="inner_breadcrumb">
            <ul class="short_w3ls"_w3ls>
                <li><a href="index.php">Home</a><span>|</span></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    <section class = "contact-section">
        <div class = "contact-body">
            <div class = "contact-info">
                <div>
                    <span><i class = "fas fa-mobile-alt"></i></span>
                    <span>Phone No.</span>
                    <span class = "text">{{ $tablePages->MobileNumber }}</span>
                </div>
                <div>
                    <span><i class = "fas fa-envelope-open"></i></span>
                    <span>E-mail</span>
                    <span class = "text">{{ $tablePages->Email }}</span>
                </div>
                <div>
                    <span><i class = "fas fa-map-marker-alt"></i></span>
                    <span>Address</span>
                    <span class = "text">{{ $tablePages->PageDescription }}</span>
                </div>
                <div>
                    <span><i class = "fas fa-clock"></i></span>
                    <span>Opening Hours</span>
                    <span class = "text">{{ $tablePages->Timing }}</span>
                </div>
            </div>

            <div class = "contact-form1">
                <form method="POST">
                    <div class="form-row">
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                    </div>
                    <div class="form-row">
                        <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                        <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                    </div>
                    <textarea rows="5" name="message" placeholder="Message" class="form-control" required></textarea><br>

                    <input type="submit" class="send-btn" value="Send Message">
                </form>

                <div>
                    <img src = "images/contact-png.png" alt = "">
                </div>
            </div>
        </div>

        <div class = "map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.9706478514654!2d72.8698906!3d21.233012500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f7adffdd9f9%3A0x8e5947b84d098fd9!2sSilver%20Trade%20Center!5e0!3m2!1sen!2sin!4v1734356364957!5m2!1sen!2sin"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </section>

    <!-- banner -->

    <!--//banner -->

    <!-- /inner_content -->
    <div class="inner_content_info_agileits">
        <div class="container">
            <div class="tittle_head_w3ls">
            </div>
            <div class="inner_sec_grids_info_w3ls">
                <div class="col-md-4 agile_info_mail_img_info">
                    <div class="address-grid">
                        <h4>Contact <span>Info</span></h4>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Telephone </p><span>+{{ $tablePages->MobileNumber }}</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="mail-agileits-w3layouts">
                            <i class = "fas fa-envelope-open"></i>
                            <div class="contact-right">
                                <p>Mail </p><a href="mailto:info@example.com">{{ $tablePages->Email }}</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Location</p><span>{{ $tablePages->PageDescription }}</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="agileits_w3layouts_nav_right contact">
                            <div class="social two">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 agile_info_mail_img">
                </div>
                <div class="clearfix"> </div>

            </div>

        </div>
    </div>
    <!-- //mid-services -->
@endsection
