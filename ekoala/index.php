<?php 
get_header();
$home = dirname( __FILE__ );
?>
    <!-- slider-index -->
    <?php get_template_part( 'Assets/templates/slider_content' ); ?>
    
    <!-- about -->
    <?php require_once( $home . '/Assets/sections/section-sobre.php' );?>

    <!-- info bar -->
    <?php require_once( $home . '/Assets/templates/info_bar.php' );?>


<?php get_footer() ?>
