
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

<div class="studyWrapper">
<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<?php if (cat_is_ancestor_of(32, $cat) or is_category(32)):  ?>

			<h1 class="standard h1">
  			Case Studies:  <?php single_cat_title();  ?> category.php
			 </h1> 

                                                 
		<?php endif; ?>
        	<?php if (!cat_is_ancestor_of(32, $cat) && !is_category(32)):  ?>
 			<h1 class="standard h1">
 			Category: <?php single_cat_title();  ?> category.php
 			</h1>                                                  
		<?php endif; ?>                         
</div>
</div>
</div>

<div class="row">

	<div class="small-12 medium-2 large-3 columns">                     
               <h2 class="categories">Services</h2>
  				<ul class="relArt">
            			<li><a href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website">Planning</a></li>
            			<li><a href="<?php echo esc_url( home_url( '/' ) );?>website-design">Creating</a></li>
            			<li><a href="<?php echo esc_url( home_url( '/' ) );?>website-marketing">Marketing</a></li>
            			<li><a href="<?php echo esc_url( home_url( '/' ) );?>measure-and-evaluating-websites">Evaluate</a></li>
              	</ul>
	</div>
   
	<div class="small-12 medium-8 large-6 columns">     
        
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
   
 				

				</div>      
 			</div>    
                            	<?php endwhile; ?>
			</div>
 	</div> 
<div class="small-12 medium-3 large-3 columns">

                 <h2 class="categories">Case Study Sectors</h2>			
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
	
</div><!--CLOSEROW-->






</div>

<?php get_footer(); ?>