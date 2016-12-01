<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<div class="mapContainer">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1209.315858115885!2d-1.8050373841863856!3d52.68468797984563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe3dee78ba64feedf!2sCocoonfxmedia+Ltd!5e0!3m2!1sen!2sus!4v1480507122481" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="contentWrapper">

	<section class="row">




	</section><!--CLOSEROW-->

</div>
<div class="row">

	
<div class="small-12 medium-8 medium-push-2 large-8 large-push-2 columns">                   
		<div class="pageContent designONE">
	
    		
			

					
                    <h1><?php the_title(); ?></h1>
                    <h2>Call Us: <a class="contactEmail" itemprop="telephone" href="tel: +441543223074">+44 (0) 1543 223 074</a></h2>
                                        <div class="LandingLeft">
                                          
                                            <p>For more information please get in touch by using the contact form or giving us a call.</p>
                                             <h2>Address</h2>
                                                 <p><span>Cocoonfxmedia Ltd</span><br/>
                                <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">Unit 64, Britannia Way</span>,<br/>
				<span itemprop="addressLocality">Lichfield</span><br/>
				<span itemprop="postalCode">WS14 9UY.</span></p>
                           
                                 <p>Our office is sometimes a little hard to find. We're opposite Unit 56 and the 1st building next to the Royal Mail Carpark</p>
                                               
                                        </div>
                                        <div class="LandingRight">
                                 
					 <?php echo do_shortcode('[contact-form-7 id="3500" title="Main Contact"]');?>
                                        </div>
 	     
		</div>                        
		</div>  




</div>



</div>
<?php endwhile; ?>
<?php get_footer(); ?>