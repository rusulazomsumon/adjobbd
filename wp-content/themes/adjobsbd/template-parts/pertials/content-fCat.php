        <!-- Job Category feture Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
                <div class="row g-4">
                    <!-- showing all categor -->
                    <!-- header socila linkin area, activate form ACM  -->
                    <?php 
                        $job_categorics = get_field('job_categorics', 'option');
                        foreach($job_categorics as $job_cat){
                    ?>
                    <!-- category content start -->
                    <div class="col-lg-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="<?php echo $job_cat['category_link']; ?>">
                            <i class="text-primary mb-4 p-5 "><img class="border border-primary rounded-circle shadow-sm" src="<?php echo $job_cat['category_icon']; ?>"alt="patch question" height="70px" width="70px"></i>
                            <h6 class="mb-3"><?php echo $job_cat['category_title']; ?></h6>
                            <p class="mb-0"><?php echo $job_cat['category_description']; ?></p>
                        </a>
                    </div>
                    <!-- category content end -->
                    <!-- rest of foreach loop -->
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Category End -->