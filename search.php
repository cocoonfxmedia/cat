<?php
/**
 * The template for displaying search results pages.
 * content-search.php is linked to this
 * @package WordPress
 * @subpackage Cocoonfxmedia-v1.0
 * @since Cocoonfxmedia-v1.0
 */

get_header(); ?>
<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div><?php } ?>

<div class="blogWrapper">
<div class="row">

	<div class="small-12 medium-12 large-12 columns">
			<h1 class="standard h1">Search Results for: <?php printf( __( '%s', 'twentyfifteen' ), get_search_query() ); ?></h1>
	</div>

    <div class="small-12 medium-4 large-2 columns">
			<div class="faceImage">
			<?php 

			$image = get_field('circle_image');

			if( !empty($image) ): ?>

			<img class="circleImage" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
			</div>
	</div>

    <div class="small-12 medium-8 large-8 large-pull-2 columns">
		<div class="introduction">                              
    	<p><?php the_field('cfx_quote'); ?></p>
                                
        </div>
	</div>

</div><!--CLOSEROW-->
</div>

    
  
 <div class="row">
     <div class="small-12 medium-2 large-3 columns">                     
               <h2 class="categories">Services</h2>
  				<ul class="relArt">
            			<li><a href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website">Planning</a></li>
            			<li><a href="<?php echo esc_url( home_url( '/' ) );?>website-design">Creating</a></li>
            			<li><a href="<?php echo esc_url( home_url( '/' ) );?>website-marketing">Marketing</a></li>
            			<li><a href="<?php echo esc_url( home_url( '/' ) );?>measure-and-evaluating-websites">Evaluate</a></li>
              	</ul>
	</div>
<div class="small-12 medium-8 large-6 columns">                      
	<div class="pageContent designONE">
		
		<?php if ( have_posts() ) : ?>


			
			
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		
        </div>
</div>
	<div class="small-12 medium-2 large-3 columns">                     
            <h2 class="categories">Blog Categories</h2>			
  				<ul class="relArt">
    				<?php wp_list_categories( array(
      			'title_li' => '',
        			'orderby'            => 'id',
        			'show_count'         => true,
        			'use_desc_for_title' => false,
        			'cat'           => -32
    				) ); ?>
				</ul>            
	</div>
 </div>

<?php get_footer(); ?>
