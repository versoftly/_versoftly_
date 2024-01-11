<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="POST" class="form">

    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <p>
        Titulo<br>
        <input type="text" name="titulo" 
        placeholder="Titulo" width="90%" value="<?php echo $post['titulo']; ?>">
    </p>

    <p>
        Contenido
    </p>
    <textarea name="contenido" placeholder="Contenido"><?php echo $post['contenido']; ?></textarea>

    <input type="submit" value="Actualizar" class="boton">

</form>