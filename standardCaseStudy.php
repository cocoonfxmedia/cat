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

	<div class="small-12 medium-3 large-3 columns">                     
               <h2 class="categories">Services</h2>
  				<ul class="relArt">
            			<li><a href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website">Planning</a></li>
            			<li><a href="<?php echo esc_url( home_url( '/' ) );?>website-design">Creating</a></li>
            			<li><a href="<?php echo esc_url( home_url( '/' ) );?>website-marketing">Marketing</a></li>
            			<li><a href="<?php echo esc_url( home_url( '/' ) );?>measure-and-evaluating-websites">Evaluate</a></li>
              	</ul>
	</div>

	<div class="small-12 medium-6 large-6 columns">                     
			<div class="pageContent designONE">

				<?php the_content(); ?>
			</div>                        
	</div>

	<div class="small-12 medium-3 large-3 columns">                     
                     
                            <h2 class="categories">Case Study Categories</h2>			
  <ul class="relArt">
    <?php wp_list_categories( array(
          'title_li' => '',
        'orderby'            => 'id',
        'show_count'         => true,
        'use_desc_for_title' => false,
        'child_of'           => 32
    ) ); ?>
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