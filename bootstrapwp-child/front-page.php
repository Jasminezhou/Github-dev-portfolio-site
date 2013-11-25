<?php
/**
 * Template Name: jasmine - Home page
 * Description: Displays page title and content in Hero section above 3 widgets.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<div class="container">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="cover">     
            <h1><?php the_title();?></h1>
            <?php the_content(); ?>
        
    	<?php endwhile; endif; ?>
		</div>

    	<!-- #work -->
     	<?php $page_id = 180;
     	$page_data = get_page( $page_id );
		$title = $page_data->post_title; // Get title
		$content = $page_data->post_content; // Get Content
		?>
		<div id="work">
			<div class="hero-unit">
		<?php echo '<h1>'.$title.'</h1>';?> 
		<?php $new_query_1 = new WP_Query();// Get title
			$new_query_1->query(array('page_id' => 180));
			while ($new_query_1->have_posts()) :// The Loop of "Get Content"
			$new_query_1->the_post();
			the_content();
			endwhile;
			wp_reset_query();
		?>
		</div><!--/.hero-unit -->
		</div>

		<!-- #about -->
     	<?php
		$page_id = 191;
		$page_data = get_page( $page_id );
		$title = $page_data->post_title; // Get title
		$content = $page_data->post_content; // Get Content
		?>
		<div id="about">
		<div class="hero-unit">
		<?php echo '<h1>'.$title.'</h1>';?> 
		<?php echo $content;?> 
		</div> 
		</div>


		<!-- #service -->
     	<?php
		$page_id = 202;
		$page_data = get_page( $page_id );
		$title = $page_data->post_title; // Get title
		$content = $page_data->post_content; // Get Content
		?>
		<div id="service">
		<?php echo '<h1>'.$title.'</h1>';?> 
		<?php echo $content;?>  
		</div>



</div><!--/.container -->

<?php get_footer(); ?>