<?php

function responsive_child_widgets_init() {
        register_sidebar(array(
            'name' => __('Home Widget Single', 'responsive'),
            'description' => __('Area 12 - sidebar-home-widget-single.php - Displays on the home page beneath the featured area.', 'responsive'),
            'id' => 'home-widget-single',
            'before_title' => '<div id="widget-title-three"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
            'after_widget' => '</div>'
        ));

}
add_action( 'widgets_init', 'responsive_child_widgets_init' );

/* Remove WooCommerce breadcrumbs and results text§ */
add_action( 'init', 'jk_remove_wc_breadcrumbs' );
function jk_remove_wc_breadcrumbs() {
  remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
  remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
}

?>
