<?php get_header(); ?>

	<main role="main" class="bg-light-gray">
		<!-- section -->
		<section>
            <div class="wrapper wrapper-narrow">

	    		<h1 class="text-center"><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>

            </div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
