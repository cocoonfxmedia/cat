<?php
/**
 * The template part for displaying results in search pages
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 * Search.php is the parent
 * @package WordPress
 * @subpackage Cocoonfxmedia-v1.0
 * @since Cocoonfxmedia-v1.0
 */
?>
  <div class="row">
<div class="small-12 medium-12 large-12 columns">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	

	
		<?php the_excerpt(); ?>
	

	<?php if ( 'post' == get_post_type() ) : ?>

		<footer class="entry-footer">
			<?php twentyfifteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->

	<?php else : ?>

		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

	<?php endif; ?>

</article><!-- #post-## -->
</div>
  </div>