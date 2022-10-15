        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <h1 class="text-center mb-5">Our Clients Say!!!</h1>
                <div class="owl-carousel testimonial-carousel">
                    <!-- feathing acf options testimonils data -->
                    <?php 
                        $testimonials = get_field('testimonials', 'option');
                        foreach($testimonials as $testimonial){
                    ?>
                    <!-- testimonail markup  -->
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-2x text-primary mb-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/quote.svg" alt="" width="48px" height="48px"></i>
                        <p><?php echo $testimonial['testimonial_text']; ?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="<?php echo $testimonial['clints_pictute']; ?>" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1"><?php echo $testimonial['clints_name']; ?></h5>
                                <small><?php echo $testimonial[' clints_professions']; ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- testimonail markup end -->
                    <!-- Rest of for each loops -->
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
