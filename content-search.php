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
<div class="postLists">		
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<div class="postDate">
            		<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="day"><?php the_time('d') ?><sup><?php the_time('S') ?></sup></div>
						<div class="month"><?php the_time('M') ?></div>
						<div class="year"><?php the_time('Y') ?></div>
					</a>
				</div> 
<div class="postSnippet">	
	
		<?php the_excerpt(); ?>
</div>
	

</article><!-- #post-## -->
</div>
 </div>
