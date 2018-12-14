<?php
/**
 * The template for displaying the Services Page
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

      		$service_headline_1 = get_field( 'service_headline_1' );
      		$service_1 = get_field( 'service_1' );
      		$service_headline_2 = get_field( 'service_headline_2' );
      		$service_2 = get_field( 'service_2' );
      		$service_headline_3 = get_field( 'service_headline_3' );
      		$service_3 = get_field( 'service_3' );

      ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				  <header class="entry-header">
				    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				  </header><!-- .entry-header -->

				  <div class="entry-content">
				    <?php the_content();

				      wp_link_pages( array(
				        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'air-light' ),
				        'after'  => '</div>',
				      ) );
				    ?>
				  </div><!-- .entry-content -->

				  <?php if ( get_edit_post_link() ) { ?>
				    <footer class="entry-footer">
				      <?php edit_post_link(
				      	sprintf(
			            /* translators: %s: Name of current post. Only visible to screen readers */
			            wp_kses(
 										__( 'Edit <span class="screen-reader-text">%s</span>', 'air-light' ),
 										array(
 											'span' => array(
 												'class' => array(),
 											),
 										)
 									),
			            get_the_title()
					      ),
					      '<span class="edit-link">',
					      '</span>'
				      ); ?>
				    </footer><!-- .entry-footer -->
				  <?php } ?>
				</article><!-- #post-## -->

				<?php // If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
      } ?>
    </div><!-- .container -->

	<div id="services" class="block block-page">
		<div class="shade"></div>
	</div>

	<div class="container">
		<section class="page-services">
			<div class="individual-service">
				<h3><?php echo $service_headline_1 ?></h3>
				<p><?php echo $service_1 ?></p>
			</div>
		
			<div class="individual-service">
				<h3><?php echo $service_headline_2 ?></h3>
				<p><?php echo $service_2 ?></p>
			</div>
		
			<div class="individual-service">
				<h3><?php echo $service_headline_3 ?></h3>
				<p><?php echo $service_3 ?></p>
			</div>
		</section>
	</div>

	<div class="divider"></div>

	<nav id="navigation" class="container">
		<div class="about-button">
			<h3>Interested in working with us?</h3><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		</div>
	</nav>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
