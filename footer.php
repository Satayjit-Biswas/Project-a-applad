
    <!-- 13. footer area start -->
    <footer class="section_padd">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt_30 text-center">
                    <div class="footer_box">
                        <a href="index.html">
                            <!-- <img src="<?php echo get_template_directory_uri();?>/img/footer_logo.png" class="img-fluid" alt=""> -->
                            <?php the_custom_logo();?>    
                         </a>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#key_feature">Key Features</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#testimonial">Testiminial</a></li>
                            <li><a href="#faq">FAQ</a></li>
                        </ul>
                        <div class="footer_icon">
                        <?php
                            $social_section_post = new WP_Query(array(
                                'post_type'      => 'social_section',
                                'posts_per_page' => -1,
                                'order'          => 'ASC'
                            ));

                                if ($social_section_post -> have_posts()) {
                                    while($social_section_post -> have_posts()) : $social_section_post -> the_post();
                                        $social_name = get_post_meta(get_the_ID(),'social_section_logo_nane',true);
                                        $social_link = get_post_meta(get_the_ID(),'social_section_logo_link',true);

                        ?>
                            <a href="<?php echo $social_link;?>" target="_blank"><i class="<?php echo $social_name;?>"></i></a>

                        <?php
                        endwhile;
                        }

                         ?>


                            <!-- <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-slack-hash"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a> -->
                        </div>
                        <span>Copyright © AppLab 2020. All rights reserved</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- 13. footer area end -->

    <!--====== BACK TO TOP START ======-->
    <a href="#" class="back-to-top"><i class="fal fa-angle-up"></i></a>
    <!--====== BACK TO TOP ENDS ======-->
    
    <!-- all js here -->
        

    <?php wp_footer(); ?>
</body>
</html>