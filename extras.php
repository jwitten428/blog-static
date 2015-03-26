<?php

/**
* Polyfills for IE8
*/
function blog_2015_ie_polyfills() { ?>
<!--[if lte IE 8]>
<style>.bg-size{-ms-behavior:url('<?php echo get_template_directory_uri() . '/bower_components/background-size-polyfill/backgroundsize.min.htc' ?>')}</style>
<script src="<?php echo get_template_directory_uri() . '/bower_components/respond/dest/respond.min.js' ?>"></script>
<![endif]-->
<?php }
add_action( 'wp_head', 'blog_2015_ie_polyfills', 60 );