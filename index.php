<?php 
  include 'includes/constants.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Sedulous Softtech is a leading IT consulting and software development company offering complete software solutions, services and products for mobile and web platforms.">
    <link rel="canonical" href="https://seduloussofttech.in/">
    <title>Leading Software Development Company | Sedulous Softtech</title>
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
    <!-- CSS & libraries -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/animation/aos.css" rel="stylesheet">
    <link href="assets/icons/themify-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header class="header_area">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="./">
                    <img src="assets/images/logo-white.svg" class="sticky_logo" alt="logo" height="50" width="50">
                    <img src="assets/images/logo.svg" class="sticky_logo2" alt="logo" height="50" width="50">
                    Sedulous Softtech</a>
                <!-- toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse"><span class="ti-menu"></span></button>
                <!-- navbar links -->
                <div class="collapse navbar-collapse" id="collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="<?= base_url; ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url;?>about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url;?>services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url;?>portfolio" class="nav-link">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url;?>contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--
    ========== banner area ========
    -->
    <section class="hero_section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="hero_content" data-aos="fade-right">
                        <h2 class="f_600">Sedulous is a custom <span class="f_700">software</span> development company</h2>
                        <p class="f_size_18 l_height_30">We discover, design and deliver simple to complex mobile &amp; web solutions for diverse business verticals from across the world.</p>
                        <a href="#services" class="m-btn btn-theme mt-4">Learn More <span class="ti-arrow-down"></span></a>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center">
                    <div class="hero_img" data-aos="fade-left">
                        <img src="assets/images/hero.svg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
     ========= section: services ==========
     -->
    <section class="section_services_area" id="services">
        <div class="container">
            <h2 class="t_color f_size_30 f_600 l_height_35 mb_70" data-aos="fade-up"><span class="t_color_blue">We create robust and</span> <br>scalable software solutions</h2>
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
                <a href="<?= base_url;?>services" class="m-btn btn-theme mt-5 mx-auto" data-aos="fade-down">All Services <span class="ti-arrow-right"></span></a>
            </div><!-- row -->
        </div><!-- container -->
    </section>

    <!--
     ======== section: about_us ========
    -->
    <section class="section_about_us text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                    <div class="about_img">
                        <img src="assets/images/featured_img.png" alt="featured_software_image" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1 d-flex align-items-center pl-lg-0" data-aos="fade-left">
                    <div class="about_content">
                        <h2 class="f_size_30 f_600 l_height_40 mb_30">We love building meaningful and useful software products</h2>
                        <p>We are at Sedulous , discover, design and deliver simple to complex mobile &amp; web solutions for diverse business verticals from across the world. With the extensive competence, we are able to offer our clients complete end-to-end business solutions to accelerate their business processes. Our mobile application development and web application development services are the perfect combination of creativity, technology, innovation, and quality.</p>
                        <a href="<?= base_url;?>contact.php" class="m-btn btn-white mt-3">Let's Talk <span class="ti-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
    ======= section: featured_services =======
    -->
    <section class="section_featured_services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="featured_services_content">
                        <h2 class="f_size_30 f_600 l_height_30 t_color mb_50" data-aos="fade-up"><span class="t_color_blue">What can we</span> do for you ?</h2>
                        <!--Nav tabs-->
                        <ul class="nav nav-tabs mb_30" role="tablist">
                            <li class="nav-item">
                                <a href="#tab-content-1" class="nav-link active pl-0" data-toggle="tab" role="tab">Data Analysis</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab-content-2" class="nav-link" data-toggle="tab" role="tab">AI &amp; ML</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab-content-3" class="nav-link" data-toggle="tab" role="tab">Android</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab-content-4" class="nav-link p_left_sm" data-toggle="tab" role="tab">ERP Inventory</a>
                            </li>
                        </ul>

                        <!--Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-content-1" role="tabpanel">
                                <p>We do data analysis with raw data. Leverage data analytics to boost revenues, improve operational efficiency, optimize customer service, and respond promptly to emerging issues and trends.</p>
                            </div>
                            <div class="tab-pane fade" id="tab-content-2" role="tabpanel">
                                <p>Our AI based products let you know type of emergency and alert signal. We have developed HPD for Indian railways.</p>
                            </div>
                            <div class="tab-pane fade" id="tab-content-3" role="tabpanel">
                                <p>With help of our expert team grow your business . Drive your huge customer base the way you want. We can help you to reach your desired customer base through Andriod apps</p>
                            </div>
                            <div class="tab-pane fade" id="tab-content-4" role="tabpanel">
                                <p>We design ERP and inventory as per your need. We have developed some ERP as Hospital Management Services. Inventory as Pharmacy.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="assets/images/featured_img2.svg" class="img-fluid rounded" data-aos="zoom-in-left">
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>

    <!--
    ======= section: portfolio ======
    -->
    <section class="section_portfolio_gallery">
        <div class="container">
            <h2 class="f_size_30 f_600 l_height_40 t_color mb_70 text-center"><span class="t_color_blue">We have been making</span> awesome<br> products since 2011</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="assets/images/project_1.png" class="card-img-top rounded" alt="project_1">
                        <div class="img_hover_content p-4">
                            <div class="border_shape">
                                <h6>CREATIVE WEB</h6>
                                <p>business / organisation / complex</p>
                            </div>
                        </div>
                    </div>
                </div><!-- column -->

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="assets/images/project_2.png" class="card-img-top rounded" alt="project_2">
                        <div class="img_hover_content p-4">
                            <div class="border_shape">
                                <h6>DATA ANALYSIS</h6>
                                <p>financial data / raw data / complex data</p>
                            </div>
                        </div>
                    </div>
                </div><!-- column -->

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="assets/images/project_3.png" class="card-img-top rounded" alt="project_3">
                        <div class="img_hover_content p-4">
                            <div class="border_shape">
                                <h6>UNIQUE DESIGN</h6>
                                <p>app / web app / IoT / AI</p>
                            </div>
                        </div>
                    </div>
                </div><!-- column -->
            </div><!-- row closed -->
        </div><!-- container closed -->
    </section>


    <!--
    ======== section: testimonials ========
    -->
    <section class="section_testimonials">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h2 class="t_color f_size_30 f_600 l_height_30 mb-4"><span class="t_color_blue">What our clients</span> have to say</h2>
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
                                        <p><span class="ti-quote-left"></span> They desgined CMS for us which I feel is the most user-friendly app for our employees. They delivered it before time. I am highly impressed with their technical ability and will surely hire them for future.</p>
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
    ===== section: clients =====
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
    include 'includes/footer.php';
   ?>
