
        <!-- Connecting Header -->
        <?php get_header(); ?>



        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <?php 
                                $author_id = $post->job; 
                                $location = get_field('location', $author_id);
                                $job_type = get_field('job_type', $author_id);
                            ?>
                            <img class="flex-shrink-0 img-fluid border rounded" src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3"><?php the_title(); ?></h3>
                                <span class="text-truncate me-3"><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/geo-alt-fill.svg"alt="file post"></i><?php echo $location; ?></span>
                                <span class="text-truncate me-3"><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/stopwatch.svg"alt="file post"></i><?php echo $job_type; ?></span>
                                <span class="text-truncate me-0"><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cash.svg"alt="file post"></i>$123 - $456</span>
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
                            <p><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cursor.svg"alt="adjobsbd"></i>Published On: <?php echo get_the_date() ?></p>
                            <p><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cursor.svg"alt="adjobsbd"></i>Vacancy: 123 Position</p>
                            <p><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cursor.svg"alt="adjobsbd"></i>Job Nature: Full Time</p>
                            <p><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cursor.svg"alt="adjobsbd"></i>Salary: $123 - $456</p>
                            <p><i class="ext-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cursor.svg"alt="adjobsbd"></i>Location: New York, USA</p>
                            <p class="m-0"><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cursor.svg"alt="adjobsbd"></i>Date Line: 01 Jan, 2045</p>
                        </div>
                        <div class="bg-light rounded p-5 border border-primary wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4 text-center bg-primary">Company Detail</h4>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 80px; height: 80px; float: left; padding: 3px;">
                            <p class="m-0">Ipsum dolor ipsum accusam stet et et diam dolores, sed rebum sadipscing elitr vero dolores. Lorem dolore elitr justo et no gubergren sadipscing, ipsum et takimata aliquyam et rebum est ipsum lorem diam. Et lorem magna eirmod est et et sanctus et, kasd clita labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->


        <!-- Connecting Footer -->
        <?php get_footer(); ?>