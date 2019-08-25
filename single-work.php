<?php get_header(); ?>

	<main role="main" class="bg-light-gray">
        <!-- section -->
        <section>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="wrapper">
                    <!-- post title -->
                    <h1 class="post-title">
                        <?php the_title(); ?>
                    </h1>
                    <!-- /post title -->

                    <span class="post-date"><?php the_time('F Y'); ?></span>

                    <!-- post thumbnail -->
                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                        <div class="post-hero-img text-center">
                            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                        </div>
                    <?php endif; ?>
                    <!-- /post thumbnail -->
                </div>

                <div class="wrapper wrapper-narrow">

                    <div class="post-content">
                        <?php the_content(); // Dynamic Content ?>
                    </div>

                    <div class="author-bio">
                        <img src="http://1.gravatar.com/avatar/405024c3874ab12afa8c292c33caf906?s=100&d=mm&r=g" alt="Travis Williamson" class="author-bio-img">
                        <div class="author-bio-body serif">
                            <p>I'm <strong>Travis Williamson</strong>&mdash;a developer, creator, blogger, designer, accessibility specalist and owner of Williamson Design.</p>
                            <a href="/about">more about me &rarr;</a>
                        </div>
                    </div>
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
