<?php


// CSSを読み込み
function my_enqueue_styles()
{
    wp_enqueue_style('main-css', get_template_directory_uri() . '/_static/dist/css/style.css', array(), '', 'all');

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

    }
    function add_script()
    {
        register_script();
        // 全ページ共通
        // TOPページ専用
        if (is_front_page()) {
            wp_enqueue_script('script01');
            // wp_enqueue_script('gsap');


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

// gsap読み込み
function add_gsap() {
    	//デフォルトjquery削除
		// wp_deregister_script('jquery');

    wp_enqueue_script( 'gsap-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js', array(), '', true );
    wp_enqueue_script( 'gsap-scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js', array(), '', true );
    wp_enqueue_script( 'gsap', get_template_directory_uri() . '/_static/dist/js/gsap.js', array('gsap-cdn'), '', true );
    // wp_register_script('gsap',get_bloginfo('template_directory') . '/_static/dist/js/gsap.js',array('gsap-cdn'), '', true, date("His"));
} add_action( 'wp_enqueue_scripts', 'add_gsap' );
