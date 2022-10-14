
        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Leatest Job Circuler</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <!-- single job -->
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                        <?php 
                            $args = array(
                                'post_type' =>  'job',
                                'order' =>  'DSC',
                                'posts_per_page' => 10
                            );
                            $query = new WP_Query($args);

                            while($query -> have_posts()){
                                $query -> the_post();
                            ?>
                            <!-- single post start -->
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <?php 
                                        $job_id = $post->job; 
                                        $location = get_field('location', $job_id);
                                        $job_type = get_field('job_type', $job_id);
                                        $deateline = get_field('deateline', $job_id);
                                        $sallery = get_field('sallery', $job_id);
                                        $company_logo = get_field('company_logo', $job_id);
                                    ?>
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="<?php echo $company_logo['url']; ?>" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                            <span class="text-truncate me-3"><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/geo-alt-fill.svg"alt="file post"></i><?php echo $location; ?></span>
                                            <span class="text-truncate me-3"><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/stopwatch.svg"alt="file post"></i><?php echo $job_type; ?></span>
                                            <span class="text-truncate me-0"><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cash.svg"alt="file post"></i><?php echo $sallery; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="text-primary"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/heart.svg"alt="file post"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="text-primary me-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cash.svg"alt="file post"></i>Date Line: <?php echo $deateline; ?></small>
                                    </div>
                                </div>
                            </div>
                            <!-- single page end -->
                            <!-- end of loop -->
                            <?php 
                                }
                                wp_reset_postdata();
                            ?>
                            <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                        </div>
                        <!--  job template end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End -->

