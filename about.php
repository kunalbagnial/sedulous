<?php
  include "includes/header.php";
?>

<!-- page intro -->
<section class="intro_area">
    <div class="background_overlay"></div>
    <h2 class="f_size_35 f_600 text-white">Who We Are</h2>
</section>

<!-- current page -->
<div class="breadcrumb_box">
    <div class="container d-flex align-items-center">
        <p class="text-capitalize"><span class="f_500">You are viewing:</span>&nbsp; <span class="ti-home"></span> <?=title;?></p>
    </div>
</div>

<!--
========= section: services_area ==========
-->
<section class="section_services_area" id="services">
    <div class="container">
        <h2 class="t_color f_size_30 f_600 l_height_40 mb_70" data-aos="fade-up"><span class="t_color_blue">We create robust and</span> <br>scalable software solutions</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="service_box">
                    <div class="s_icon">
                        <img src="assets/images/icon_shape.png">
                        <img class="icon" src="assets/images/icon1.png" width="40" height="40">
                    </div>
                    <h3 class="f_600">Web Development</h3>
                    <p>Using the most advance tools and technologies, we build dynamic and functional web applications that helps you creates an outstanding web presence for your business growth.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="service_box">
                    <div class="s_icon">
                        <img src="assets/images/icon_shape.png">
                        <img class="icon" src="assets/images/icon2.png" width="40" height="40">
                    </div>
                    <h3 class="f_600">Data Analysis &amp; ML</h3>
                    <p>With the help of our some data analytic products you can play with huge data and create different type of reports. Data tool can help you to get desired automatic and real-time reports.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="service_box">
                    <div class="s_icon">
                        <img src="assets/images/icon_shape.png">
                        <img class="icon" src="assets/images/icon3.png" width="40" height="40">
                    </div>
                    <h3 class="f_600">IoT &amp; AI</h3>
                    <p>Our IoT products are quite unique along with very affordable price. We are best at sensor based IoT's . You got multiple devices and tensed due to their communication? let our experts help you.</p>
                </div>
            </div>
            <a href="<?= base_url;?>services.php" class="m-btn btn-theme mt-5 mx-auto" data-aos="fade-down">All Services <i class="ti ti-arrow-right"></i></a>
        </div><!-- row -->
    </div><!-- container -->
</section>

<!--
==== section: about ====
-->
<section class="section_about_us text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
                <div class="about_img">
                    <img src="assets/images/featured_img.png" alt="featured_software_img" class="img-fluid" data-aos="fade-right">
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1 d-flex align-items-center pl-lg-0" data-aos="fade-left">
                <div class="about_content">
                    <h2 class="f_size_30 f_600 l_height_40 mb_30">We love building meaningful and useful software products</h2>
                    <p>We are at Sedulous , discover, design and deliver simple to complex mobile &amp; web solutions for diverse business verticals from across the world. With the extensive competence, we are able to offer our clients complete end-to-end business solutions to accelerate their business processes. Our mobile application development and web application development services are the perfect combination of creativity, technology, innovation, and quality.</p>
                    <a href="<?= base_url;?>contact" class="m-btn btn-white mt-3">Let's Talk <i class="lni lni-arrow-right"></i> <span class="ti-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
 ==== section: counter_area ====
 -->
<section class="counter_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-3 col-6 text-center">
                <div class="counter_box">
                    <img src="assets/images/icon10.png">
                    <h3 class="t_color f_size_30 f_600">20+</h3>
                    <p class="f_size_17">Partners</p>
                </div>
            </div><!-- column -->

            <div class="col-lg-3 col-md-3 col-6 text-center">
                <div class="counter_box">
                    <img src="assets/images/icon11.png">
                    <h3 class="t_color f_size_30 f_600">45+</h3>
                    <p class="f_size_17">Projects Delivered</p>
                </div>
            </div><!-- column -->

            <div class="col-lg-3 col-md-3 col-6 text-center">
                <div class="counter_box">
                    <img src="assets/images/icon12.png">
                    <h3 class="t_color f_size_30 f_600">60+</h3>
                    <p class="f_size_17">Satisfied Clients</p>
                </div>
            </div><!-- column -->

            <div class="col-lg-3 col-md-3 col-6 text-center">
                <div class="counter_box">
                    <img src="assets/images/icon13.png">
                    <h3 class="t_color f_size_30 f_700">30+</h3>
                    <p class="f_size_17">Meetings</p>
                </div>
            </div><!-- columns -->
        </div>
    </div>
</section>

<!--
 ===== section: team_members =====
 -->
<section class="team_members">
    <div class="container">
        <h2 class="t_color f_size_30 f_600 l_height_30 mb_70 text-center"><span class="t_color_blue">Faces behind</span> our success</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="member_box">
                    <img src="assets/images/member_1.png" class="w-100">
                    <div class="member_info">
                        <h3 class="f_500 t_color">Ravi Shankar</h3>
                        <h5>CEO</h5>
                    </div>
                    <div class="member_hover_content">
                        <h3 class="f_500">Ravi Shankar</h3>
                        <h5>CEO</h5>
                        <h5>IIT, Roorkee</h5>
                    </div>
                </div>
            </div><!-- column -->

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="member_box">
                    <img src="assets/images/member_2.png" class="w-100">
                    <div class="member_info">
                        <h3 class="f_500 t_color">Shital Pratap</h3>
                        <h5>CFO</h5>
                    </div>
                    <div class="member_hover_content">
                        <h3 class="f_500">Shital Pratap</h3>
                        <h5>CFO</h5>
                        <h5>ExCDACian</h5>
                    </div>
                </div>
            </div><!-- column -->

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="member_box">
                    <img src="assets/images/member_3.png" class="w-100">
                    <div class="member_info">
                        <h3 class="f_500 t_color">Avinash Anand</h3>
                        <h5>CTO</h5>
                    </div>
                    <div class="member_hover_content">
                        <h3 class="f_500">Avinash Anand</h3>
                        <h5>CTO</h5>
                        <h5>IIT, Kanpur</h5>
                    </div>
                </div>
            </div><!-- column -->

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="member_box">
                    <img src="assets/images/member_4.png" class="w-100">
                    <div class="member_info">
                        <h3 class="f_500 t_color">Deepak Tiwari</h3>
                        <h5>Director Design &amp; Implementation</h5>
                    </div>
                    <div class="member_hover_content">
                        <h3 class="f_500">Deepak Tiwari</h3>
                        <h5>Director Design &amp; Implementation</h5>
                        <h5>IIT, BHU</h5>
                    </div>
                </div>
            </div><!-- column -->
        </div>
    </div>
</section>

<?php
  include "includes/footer.php";
 ?>
