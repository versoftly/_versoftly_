<?php
    
echo "<h2>Almacena informacion en la base de datos !</h2>".form(
    "#",
    "POST",
    "title",
    "guardar",
    "<label>      
        <textarea
            name='text2'
            id='text2'
            placeholder='information here'
            required
        ></textarea>
    </label>"
);