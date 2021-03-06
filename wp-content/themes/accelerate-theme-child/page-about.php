<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays the about page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>



<section class="home-page">
  <div class = 'site-content'>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class='about-hero'>
        <div class='hero-text'>
        <h2><?php the_content(); ?></h2>
      </div>
    </div>
</section>
    <?php endwhile; ?>

   
     
      


<!-- Custom query to get fields for services section -->
            <div class = 'services-ours'>
              <h4>Our Services</h4>
              <p>We take pride in our clients and the content we create for them.<br>
              Here’s a brief overview of our offered services.</p>
            </div>
          
      <div class="services">      
               <?php query_posts('post_type=services&order=ASC'); ?>
    <?php while ( have_posts() ) : the_post();
            $service_title = get_field('service_title');
            $service_text = get_field('service_text');
            $service_image = get_field('service_image');
            $size = "full";
            $service_align = " ";
            $service_align_radio_button = get_field('service_align');
            $service_align_radio_button == "Left" ? $service_align = "alignleft" : $service_align = "alignright";
         ?>
       <div class="service_text_image">
          <div class="service_container <?php echo $service_align; ?>">
            <?php if($service_image) { ?>
                 <?php echo wp_get_attachment_image( $service_image, $size ); ?>
              <?php } ?>
          </div>
    

 
      <div class="services_text <?php echo $service_align; ?>">
        <h2><?php echo $service_title; ?></h2>
        <p><?php echo $service_text; ?></p>
     
    </div>  
  </div>     
 </div>
      <?php endwhile; // end of the loop. ?>
      <?php wp_reset_query(); ?>

  
  
  <!-- Contact us section -->

  <div class="contact_us">
    <h3>Interested in working with us?</h3>
    <a href="accelerate/contact-us">Contact Us</a>
  </div>



<?php get_footer(); ?>