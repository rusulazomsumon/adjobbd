
        <!-- Connecting Header -->
        <?php get_header(); ?>



        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <?php 
                                $job_id = $post->job; 
                                $location = get_field('location', $job_id);
                                $job_type = get_field('job_type', $job_id);
                                $vacency = get_field('vacency', $job_id);
                                $deateline = get_field('deateline', $job_id);
                                $sallery = get_field('sallery', $job_id);
                                $company_logo = get_field('company_logo', $job_id);
                                $company_title = get_field('company_title', $job_id);
                                $company_description = get_field('company_description', $job_id);
                            ?>
                            <img class="flex-shrink-0 img-fluid border rounded" src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 90px; height: 90px;">
                            <div class="text-start ps-4">
                                <!-- job category -->
                                    <?php  
                                        $catgs = get_the_category();
                                    ?>
                                <a href="<?php echo get_category_link($catgs); ?>">
                                    <h6 class="text-primary text-capitalize">
                                        <!-- only 1st category will show -->
                                        <?php echo $catgs[0]->slug; ?>
                                    </h6>
                                </a>
                                <h3 class=""><?php the_title(); ?></h3>
                                <span class="text-truncate me-3"><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/geo-alt-fill.svg"alt="file post"></i><?php echo $location; ?></span>
                                <span class="text-truncate me-3"><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/stopwatch.svg"alt="file post"></i><?php echo $job_type; ?></span>
                                <span class="text-truncate me-0"><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cash.svg"alt="file post"></i><?php echo $sallery ?> tk</span>
                            </div>
                        </div>

                        <!-- **************************** job details *********************************-->

                        <div class="mb-5">
                            <!-- job post main content -->
                            <?php the_content() ?>
                        </div>

                        <!-- **************************** job application form *********************************-->

                        <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- **************************** Left Sideber: Jobs Summery *********************************-->

                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 mb-4 border border-primary wow slideInUp" data-wow-delay="0.1s">   
                            <h4 class="mb-4 text-center bg-primary">Job Summery</h4>
                            <p><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cursor.svg"alt="adjobsbd"></i><b>Published On: </b><?php echo get_the_date() ?></p>
                            <p><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cursor.svg"alt="adjobsbd"></i><b>Vacancy: </b><?php echo $vacency; ?></p>
                            <p><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cursor.svg"alt="adjobsbd"></i><b>Job Nature: </b> <?php echo $job_type; ?></p>
                            <p><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cursor.svg"alt="adjobsbd"></i><b>Salary: </b><?php echo $sallery; ?></p>
                            <p><i class="ext-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cursor.svg"alt="adjobsbd"></i><b>Location: </b><?php echo $location; ?></p>
                            <p class="m-0"><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cursor.svg"alt="adjobsbd"></i><b>Date Line: </b><?php echo $deateline; ?></p>
                        </div>
                        <div class="bg-light rounded p-5 border border-primary wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4 text-center bg-primary">Company Detail</h4>
                            <h5><?php echo $company_title; ?></h5>
                            <img src="<?php echo $company_logo['url']; ?>" alt="" style="width: 80px; height: 80px; float: left; padding: 3px;">
                            <p class="m-0"><?php echo $company_description; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->


        <!-- Connecting Footer -->
        <?php get_footer(); ?>