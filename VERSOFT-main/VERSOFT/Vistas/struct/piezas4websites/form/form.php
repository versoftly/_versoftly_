<?php

function form (
    $archivoQuerecibeLaInformacionDelFormulario='http://tbpplab.local/',
    $metodoDeEnvio="post",
    $textoDentroDelCampoDeTexto='idea perse',
    $textoDelBoton='guardar',
    $mascampos=''
        ) {

    $formulario = "
    
        <div class='contenedor'>

            <form method='$metodoDeEnvio' action='$archivoQuerecibeLaInformacionDelFormulario'>
            
                <label>

                    <input type='text' 
                    placeholder='$textoDentroDelCampoDeTexto'
                    name='text1' 
                    id='text1'
                    required >
                
                </label>

                $mascampos

                <input type='submit' 
                value='$textoDelBoton' 
                class='button'>
            
            </form>
        
        </div>

    ";

    return $formulario;

}