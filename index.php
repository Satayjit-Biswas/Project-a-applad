
    <!-- 01 header area start -->
   <?php get_header(); ?>
    <!-- 01 header area end -->

     <!-- 02. home area start -->
     <?php 

            $frist_section_text_a = get_post_meta(get_the_ID(),'frist_section_text_a',true);
            $frist_section_text_b = get_post_meta(get_the_ID(),'frist_section_text_b',true);
            $frist_section_text_c = get_post_meta(get_the_ID(),'frist_section_text_c',true);
            $frist_section_text_d = get_post_meta(get_the_ID(),'frist_section_text_d',true);
            $frist_section_link_e = get_post_meta(get_the_ID(),'frist_section_link_e',true);
            $frist_section_link_f = get_post_meta(get_the_ID(),'frist_section_link_f',true);
            $frist_section_img    = get_post_meta(get_the_ID(),'frist_section_img',true);
            $frist_section_bg_img = get_post_meta(get_the_ID(),'frist_section_bg_img',true);
      
        ?>
    <div class="home_wrapper" style="background-image: url(<?php echo $frist_section_bg_img;?>);" id="home">
        <div class="home_shape">
            <img class="shape_ab animate heardbeat round1" src="<?php echo get_template_directory_uri();?>/img/shape1.png" alt="">
            <img class="shape_ab animate heardbeat round2" src="<?php echo get_template_directory_uri();?>/img/shape1.png" alt="">
            <img class="shape_ab animate heardbeat round3" src="<?php echo get_template_directory_uri();?>/img/shape1.png" alt="">
            <img class="shape_ab animate rotateme round_4" src="<?php echo get_template_directory_uri();?>/img/shape2.png" alt="">
            <img class="shape_ab animate heardbeat round_5" src="<?php echo get_template_directory_uri();?>/img/shape3.png" alt="">
        </div>
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <div class="home_box">
                        <div class="homefirst_txt d-inline-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri();?>/img/home_icon.png" class="img-fluid" alt="">
                            <p><?php echo $frist_section_text_a; ?></p>
                        </div>
                        <h2><?php echo $frist_section_text_b; ?></h2>
                        <p class="mt_10"><?php echo $frist_section_text_c; ?></p>
                        <div class="mt_35">
                            <a class="button" href="<?php echo $frist_section_link_e; ?>" target="_blank">try for free</a>
                            <a href="<?php echo $frist_section_link_f; ?>" id="play-video" class="watch_btn">Watch demo video</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="home_img text-center text-lg-right">
                        <img src="<?php echo $frist_section_img; ?>" class="img-fluid" alt="">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 02. home area end -->
    <main>
        <!-- 03. client area start -->
        <div class="client_wrapper section_padd">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 mt_30">
                        <div class="client_head text-center">
                            <p>Trusted by companies like</p>
                        </div>
                        <div class="owl-carousel client_carousel">
                         <?php 
                            $company_logo = get_post_meta(get_the_ID(),'company_logo',true);

                            foreach($company_logo as $logo){
                        ?>
                                <div class="item d-flex align-items-center justify-content-center">
                                     <img src="<?php echo $logo; ?>" class="img-fluid" alt="">
                                </div>
                        <?php 
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 03. client area end -->
        <!-- 04. app feature area start -->
        <div class="awesomeapp_wrapper section_padd" id="key_feature">
            <div class="container">
                <div class="row align-items-center">
                    <?php 
                            $a_section_post = new WP_Query(array(
                                'post_type' => 'a_section', 
                                'posts_per_page' => 1,
                                'order'          => 'DSC'         
                            ));
                            if($a_section_post->have_posts()){
                                while($a_section_post->have_posts()) : $a_section_post->the_post();
                                    $a_img = get_post_meta(get_the_ID(),'a_section_img',true);
                                    $a_icon_a = get_post_meta(get_the_ID(),'a_section_icon_a',true);
                                    $a_title_a = get_post_meta(get_the_ID(),'a_section_title_a',true);
                                    $a_color_a = get_post_meta(get_the_ID(),'a_section_color_a',true);
                                    $a_text_a = get_post_meta(get_the_ID(),'a_section_text_a',true);

                                    $a_icon_b = get_post_meta(get_the_ID(),'a_section_icon_b',true);
                                    $a_title_b = get_post_meta(get_the_ID(),'a_section_title_b',true);
                                    $a_color_b = get_post_meta(get_the_ID(),'a_section_color_b',true);
                                    $a_text_b = get_post_meta(get_the_ID(),'a_section_text_b',true);

                                    $a_icon_c = get_post_meta(get_the_ID(),'a_section_icon_c',true);
                                    $a_title_c = get_post_meta(get_the_ID(),'a_section_title_c',true);
                                    $a_color_c = get_post_meta(get_the_ID(),'a_section_color_c',true);
                                    $a_text_c = get_post_meta(get_the_ID(),'a_section_text_c',true);
                        ?>

                    
                    <div class="col-lg-7 col-md-5 mt_30">
                        <div class="awesomeapp_img">
                            <img src="<?php echo $a_img;?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7 mt_30">
                        <div>

                            <div class="appfeature_head">
                                <h2 class="title_head mb_30"><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="app_item d-flex align-items-center">
                                <div class="appimg_bg" style="background: #ffecef;?>">
                                    <img src="<?php echo $a_icon_a;?>" class="img-fluid" alt="">
                                </div>
                                <div class="app_subitem">
                                    <h3 class="sub_title mb_20"  style="color:<?php echo $a_color_a; ?>"><?php echo $a_title_a;?></h3>
                                    <p><?php echo $a_text_a; ?></p>
                                </div>
                            </div>
                            <div class="app_item d-flex align-items-center">
                                <div class="appimg_bg" style="background: #d4d3fec7;?>">
                                    <img src="<?php echo $a_icon_b;?>" class="img-fluid" alt="">
                                </div>
                                <div class="app_subitem">
                                    <h3 class="sub_title  mb_20" style="color:<?php echo $a_color_b; ?>"><?php echo $a_title_b;?></h3>
                                    <p><?php echo $a_text_b; ?></p>
                                </div>
                            </div>
                            <div class="app_item d-flex align-items-center">
                                <div class="appimg_bg"style="background: #cff6d9c7;?>">
                                    <img src="<?php echo $a_icon_c;?>" class="img-fluid" alt="">
                                </div>
                                <div class="app_subitem">
                                    <h3 class="sub_title  mb_20" style="color:<?php echo $a_color_c; ?>"><?php echo $a_title_c;?></h3>
                                    <p><?php echo $a_text_c; ?></p>
                                </div>
                        <?php

                            endwhile;
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 04. app feature area end -->
        <!-- 05. smart jackpot area start -->
        <div class="smartjack_wrapper section_padd">
            <div class="container">
                <div class="row">
                    <?php 
                            $b_section_post = new WP_Query(array(
                                'post_type' => 'b_section', 
                                'posts_per_page' => 1,
                                'order'          => 'DSC'         
                            ));
                            if($b_section_post->have_posts()){
                                while($b_section_post->have_posts()) : $b_section_post->the_post();
                                    $b_icon_a = get_post_meta(get_the_ID(),'b_section_icon_a',true);
                                    $b_title_a = get_post_meta(get_the_ID(),'b_section_title_a',true);
                                    $b_color_a = get_post_meta(get_the_ID(),'b_section_color_a',true);
                                    $b_text_a = get_post_meta(get_the_ID(),'b_section_text_a',true);

                                    $b_icon_b = get_post_meta(get_the_ID(),'b_section_icon_b',true);
                                    $b_title_b = get_post_meta(get_the_ID(),'b_section_title_b',true);
                                    $b_color_b = get_post_meta(get_the_ID(),'b_section_color_b',true);
                                    $b_text_b = get_post_meta(get_the_ID(),'b_section_text_b',true);

                                    $b_icon_c = get_post_meta(get_the_ID(),'b_section_icon_c',true);
                                    $b_title_c = get_post_meta(get_the_ID(),'b_section_title_c',true);
                                    $b_color_c = get_post_meta(get_the_ID(),'b_section_color_c',true);
                                    $b_text_c = get_post_meta(get_the_ID(),'b_section_text_c',true);


                        ?>
                     <div class="col-lg-6 col-md-12 mt_30">
                        <div class="smartjack_head">
                            <h2 class="title_head"><?php the_title();?></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt_30">
                        <div class="smartjack_subhead">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="smartjact_item">
                            <div class="appimg_bg  mb_30" style="background: #e1bbd959;?>">
                                <img src="<?php echo $b_icon_a; ?>" class="img-fluid" alt="">
                            </div>
                            <h3 class="sub_title default_color1" style="color:<?php echo $b_color_a; ?>"><?php echo $b_title_a; ?></h3>
                            <p class="mt_15"><?php echo $b_text_a; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="smartjact_item">
                            <div class="appimg_bg  mb_30" style="background: #d4c5f194;?>">
                                <img src="<?php echo $b_icon_b; ?>" class="img-fluid" alt="">
                            </div>
                            <h3 class="sub_title default_color2" style="color:<?php echo $b_color_b; ?>"><?php echo $b_title_b; ?></h3>
                            <p class="mt_15"><?php echo $b_text_b; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="smartjact_item">
                            <div class="appimg_bg mb_30" style="background: #cff6d9c7;?>">
                                <img src="<?php echo $b_icon_c; ?>" alt="">
                            </div>
                            <h3 class="sub_title default_color3" style="color:<?php echo $b_color_c; ?>"><?php echo $b_title_c; ?></h3>
                            <p class="mt_15"><?php echo $b_text_c; ?></p>
                        </div>
                    </div>
                        <?php

                            endwhile;
                        }
                        ?>
                </div>
            </div>
        </div>
        <!-- 05. smart jackpot area end -->
        <!-- 06. design & build area start -->
        <div class="designbuild_wrapper border_bottm section_padd">
            <div class="container">
                <div class="row align-items-center">

                <?php
                    $cpost = new WP_Query(array(
                        'post_type'      => 'c_section',
                        'posts_per_page' => 1,
                        'order'          => 'DSC'
                    ));

                        if ($cpost -> have_posts()) {
                            while($cpost -> have_posts()) : $cpost -> the_post();
                                $c_img = get_post_meta(get_the_ID(),'c_section_img',true);
                    ?>
                                 <div class="col-lg-6 col-md-6 order-sm-last order-md-first mt_30">
                                    <div class="desingbuild_img">
                                         <img src="<?php echo $c_img; ?>" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xl-5 offset-xl-1 order-sm-first order-md-last mt_30">
                                    <div class="designbuild_box">
                                        <h2 class="title_head mb_30"><?php the_title(); ?></h2>
                                        <p><?php the_excerpt();?></p>
                                     </div>
                                </div>
                    
                    <?php

                            endwhile;
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- 06. design & build area end -->


        <!-- 07. choose our app area start -->
        <div class="chooseourapp_wrapper section_padd">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mt_30 text-center">
                        <div class="chooseourapp_head">
                            <h2 class="title_head">Why you should choose our app</h2>
                            <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                        </div>
                    </div>
                    <?php
                    $d_section_post = new WP_Query(array(
                        'post_type'      => 'd_section',
                        'posts_per_page' => 6,
                        'order'          => 'ASC'
                    ));

                        if ($d_section_post -> have_posts()) {
                            while($d_section_post -> have_posts()) : $d_section_post -> the_post();
                    ?>
                                <div class="col-lg-4 col-md-6 col-sm-6 text-center mt_30">
                                    <div class="chooseapp_item">
                                        <div class="appimg_bg">
                                            <?php the_post_thumbnail('custom-thumb', array('class' => 'img-fluid'));  ?>
                                        </div>
                                        <h3 class="sub_title mt_30"><?php the_title(); ?></h3>
                                         <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                    <?php
                        endwhile;
                        }

                     ?>
                </div>
            </div>
        </div>
        <!-- 07. choose our app area end -->

        <!-- 07. mobile app area start -->
        <div class="mobileapp_wrapper section_padd">
            <div class="container">

                <?php
                    $f_section_post = new WP_Query(array(
                        'post_type'      => 'f_section',
                        'posts_per_page' => 1,
                        
                    ));

                        if ($f_section_post -> have_posts()) {
                            while($f_section_post -> have_posts()) : $f_section_post -> the_post();
                                // $c_img = get_post_meta(get_the_ID(),'c_section_img',true);
                    ?>
                    <div class="row">
                        <div class="col-12 mt_30 text-center">
                            <div class="chooseourapp_head">
                                <h2 class="title_head"><?php the_title();?></h2>
                                <p><?php the_excerpt();?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="owl-carousel mobile_active">

                        <?php 
                            $f_screen = get_post_meta(get_the_ID(),'f_section_screenshots',true);

                            foreach($f_screen as $logo){
                        ?>
                            <div class="col-lg-12 mt_30">
                                <div class="mobile-img">
                                    <img src="<?php echo $logo; ?>" alt="">
                                </div>
                            </div>

                        <?php 
                            }
                        ?>
                        </div>
                    </div>
                    <?php

                            endwhile;
                        }
                    ?>
            </div>
        </div>
        <!-- 07. mobile app area end -->


        <!-- 08. ultimate area start -->
        <div class="ultimatefe_wrapper section_padd overflow-hidden">
            <div class="container">
                        <?php 
                            $g_section_post = new WP_Query(array(
                                'post_type' => 'g_section', 
                                'posts_per_page' => 1,
                                'order'          => 'DESC'         
                            ));
                            if($g_section_post->have_posts()){
                                while($g_section_post->have_posts()) : $g_section_post->the_post();
                                    $g_img = get_post_meta(get_the_ID(),'g_section_img',true);
                                    $g_icon_a = get_post_meta(get_the_ID(),'g_section_icon_a',true);
                                    $g_title_a = get_post_meta(get_the_ID(),'g_section_title_a',true);
                                    $g_color_a = get_post_meta(get_the_ID(),'g_section_color_a',true);
                                    $g_text_a = get_post_meta(get_the_ID(),'g_section_text_a',true);

                                    $g_icon_b = get_post_meta(get_the_ID(),'g_section_icon_b',true);
                                    $g_title_b = get_post_meta(get_the_ID(),'g_section_title_b',true);
                                    $g_color_b = get_post_meta(get_the_ID(),'g_section_color_b',true);
                                    $g_text_b = get_post_meta(get_the_ID(),'g_section_text_b',true);

                                    $g_icon_c = get_post_meta(get_the_ID(),'g_section_icon_c',true);
                                    $g_title_c = get_post_meta(get_the_ID(),'g_section_title_c',true);
                                    $g_color_c = get_post_meta(get_the_ID(),'g_section_color_c',true);
                                    $g_text_c = get_post_meta(get_the_ID(),'g_section_text_c',true);

                                    $g_icon_d = get_post_meta(get_the_ID(),'g_section_icon_d',true);
                                    $g_title_d = get_post_meta(get_the_ID(),'g_section_title_d',true);
                                    $g_color_d = get_post_meta(get_the_ID(),'g_section_color_d',true);
                                    $g_text_d = get_post_meta(get_the_ID(),'g_section_text_d',true);
                        ?>

                <div class="row align-items-center justify-content-center justify-content-lg-start">
                    <div class="col-lg-7 col-md-12 mt_30">
                        <div class="ultimate_box">
                            <h2 class="title_head mb_30"><?php the_title();?></h2>
                            <p><?php the_excerpt();?></p>
                        </div>
                        <dvi class="row">

                           <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="smartjact_item">
                                    <div class="appimg_bg appimg_bg4 mb_30">
                                        <img src="<?php echo $g_icon_a;?>" class="img-fluid" alt="">
                                    </div>
                                    <h3 class="sub_title" style="color: <?php echo$g_color_a;?>;"><?php echo$g_title_a;?></h3>
                                    <p class="mt_15"><?php echo$g_text_a;?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="smartjact_item">
                                    <div class="appimg_bg appimg_bg5 mb_30">
                                        <img src="<?php echo $g_icon_b;?>" class="img-fluid" alt="">
                                    </div>
                                    <h3 class="sub_title" style="color: <?php echo$g_color_b;?>;"><?php echo$g_title_b;?></h3>
                                    <p class="mt_15"><?php echo$g_text_b;?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="smartjact_item">
                                    <div class="appimg_bg appimg_bg6 mb_30">
                                        <img src="<?php echo $g_icon_c;?>" class="img-fluid" alt="">
                                    </div>
                                    <h3 class="sub_title" style="color: <?php echo$g_color_c;?>;"><?php echo$g_title_c;?></h3>
                                    <p class="mt_15"><?php echo$g_text_c;?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="smartjact_item">
                                    <div class="appimg_bg appimg_bg7 mb_30">
                                        <img src="<?php echo $g_icon_d;?>" class="img-fluid" alt="">
                                    </div>
                                    <h3 class="sub_title" style="color: <?php echo$g_color_d;?>;"><?php echo$g_title_d;?></h3>
                                    <p class="mt_15"><?php echo$g_text_d;?></p>
                                </div>
                            </div> 
                            <div class="col-lg-12">
                                <div class="ultimate_btn">
                                    <a href="#" class="button">See all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-9 mt_30 ultimate_ab">
                        <div class="ultimate_image">
                            <img src="<?php echo $g_img;?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <?php

                            endwhile;
                        }
                     ?>
            </div>
        </div>
        <!-- 08. ultimate area  end -->


        <!-- 09. awesome feature area start -->
        <div class="getfeature_wrapper border_bottm section_padd" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt_30 text-center">
                        <div class="getfe_head">
                            <h2 class="title_head">Get awesome features, without extra charges</h2>
                            <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 mt_30">
                        <nav class="text-center">
                            <div class="nav getbtn" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Monthly</a>
                              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Yearly</a>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel">
                                <div class="row">
                                        <?php 
                                            $monthly_section_post = new WP_Query(array(
                                            'post_type' => 'monthly_section', 
                                            'posts_per_page' => -1,
                                            'order'          => 'ASC'         
                                        ));
                                        if($monthly_section_post->have_posts()){
                                            while($monthly_section_post->have_posts()) : $monthly_section_post->the_post();
                                                $monthly_price = get_post_meta(get_the_ID(),'monthly_section_price',true);
                                                $monthly_element_a = get_post_meta(get_the_ID(),'monthly_section_Element_a',true);
                                                $monthly_element_b = get_post_meta(get_the_ID(),'monthly_section_Element_b',true);
                                                $monthly_element_c = get_post_meta(get_the_ID(),'monthly_section_Element_c',true);
                                                $monthly_element_d= get_post_meta(get_the_ID(),'monthly_section_Element_d',true);


                                                ?>
                                                    <div class="col-lg-4 col-md-6 mt_30 text-center">
                                                        <div class="getfe_item">
                                                            <div class="getfe_txt">
                                                                <h2>$<?php echo $monthly_price; ?><span>/ month</span></h2>
                                                                <h3><?php the_title();?></h3>
                                                                <p><?php the_excerpt(); ?></p>
                                                            </div>
                                                            <div class="getfe_second">
                                                                <ul>
                                                                    <li><?php echo $monthly_element_a; ?></li>
                                                                    <li><?php echo $monthly_element_b; ?></li>
                                                                    <li><?php echo $monthly_element_c; ?></li>
                                                                    <li><?php echo $monthly_element_d; ?></li>
                                                                </ul>
                                                                <a href="#" class="button">Start free trail</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                

                                         <?php

                                        endwhile;
                                        }
                                        ?> 
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel">
                                <div class="row">
                                    <?php 
                                            $yearly_section_post = new WP_Query(array(
                                            'post_type' => 'yearly_section', 
                                            'posts_per_page' => -1,
                                            'order'          => 'ASC'         
                                        ));
                                        if($yearly_section_post->have_posts()){
                                            while($yearly_section_post->have_posts()) : $yearly_section_post->the_post();
                                                $yearly_price = get_post_meta(get_the_ID(),'yearly_section_price',true);
                                                $yearly_element_a = get_post_meta(get_the_ID(),'yearly_section_Element_a',true);
                                                $yearly_element_b = get_post_meta(get_the_ID(),'yearly_section_Element_b',true);
                                                $yearly_element_c = get_post_meta(get_the_ID(),'yearly_section_Element_c',true);
                                                $yearly_element_d= get_post_meta(get_the_ID(),'yearly_section_Element_d',true);


                                                ?>
                                                    <div class="col-lg-4 col-md-6 mt_30 text-center">
                                                        <div class="getfe_item">
                                                            <div class="getfe_txt">
                                                                <h2>$<?php echo $yearly_price; ?><span>/ yearly</span></h2>
                                                                <h3><?php the_title();?></h3>
                                                                <p><?php the_excerpt(); ?></p>
                                                            </div>
                                                            <div class="getfe_second">
                                                                <ul>
                                                                    <li><?php echo $yearly_element_a; ?></li>
                                                                    <li><?php echo $yearly_element_b; ?></li>
                                                                    <li><?php echo $yearly_element_c; ?></li>
                                                                    <li><?php echo $yearly_element_d; ?></li>
                                                                </ul>
                                                                <a href="#" class="button">Start free trail</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                         <?php

                                        endwhile;
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 09. awesome feature area end -->


        <!-- 10. meet client area start -->
        <div class="meetclient_wrapper section_padd" id="testimonial">
            <div class="container">
                <div class="row align-items-center justify-content-end">
                    <?php 
                        $h_section_post = new WP_Query(array(
                            'post_type' => 'h_section', 
                            'posts_per_page' => 1,
                            'order'          => 'DESC'         
                            ));
                        if($h_section_post->have_posts()){
                         while($h_section_post->have_posts()) : $h_section_post->the_post();
                    ?>


                    <div class="col-lg-6 mt_30 meetimg_ab">
                        <div class="meetclient_img">
                            <?php the_post_thumbnail('', array('class' => 'img-fluid'));  ?>
                        </div>
                    </div>
                    <div class="col-lg-6 mt_30">
                        <div class="meetclient_box">
                            <div class="meet_head">
                                <h2 class="title_head mb_30"><?php echo the_title(); ?></h2>
                                <p><?php echo the_excerpt(); ?></p>
                            </div>
                            <div class="owl-carousel testi_slide">  


                            <?php 
                                 $client_section_post = new WP_Query(array(
                                    'post_type' => 'client_section', 
                                    'posts_per_page' => -1,
                                    'order'          => 'DESC'         
                            ));
                            if($client_section_post->have_posts()){
                            while($client_section_post->have_posts()) : $client_section_post->the_post();
                                $client_img = get_post_meta(get_the_ID(),'client_section_img',true);
                                $client_name = get_post_meta(get_the_ID(),'client_section_name',true);
                                $client_post = get_post_meta(get_the_ID(),'client_section_post',true);


                            ?>
                                <div class="friendcustomize_box">
                                        <div class="d-flex rating_icon">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </div>
                                        <h3 class="sub_title mt_30"><?php the_title(); ?></h3>
                                        <p class="mt_30"><?php the_excerpt(); ?></p>
                                        <div class="meet_man d-flex align-items-center">
                                            <img src="<?php echo $client_img;?>" class="meet_size" alt="">
                                            <div class="meet_txt">
                                                <h4><?php echo $client_name;?></h4>
                                                <span><?php echo $client_post;?></span>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                            endwhile;
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- 10. meet client area end -->


        <!-- 11. freequently area start -->
        <div class="frequently_wrapper section_padd border_bottm" id="faq">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 mt_30 text-center">
                        <div class="frequently_head">
                            <h2 class="title_head mb_30">Frequently asked questions</h2>
                            <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                        </div>
                    </div>
                    <div class="col-lg-10 mt_30">
                        <div class="accordion">

                            <?php 
                                 $i_section_post = new WP_Query(array(
                                    'post_type' => 'i_section', 
                                    'posts_per_page' => -1,
                                    'order'          => 'DESC'         
                            ));
                            if($i_section_post->have_posts()){
                            while($i_section_post->have_posts()) : $i_section_post->the_post();
                                
                            ?>


                            <div class="card">
                                <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link sub_title" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php the_title();?>
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent=".accordion">
                                    <div class="card-body">
                                        <?php the_excerpt();?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 11. freequently area start -->


        <!-- 12. download area start -->
        <div class="download_wrapper section_padd overflow-hidden">
            <div class="container">
                <div class="row">
                    <?php 
                        $j_section_post = new WP_Query(array(
                            'post_type' => 'j_section', 
                            'posts_per_page' => 1,
                            'order'          => 'DESC'         
                            ));
                            if($j_section_post->have_posts()){
                            while($j_section_post->have_posts()) : $j_section_post->the_post();
                                $j_logo_a = get_post_meta(get_the_ID(),'j_section_logo_a',true);
                                $j_logo_b = get_post_meta(get_the_ID(),'j_section_logo_b',true);
                            ?>
                    <div class="col-lg-7 col-md-12 mt_30">
                        <div class="download_box">
                            <h2 class="title_head mb_30"><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <div class="d-flex align-items-center flex-wrap">
                                <a href="#"><img src="<?php echo $j_logo_a; ?>" class="img-fluid mr_30" alt=""></a>
                                <a href="#"><img src="<?php echo $j_logo_b; ?>" class="img-fluid" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 download_ab">
                        <div class="download_img">
                            <?php the_post_thumbnail('', array('class' => 'img-fluid'));  ?>
                        </div>
                    </div>

                    <?php
                            endwhile;
                            }
                    ?>
                </div>
            </div>
        </div>
        <!-- 12. download area end -->


    </main>

    <?php get_footer(); ?>