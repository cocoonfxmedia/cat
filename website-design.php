<?php
/*
Template Name: Design
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div><?php } ?>

<div class="designWrapper">
<section class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="mainBanner">
				<h1><span class="redText">Website Design</h1>
				<p>Become the online authority for your business with a must-visit influential website developed with the latest technology</p>
			</div>
		</div>


		<div class="small-12 medium-12 large-12 columns">
			<div class="introduction">
				<?php the_content(); ?>
			</div>
		</div>

</section>
</div>	



<section class="row designPAGE">
		<div class="small-12 medium-6 large-6 columns">
      		<div class="boxed designONE">
				<h2>Creative Design Brief</h2>
				<h3>Identify goals that rapidly boost business</h3>
				<p>Inclusion:
				<ul>
				<li>Work with client to identify overall business goals and rationale for website</li>
				<li>Using business goals, set objectives for website</li>
				<li>How achievable goals are set</li>
				<li>What the benefits are to the clients</li>
				</ul>
				</p>
			</div>	
  
            <div class="boxButton">
                <a href="<?php echo esc_url( home_url( '/' ) );?>website-design/creative-design-brief/"><button class="orange">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/createa.png" alt="Design">

			</div>
		</div>

		<div class="small-12 medium-6 large-6 columns">
            <div class="boxed designTWO">
				<h2>Functionality</h2>
				<h3>Identify user demands and functionality</h3>
				<p>Inclusion:
				<ul>
				<li>Identify your users</li>
				<li>Ability to perform complex task</li>
				<li>Capture and manage data</li>
				<li>Ability to server your users with content</li>
				</ul>
				</p>
			</div>	
  
            <div class="boxButton">
                <a href="<?php echo esc_url( home_url( '/' ) );?>website-design/functionality/"> <button class="green">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/createb.png" alt="Design">

			</div>
		</div>
</section>
<section class="row designPAGE">
		<div class="small-12 medium-6 large-6 columns">
            <div class="boxed designTHREE">
				<h2>Visual Designs</h2>
				<h3>Designs created around business objectives</h3>
				<p>Inclusion:
				<ul>
				<li>Clear non cluttered layouts</li>
				<li>Minimal versions</li>
				<li>Designed to meet your users needs</li>
				</ul>
				</p>
			</div>	
  
            <div class="boxButton">
                <a href="<?php echo esc_url( home_url( '/' ) );?>website-design/visual-designs/"> <button class="blue">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/createc.png" alt="Design">

             </div>
		</div>

		<div class="small-12 medium-6 large-6 columns">
			<div class="boxed designFOUR">
				<h2>Build and Development</h2>
				<h3>Moving the project from design to reality</h3>
				<p>Inclusion:
				<ul>
				<li>Clear project plan</li>
				<li>Define milestones and timescales</li>
				<li>Clear frameworks and coding</li>
				<li>Clear Roles and Responsiblities</li>
				</ul>
				</p>
			</div>	
  
            <div class="boxButton">
                <a href="<?php echo esc_url( home_url( '/' ) );?>website-design/build-development/"> <button class="blue">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/created.png" alt="Design">

            </div>
		</div>
</section>



		





<?php endwhile; ?>
<?php get_footer(); ?>