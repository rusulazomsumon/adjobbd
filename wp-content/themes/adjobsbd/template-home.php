       
       <?php 
       /* 
        Template Name: Home Page 
        */ 
       ?>

       <!-- conecting header -->
        <?php get_header() ?>

        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <?php 
                    $slider = get_field('slider', 'option');
                    foreach($slider as $slide){
                ?>
                <!-- slider body markup -->
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="<?php echo $slide['slider_img']; ?>" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4"><?php echo $slide['slider_title']; ?></h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2"><?php echo $slide['slider_description']; ?></p>
                                    <a href="<?php echo $slide['search_btn_link']; ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"><?php echo $slide['search_btn_text']; ?></a>
                                    <a href="<?php echo $slide['talent_btn_link']; ?>" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight"><?php echo $slide['talent_btn_text']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider body end -->
                <!-- rest of foreach loop -->
                <?php
                    } 
                ?>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0" placeholder="Keyword" />
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Category</option>
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    <option value="3">Category 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Job Category feture Start -->
        <!-- ###############################Job Feture Category for acf#################################### -->
        <?php get_template_part('template-parts/pertials/content','fCat'); ?>
        <!-- Category End -->


       

        <!-- Jobs List Start -->
         <!-- ###############################Job List#################################### -->
         <?php get_template_part('template-parts/pertials/content','jobList'); ?>
        <!-- Joblisting End -->
        <!-- Jobs End -->

         <!-- About Start -->
         <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-3.jpg" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- ###############################Testimonailas#################################### -->
        <?php get_template_part('template-parts/pertials/content','testimonial'); ?>
        
        <!-- conecting footer -->
        <?php get_footer() ?>
       