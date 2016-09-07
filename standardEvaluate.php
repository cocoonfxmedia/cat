<?php
/*
Template Name: Standard Evalute
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div><?php } ?>

<div class="evaluateWrapper">
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

	<div class="small-12 medium-4 large-3 columns">                     
			Links:			
                        
	</div>

	<div class="small-12 medium-8 large-6 columns">                     
			<div class="pageContent measureONE">

				<?php the_content(); ?>
			</div>   
                <div class="callAction">
                 <a class="callButton" href="<?php echo esc_url( home_url( '/' ) );?>contact-us">Call Us Now</a>
                     </div>
           
            <div class="callAction">   
                  <?php if (is_page('achieving-objectives')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>measure-and-evaluating-websites/kpis-targets/">Next Step: KPI's Targets</a>
             <?php } ?>
     <?php if (is_page('kpis-targets')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>measure-and-evaluating-websites/roi-reporting/">Next Step: ROI Reporting</a>
             <?php } ?>
                 <?php if (is_page('roi-reporting')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>measure-and-evaluating-websites/reviews/">Next Step: Reviews</a>
             <?php } ?>
                    <?php if (is_page('reviews')) { ?>
              <div class="callNextPage">Lets have a chat 01543 3223074</div>
             <?php } ?>
                 </div>
	</div>

	<div class="small-12 medium-12 large-3 columns">                     
			Resources:
<?php $my_query = new WP_Query('category_name=evaluate');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<li><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail();?><?php the_title(); ?></a></li>

<?php endwhile; wp_reset_postdata(); ?>

                        
	</div>
</div>



<div class="row">
	<div class="small-12 medium-12 large-12 columns">


	</div>
</div><!--CLOSEROW-->



</div>
<?php endwhile; ?>
<?php get_footer(); ?>