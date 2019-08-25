<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="blog-archive-item">

            <div class="">

                <?php
                if ( has_post_thumbnail() ) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                <?php endif; ?>

                <time class="blog-archive-time"><?= get_the_date( 'M Y' ); ?></time>

                <!-- post title -->
                <h2 class="blog-archive-heading">
                    <a href="<?php the_permalink(); ?>" class="blog-archive-link"><?php the_title(); ?></a>
                </h2>
                <!-- /post title -->

                <div class="blog-archive-read-more">&#8618; learn more</div>

                <?php // html5wp_excerpt('html5wp_index'); ?>

                <?php // edit_post_link(); ?>
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
