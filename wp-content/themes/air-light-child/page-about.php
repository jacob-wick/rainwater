<?php
/**
 * The template for displaying all pages
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

      	$block_3 = get_field( 'why_wordpress' );
      	$block_4 = get_field( 'creative_research' );
      	$block_5 = get_field( 'bio' );
      	$image_1 = get_field( 'image_1' );
      	$image_2 = get_field( 'image_2' );
      	$size = "full";

      ?>


				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
				  <header class="entry-header">
				    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				  </header><!-- .entry-header -->

				  <div class="entry-content">
				    <section class="the-content"><?php the_content();

				      wp_link_pages( array(
				        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'air-light' ),
				        'after'  => '</div>',
				      ) );
				    ?></section>

				  	<div class="divider"></div>

				  	<section class="why-wp">
				  		<div class="left-content">
				  			<p><?php echo $block_3 ?></p>
				  		</div>
				  		<figure class="right-content">
				  			<?php echo wp_get_attachment_image($image_1, $size); ?>
				  		</figure>
					</section>

				  	<div id="creative-research" class="divider"></div>

					<section class="creative-research">
				  		<p><?php echo $block_4 ?></p>
					</section>

				  	<div class="divider"></div>

					<section class="bio">
				  		<div class="left-content">
							<?php echo wp_get_attachment_image($image_2, $size); ?>
						</div>
						<figure class="right-content">
				  			<p><?php echo $block_5 ?></p>
						</figure>
					</section>

				  	<div class="divider"></div>

				<nav id="navigation" class="container">
					<div class="about-button">
						<h3>Interested in working with us?</h3><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
					</div>
				</nav>

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

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
