<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
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
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="featured-work">
    <div class="site-content">
      <h4 class="featured-center">Featured Work</h4>

  <ul class="homepage-featured-work">
      <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
        <?php while ( have_posts() ) : the_post();
          $image_1 = get_field("image_1");
          $size = "medium";
      ?>
      
        <li class="individual-featured-work">
          <figure>
              <?php echo wp_get_attachment_image($image_1, $size); ?>
          </figure>

          <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        </li>
      
       <?php endwhile; ?> 
    <?php wp_reset_query(); ?>
  </ul>

    </div>
</section>

<section class="recent-posts">
 <div class="site-content">
  <div class="blog-post">
   <h4>From the Blog</h4>
    <?php query_posts('posts_per_page=1'); ?>
     <?php while ( have_posts() ) : the_post(); ?>
       <h2><?php the_title(); ?></h2>
       <?php the_excerpt(); ?> 
       <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
     <?php endwhile; ?> 
    <?php wp_reset_query(); ?>
   
   </div>


  
   <!-- Twitter module -->

<div class="twitter-widget">
   <h3>Recent Tweet</h3>
    <h2>@Accelerate</h2>
<div class ="twitter-follow-container">
  <a class="follow-us-link" href="https://twitter.com/">Follow us <span>&rsaquo;</span></a>      
</div>

 

<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'sidebar-2' ); ?>
 

 </div>



</div>

</div>
<?php endif; ?>


</section>


<?php get_footer(); ?>

