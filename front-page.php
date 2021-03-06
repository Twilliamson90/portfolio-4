<?php
/* Template Name: Home Page Template */

get_header();
?>

	<main role="main" class="bg-light-gray">
		<!-- section -->
		<section class="no-margin">

            <!--<h1>--><?php // the_title(); ?><!--</h1>-->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

                <div class="bg-dark">
                    <div class="wrapper">
                        <?php edit_post_link(); ?>
                    </div>
                </div>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
