<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Base.css">
    <link rel="stylesheet" href="css/Normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <title>versoftly</title>
</head>
<body>

    <main class="contenedor home">
    
        <header class="contenedor">
            <h1>Home: utiliza la clase contenedor para que el contenido
                del articulo se centre.
            </h1>
        </header>
        
        <section class="contenedor">

        <nav class="contenedor">
            <a href="crear.php" class="boton">Crear</a>
        </nav>

        <?php foreach($articulos as $articulo): ?>
			<article class="contenedor">
                <h2 class="contenedor">
                    <?php echo $articulo['titulo']; ?>
                </h2>
                <nav class="contenedor">
                    <a href="delete.php?id=<?php echo $articulo['id'] ?>" class="boton">Eliminar</a>
                    <a href="actualizar.php?id=<?php echo $articulo['id'] ?>" class="boton">Actualizar</a>
                </nav>
                <h2><?php echo $articulo['usuario']; ?></h2>
                <div class="contenedor">
                    <img src="imgs/<?php echo $articulo['imagen']; ?>" alt="computer" width="50%">
                </div>
                <div class="contenedor">
                    <?php echo nl2br($articulo['contenido']); ?>
                </div>
                <p class="contenedor">
                    <?php echo $articulo['fecha']; ?>
                </p>
            </article>
            <hr style="width:100%;height:5px;margin: 20px auto;background-color:#000;">
		<?php endforeach; ?>

            <a href="cerrar.php" class="boton">Cerrar Sesion</a>
        </section>

        <footer class="contenedor">
            <p xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/">
                <a property="dct:title" rel="cc:attributionURL" href="https://www.versoftly.com">
                    versoftly
                </a> by <a rel="cc:attributionURL dct:creator" property="cc:attributionName" 
                href="https://www.facebook.com/profile.php?id=61555254051793">
                Ramiro Garcia Gonzalez</a> is licensed under 
                <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" 
                target="_blank" rel="license noopener noreferrer" style="display:inline-block;">
                CC BY-NC-ND 4.0<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" 
                src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1">
                <img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" 
                src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1">
                <img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" 
                src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1">
                <img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" 
                src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1">
                </a>
            </p>
        </footer>
        
    </main>

</body>
</html>