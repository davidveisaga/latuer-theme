<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package latuer
 */

get_header(); ?>



<div class="row">
  <div class="col-md-8"><?php if ( is_active_sidebar('1destacado') ) { ?>
			<?php dynamic_sidebar('1destacado'); ?>
			<?php } ?></div>
  <div class="col-md-4"><?php if ( is_active_sidebar('1destacadolat') ) { ?>
			<?php dynamic_sidebar('1destacadolat'); ?>
			<?php } ?></div>
</div>

<div class="row">
  <div class="col-md-8"><?php if ( is_active_sidebar('1instituciones') ) { ?>
			<?php dynamic_sidebar('1instituciones'); ?>
			<?php } ?></div>
  <div class="col-md-4"><?php if ( is_active_sidebar('1institucioneslat') ) { ?>
			<?php dynamic_sidebar('1institucioneslat'); ?>
			<?php } ?></div>
</div>

<div class="row">
  <div class="col-md-8"><?php if ( is_active_sidebar('1congresos') ) { ?>
			<?php dynamic_sidebar('1congresos'); ?>
			<?php } ?></div>
  <div class="col-md-4"><?php if ( is_active_sidebar('1congresoslat') ) { ?>
			<?php dynamic_sidebar('1congresoslat'); ?>
			<?php } ?></div>
</div>

<div class="row">
  <div class="col-md-12"><?php if ( is_active_sidebar('1escuelasgov') ) { ?>
			<?php dynamic_sidebar('1escuelasgov'); ?>
			<?php } ?></div>
</div>

<div class="row">
  <div class="col-md-8"><?php if ( is_active_sidebar('1logos') ) { ?>
			<?php dynamic_sidebar('1logos'); ?>
			<?php } ?></div>
  <div class="col-md-4"><?php if ( is_active_sidebar('1logoslat') ) { ?>
			<?php dynamic_sidebar('1logoslat'); ?>
			<?php } ?></div>
</div>




	<div id="primary" class="content-area">
		
<!-- (le agrege esta linea para sacar el loop)

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main  -->


	</div> <!-- #primary -->

<!-- <?php get_sidebar(); ?> <!-- comento esta linea para que no aparezca sidebar-->

<?php get_footer(); ?>
