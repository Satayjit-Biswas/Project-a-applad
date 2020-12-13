<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<php bloginfo('charset'); ?>">
    <meta name="description" content="">
    <meta name="keywords" content="app, landing, corporate, Creative, Html Template, Template">
    <meta name="author" content="web-themes">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>App Lab</title>

    <!-- favicon -->
    <!--<link href="img/favicon.png" type="image/png" rel="icon">-->

    <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target="#menu" data-offset="80">
    

<!-- Preloader Start -->
    <div class="proloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->
    <!-- 01 header area start -->
    <header class="<?php if(is_user_logged_in()){ echo "top30px";} ?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-10 text-left">
                        <!--logo start-->
                        <div class="logo">
                            <a href="<?php echo esc_url(site_url()); ?>">
                                <?php the_custom_logo();?>
                            </a>
                        </div>
                        <!--logo end-->
                    </div>
                    <div class="col-lg-10 col-md-9 col-2">

        <?php 
            $frist_section_link_e = get_post_meta(get_the_ID(),'frist_section_link_e',true);
        ?>
                        <div class="try_btn">
                            <a href="<?php echo $frist_section_link_e; ?>" class="button">Try for free</a>
                        </div>
                        <!--menu start-->

                        <?php 
                            wp_nav_menu(array(

                                'theme_location' => 'primary_menu',
                                'menu_id' => 'menu',
                                // 'fallback_cb' => 'callback',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker(),
                            ));


                        ?>


                        <!-- <ul id="menu">
                            <li class="nav-item">
                                <a href="#home" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#key_feature" class="nav-link menu_link">Key Features</a>
                            </li>
                            <li class="nav-item">
                                <a href="#pricing" class="nav-link menu_link">Pricing</a>
                            </li>
                              <li class="nav-item">
                                <a href="#testimonial" class="nav-link menu_link">Testiminial</a>
                            </li>
                            <li class="nav-item">
                                <a href="#faq" class="nav-link menu_link">FAQ</a>
                            </li>
                        </ul> -->
                        <!--menu end-->

                        <div class="hamburger-menu">
                            <span class="line-top"></span>
                            <span class="line-center"></span>
                            <span class="line-bottom"></span>
                        </div>

                    </div>
                </div>
            </div>
        </header>
    <!-- 01 header area end -->
