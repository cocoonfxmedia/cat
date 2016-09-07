<?php
/*
Template Name: Teampage
*/
?>
<?php get_header(); ?>
<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>


<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div><?php } ?>



	<div class="row">
		<div class="small-12 medium-12 large-12 columns">   
                    <div class="standardImage"><?php the_post_thumbnail('Full'); ?></div>
                    
                      <h1 class="standardH1"><?php the_title(); ?></h1>
                 
                  <?php the_content(); ?>
            
		</div>
</div>



<div class="row">

	<div class="small-12 medium-4 large-4 columns team">
                <img src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/img.jpga"/>
                <h2>xx</h2>
                      <h3>Managing Director</h3>
                      <h4>xx</h4>
                        
        </div>
   
	<div class="small-12 medium-4 large-4 columns team">
             <img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/img.jpg"/>
                      <h2>xx</h2>
                      <h3>Business Development Manager</h3>
                      <h4>xx</h4>
                     
		</div>
    	<div class="small-12 medium-4 large-4 columns team">
                     <img src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/img.jpg"/>
                           <h2>xx</h2>
                      <h3>Technical Manager</h3>
                      <h4>xx</h4>
                          
		</div>
    	<div class="small-12 medium-4 large-4 columns team">
                
                     <img src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/img.jpg"/>
                           <h2>xx</h2>
                      <h3>Supply Chain Manager</h3>
                      <h4>xx</h4>
                         
		</div>
	<div class="small-12 medium-4 large-4 columns team">
             <img src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/img.jpg"/>
                     <h2>xx</h2>
                      <h3>Marketing Executive</h3>
                      <h4>xx</h4>
                          
                    
		</div>
    	<div class="small-12 medium-4 large-4 columns team">
                     <img src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/img.jpg"/>
                          <h2>xx</h2>
                      <h3>Job Title</h3>
                      <h4>xx</h4>
                          
		</div>
</div><!--CLOSEROW-->

<div class="row">
    
   
		
    
    
</div>


<?php endwhile; ?>
<?php get_footer();?>