<?php
/**
 * The template for displaying individual case studies
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
			$summary = get_field('summary');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3');
			$image_4 = get_field('image_4');
			$size = "full";
			$copy = get_field('contact_button_copy');

      ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				  <header class="entry-header">
				    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				    <h3 class="services"><?php echo $services ?></h3>
				    <h4 class="client"><?php echo $client ?></h4> 
				  </header><!-- .entry-header -->


				 <section class="summary">
				 	<p><?php echo $summary ?></p>
				 	<h4><a href="<?php echo $site_link ?>" target="_blank">Visit live site</a></h4> 
				 	<h4><a href="#detail">Read more...</a></h4>
				 </section>

				</article><!-- #post-## -->

				<?php // If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
      } ?>
    </div><!-- .container -->

	<div class="divider"></div>	

	<section id="detail" class="images-1">
		<div class="individual-images">
			<?php if($image_1){
				echo wp_get_attachment_image( $image_1, $size );
			} ?>
							
			<?php if($image_2){
				echo wp_get_attachment_image( $image_2, $size );
			} ?>	
		</div>
	</section>

	<div class="divider"></div>
	
	<section class="container">			  
		<div class="entry-content">
				   <?php the_content();

				      wp_link_pages( array(
				        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'air-light' ),
				        'after'  => '</div>',
				      ) );
				    ?>
		</div><!-- .entry-content -->
	</section>

	<div class="divider"></div>

	<section class="images-2">
		<div class="individual-images">
			<?php if($image_3){
				echo wp_get_attachment_image( $image_3, $size );
			} ?>
							
			<?php if($image_4){
				echo wp_get_attachment_image( $image_4, $size );
			} ?>	
		</div>
	</section>

	<div class="divider"></div>

	<nav id="navigation" class="container">
		<div class="about-button">
			<h3><?php echo $copy ?></h3><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		</div>
	</nav>

	<div class="divider"></div>

	<nav id="navigation" class="container">

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
