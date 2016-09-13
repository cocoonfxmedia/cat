
 <?php
/*
Template Name: category
*/
?>

<?php get_header(); ?>

<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div><?php } ?>
<div class="row">
	<div class="small-12 medium-12 large-12 columns">
			
<?php if (cat_is_ancestor_of(32, $cat) or is_category(32)):  ?>
 <h1 class="standard h1">
  Case Studies:  <?php single_cat_title();  ?>
 </h1>                                                  
<?php endif; ?>
        <?php if (!cat_is_ancestor_of(32, $cat) && !is_category(32)):  ?>
 <h1 class="standard h1">
 Category: <?php single_cat_title();  ?>
 </h1>                                                  
<?php endif; ?>                         
                                 
                                 
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

	</div>
</div><!--CLOSEROW-->


<div class="row">

	<div class="small-12 medium-2 large-2 columns">                     		
                        
	</div>
   
	<div class="small-12 medium-8 large-8 large-push-2 columns">     
         
			<div class="pageContent designONE">
                       
			<?php while ( have_posts() ) : the_post(); ?>


			<div class="postLists">
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
   
 					<?php endwhile; ?>

				</div>      
 			</div>          
			</div>
 	</div> 

	<div class="small-12 medium-3 large-2 columns">

			<ul>                     

			<li id="categories"><h2><?php _e( 'Post Categories' ); ?>
				<?php wp_dropdown_categories( 'show_option_none=Select category' ); ?>
				<script type="text/javascript">
				<!--
				var dropdown = document.getElementById("cat");
				function onCatChange() {
				if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
				location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?															cat="+dropdown.options[dropdown.selectedIndex].value;
				}
				}
				dropdown.onchange = onCatChange;
				-->
				</script>
			</li>
                        
	</div>
</div><!--CLOSEROW-->


<div class="row">
	<div class="small-12 medium-12 large-12 columns">


	</div>
</div><!--CLOSEROW-->



</div>

<?php get_footer(); ?>