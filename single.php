<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Cocoonfxmedia-v1.0
 * @since Cocoonfxmedia-v1.0
 */

get_header(); ?>

	


		<?php while ( have_posts() ) : the_post(); get_template_part( 'content', get_post_format() );endwhile;?>

<?php get_footer(); ?>
