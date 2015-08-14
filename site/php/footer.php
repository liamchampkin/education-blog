<?php
/**
 * The template for displaying the footer.
 *
 * @package Motif
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer">

		<?php if ( has_nav_menu( 'secondary' ) ) : ?>
		<div id="footer-navbar" class="footer-navbar">
			<nav id="secondary-navigation" class="subordinate-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => false, 'fallback_cb' => false, 'depth' => 1 ) ); ?>
			</nav><!-- #secondary-navigation -->
		</div><!-- #footer-navbar -->
		<?php endif; ?>

		<div class="site-info"  role="contentinfo">
		<?php echo date("Y")?> <a href="http://oup.com">Oxford University Press</a>
<!-- 			<span class="sep"> | </span> -->
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
