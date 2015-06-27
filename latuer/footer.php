<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package latuer
 */
?>
<!-- <HR> <!-- linea superior del footer, se la agregue yo, y lo saque, porque generar un espacio en blanco muy ancho-->

	</div><!-- #content -->


	<footer id="colophon" class="site-footer" role="contentinfo">

<!-- Inicio widget q agregue para poner los datos de pie de pagina-->
	<div class="row">
  		<div class="col-md-12"><?php if ( is_active_sidebar('piedepagina') ) { ?>
			<?php dynamic_sidebar('piedepagina'); ?>
			<?php } ?></div>
	</div>
<!-- fin widget q agregue para poner los datos de pie de pagina-->

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'latuer' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'latuer' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'latuer' ), 'latuer', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
