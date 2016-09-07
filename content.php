<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Cocoonfxmedia-v1.0
 * @since Cocoonfxmedia-v1.0
 */
?>

<div class="megaContainer">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">   
                    <div class="standardImage"><?php the_post_thumbnail('Full'); ?></div>
                    
                     <h1 class="standardH1"><?php the_title(); ?></h1>
                 
                  
              
		</div>
</div>
  <div class="row">
<div class="small-12 medium-8 large-8 medium-push-2 large-push-2 columns posts">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	
		<?php /* translators: %s: Name of current post */ the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) ); wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	
 <div class="row">
 <div class="navigation">

<?php previous_post_link(); ?> <?php next_post_link(); ?>

</div> <!-- end navigation -->
    </div>
	
   
</article><!-- #post-## -->
</div>
      
  </div>
</div>