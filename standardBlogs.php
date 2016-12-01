<?php
/*
Template Name: Standard Blogs
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

    <div class="small-12 medium-12 large-3 columns">
			</div>
    
	<div class="small-12 medium-8 large-6 large-push-3 columns">
			<div class="published">Published date: <?php the_date(); ?></div>
			<div class="modified">Last modified: <?php the_modified_date(); ?></div>  
			</div>
   
	 <div class="small-12 medium-4 large-3 columns">
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
					<?php the_content(); ?>
                     	</div>

            		<div class="navigation">
					<div class="prev"><?php previous_post_link('%link'); ?> </div>
					<div class="next"><?php next_post_link('%link'); ?> </div>
					<?php posts_nav_link(); ?>
					</div>              
	</div>

	<div class="small-12 medium-12 large-3 columns">                     
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





</div>
<?php endwhile; ?>
<?php get_footer(); ?>