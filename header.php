
<?php
?><!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script>(function(){document.documentElement.className='js'})();</script>

<link href='https://fonts.googleapis.com/css?family=Lato:400,200,100' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,800,600,200,100' rel='stylesheet' type='text/css'>

  
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	
<header>

<div id="colourBar">
  <div class="cfx-col1"></div>
  <div class="cfx-col2"></div>
  <div class="cfx-col3"></div>
  <div class="cfx-col4"></div>
  <div class="cfx-col5"></div>
  <div class="cfx-col6"></div>
  <div class="cfx-col7"></div>
  <div class="cfx-col8"></div>
  <div class="cfx-col9"></div>
  <div class="cfx-col10"></div>
  <div class="cfx-col11"></div>
  <div class="cfx-col12"></div>
</div>	

				<div class="logo">
     			<a href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/cfxLogo.svg"/></a>
     			

</div>


				<div class="number">
                <div class="telephoneQ">The quickest way to find something out!</div>
                <div class="telepnhone">01543 223074</div>
				</div>



				<!-- <nav class="mainnav">				
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav> -->


	
</header>
<!-- <div class="arrow bounce">

</div> -->
<div id="casePop">
        <h3 class="rotate">Case Studies</h3>
        <div id="casePop_inner">
            <div id="casePop_inner2">

            <?php $my_query = new WP_Query('category_name=case-studies&posts_per_page=5');?>
			<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>

<div class="csSep">
            <?php $image = get_field('cs_logo');

if( !empty($image) ): ?>
			<img class="circleImage" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
			<h4><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title_attribute(); ?></a></h4>
			<?php the_excerpt(); ?>
</div>
			<?php endwhile;?>
       		</div>

        </div>
</div>


<div id="slideout">
		<h3 class="rotate">Contact Us</h3>
  		<div id="slideout_inner">
			<?php echo do_shortcode('[contact-form-7 id="3500" title="Contact form 1"]');?>
		</div>
</div>


