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

    <?php if($errores != ''): ?>
        <div class="contenedor">
            <dialog open class="error">
                <h2>ERROR</h2>
                <?php echo $errores; ?>
            </dialog>
        </div>
    <?php endif; ?>

    <img src="imgs/logo.gif" alt="logo" width="100%" class="fila logo">

    <main class="contenedor loginSignup">

        <div style="height:80rem;width:100%"></div>
    
        <header class="contenedor">
            <h1>Actualizar</h1>
        </header>
        
        <section class="contenedor">
            
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
                method="POST" class="form">

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