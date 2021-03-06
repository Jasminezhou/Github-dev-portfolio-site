<?php
/**
 * Template Name: jasmine - Home page
 * Description: Displays page title and content in Hero section above 3 widgets.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<div class="container home">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="cover">     
            <?php the_content(); ?>
    	<?php endwhile; endif; ?>
    	</div>

		<!-- #slogan -->
     	<?php
		$page_id = 297;
		$page_data = get_page( $page_id );
		$title = $page_data->post_title; // Get title
		$content = $page_data->post_content; // Get Content
		?>
		<div id="slogan">
		<div class="hero-unit">
		<P><?php echo $content;?></P>
		</div> 
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
		<?php echo '<h1 id="scale-it">'.$title.'</h1>';?> 
		<div class="center"><?php echo $content;?></div>
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
		<div class="hero-unit">
		<?php echo '<h1>'.$title.'</h1>';?> 
		<div class="center"><?php echo $content;?></div>
		</div></div>

</div><!--/.container -->


		<script type="text/javascript" src="wp-content/themes/bootstrapwp-child/js/greensock/TweenMax.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  		<script>window.jQuery || document.write('<script src="_/js/jquery-1.9.1.min.js"><\/script>')</script>
  		<script src="wp-content/themes/bootstrapwp-child/js/jquery.superscrollorama.js"></script>
  		
  	
<script>
	$(document).ready(function() {
			var controller = $.superscrollorama();

			controller.addTween('#scale-it', TweenMax.fromTo( $('#scale-it'), 1, {css:{opacity:0, fontSize:'20px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'50px'}, ease:Quad.easeInOut}));

			controller.addTween('#fly-left', TweenMax.from( $('#fly-left'), 2, {css:{right:'1000px'},immediateRender:true, ease:Quad.easeInOut}));

			
	
	$('a[href*=#]').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
	    && location.hostname == this.hostname) {
	      var $target = $(this.hash);
	      $target = $target.length && $target
	      || $('[name=' + this.hash.slice(1) +']');
	      if ($target.length) {
	        var targetOffset = $target.offset().top;
	        $('html,body')
	        .animate({scrollTop: targetOffset}, 1000);
	       return false;
	      }
	    }
	  });
	});
</script>
<script src="wp-content/themes/bootstrapwp-child/js/bootstrap.js" type="text/javascript"></script>
<?php get_footer(); ?>