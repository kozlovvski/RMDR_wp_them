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
<section class="recent-posts">

	<ul id="recent-posts" class="recent-posts__list">
		<?php
		$recent_posts = wp_get_recent_posts(array(
			'numberposts' => 3, // Number of recent posts thumbnails to display
			'post_status' => 'publish' // Show only the published posts
		));
		$language = wpm_get_language();
		foreach ($recent_posts as $post) : ?>
			<li class="recent-posts__item">
				<a href="<?php echo get_permalink($post['ID']) ?>">
					<?php echo get_the_post_thumbnail($post['ID'], 'post-thumbnail'); ?>
					<p><?php echo wpm_translate_string($post['post_title'], $language) ?></p>
				</a>
			</li>
		<?php endforeach;
		wp_reset_query(); ?>
	</ul>
</section>
<section class="contact">
	kontakt
</section>
<footer id="colophon" class="site-footer">
	<div class="site-info">
		<span class="copyright">&copy; 2019<script>
				new Date().getFullYear() > 2019 &&
					document.write("-" + new Date().getFullYear());
			</script>, RMD Research</span>
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