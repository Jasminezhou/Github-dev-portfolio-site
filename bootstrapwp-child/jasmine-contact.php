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

        <?php the_post_thumbnail('full');?>
        <div class="row content">

            <?php the_content();   ?>

<!--<div class="span5">
<center class="center">
<form action="MAILTO:jasminezhou27@gmail.com" method="post" enctype="text/plain">
Name:<br>
<input type="text" name="name" value="your name"><br>
E-mail:<br>
<input type="text" name="mail" value="your email"><br>
Comment:<br>
<input type="text" name="comment" value="your comment" size="50"><br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>

<img class="envelope-front" src="http://localhost:8888/dev/portfolio/wp-content/uploads/2013/11/envelope-front.png" alt="envelope-front" width="304" height="166" class="alignnone size-full wp-image-325" />
</center>
</div>
-->



            <?php endwhile; // end of the loop. ?>

        </div>
        </div><!-- .row content -->
    </div><!--/.container -->

</div><!--/.hero-unit -->
</section>
<!--<?php get_footer(); ?>-->
 <!--<img class="map" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/map.png" alt="map">-->