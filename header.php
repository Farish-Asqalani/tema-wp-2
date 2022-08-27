<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bloginfo() berguna untuk memberitahu info mengenai blog dengan paramter title -->
    <!-- yang akan menampilkan title dari wordpress -->
    <title><?= bloginfo("title"); ?></title>
    <!-- gunakan get_bloginf() functions untuk bisa mengakses file css/img/js -->
    <!-- dengan paramter stylesheet_directory -->
    <link rel="stylesheet" href="<?= get_bloginfo("stylesheet_directory") ?> /asset/css/style.css">
    <!-- wp_head() functions berguna untuk memberi tanda kalau ini adalah header -->
    <?= wp_head(); ?>
</head>
<body>
    <header class="navbar">
        <h1><a href=""><?= bloginfo("title") ?></a></h1>
        <!-- wp_nav_menu() function adalah function yang berguna untuk memanggil nav menu dari wordpress untuk ditampilkan -->
        <a href=""><?= wp_nav_menu() ?></a>
    </header>
