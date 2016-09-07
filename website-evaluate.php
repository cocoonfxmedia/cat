<?php
/*
Template Name: Measure & Evaluate
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div><?php } ?>

<div class="evaluateWrapper">
<section class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="mainBanner">
				<h1><span class="redText">Measure & Evaluate</h1>
				<p>Discover your return on investment with honest, straightforward progress reports</p>
			</div>
		</div>	

		<div class="small-12 medium-12 large-12 columns">
			<div class="introduction">
				<?php the_content(); ?>
			</div>
		</div>

</section>	<!--CLOSEROW-->	
</div>


<section class="row measurePAGE">

		<div class="small-12 medium-6 large-6 columns">  
            <div class="boxed measureONE">
				<h2>Meeting Objectives</h2>
				<h3>Stay in control with regular monitoring of progression </h3>
				<p>
				<ul>
				<li>Review current promotional activities</li>
				<li>SWOT analysis – identify online marketing weak points</li>
				<li>Rectify and strengthen site / management</li>
				<li>Choice of additional research and planning services for higher success rates</li>
				<li>What the benefits are to the clients</li>
				</ul>
				</p>
			</div>	
  
            <div class="boxButton">
                <a href="<?php echo esc_url( home_url( '/' ) );?>measure-and-evaluating-websites/achieving-objectives/"><button class="orange">Read more</button></a>
				<img class="iCon" src="http://www.cocoonfx.co.uk/catepillar/wp-content/uploads/evaluatea.png" alt="Evaluate">
			</div>
		</div>

		<div class="small-12 medium-6 large-6 columns">
            <div class="boxed measureTWO">
				<h2>KPIs and Targets</h2>
				<h3>Keep on track with systematic checks and goal achievement alerts</h3>
				<p>
				<ul>
				<li>Work with client to identify marketing goals and rationale for promotion</li>
				<li>Communicate ways to monitor and meet objectives</li>
				<li>How achievable goals are set and how they assist success</li>
				<li>What the benefits are to the clients</li>
				</ul>
				</p>
			</div>	
  
            <div class="boxButton">
                <a href="<?php echo esc_url( home_url( '/' ) );?>measure-and-evaluating-websites/kpis-targets/"> <button class="green">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/evaluateb.png" alt="Evaluate">

			</div>
		</div>

</section>
<section class="row measurePAGE">
		<div class="small-12 medium-6 large-6 columns">
            <div class="boxed measureTHREE">
				<h2>ROI Reporting</h2>
				<h3>Witness your successes and improvements first hand with understandable analytic reports</h3>
				<p>
				<ul>
				<li>Work out route for most cost effective strategy</li>
				<li>Identify the tools to use and how will be implemented</li> 
				<li>How strategy will be created and meet objectives</li>
				<li>What the benefits are to the clients</li>
				</ul>
				</p>
			</div>	
  
            <div class="boxButton">
                <a href="<?php echo esc_url( home_url( '/' ) );?>measure-and-evaluating-websites/roi-reporting/"> <button class="blue">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/evaluatec.png" alt="Evaluate">

        	</div>
		</div>

		<div class="small-12 medium-6 large-6 columns">
            <div class="boxed measureFOUR">
				<h2>Reviews</h2>
				<h3>ROI Reporting: Inform future marketing plans using insightful evaluation reviews</h3>
				<p>
				<ul>
				<li>Digital toolbox</li>
				<li>Areas that can be utilised</li>
				<li>Categorise (Search Marketing / Content marketing / social media marketing / digital marketing)</li>
				<li>What the benefits are to the clients</li>
				</ul>
				</p>
			</div>	
  
            <div class="boxButton">
                <a href="<?php echo esc_url( home_url( '/' ) );?>measure-and-evaluating-websites/reviews/"> <button class="blue">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/evaluated.png" alt="Evaluate">

                </div>
		</div>
</section>








<?php endwhile; ?>
<?php get_footer(); ?>