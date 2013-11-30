<?php
/**
 * Template Name: jasmine Case Template 1
 * Description: Displays blog posts with pagination and featured image.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<div class="container collect">
   
    <div class="row">
        <div class="span12">
            <?php if (function_exists('bootstrapwp_breadcrumbs')) {
                bootstrapwp_breadcrumbs();
            } ?>
        </div>
    </div><!--/.row -->

    <div class="row content">
        <?php get_sidebar('blog'); ?>
        <div class="span8">
            <?php while (have_posts()) : the_post(); ?>
                <header class="page-title">
                    <h1><?php the_title();?></h1>
                </header>

                <?php the_content(); ?>
                <hr/>

            <?php // reset the loop
            endwhile;
            wp_reset_query(); ?>

            <?php // Blog post query
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            //query_posts(array('post_type' => 'post', 'paged' => $paged, 'showposts' => 0));
            query_posts('cat=1');
            if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div <?php post_class(); ?>>

                    <div class="row">
                        <?php // Post thumbnail conditional display.
                        if ( bootstrapwp_autoset_featured_img() !== false ) : ?>
                        <div class="span1">
                            <div class="template-meta"><!--post date -->
                                <span class="date"><?php the_time('j');?></span>
                                <span class="month"><?php the_time('M');?></span>                            
                            </div>
                        </div><!--.span1-->


                            <div class="span6">

                                <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                                    <h3><?php the_title();?></h3>
                                </a>
        
                                <div>
                                    <a href="<?php the_permalink(); ?>" title="<?php  the_title_attribute( 'echo=0' ); ?>">
                                        <?php //the_post_thumbnail('large');
                                        echo bootstrapwp_autoset_featured_img(); ?></a>
                                </div>
        
                                <?php else : ?>
        
                                    <div class="span6">
                                <?php endif; ?>
                                <?php the_excerpt(); ?>
                            </div>

                    </div><!-- /.row -->

                    <hr/>
                    <div class="post-footer">
                        <p class="tags"><?php the_tags(); ?></p>
                    <p class="comment" >Comment (<?php comments_number( 'no', '1', '%' ); ?>)</p> 
                    </div>
                    
                </div><!-- /.post_class -->

            <?php // end of blog post loop.
            endwhile; endif; ?>

            <?php bootstrapwp_content_nav('nav-below');?>
        </div>

    <?php //get_sidebar('blog'); ?>
        </div><!-- /.row .content -->
</div><!--/.container -->
    <?php get_footer(); ?>