<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">

    <p>
        Titulo<br>
        <input type="text" name="titulo" 
        placeholder="Titulo" width="90%">
    </p>

    <p>
        Contenido
    </p>
    
    <textarea name="contenido" placeholder="Contenido"></textarea>

    <input type="submit" value="Crear" class="boton">

</form>