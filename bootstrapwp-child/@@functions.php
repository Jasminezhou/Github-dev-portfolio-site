<?php
function pw_show_gallery_image_urls( $content ) {

 	global $post;

 	// Only do this on singular items
 	if( ! is_singular() )
 		return $content;

 	// Make sure the post has a gallery in it
 	if( ! has_shortcode( $post->post_content, 'gallery' ) )
 		return $content;

 	// Retrieve the first gallery in the post
 	$gallery = get_post_gallery_images( $post );

	$image_list = '<ul>';

	// Loop through each image in each gallery
	foreach( $gallery as $image ) {

		$image_list .= '<li>' . $image . '</li>';

	}

	$image_list .= '</ul>';

	// Append our image list to the content of our post
	$content .= $image_list;

 	return $content;

 }
 add_filter( 'the_content', 'pw_show_gallery_image_urls' );

?>