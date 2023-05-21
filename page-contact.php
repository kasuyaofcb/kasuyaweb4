<?php get_header(); ?>

<div id="overFlow">
    <div id="start"></div>
    <header>

        <div id="header-wrapper" class="scroll-active">
            <div id="header-contents-box">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/toplogo.png" alt="kasuya portfolio">
                </a>
                <nav id="navi">
                    <ul class="wrapper">
                        <li><a href="<?php echo esc_url(home_url()); ?>/solutions">Solutions</a></li>
                        <li><a href="<?php echo esc_url(home_url()); ?>/works">Works</a></li>
                        <li><a href="<?php echo esc_url(home_url()); ?>/.#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="mobileHeaderWrapper">
            <a href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/toplogo.png" alt="kasuya portfolio">
            </a>
            <div class="hamburger">
                <div id="mask"></div>
                <div class="nav" id="nav_f">
                    <nav id="nav_main_text">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url()); ?>/solutions">Solutions</a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/works">Works</a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/.#about" id="aboutClick">About</a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/contact" id="contactClick">Contact</a></li>
                        </ul>
                    </nav>

                </div>
                <div id="target">
                    <div class="target_inner">
                        <span class="target_inner_line target_inner_1" id="line1"></span>
                        <span class="target_inner_line target_inner_2" id="line2"></span>
                        <span class="target_inner_line target_inner_3" id="line3"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="subTopBox">
            <div id="solutionsTop-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/contactTop.jpg" alt="contacttopimage">
            </div>


            <div class="subtop">
                <h4>Contact</h4>
                <p>お問い合わせ</p>
                <div class="indexBorder"></div>
            </div>
        </div>
    </header>

  


    <?php get_footer(); ?>