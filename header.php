<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= bloginfo("title"); ?></title>
    <link rel="stylesheet" href="<?= get_bloginfo("stylesheet_directory") ?> /asset/css/style.css">
    <?= wp_head(); ?>
</head>
<body>
    <header class="navbar">
        <h1><a href=""><?= bloginfo("title") ?></a></h1>
        <a href=""><?= wp_nav_menu() ?></a>
    </header>
