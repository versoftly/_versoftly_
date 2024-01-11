<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="imgs/favicon/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="css/blog.css" as="style">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@200&family=Pixelify+Sans&display=swap" rel="stylesheet">
    <title>VERSOFT BLOG</title>
</head>
<body>

    <?php require_once "views/piezas/elheader/header.php"; ?>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"><a href="#">Titulo del Articulo</a></h2>
                <p class="fecha">1 de Enero de 2016</p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/imgs/linuxmatrix.jpg" alt="post image" width=100%>
                    </a>
                </div>
                <p class="extracto">
                    hjgjhghjgjgjhgjhgghjghgjghjgjhgjh
                    jhghjgjhghjgjhgjhgjhghjgjhgjhghjgjhgjhgjhghjgjhghg
                </p>
                <a href="#">read more ...</a>
            </article>
        </div>
    </div>

    <?php 
        require_once "views/piezas/lapaginacion/paginacion.php";
        require_once "views/piezas/elfooter/footer.php"; 
    ?>

</body>
</html>