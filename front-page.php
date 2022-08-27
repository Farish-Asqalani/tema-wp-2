<!-- memanggil footer site -->
<?= get_header() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= bloginfo("title") ?></title>
    <link rel="stylesheet" href="<?= get_bloginfo("stylesheet_directory")?> /asset/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="utama">
    <div class="isi">
        <h1>Selamat Datang</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, atque ut id debitis maxime totam expedita eaque asperiores corrupti culpa velit. Natus quis, minus perferendis commodi iste est dolore veritatis!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum pariatur autem error. Magni adipisci iure corrupti nobis excepturi tenetur aspernatur, itaque consectetur voluptatibus odio nam hic qui expedita unde fugit.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, consequatur eaque? Eum quia, inventore voluptas magni quaerat perferendis aliquid explicabo nostrum, facere qui suscipit? Laudantium dicta tenetur eveniet voluptate cupiditate.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure consectetur exercitationem consequatur minus amet dolor incidunt voluptas autem voluptatibus excepturi officiis ipsum nostrum, vel iusto nisi. Repudiandae optio illum sed?</p>
    </div>
    <div class="sosmed">
        <!-- <ul>
            <li><i class="bi bi-instagram"></i> Instagram</li>
            <li><i class="bi bi-facebook"></i> facebook</li>
        </ul> -->
    </div>
    <div class="kategori">
        <!-- memanggil sidebar -->
        <h2><?= wp_list_categories() ?></h2>
    </div>
    </div>
</body>
</html>

<!-- memanggil footer side -->
<?= get_footer() ?>
