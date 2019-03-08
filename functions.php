<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}
// view rawLoad normalize CSS hosted with ❤ by GitHub
// Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
    register_sidebar( array(
                    'name'          => 'Footer',
                    'id'            => 'footer',
                    'before_widget' => '<footer class="content-High col-12 startW">',
                    'after_widget'  => '</footer>',
                    'before_title'  => '',
                    'after_title'   => ''
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );

?>
