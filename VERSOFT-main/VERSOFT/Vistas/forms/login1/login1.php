<?php
    
echo "<h2>Inicia Sesion</h2>".form(
    "#",
    "POST",
    "Nick name",
    "Iniciar Sesion",
    "
    <label>

        <input type='password' 
        placeholder='password'
        name='text2' 
        id='text2'
        required >
        
    </label>

    <label>

        <input type='text' 
        placeholder='hash'
        name='hash' 
        id='hash'
        required >
    
    </label>
    "
);