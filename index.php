<?= get_header() ?>

<div class="container">
    <?php while(have_posts()) : the_post(); ?>
    <h2><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
    <p><?= the_post_thumbnail() ?></p>
    <p><?= the_excerpt( ) ?></p>
    <?php endwhile; ?>
</div>

<?= get_footer() ?>
