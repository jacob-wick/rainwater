<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package air-light
 */

?>

	</div><!-- #content -->

	<footer role="contentinfo" id="colophon" class="site-footer">

		<nav class="social-media-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'social-media-menu', 'menu_class' => 'social-media-menu', 'link_before' => "<span class='screen-reader-text'>", 'link_after' => "</span>" ) ); ?>
		</nav>    

    <a href="#page" class="js-trigger top" data-mt-duration="300"><span class="screen-reader-text"><?php echo esc_html_e( 'Back to top', 'air-light' ); ?></span><?php include get_theme_file_path( '/svg/chevron-up.svg' ); ?></a>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
