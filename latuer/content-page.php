<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package latuer
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

<!--(con esta linea saque un espacio en blanco que queda entre el menu y el footer en las paginas de los menus)
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'latuer' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

<!-- (con esta linea saque un enlace con edit que aparece en las paginas que generé para los menus: ej: aprendizajes digitales)
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'latuer' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
