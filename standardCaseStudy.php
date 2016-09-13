<?php
/*
Template Name: Standard Case Study
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div><?php } ?>


<div class="casestudyWrapper">
<div class="row">

	<div class="small-12 medium-12 large-12 columns">
				<h1 class="standard h1"><?php the_title(); ?></h1>
	</div>


    <div class="small-12 medium-12 large-2 columns">
			<div class="introduction">

			</div>
	</div>


	<div class="small-12 medium-8 large-8 columns">
		<div class="introduction">                              
    
  <?php $image = get_field('cs_logo');

if( !empty($image) ): ?>

		<img class="circleImage" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
        
       Project Name  <?php the_field('cs_project_name'); ?>
       Project Skills <?php the_field('cs_project_skills'); ?>
       Project Outcomes <?php the_field('cs_project_outcome'); ?>
        </div>
	</div>


    <div class="small-12 medium-4 large-2 columns">
			<div class="introduction">

			</div>
	</div>

</div><!--CLOSEROW-->
</div>





<div class="row">

	<div class="small-12 medium-4 large-2 columns">                     
			
                        
	</div>

	<div class="small-12 medium-8 large-8 large-push-2 columns">                     
			<div class="pageContent designONE">

				<?php the_content(); ?>
			</div>                        
	</div>

	<div class="small-12 medium-12 large-2 columns">                     
                        
	</div>

</div>



<div class="row">
	<div class="small-12 medium-12 large-12 columns">


	</div>
</div><!--CLOSEROW-->



</div>
<?php endwhile; ?>
<?php get_footer(); ?>