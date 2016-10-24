<?php
/*
Template Name: Standard Planning
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div><?php } ?>

<div class="planningWrapper">
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
	<div class="small-12 medium-2 large-3 columns">                  
               <h2 class="categories">Services</h2>
               <?php jb_services(); ?>
  				<ul class="relArt">
                                    <li>
                                        <h3>Web Design</h3>
                                        All our websites and designed with the user goals. <br/>Click here for more information.
                                    </li>
                                    <li><h3>Web Development</h3>
                                    We can develop pretty much anything from custom e-commerce to content management systems.<br/> click here for more information.
                                    </li>
                                    <li><h3>Search Engine Optimisation (SEO)</h3>
                                    SEO is often known as a dark art. We provide clarity with tried and tested methods to gain more traffic and improve Keyword rankings.<br/> click here for more information.
                                    </li>
                                    <li><h3>Marketing</h3>
                                    From writing marketing strategies to content marketing. We will help you market your business to your target audience with measurable marketing solutions.<br/> Click here or more information.
                                    
                                    </li>
              	</ul>
	</div>


	<div class="small-12 medium-8 large-6 columns">                     
			<div class="pageContent planONE">

				<?php the_content(); ?>
			</div>  
            <div class="callAction">
                 <a class="callButton" href="<?php echo esc_url( home_url( '/' ) );?>contact-us">Call Us Now</a>
                     </div>
           
            <div class="callAction">   
                  <?php if (is_page('why-do-i-need-a-website')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website/design-brief/">Next Step: Design Brief</a>
             <?php } ?>
     <?php if (is_page('design-brief')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website/initial-consulation/">Next Step: Initial Consulation</a>
             <?php } ?>
                 <?php if (is_page('initial-consulation')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website/website-specification/">Next Step: Website Specification</a>
             <?php } ?>
                    <?php if (is_page('website-specification')) { ?>
              <a class="callNextPage" href="<?php echo esc_url( home_url( '/' ) );?>website-design/">Next Step: Designing your Website</a>
             <?php } ?>
                 </div>
              
	</div>

	<div class="small-12 medium-12 large-3 columns">                     
			<div class="relHead">Case Studies:</div>	
			<ul class="relArt">
                       <?php $args = array('tag_id' => '42','posts_per_page' => 4); $my_query = new WP_Query( $args );?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<li><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_postdata(); ?>
			</ul>


                        

        
        	               
			<div class="relHead">Related Articles:</div>
			<ul class="relArt">
                        <?php $my_query = new WP_Query('category_name=planning&posts_per_page=4');?>
						<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
						<li><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail();?><?php the_title(); ?></a></li>
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