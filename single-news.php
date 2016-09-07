<?php
/**
 * News Posts 
 *
 * @package WordPress
 * @subpackage Cocoonfxmedia-v1.0
 * @since Cocoonfxmedia-v1.0
 */

get_header(); ?>

	


		<?php while ( have_posts() ) : the_post(); get_template_part( 'content','news', get_post_format() );endwhile;?>

<?php get_footer(); ?>
