<?php


// CSSを読み込み
function my_enqueue_styles()
{
    wp_enqueue_style('main-css', get_template_directory_uri() . '/_static/dist/css/style.css', array(), '', 'all');
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');

}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');







if (!is_admin()) {
    function register_script()
    {
        wp_register_script(
            'script01',
            get_bloginfo('template_directory') . '/_static/dist/js/script01.js',
            array('jquery'),
            '',
            true,
            date("His")
        );
        wp_register_script(
            'swiper',
            'https://unpkg.com/swiper@7/swiper-bundle.min.js',
            array('jquery'),
            '',
            true,
            date("His")
        );
        wp_register_script(
            'swiper-act',
            get_bloginfo('template_directory') . '/_static/dist/js/swiper.js',
            array('jquery'),
            '',
            true,
            date("His")
        );
        wp_register_script(
            'gsap-cdn',
            'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js',
            array('jquery'),
            '',
            true,
            date("His")
        );
        wp_register_script(
            'gsap-scrollTrigger-cdn',
            'https://cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js',
            array('jquery'),
            '',
            true,
            date("His")
        );
        wp_register_script(
            'gsap',
            get_bloginfo('template_directory') . '/_static/dist/js/gsap.js',
            array('script01'),
            '',
            true,
            date("His")
        );
        wp_register_script(
            'locomotive-scroll',
            get_bloginfo('template_directory') . '/_static/dist/js/locomotive-scroll.min.js',
            array('jquery'),
            '',
            true,
            date("His")
        );
        wp_register_script(
            'midnight',
            get_bloginfo('template_directory') . '/_static/dist/js/midnight.min.js',
            array('jquery'),
            '',
            true,
            date("His")
        );
        // wp_register_script(
        //     'parallax',
        //     get_bloginfo('template_directory') . '/_static/dist/js/parallax.min.js',
        //     array('jquery'),
        //     '',
        //     true,
        //     date("His")
        // );
    }
    function add_script()
    {
        register_script();
        // 全ページ共通
        // TOPページ専用
        if (is_front_page()) {
            wp_enqueue_script('script01');
            wp_enqueue_script('gsap-cdn');
            wp_enqueue_script('gsap-scrollTrigger-cdn');
            wp_enqueue_script('gsap');
            wp_enqueue_script('locomotive-scroll');
            // wp_enqueue_script('parallax');
        }
        // 固定ページIDが“11”のページ専用
        // elseif (is_page(array(11))) {
        //     wp_enqueue_script('myscript_solutions');
        //     // 固定ページIDが“13”のページ専用
        // } elseif (is_page(array(13))) {
        //     wp_enqueue_script('myscript_works');
        //     // 固定ページIDが“15”のページ専用
        // } elseif (is_page(array(15))) {
        //     wp_enqueue_script('myscript_contact');
        //     // 固定ページIDが“12”のページ専用
        // } elseif (is_page(array(12))) {
        //     wp_enqueue_script('myscript_contact-confirm');
        //     // 固定ページIDが“10”のページ専用
        // } elseif (is_page(array(10))) {
        //     wp_enqueue_script('myscript_contact-complete');
        //     // 固定ページIDが“14”のページ専用
        // } elseif (is_page(array(14))) {
        //     wp_enqueue_script('myscript_contact-error');
        // }
    }
    add_action('wp_print_scripts', 'add_script');
}
