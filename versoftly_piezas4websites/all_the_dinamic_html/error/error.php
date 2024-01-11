<?php if($errores != ''): ?>
    <div class="contenedor">
        <dialog open class="error">
            <h2>ERROR</h2>
            <?php echo $errores; ?>
        </dialog>
    </div>
<?php endif; ?>