<?php
/*
Template Name: Case Study
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

	<div class="small-12 medium-2 large-2 columns">                     
                        
	</div>


	<div class="small-12 medium-8 large-8 large-push-2 columns">                     
		<div class="pageContent designONE">  


<?php
$args = array('child_of' => 32);
$categories = get_categories( $args );
foreach($categories as $cat) {
	echo '<div class="small-6 medium-4 large-3 columns caseBox">';
	 echo '<a class="imgCont" href="' . get_category_link($cat->term_id) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . '<img class="caseImage" src="' . z_taxonomy_image_url($cat->term_id). '"/>'.'</a>';
    echo '<h2><a href="' . get_category_link($cat->term_id) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $cat->cat_name.'</a> </h2> ';
    echo '<p>'. $cat->description . '</p>';
   
    echo '</div>';
}
?>

   

		</div>                        
	</div>


	<div class="small-12 medium-1 large-1 columns">                     
                        
	</div>


</div><!--CLOSEROW-->



<div class="row">
	<div class="small-12 medium-12 large-12 columns">


	</div>
</div><!--CLOSEROW-->



</div>
<?php endwhile; ?>
<?php get_footer(); ?>