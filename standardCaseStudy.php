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
			<h1 class="standard h1"><?php the_title(); ?> standardcasestudy.php</h1>
	</div>


	<div class="small-12 medium-12 large-12 columns">
		<div class="introduction">                             
       		<div class="projectDetail">Project Name:  <?php the_field('cs_project_name'); ?></div>
       		<div class="projectDetail">Project Skills: <?php the_field('cs_project_skills'); ?></div>
       		<div class="projectDetail">Project Outcomes: <?php the_field('cs_project_outcome'); ?></div>
        </div>
	</div>

</div><!--CLOSEROW-->
</div>





<div class="row">

	<div class="small-12 medium-4 large-3 columns">                     
			
                        
	</div>

	<div class="small-12 medium-8 large-6 large-push-3 columns">                     
			<div class="pageContent designONE">

				<?php the_content(); ?>
			</div>                        
	</div>

	<div class="small-12 medium-12 large-2 columns">                     
                        
	</div>

</div>



<div class="row">
	<div class="small-12 medium-12 large-12 columns">
<?php if (cat_is_ancestor_of(32, $cat) or is_category(32)):  ?>
                       <ul>
    <?php wp_list_categories( array(
        'orderby'            => 'id',
        'show_count'         => true,
        'use_desc_for_title' => false,
        'child_of'           => 32
    ) ); ?>
</ul>
   
<?php endif; ?>   

	</div>
</div><!--CLOSEROW-->



</div>
<?php endwhile; ?>
<?php get_footer(); ?>