<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-219199146-1"></script>
    <!-- <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-219199146-1');
    </script> -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/favicon.ico">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bad+Script&family=Noto+Serif+JP:wght@200;400&display=swap');
    </style>

</head>

<body>

<div id="mouse-stalker"></div>


<?php get_template_part('pages/headerWrapper'); ?>
<div   class="scroll-container">





<?php wp_head(); ?>
