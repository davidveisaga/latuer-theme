<?php
/*
Template Name: Página Nivel Inicial
*/
?>

<?php get_header(); ?>

<div class="row">
  <div class="col-md-8"><?php if ( is_active_sidebar('2destacado') ) { ?>
			<?php dynamic_sidebar('2destacado'); ?>
			<?php } ?></div>
  <div class="col-md-4"><?php if ( is_active_sidebar('2destacadolat') ) { ?>
			<?php dynamic_sidebar('2destacadolat'); ?>
			<?php } ?></div>
</div>


<div class="row">
  <div class="col-md-8"><?php if ( is_active_sidebar('2experiencias') ) { ?>
			<?php dynamic_sidebar('2experiencias'); ?>
			<?php } ?></div>
  <div class="col-md-4"><?php if ( is_active_sidebar('2experienciaslat') ) { ?>
			<?php dynamic_sidebar('2experienciaslat'); ?>
			<?php } ?></div>

</div>

<div class="row">
  <div class="col-md-8"><?php if ( is_active_sidebar('2Desarrollo') ) { ?>
			<?php dynamic_sidebar('2desarrollo'); ?>
			<?php } ?></div>
  <div class="col-md-4"><?php if ( is_active_sidebar('2DesarrolloLat') ) { ?>
			<?php dynamic_sidebar('2desarrollolat'); ?>
			<?php } ?></div>
</div>

<?php get_footer(); ?>
