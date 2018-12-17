<?php
/**
 * The template for displaying the Case Studies Archive / Portfolio page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package air-light
 */

get_header();

get_template_part( 'template-parts/hero', get_post_type() ); ?>

<div id="content" class="content-area">
	<main role="main" id="main" class="site-main">

    <div class="container">
      <?php while ( have_posts() ) {
      	the_post(); 

			$services = get_field('services');
			$client = get_field('client');
			$site_link = get_field('site_link');
			$image_1 = get_field('image_1');
			$size = "full";

      ?>

				<article id="post-<?php the_ID(); ?> archive" <?php post_class(); ?>>
				  <header class="entry-header portfolio-block-1">
				    <a href="<?php the_permalink() ?>" target="_blank"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
				    <h3 class="client"><?php echo $client ?></h3>
				    <h4 class="services"><?php echo $services ?></h4>
				    <span><a href="<?php the_permalink() ?>" target="_blank">See more</a></span>
				  </header><!-- .entry-header -->

				  <div class="portfolio-block-2">
					<figure>
						<a href="<?php the_permalink() ?>" target="_blank"><?php echo wp_get_attachment_image($image_1, $size); ?></a>
					</figure> 
				  </div>
				
				</article><!-- #post-## -->

				<?php // If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
      } ?>
    </div><!-- .container -->
	
	<div class="divider"></div>

	<nav id="navigation" class="container">
		<div class="about-button">
			<h3>Get in touch with Rainwater now for a free conversation about your vision!</h3><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		</div>
	</nav>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
