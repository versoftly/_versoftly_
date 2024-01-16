<div class="contact-form">
    <h2>Formulario de Consulta Personalizada</h2>
    <form action="procesar_formulario" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono">

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

        <button type="submit" class="cta-button">¡Obtener Consulta Gratuita!</button>
    </form>
</div>

