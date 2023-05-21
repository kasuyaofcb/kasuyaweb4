<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-219199146-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-219199146-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/favicon.ico">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bad+Script&family=Noto+Serif+JP:wght@200;400&display=swap');
    </style>
    <!-- <link rel="shortcut icon" href="https://kasuya-portfolio.tk/wp-content/uploads/2021/10/toplogo2.png"> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <?php wp_enqueue_script('parallax', get_template_directory_uri() . '/_static/dist/js/parallax.min.js'); ?>


</head>

<body>

<div id="mouse-stalker"></div>

<div class="sample-demo">
                <ul id="demo" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15">
                    <li class="layer" data-depth="0.10">
                        <div class="bg"></div>
                    </li>
                    <li class="layer" data-depth="0.40">
                        <div class="bg2"></div>
                    </li>
                    <!-- <li class="layer layer-kumo1" data-depth="0.20"><div class="img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_static/dist/img/kumo1.png"></div></li> -->
                    <!-- <li class="layer" data-depth="0.70"><div class="img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_static/dist/img/fv2_circle.png"></div></li> -->
                    <!-- <li class="layer layer-kumo2" data-depth="0.30"><div class="img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_static/dist/img/kumo2.png"></div></li> -->
                    <!-- <li class="layer layer-kumo3" data-depth="0.10"><div class="img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_static/dist/img/kumo3.png"></div></li> -->
                    <li class="layer" data-depth="0.50">
                        <div class="img-3d">1</div>
                    </li>
                    <!-- <li class="layer" data-depth="1.00"><div class="txt">www.webdlab.com/</div></li> -->
                </ul>
                <!--sample-demo-->
            </div>

<?php get_template_part('pages/headerWrapper'); ?>
<div   class="scroll-container">





<?php wp_head(); ?>
