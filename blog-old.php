<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div><?php } ?>

<div class="blogWrapper">
<div class="row">

	<div class="small-12 medium-12 large-12 columns">
			<h1 class="standard h1"><?php the_title(); ?></h1>
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
                        
	</div>

	<div class="small-12 medium-8 large-6 large-pull-3 columns">                     
		<div class="pageContent designONE">

               
<?php 
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$my_query = new WP_Query(['post_type' => 'post','posts_per_page' => get_option('posts_per_page'),'paged' => $paged] );?>
          <?PHP while ($my_query->have_posts()) : $my_query->the_post();?>


		<div class="postLists">
	
				<!-- <?php the_post_thumbnail();?> -->
				<div class="postDate">
            		<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="day"><?php the_time('d') ?><sup><?php the_time('S') ?></sup></div>
						<div class="month"><?php the_time('M') ?></div>
						<div class="year"><?php the_time('Y') ?></div>
					</a>
				</div> 

				<div class="postSnippet">		
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt();?>
   
 					

				</div>      
 		</div>          

<?php endwhile; ?>


<?php
				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $my_query->max_num_pages
				) );
				?>

		</div>                        
		</div>  


	<div class="small-12 medium-2 large-3 columns">                     
                        
	</div>

</div>








<?php endwhile; ?>
<?php get_footer(); ?>