<?php
/**
 * Template Name: ACF Frontend
 */
 ?>
<?php acf_form_head(); ?>
<?php get_header(); ?>

	<div id="primary">
		<div id="content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				
				
				<?php the_content(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>