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
    <hr>
<?php endforeach; ?>