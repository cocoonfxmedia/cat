<?php
/*
Template Name: Standard Design
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div>

<?php } ?>


<div class="designWrapper">
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
			Related Articles:
                        <?php $my_query = new WP_Query('category_name=creative&posts_per_page=4');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<li><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail();?><?php the_title(); ?></a></li>

<?php endwhile; wp_reset_postdata(); ?>

                        
	</div>

	<div class="small-12 medium-8 large-6 columns">                     
			<div class="pageContent designONE">

				<?php the_content(); ?>
			</div>         
              <div class="callAction">
                 <a class="callButton" href="<?php echo esc_url( home_url( '/' ) );?>contact-us">Call Us Now</a>
                     </div>
           
            <div class="callAction">   
                  <?php if (is_page('creative-design-brief')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>website-design/functionality/">Next Step: Functionality</a>
             <?php } ?>
     <?php if (is_page('functionality')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website/visual-designs/">Next Step: Visual Design</a>
             <?php } ?>
                 <?php if (is_page('visual-designs')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website/website-design/build-development/">Next Step: Build & Web Development</a>
             <?php } ?>
                    <?php if (is_page('build-development')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>website-marketing/">Next Step: Marketing Your Site</a>
             <?php } ?>
                 </div>
	</div>

	<div class="small-12 medium-12 large-3 columns">                     
			<div class="relHead">Case Studies:</div>	
			<ul class="relArt">
                       <?php $args = array('tag_id' => '41','posts_per_page' => 4); $my_query = new WP_Query( $args );?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<li><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></li>
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