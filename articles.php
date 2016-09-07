<?php
/*
Template Name: Articles
*/
?>
<?php get_header(); ?>
<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_header(); ?>
<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="megaContainer">

<div class="banner gradient standard">
<div class="row">
<div class="small-12 medium-12 large-12 columns">
<h1><?php the_title(); ?></h1>
</div>
</div>
</div>


<div class="row">
<div class="small-12 medium-8 large-8 columns">
<?php $my_query = new WP_Query('post_type=articles');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>

<div class="blogContainer">
<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail();?></a>
<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php the_time('F jS, Y') ?> 
<?php the_excerpt(); ?>
</div>

<?php endwhile;?>
    

</div>
       <div class="call-to-action-inner small-12 medium-4 large-4 columns"> 
		<div class="boxed1">
           	<?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div></div>
 </div>
</div>  
<?php endwhile; ?>
<?php get_footer();?>