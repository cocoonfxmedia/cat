
 <?php
/*
Template Name: category accountacny
*/
?>

<?php get_header(); ?>

<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div><?php } ?>
<div class="row">
	<div class="small-12 medium-12 large-12 columns">
				<h1 class="standard h1">Case Studies: <?php single_cat_title(); ?></h1>
	</div>
    <div class="small-12 medium-2 large-2 columns">
			<div class="introduction">

			</div>
		</div>
    <div class="small-12 medium-8 large-8 columns">
<div class="introduction">                              
    <p>  <?php the_field('cfx_quote'); ?></p>
                                <?php 

$image = get_field('circle_image');

if( !empty($image) ): ?>

	<img class="circle-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
        </div>
	</div>
    <div class="small-12 medium-2 large-2 columns">
			<div class="introduction">

			</div>
		</div>
	<div class="small-12 medium-12 large-12 columns">
				[SLIDER]
	</div>
</div><!--CLOSEROW-->


<div class="row">

	<div class="small-12 medium-2 large-2 columns">                     
			Links:			
                        
	</div>
   
	<div class="small-12 medium-8 large-8 columns">     
         
			<div class="pageContent designONE">
                       
<?php while ( have_posts() ) : the_post(); ?>


<h2><?php the_title(); ?></h2>
 <?php $image = get_field('cs_logo');

if( !empty($image) ): ?>

	Logo: <img class="circleImage" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
<li><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_time('F jS, Y') ?> - <?php the_title_attribute(); ?></a></li>
<?php the_excerpt(); ?>

   

 <?php endwhile; ?>

</div>      
          
	</div>
  
	<div class="small-12 medium-3 large-2 columns">                     
			Resources:
<li id="categories"><h2><?php _e( 'Posts by Category' ); ?></h2>
	<?php wp_dropdown_categories( 'show_option_none=Select category' ); ?>
	<script type="text/javascript">
		<!--
		var dropdown = document.getElementById("cat");
		function onCatChange() {
			if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
				location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
			}
		}
		dropdown.onchange = onCatChange;
		-->
	</script>
</li>
                        
	</div>
</div>



<div class="row">
	<div class="small-12 medium-12 large-12 columns">


	</div>
</div><!--CLOSEROW-->



</div>

<?php get_footer(); ?>
