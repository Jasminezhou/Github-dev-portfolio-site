<?php
/**
 * Template Name: jasmine - contact page
 * Description: Displays a page title and content without displaying a sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<section id="contact">
    <div class="container contact">

        <div class="row">

            <div class="span12">

                <?php if (function_exists('bootstrapwp_breadcrumbs')) {
                bootstrapwp_breadcrumbs();
                } ?>
            </div><!--/.span12 -->
        </div><!--/.row -->
<div class="hero-unit">

        <header class="page-title">
            <h1><?php the_title();?></h1>
        </header>

        
        <div class="row content">
<div class="span4">
<p><img class="icons phone" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/phone.png" alt="phone">778 387 1111</p>
<p><img class="icons email" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/email.png" alt="email">jingdesignstudio@gmail.com</p>
<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/p.png" alt="linkin">
<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/in.png" alt="linkin">
<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/twetter.png" alt="linkin">
</div>

<div class="span5"><center class="center">
<form class="animated fadeInUp">
            <?php the_content(); ?>
</form>
<div class="span5">
            <?php endwhile; // end of the loop. ?>

        </div>
        </div><!-- .row content -->
    </div><!--/.container -->

</div><!--/.hero-unit -->
</section>
<!--<?php get_footer(); ?>-->
 <!--<img class="map" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/map.png" alt="map">-->