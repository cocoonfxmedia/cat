<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9817.078936488932!2d-2.6784739!3d52.0384001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb96037c8c45cd1e1!2sRadbournes!5e0!3m2!1sen!2suk!4v1449495380819" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>



<div class="contentWrapper">

	<div class="row">

		<div class="small-12 medium-6 large-6 large-push-3 medium-push-3 columns">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		</div>


	</div><!--CLOSEROW-->

</div>




</div>
<?php endwhile; ?>
<?php get_footer(); ?>