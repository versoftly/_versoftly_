<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pagina-dominios-adaptowebs/assets/propuesta.css">
    <link rel="stylesheet" href="../pagina-dominios-adaptowebs/p4ws/components/assets/nav.css">
    <title>Formulario de Propuesta</title>
</head>
<body>

    <header>
        <h1>Formulario de Propuesta</h1>
        <p>Por favor, proporcione la siguiente información para obtener una propuesta personalizada.</p>
    </header>

    <?php require_once "./p4ws/components/nav/nav.html"; ?>

    <form action="#" method="post" class="proposal-form">

        <div class="form-group">
            <label for="name">Nombre Completo:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="phone">Número de Teléfono:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="company">Nombre de la Empresa:</label>
            <input type="text" id="company" name="company">
        </div>

        <div class="form-group">
            <label for="project-details">Detalles del Proyecto:</label>
            <textarea id="project-details" name="project-details" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="submit-button">Enviar Propuesta</button>
        </div>

    </form>

    <footer>
        <p>&copy; 2024 Versoftly & Piezas4Websites. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
