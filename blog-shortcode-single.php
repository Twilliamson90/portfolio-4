<article class="blog-item">
    <div class="blog-item-media">
        <?php if ( has_post_thumbnail() ) {
            echo the_post_thumbnail();
        } ?>
    </div>
    <div class="blog-item-content">
        <time datetime="<?= get_the_date( 'Y-m-d' ); ?>"><?= get_the_date( 'M j, Y' ); ?></time>
        <h2 class="blog-item-title"><a href="<?= esc_url(get_permalink()) ?>" class="blog-item-link"><?= get_the_title() ?></a></h2>
        <p class="work-item-description"><?= get_the_excerpt() ?></p>
    </div>
</article>