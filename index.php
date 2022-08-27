<!-- panggil header kita -->
<?= get_header() ?>

<div class="container">
    <!-- lakukan perulangan jika memiliki post -->
    <?php while(have_posts()) : the_post(); ?>
    <!-- tampilkan judul dari postingan -->
    <h2><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
    <!-- tampilkan -->
    <p><?= the_post_thumbnail() ?></p>
    <!-- the_exerpt() function yang berguna untuk menampilkan beberapa teks dalam post -->
    <p><?= the_excerpt( ) ?></p>
    <?php endwhile; ?>
</div>
<!-- memanggil footer site -->
<?= get_footer() ?>
