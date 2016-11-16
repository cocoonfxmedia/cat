<?php
/*
Template Name: Planning
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div><?php } ?>

<div class="planningWrapper">
<section class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="mainBanner">
				<h1><span class="redText">Website Planning</h1>
				<p>Set your route to success with a dedicated planning advisor</p>
			</div>
		</div>



	<div class="small-12 medium-12 large-12 columns">
		<div class="introduction">
			<?php the_content(); ?>
			</div>
		</div>

</section>		
</div>



<section class="row planPAGE">

		<div class="small-12 medium-6 large-6 columns">
        	<img class="marketCENTER" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/centerDot.svg"/>
                <div class="boxed planONE">
					<h2>Why do I need a website</h2>
					<h3>What is the reasoning behind this?</h3>
                                        <ul>
                                        <li>It can be very stressful trying to understand what you want.</li>
                                        <li>Click below and start the journey which can answer your questions</li>
                                        </ul>
			</div>	
  
            <div class="boxButton">
                	<a href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website/why-do-i-need-a-website/"><button class="orange">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/plana.png" alt="Plan">
				</div>
		</div>

		<div class="small-12 medium-6 large-6 columns">
                <div class="boxed planTWO">
					<h2>Design Brief</h2>
					<h3>Free downloadable document</h3>
					<p>This document is designed to help plan the website.</p>

			</div>	
  
            <div class="boxButton">
                	<a href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website/design-brief/"> <button class="green">Download</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/planb.png" alt="Plan">

			</div>
		</div>

</section>

<section class="row planPAGE">

		<div class="small-12 medium-6 large-6 columns">
                <div class="boxed planTHREE">
					<h2>Initial Consultation</h2>
					<h3>Reveal your online business potential with a free consultation</h3>
					<p>Inclusion:
					<ul>
					<li>If interest, make contact</li>
					<li>Preference, phone, skype, meeting, email to discuss ideas</li>
					<li>Identify objectives and website goals</li>
					<li>Receive basic overview and proposed costs – contract</li>
					<li>Choice of additional research and planning services for higher success rates</li>
					<li>What the benefits are to the clients</li>
					</ul>
					</p>
			</div>	
  
            <div class="boxButton">
                	<a href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website/initial-consulation/"><button class="orange">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/planc.png" alt="Plan">
				</div>
		</div>

		<div class="small-12 medium-6 large-6 columns">
                <div class="boxed planFOUR">
					<h2>Website Specification</h2>
					<h3>Detailed documentation on website project</h3>
					<p>Inclusion:
					<ul>
					<li>Meeting face to face</li>
					<li>Refine Goals & Objectives</li>
					<li>Define Target Audience</li>
					<li>What the benefits are to the clients</li>
					<li>Explore User journey</li>
					<li>Define sitemap and functionality</li>
					</ul>
					</p>
			</div>	
  
            <div class="boxButton">
                	<a href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website/website-specification/"> <button class="blue">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/pland.png" alt="Plan">
                </div>
		</div>
</section>








<?php endwhile; ?>
<?php get_footer(); ?>