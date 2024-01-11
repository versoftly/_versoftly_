<?php
    
echo "<h2>Crea un Usuario con tu hash</h2>".form(
    "#",
    "POST",
    "introduce tu nick name creado previamente",
    "registrar",
    "
    
    <label>

        <input type='text' 
        placeholder='introduce tu hash creado previamente'
        name='hash' 
        id='hash'
        required >
    
    </label>

    <label>

        <input type='password' 
        placeholder='crea una password'
        name='text2' 
        id='text2'
        required >
        
    </label>
    "
);