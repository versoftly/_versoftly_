<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">

    <p>
        Usuario<br>
        <input type="text" name="usuario" 
        placeholder="User Name">
    </p>

    <p>
        Contrase&ntilde;a<br>
        <input type="password" name="password" 
        placeholder="password">
    </p>

    <input type="submit" value="Entrar" class="boton">

    <?php require_once "botonfile"; ?>

</form>