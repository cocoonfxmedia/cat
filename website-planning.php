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
                                <p>How to plan your website to get the best results</p>
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
					<h2>1. Why do I need a website?</h2>
					<h3>What is the reasoning behind this?</h3>
                                        <p>A website can are built for a many reasons, often an unplanned website don't perform and lets both the users and your business down.</p>
                                        <p>It is often stressful trying to get your idea over to a web designer, however if you understand what you want the website to do then the website will perform.</p>
                                  
                                      
                                        <p>Click below and start the journey which can answer your questions and get the planning process underway.</p>
                                     
			</div>	
  
            <div class="boxButton">
                	<a href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website/why-do-i-need-a-website/"><button class="orange">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/plana.png" alt="Plan">
				</div>
		</div>

		<div class="small-12 medium-6 large-6 columns">
                <div class="boxed planTWO">
					<h2>2. Writing the design brief</h2>
					<h3>Free downloadable document</h3>
					<p>This document is designed to help plan the website it includes the following.</p>
                                        <ul>
                                            <li>Your vision</li>
                                            <li>Target Audience</li>
                                            <li>Competitors</li>
                                            <li>Your business goals/objectives</li>
                                        </ul>
                                         <p>Click below to download the Brief Document Template.</p>

			</div>	
  
            <div class="boxButton">
                	<a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/brief-questions-website.docx" target='_blank'> <button class="green">Download</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/planb.png" alt="Plan">

			</div>
		</div>

</section>

<section class="row planPAGE">

		<div class="small-12 medium-6 large-6 columns">
                <div class="boxed planTHREE">
					<h2>3. Initial consultation</h2>
					<h3>White Board Session to dig deeper than the brief document.</h3>
					<p>Inclusion:
					<ul>
					<li>Identify objectives and website goals</li>
					<li>Receive basic overview and proposed costs – contract</li>
					<li>Choice of additional research and planning services for higher success rates</li>
					<li>What the benefits are to the clients</li>
					</ul>
					</p>
  <p>Click below to read more on the process.</p>
                </div>	
  
            <div class="boxButton">
                	<a href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website/initial-consulation/"><button class="orange">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/planc.png" alt="Plan">
				</div>
		</div>

		<div class="small-12 medium-6 large-6 columns">
                <div class="boxed planFOUR">
					<h2>4. Website Specification</h2>
					<h3>Detailed documentation on website project</h3>
                    
					<p>Inclusion:
					<ul>
					<li>Refine Goals & Objectives</li>
					<li>Define Target Audience</li>
					<li>What the benefits are to the clients</li>
					<li>Explore User journey</li>
					<li>Define sitemap and functionality</li>
					</ul>
					</p>
   <p>Click below to read more on the process.</p>
                </div>	
  
            <div class="boxButton">
                	<a href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website/website-specification/"> <button class="blue">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/pland.png" alt="Plan">
                </div>
		</div>
</section>








<?php endwhile; ?>
<?php get_footer(); ?>