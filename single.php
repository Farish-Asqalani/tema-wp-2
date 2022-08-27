<!-- memanggil header site -->
<?= get_header(); ?>

<div class="single">
    <div class="card">
        <!-- title dari post -->
        <h1><?= the_title(); ?></h1>
        <!-- content dari post -->
        <p><?= the_content(); ?></p>
    </div>
</div>
<!-- memanggil footer site -->
<?= get_footer(); ?>