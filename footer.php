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
	<h2>
		<?php
		$language = wpm_get_language();
		if ($language == "pl") {
			echo "Nasze najnowsze artykuły:";
		} else {
			echo "Latest news from us:";
		}
		?>
	</h2>
	<ul id="recent-posts" class="recent-posts__list">
		<?php
		$recent_posts = wp_get_recent_posts(array(
			'numberposts' => 3, // Number of recent posts thumbnails to display
			'post_status' => 'publish' // Show only the published posts
		));
		foreach ($recent_posts as $post) : ?>
			<li class="recent-posts__item">
				<?php
					$content = get_post_field('post_content', $post['ID']);
					$content = strip_tags($content);
					?>
				<a class="recent-posts__link" href="<?php echo get_permalink($post['ID']) ?>">
					<?php echo get_the_post_thumbnail($post['ID'], 'post-thumbnail'); ?>
				</a>
				<h3>
					<a class="recent-posts__link" href="<?php echo get_permalink($post['ID']) ?>">
						<?php echo wpm_translate_string($post['post_title'], $language) ?>
					</a>
				</h3>
				<p class="recent-posts__date"><?php echo get_the_date('j M, Y', $post['ID']) ?></p>
				<p class="recent-posts__description">
					<?php
						if (strlen($content) > 150) {
							echo substr($content, 0, 150) . " (...)";
						} else {
							echo $content;
						}
						?>
				</p>
				<a class="recent-posts__button" href="<?php echo get_permalink($post['ID']) ?>">
					<?php
						if ($language == "pl") {
							echo "Czytaj więcej";
						} else {
							echo "Read more";
						}
						?>
				</a>
			</li>
		<?php endforeach;
		wp_reset_query(); ?>
	</ul>
</section>
<section class="contact">
	<div class="contact__wrapper">
		<?php the_custom_logo(); ?>
		<div>
			<p><strong>Adres: </strong><br>ul. Złota 61 lok. 100 <br>00-819 Warszawa</p>
			<p><strong>NIP: </strong>527 27 07 058</p>
			<p><strong>KRS: </strong>0000 487139</p>
		</div>
		<div>
			<p><strong>Telefon: </strong><br><a href="tel:+48608429781">+48 608 429 781</a></p>
			<p><strong>E-mail: </strong><br><a href="mailto:biuro@retailmarketdata.pl">biuro@retailmarketdata.pl</a></p>
		</div>
	</div>
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