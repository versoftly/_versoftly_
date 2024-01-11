<?php
    
echo "<h2>Crea un Usuario</h2>".form(
    "#",
    "POST",
    "Nombre",
    "crear hash",
    "
    <label>

        <input type='number' 
        placeholder='edad'
        name='text2' 
        id='text2'
        required >
    
    </label>
    <label>

        <input type='text' 
        placeholder='Fecha de nacimiento'
        name='fecha' 
        id='fecha'
        required >
    
    </label>
    <label>

        <input type='text' 
        placeholder='Crea un Nick-Name'
        name='chars' 
        id='chars'
        required >
    
    </label>
    "
);