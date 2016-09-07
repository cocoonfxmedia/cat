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


<div class="row">
	<div class="small-12 medium-12 large-12 columns">
				<h1 class="standard h1"><?php the_title(); ?></h1>
	</div>
    <div class="small-12 medium-12 large-3 columns">
			<div class="introduction">

			</div>
		</div>
    <div class="small-12 medium-8 large-6 columns">
<div class="introduction">                              
    
  <?php $image = get_field('cs_logo');

if( !empty($image) ): ?>

	Logo: <img class="circleImage" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
        
       Project Name  <?php the_field('cs_project_name'); ?>
       Project Skills <?php the_field('cs_project_skills'); ?>
       Project Outcomes <?php the_field('cs_project_outcome'); ?>
        </div>
	</div>
    <div class="small-12 medium-4 large-3 columns">
			<div class="introduction">

			</div>
		</div>

</div><!--CLOSEROW-->


<div class="row">

	<div class="small-12 medium-4 large-3 columns">                     
			Links:			
                        
	</div>

	<div class="small-12 medium-8 large-6 columns">                     
			<div class="pageContent designONE">

				<?php the_content(); ?>
                       
</div>
                 <div class="navigation">

<?php previous_post_link(); ?> <?php next_post_link(); ?>
<?php posts_nav_link(); ?>
</div>              
            
            <div class="navigation">
<?php posts_nav_link( ' &#183; ', 'previous page', 'next page' ); ?>
</div>
	</div>

	<div class="small-12 medium-12 large-3 columns">                     
			Services:

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
<?php endwhile; ?>
<?php get_footer(); ?>