<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rmdr_wp_theme
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<span class="copyright">&copy; 2019
			<script>
				new Date().getFullYear() > 2019 &&
					document.write("-" + new Date().getFullYear());
			</script>
			, RMD Research</span>
		<nav id="footer-navigation" class="navigation navigation--footer">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'rmdr_wp_theme'); ?></button>
			<?php
			wp_nav_menu(array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'footer-menu',
			));
			?>
		</nav>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>