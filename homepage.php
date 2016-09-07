<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<div class="introWrapper">
<section class="row">


		<div class="small-12 medium-12 large-12 columns">
			<div class="mainBanner">
				<h1 class="homeHeader"><span class="redText">Website Design & Management</h1>
				<p>Measurable Marketing Solutions the SMART Way to do Marketing</p>
			</div>
		</div>


		<div class="small-12 medium-2 large-2 columns">
			<div class="faceImage">
			<img class="circleImage" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/james.png" alt="James Blackman - Managing Director">
			</div>
		</div>
		<div class="small-12 medium-8 medium-pull-2 large-8 large-pull-2 columns">
			<div class="introduction">
				<?php the_content(); ?>
			</div>
		</div>

</section>
</div>


<section class="row homePAGE">
		<div class="small-12 medium-6 large-6 columns">
			<div class="boxed homeONE">
				<h2>1. PLANNING YOUR WEBSITE</h2>
				<h3>Set your route to success with a dedicated planning advisor</h3>
				
				<ul>
				<li><strong>Initial Consultation:</strong> Reveal your online business potential with a free consultation</li>
				<li><strong>Business Objectives and Goals:</strong> Identify goals that rapidly boost business</li>
				<li><strong>Competitors:</strong> Discover your edge with competitor investigations</li>	
				<li><strong>Audience:</strong> Reach and impact on your most profitable market</li>
				</ul>
			</div>	
  
            <div class="boxButton">
                <a href="<?php echo esc_url( home_url( '/' ) );?>planning-a-website/"><button class="orange">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/plana.png" alt="Planning">
			</div>
		</div>

		<div class="small-12 medium-6 large-6 columns">
            <div class="boxed homeTWO">
				<h2>2. Creating</h2>
				<h3>Become the online authority for your business with a must-visit influential website developed with the latest technology</h3>

				<ul>
				<li><strong>Design Brief:</strong> </li>
				<li><strong>Functionality:</strong> </li>
				<li><strong>Visual Designs:</strong></li>	
				<li><strong>Build and Development:</strong></li>
				</ul>
			</div>	
  
            <div class="boxButton">
                <a href="<?php echo esc_url( home_url( '/' ) );?>website-design/"> <button class="green">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/createa.png" alt="Create">
			</div>
		</div>
</section>

	



<section class="row homePAGE">

		<div class="small-12 medium-6 large-6 columns">
            <div class="boxed homeTHREE">
				<h2>3. Marketing</h2>
				<h3>Command attention and create genuine leads with the latest promotional techniques </h3>

				<ul>
				<li><strong>Audit and Analysis:</strong> Adapt existing websites to match the needs of your customer with in-depth reviews and targeted improvements</li>
				<li><strong>Objectives:</strong> Obtain recognition by reaching achievable and rewarding marketing goals</li>
				<li><strong>Strategy:</strong> Achieve your marketing goals with a data-enhanced action plan</li>	
				<li><strong>Tactics:</strong> Delve into a world of effective marketing tools, techniques and creativity that captivates audiences</li>
				</ul>
			</div>	
  
            <div class="boxButton">
                <a href="<?php echo esc_url( home_url( '/' ) );?>website-marketing/"> <button class="blue">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/marketa.png" alt="Marketing">
            </div>
		</div>

		<div class="small-12 medium-6 large-6 columns">
            <div class="boxed homeFOUR">
				<h2>3. EVALUATING PROGRESS</h2>
				<h3>Discover your return on investment with honest, straightforward progress reports</h3>

				<ul>
				<li><strong>Meeting Objectives:</strong> Stay in control with regular monitoring of progression</li>
				<li><strong>KPI’s / Targets:</strong> Keep on track with systematic checks and goal achievement alerts </li>
				<li><strong>ROI Reporting:</strong> Witness your successes and improvements first hand with understandable analytic reports</li>	
				<li><strong>Review:</strong> Inform future marketing plans using insightful evaluation reviews </li>
				</ul>
			</div>	
  
            <div class="boxButton">
                <a href="<?php echo esc_url( home_url( '/' ) );?>measure-and-evaluating-websites/"> <button class="blue">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/evaluatea.png" alt="Evaluate">
               </div>
		</div>

</section>







<?php endwhile; ?>
<?php get_footer(); ?>