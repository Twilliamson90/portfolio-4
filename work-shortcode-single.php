<div class="work-item">
    <div class="work-item-media">
        <?php if ( has_post_thumbnail() ) {
            echo the_post_thumbnail();
        } ?>
    </div>
    <div class="work-item-content">
        <h2 class="work-item-title"><a href="<?= esc_url(get_permalink()) ?>"><?= get_the_title() ?></a></h2>
        <p class="work-item-description"><?= get_the_excerpt() ?></p>
    </div>
</div>