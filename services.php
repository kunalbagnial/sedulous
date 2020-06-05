<?php
  include 'includes/header.php';
?>

<!-- page intro -->
<section class="intro_area">
    <div class="background_overlay"></div>
    <h2 class="f_size_35 f_600 text-white">What We Offer</h2>
</section>

<!-- current page -->
<div class="breadcrumb_box">
    <div class="container d-flex align-items-center">
        <p class="text-capitalize"><span class="f_500">You are viewing:</span>&nbsp; <span class="ti-home"></span> <?=title;?></p>
    </div>
</div>

<!--
-->
<section class="section_services_area">
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

            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="service_box">
                    <div class="s_icon">
                        <img src="assets/images/icon_shape.png">
                        <img class="icon" src="assets/images/icon4.png" width="40" height="40" alt="Artificial Intelligence">
                    </div>
                    <h3 class="f_600">ML &amp; AI</h3>
                    <p>Our high quality AI based products let you know type of emergency and alert signal. We have developed HPD for Indian railways. With our expert team, we help you solve real world problems.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="service_box">
                    <div class="s_icon">
                        <img src="assets/images/icon_shape.png">
                        <img class="icon" src="assets/images/icon5.png" width="40" height="40" alt="Android Development">
                    </div>
                    <h3 class="f_600">Android Development</h3>
                    <p>We create user-friendly android applications with flexible layout and easy navigation for startups, small and large enterprises. We can help you to reach desired customer base through Android apps.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="service_box">
                    <div class="s_icon">
                        <img src="assets/images/icon_shape.png">
                        <img class="icon" src="assets/images/icon6.png" width="40" height="40" alt="Enterprise resource planning">
                    </div>
                    <h3 class="f_600">ERP &amp; Inventory</h3>
                    <p>We design ERP and Inventory as per your need at affordable prices. We have developed some ERP software as hospital management services, Inventory as pharmacy. Let our experts help you.</p>
                </div>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</section>

<!--
==== section: about_us ====
-->
<section class="section_about_us text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                <div class="about_img">
                    <img src="assets/images/featured_img.png" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1 d-flex align-items-center pl-lg-0" data-aos="fade-left">
                <div class="about_content">
                    <h2 class="f_size_30 f_600 l_height_40 mb_30">We love building meaningful and useful software products</h2>
                    <p>We are at Sedulous , discover, design and deliver simple to complex mobile &amp; web solutions for diverse business verticals from across the world. With the extensive competence, we are able to offer our clients complete end-to-end business solutions to accelerate their business processes. Our mobile application development and web application development services are the perfect combination of creativity, technology, innovation, and quality.</p>
                    <a href="<?= base_url;?>contact.php" class="m-btn btn-white mt-3">Free Quote <span class="ti-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!--
 ======== section: testimonials ========
 -->
<section class="section_testimonials">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h2 class="t_color f_size_30 f_600 l_height_35 mb-4"><span class="t_color_blue">What our clients</span> have to say</h2>
                <p>We have huge list of our clients. We are thankful to them for making us part of their glory. We are proud of being able to help them achieve their dream.</p>
            </div><!-- column closed -->

            <div class="col-lg-6 offset-lg-1">
                <div id="slider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                        <li data-target="#slider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <div class="media rounded">
                                <img src="assets/images/c1.jpg" class="mr-3 align-self-start rounded-circle" width="90" height="90">
                                <div class="media-body">
                                    <p><span class="ti-quote-left"></span> They desgined CMS for us which I feel is the most user- friendly app for our employees. They delivered it before time. I am highly impressed with their technical ability and will surely hire them for future.</p>
                                    <h6 class="t_color f_500">-Sr. DEN1, Lucknow Railway-</h6>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star star-filled"></span>
                                </div>
                            </div><!-- media div -->
                        </div><!-- carousel item -->

                        <div class="carousel-item">
                            <div class="media">
                                <img src="assets/images/c2.jpg" class="mr-3 align-self-start rounded-circle" width="90" height="90">
                                <div class="media-body">
                                    <p><span class="ti-quote-left"></span> They designed OBHS and MCC app for Spj division. For the first time such app got desinged to ensure service and cleaniness in railways. We are pretty satisfied with their services.</p>
                                    <h6 class="t_color f_500">-Sr. DME, SPJ EC Railway-</h6>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                </div>
                            </div><!-- media div -->
                        </div><!-- carousel item -->

                        <div class="carousel-item">
                            <div class="media">
                                <img src="assets/images/c3.jpg" class="mr-3 align-self-start rounded-circle" width="90" height="90">
                                <div class="media-body">
                                    <p><span class="ti-quote-left"></span> They helped us to maintain our complex financial report. They were always there to get solution if we needed any change in running software. I would definitely recommend working with them.</p>
                                    <h6 class="t_color f_500">-Sr. DFM, Bikaner, NW Railway-</h6>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                </div>
                            </div><!-- media div -->
                        </div><!-- carousel item -->
                    </div><!-- carousel inner -->
                </div><!-- carousel -->
            </div><!-- column closed -->
        </div><!-- row closed -->
    </div><!-- container closed -->
</section>


<!--
 ====== clients section ======
 -->
<section class="section_clients">
    <div class="container">
        <h2 class="s_title t_color f_size_30 f_600 l_height_30 mb_50 text-center"><span class="t_color_blue">We work</span> for them</h2>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <ul class="client_logos">
                    <li>
                        <img src="assets/images/p1.png" data-aos="zoom-in">
                    </li>
                    <li>
                        <img src="assets/images/p2.png" data-aos="zoom-in">
                    </li>
                    <li>
                        <img src="assets/images/p5.png" data-aos="zoom-in">
                    </li>
                    <li>
                        <img src="assets/images/p4.png" data-aos="zoom-in">
                    </li>
                    <li>
                        <img src="assets/images/p3.png" width="255" height="84" data-aos="zoom-in">
                    </li>
                    <li>
                        <img src="assets/images/p6.png" width="148" height="52" data-aos="zoom-in">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php
  include "includes/footer.php";
 ?>
