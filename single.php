<?php get_header(); ?>

	<main role="main">
        <!-- section -->
        <section>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="wrapper">
                    <!-- post title -->
                    <h1 class="text-center">
                        <?php the_title(); ?>
                    </h1>
                    <!-- /post title -->

                    <!-- post thumbnail -->
                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                        <div class="post-hero-img text-center">
                            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                        </div>
                    <?php endif; ?>
                    <!-- /post thumbnail -->
                </div>

                <div class="post-content">
                    <?php the_content(); // Dynamic Content ?>
                </div>

                <div class="wrapper wrapper-narrow">
                    <!-- post details -->
                    <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
                    <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
                    <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
                    <!-- /post details -->
                </div>


                <div class="wrapper wrapper-narrow">
                    <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

                    <?php comments_template(); ?>
                </div>

            </article>
            <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

            </article>
            <!-- /article -->

        <?php endif; ?>

        </section>
        <!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
