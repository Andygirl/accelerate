<?php
/**
 * The template for displaying a 404 page.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<body><center>
<img src="https://66.media.tumblr.com/c1223747a592dba1ee9255000bca3f89/tumblr_inline_mt6sa17Kn01qlr65v.jpg" >
<h2>I wish I could say "as you wish", but I can't</h2>
<p>It looks like you took a wrong turn and have entered the fire swamp.  You better go back before the ROUS's eat you!</p>

<img src="http://1.bp.blogspot.com/-Lnak_U0XRh0/UI600W-p7hI/AAAAAAAABjg/pVz5YyZpKp8/s1600/rous.png" margin-left: 20px;>

	</center></body>

<?php get_footer(); ?>