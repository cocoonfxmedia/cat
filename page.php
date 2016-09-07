<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Cocoonfxmedia
 * @since Cocoonfxmedia 1.0
 */

get_header(); ?>
    <div class="row">

<div class="small-12 medium-12 large-12 columns">
<?php
// Start the loop.
while ( have_posts() ) : the_post();

// Include the page content template.
get_template_part( 'content', 'page' );

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
comments_template();
endif;

// End the loop.
endwhile;
?>

</div>
    </div>
<?php get_footer(); ?>
