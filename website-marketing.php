<?php
/*
Template Name: Marketing
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<?php if (!is_front_page()) { ?>
<div class="breadcrumbs">
<?php jb_breadcrumbs(); ?>
</div><?php } ?>

<div class="marketingWrapper">
<section class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="mainBanner">
				<h1><span class="redText">Website Marketing</h1>
				<p>Command attention and create genuine leads with the latest promotional techniques </p>
			</div>
		</div>

		<div class="small-12 medium-12 large-12 columns">
			<div class="introduction">
				<?php the_content(); ?>
			</div>
		</div>
</section>		
</div>

<section class="row marketPAGE">



		<div class="small-12 medium-6 large-6 columns">
        	<img class="marketCENTER" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/centerDot.svg"/>
                <div class="boxed marketONE">
					<h2>Marketing Objectives</h2>
					<h3>Obtain recognition by reaching achievable and rewarding marketing goals</h3>
					<p>Included
					<ul>
					<li>Work with client to identify marketing goals and rationale for promotion</li>
					<li>Communicate ways to monitor and meet objectives</li>
					<li>How achievable goals are set and how they assist success</li>
					<li>Identify key KPIs</li>
					<li>What the benefits are to the clients</li>
					</ul>
					</p>
			</div>	
  
            <div class="boxButton">
                	<a href="<?php echo esc_url( home_url( '/' ) );?>website-marketing/marketing-objectives/"> <button class="green">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/marketa.png" alt="Marketing">
				</div>
		</div>


		<div class="small-12 medium-6 large-6 columns">
                <div class="boxed marketTWO">
					<h2>Strategy</h2>
					<h3>Achieve your marketing goals with a data-enhanced action plan</h3>
					<p>Included
					<ul>
					<li>Work out route for most effective strategy</li>
					<li>Identify the tools to use and how will be implemented</li> 
					<li>How strategy will be created and meet objectives</li>
					<li>What the benefits are to the clients</li>
					</ul>
					</p>
			</div>	
  
            <div class="boxButton">
                	<a href="<?php echo esc_url( home_url( '/' ) );?>website-marketing/strategy/"> <button class="blue">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/marketb.png" alt="Marketing">
                </div>
		</div>

</section>
<section class="row marketPAGE">

		<div class="small-12 medium-6 large-6 columns">
                <div class="boxed marketTHREE">
					<h2>Tactics</h2>
					<h3>Delve into a world of effective marketing tools, techniques and creativity that captivates audiences</h3>
					<p>Included
					<ul>
					<li>Digital toolbox</li>
					<li>Areas that can be utilised</li>
					<li>Categorise (Search Marketing / Content marketing / social media marketing / digital marketing)</li>
					<li>What the benefits are to the clients</li>
					</ul>
					</p>
			</div>	
  
            <div class="boxButton">
                	<a href="<?php echo esc_url( home_url( '/' ) );?>website-marketing/tactics/"> <button class="blue">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/marketc.png" alt="Marketing">
				</div>
		</div>


		<div class="small-12 medium-6 large-6 columns">
 			<div class="boxed marketFOUR">
				<h2>Audit and Analysis</h2>
				<h3>Match the needs of your customer with in-depth reviews and targeted improvements</h3>
				<p>Included
				<ul>
				<li>Review current promotional marketing activities</li>
				<li>SWOT analysis – identify online marketing weak points</li>
				<li>Rectify and strengthen site / management</li>
				<li>Choice of additional research and planning services for higher success rates</li>
				<li>What the benefits are to the clients</li>
				</ul>
				</p>
			</div>	
  
            <div class="boxButton">
                <a href="<?php echo esc_url( home_url( '/' ) );?>website-marketing/audit-analysis/"><button class="orange">Read more</button></a>
				<img class="iCon" src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/marketd.png" alt="Marketing">
			</div>
		</div>
</section>








<?php endwhile; ?>
<?php get_footer(); ?>