<?php
/*
Template Name: Standard Marketing
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div><?php } ?>

<div class="marketingWrapper">
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




<div class="row marketingBar">

	<div class="small-12 medium-4 large-3 columns">                     
			    <h2 class="categories">Services</h2>
             
  				<ul class="relArt">
                                    <?php jb_services(); ?>
              	</ul>
                        
	</div>

	<div class="small-12 medium-8 large-6 columns">                     
			<div class="pageContent marketONE">

				<?php the_content(); ?>
			</div> 
                          <div class="callAction">
                 <a class="callButton" href="<?php echo esc_url( home_url( '/' ) );?>contact-us">Call Us Now</a>
                     </div>
           
            <div class="callAction">   
                  <?php if (is_page('marketing-objectives')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>website-marketing/strategy/">Next Step: Marketing Strategy</a>
             <?php } ?>
     <?php if (is_page('strategy')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>website-marketing/tactics/">Next Step: Marketing Tactics</a>
             <?php } ?>
                 <?php if (is_page('tactics')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>website-marketing/audit-analysis/">Next Step: Marketing Audits Analysis</a>
             <?php } ?>
                    <?php if (is_page('audit-analysis')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>measure-and-evaluating-websites">Next Step: Measure & Evaluating Website</a>
             <?php } ?>
                 </div>
	</div>

	<div class="small-12 medium-12 large-3 columns">                     
			<div class="relHead">Case Studies:</div>	
			<ul class="relArt">
                       <?php $args = array('tag_id' => '39','posts_per_page' => 4); $my_query = new WP_Query( $args );?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<li><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_postdata(); ?>
			</ul>
               <div class="relHead">Related Articles:</div>	
			<ul class="relArt">
                        <?php $my_query = new WP_Query('category_name=marketing&posts_per_page=4');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<li><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail();?><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_postdata(); ?>
			</ul>
	</div>
</div>



<div class="row">
	<div class="small-12 medium-12 large-12 columns">


	</div>
</div><!--CLOSEROW-->



</div>
<?php endwhile; ?>
<?php get_footer(); ?>