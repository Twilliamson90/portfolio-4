<?php
/* Template Name: Blog Template */

get_header();
?>

<main role="main" class="bg-light-gray">
	<!-- section -->
	<section>
		<div class="wrapper wrapper-medium">

			<h1 class="text-center"><?php _e( 'Blog', 'html5blank' ); ?></h1>

			<div class="blog-archive">
				<?php get_template_part('home-loop'); ?>
			</div>

			<?php get_template_part('pagination'); ?>

		</div>
	</section>
	<!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
