 <?php
  include 'includes/header.php';
 ?>

 <!-- page intro -->
 <section class="intro_area">
     <div class="background_overlay"></div>
     <h2 class="f_size_35 f_600 text-white">Recent Work</h2>
 </section>

 <!-- current page -->
 <div class="breadcrumb_box">
     <div class="container d-flex align-items-center">
         <p class="text-capitalize"><span class="f_500">You are viewing:</span> &nbsp;<span class="ti-home"></span> <?=title;?></p>
     </div>
 </div>

 <!--
 ========= section: portfolio_gallery ========
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
                             <h6>ANDROID</h6>
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

             <div class="col-lg-7 col-md-6">
                 <div class="card">
                     <img src="assets/images/project_4.jpg" class="card-img-top rounded" alt="project_3">
                     <div class="img_hover_content p-4">
                         <div class="border_shape">
                             <h6>DATA ANLAYSIS</h6>
                             <p>web app / complex data / machine learning</p>
                         </div>
                     </div>
                 </div>
             </div><!-- column -->

             <div class="col-lg-5 col-md-6">
                 <div class="card">
                     <img src="assets/images/project_5.jpg" class="card-img-top rounded" alt="project_3">
                     <div class="img_hover_content p-4">
                         <div class="border_shape">
                             <h6>CMS &amp; eTOKEN</h6>
                             <p>complaints/ status reports / book tickets</p>
                         </div>
                     </div>
                 </div>
                 <div class="card">
                     <img src="assets/images/project_6.jpg" class="card-img-top rounded" height="220" alt="project_3">
                     <div class="img_hover_content p-4">
                         <div class="border_shape">
                             <h6>IOT BASED</h6>
                             <p>auto announcement system</p>
                         </div>
                     </div>
                 </div>
             </div><!-- column -->
         </div><!-- row closed -->
     </div><!-- container closed -->
 </section>

 <?php
  include 'includes/footer.php';
 ?>
