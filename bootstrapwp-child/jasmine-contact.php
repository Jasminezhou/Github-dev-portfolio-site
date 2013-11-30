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

<div id="contact">
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
            <p class="invite">Feel free to contact me, I'd like to hear anything from you.</p>
        </header>
        
        <div class="row content">
            <div class="span4">
                <p><img class="icons phone" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/phone.png" alt="phone">778 387 1111</p>
                <p><img class="icons email" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/email.png" alt="email">jingdesignstudio@gmail.com</p>
                <a href="http://www.pinterest.com/jasminezhou27/boards" target="_blank" class="icons pinterest">pinterest</a>
                <a href="http://www.linkedin.com/profile/view?id=292189174&trk=nav_responsive_tab_profile_pic" target="_blank" class="icons linkedin">pinterest</a>
                <a href="https://twitter.com/Jasmine07206275" target="_blank" class="icons twitter">pinterest</a>
            </div><!-- .span4 -->

        <div class="span5">
            <center class="center">
                <form class="animated fadeInUp"><?php the_content(); ?></form>
                <?php endwhile; // end of the loop. ?>
            </center>
                    
        </div><!-- .span5 -->
        </div><!-- .row content -->
    </div>
    </div>
<?php get_footer(); ?>