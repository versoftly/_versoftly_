<?php

json_encode([],http_response_code(404));

require_once("VERSOFT/Vistas/struct/db/data/data.php");
require_once ("VERSOFT/Vistas/struct/db/conexion/conexion.php");
require_once("VERSOFT/Vistas/struct/piezas4websites/form/form.php");




//////////////////////////////FILTRADO DE LA URL//////////////////////

    

    if (
        count(array_filter(explode("/",$_SERVER['REQUEST_URI']))) == 0
    ) {

   

/////////////////////////////////////////////////////////////////////





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@200&family=Pixelify+Sans&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="VERSOFT/Vistas/struct/html/css/estilos.css" as="style">
    <link rel="stylesheet" href="VERSOFT/Vistas/struct/html/css/estilos.css">
    <link rel="preload" href="VERSOFT/Vistas/temas/freelancer/freelancer.css" as="tema">
    <link rel="stylesheet" href="VERSOFT/Vistas/temas/freelancer/freelancer.css">
    <link rel="icon" type="image/x-icon" href="VERSOFT/Vistas/struct/html/imgs/favicon/favicon.ico">
    <title>127.0.0.1</title>
</head>
<body>
    <main>

        <header>
            <div>
                <?php
                    if(conectar($conexion)) {
                        $online = true;
                        $estatus = "Online - conectado a la base de datos";
                    } else {
                        $online = false;
                        $estatus = "Offline - sin conexion con la base de datos";
                    }
                ?>
                <b>estatus: </b><i><?php echo $estatus; ?>
                <?php if ($online) {?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wifi" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 18l.01 0"></path>
                        <path d="M9.172 15.172a4 4 0 0 1 5.656 0"></path>
                        <path d="M6.343 12.343a8 8 0 0 1 11.314 0"></path>
                        <path d="M3.515 9.515c4.686 -4.687 12.284 -4.687 17 0"></path>
                    </svg>
                <?php } else { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wifi-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 18l.01 0"></path>
                        <path d="M9.172 15.172a4 4 0 0 1 5.656 0"></path>
                        <path d="M6.343 12.343a7.963 7.963 0 0 1 3.864 -2.14m4.163 .155a7.965 7.965 0 0 1 3.287 2"></path>
                        <path d="M3.515 9.515a12 12 0 0 1 3.544 -2.455m3.101 -.92a12 12 0 0 1 10.325 3.374"></path>
                        <path d="M3 3l18 18"></path>
                    </svg>
                <?php } ?>
                </i>
            </div>
            <h3><i>No hay peticiones todav&iacute;a.<i>

            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-error-404" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M3 7v4a1 1 0 0 0 1 1h3"></path>
            <path d="M7 7v10"></path>
            <path d="M10 8v8a1 1 0 0 0 1 1h2a1 1 0 0 0 1 -1v-8a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1z"></path>
            <path d="M17 7v4a1 1 0 0 0 1 1h3"></path>
            <path d="M21 7v10"></path>
            </svg>

            </h3>
            <h1>Mostly 
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-type-php" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
            <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
            <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
            <path d="M17 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
            <path d="M11 21v-6" />
            <path d="M14 15v6" />
            <path d="M11 18h3" />
            </svg>    
            Software
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-powershell" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M4.887 20h11.868c.893 0 1.664 -.665 1.847 -1.592l2.358 -12c.212 -1.081 -.442 -2.14 -1.462 -2.366a1.784 1.784 0 0 0 -.385 -.042h-11.868c-.893 0 -1.664 .665 -1.847 1.592l-2.358 12c-.212 1.081 .442 2.14 1.462 2.366c.127 .028 .256 .042 .385 .042z" />
            <path d="M9 8l4 4l-6 4" />
            <path d="M12 16h3" />
            </svg>
            </h1>
            <h3>

                <img src="VERSOFT/Vistas/struct/html/imgs/logo/logo.jpg" alt="mx logo" width=30% height=100%>

                Ramiro G Gonzalez | <span>Freelancer<span>

            </h3>
        </header>

        <nav>
            <ul>
                <li>
                    <a href="#">Hoja de vida o CV.</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-cv" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                    <path d="M11 12.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0" />
                    <path d="M13 11l1.5 6l1.5 -6" />
                    </svg>
                </li>
                <li>
                    <a href="#">Diplomas

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-certificate" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5" />
                    <path d="M6 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5" />
                    </svg>

                    </a>
                </li>
                <li>
                    <a href="http://thebestphproject.local">
                        the best php project
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6"></path>
                        <path d="M11 13l9 -9"></path>
                        <path d="M15 4h5v5"></path>
                        </svg>
                    </a>
                </li>
                <li><a href="http://blog.local">
                    versoft - blog
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6"></path>
                    <path d="M11 13l9 -9"></path>
                    <path d="M15 4h5v5"></path>
                    </svg>
                </a></li>
                <li>
                    <a href="http://adminer.local/adminer.php">
                        Adminer
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6"></path>
                        <path d="M11 13l9 -9"></path>
                        <path d="M15 4h5v5"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>

        <aside>
            <h2>About</h2>
            <div>
                <p>Estudiante autodidacta 
                del mundo de la tecnologia.</p>

                <p>
                    el conocimiento que encontraras
                    en esta pagina es la adaptacion
                    de todos los conocimientos que he 
                    ido recopilando a lo largo de mi 
                    ruta de aprendizaje.
                </p>

                <p>
                    utilizo la palabra adaptacion 
                    para no quitarle credito a las 
                    personas que me mostraron sus conocimientos 
                    primero. ya que sin estos la version 
                    que tu ves en pantalla no hubiese sido 
                    posible desarrollarla.
                </p>

                <p>
                    sientete libre de explorar el sitio web
                    y lo mas importante diviertete !.
                </p>
            </div>

            <div>

                <h2>End Points</h2>

                <ul>
                    <li>cursos</li>
                    <li>person</li>
                    <li>blog</li>
                    <li>users</li>
                    <li>registro</li>
                </ul>

            </div>

            <div>

                <h2>Acotaciones para las consultas get</h2>

                <p>, = separador para las columnas cuando se quiere hacer 
                consultas de mas de una columna</p><br>
                <p>| = lo mismo pero para los valores de dichas columnas</p>
                <p>& = sirve para unir variables</p>

                <h3>Variables get :</h3>

                <ul>
                    <li>select</li>
                    <li>linkTo</li>
                    <li>equalTo</li>
                    <li>orderBy</li>
                    <li>orderMode</li>
                    <li>startAt</li>
                    <li>endAt</li>
                </ul>

            </div>

        </aside>

        <section>
            <h2>Bienvenidos</h2>
            <p>
                Estudiantes y profesionales es un orgullo para mi 
                finalmente poder invitarlos a mi pagina web la cual 
                me ha costado bastante implementar.
            </p>

            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mood-wink" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                <path d="M15 10h.01" />
                <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                <path d="M8.5 8.5l1.5 1.5l-1.5 1.5" />
                </svg>
                <p><u>Programar es divertido</u> :</p>
                <div><input type="text" id="nombre"
                placeholder="Escribe algo aqui ..."></div>
                <button onclick="saludar()">Hey! ahora -> click me</button>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mood-wink-2" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 21a9 9 0 1 1 0 -18a9 9 0 0 1 0 18z" />
                <path d="M9 10h-.01" />
                <path d="M14.5 15a3.5 3.5 0 0 1 -5 0" />
                <path d="M15.5 8.5l-1.5 1.5l1.5 1.5" />
                </svg>
            </div>

            <h2>Desarrollo Web 
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-schema" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M5 2h5v4h-5z" />
            <path d="M15 10h5v4h-5z" />
            <path d="M5 18h5v4h-5z" />
            <path d="M5 10h5v4h-5z" />
            <path d="M10 12h5" />
            <path d="M7.5 6v4" />
            <path d="M7.5 14v4" />
            </svg>    
            Freelancer</h2>

            <img src="VERSOFT/Vistas/struct/html/imgs/linuxmatrix.jpg" alt="Matrix linux"/>

            <p>
                No hay mucho que agregar prefiero que 
                descubran el mundo oculto en este su 
                dominio de internet favorito

                gracias y espero esta muestra de mi 
                conocimiento sea mas que suficiente 
                para que si algun reclutador o colaborador
                esta interesado en colaborar o darme empleo
                no dude en contactarme estare extremadamente
                feliz de hacer equipo con ustedes.
            </p>
        </section>

        <section>
            <h2>7 etapas para la creaci&oacute;n de un sitio web</h2>
            <div>
                <ol>
                    <li><h3>Pre-Proceso</h3>
                        <p>
                            Quien estar&aacute; a cargo de que parte 
                            del proyecto.<br>El cliente es parte 
                            del equipo.<br> El Cliente comparte su visi&oacute;n
                            y el equipo la lleva a cabo.
                        </p>
                        <h2>Algunos roles del pre-proceso</h2>
                        <ul>
                            <li>Creador de Contenido</li>
                            <li>Arquitectura de la Informaci&oacute;n</li>
                            <li>Pruebas</li>
                            <li>Dise&ntilde;o Gr&aacute;fico</li>
                            <li>Dise&ntilde;ador UI y UX</li>
                            <li>Front End</li>
                            <li>Backend</li>
                            <li>Supervisor de Testing</li>
                        </ul>
                    </li><br>
                    <li><h3>Estrategia de Contenido</h3>
                        <p>
                            Planeaci&oacute;n, desarrollo y administraci&oacute;n
                            de una p&aacute;gina web.<br>Con la planeaci&oacute;n
                            adecuada tendr&aacute;s un panorama m&aacute;s claro
                            del proyecto.<br>Aqu&iacute; se definen planes de contenido.<br>
                            A&uacute;n no se ven colores o tecnolog&iacute;as utilizadas.
                        </p>
                    </li>
                    <li>Etapa de Pre-construcci&oacute;n</li>
                    <li>Etapa de Construcci&oacute;n</li>
                    <li>Pruebas y Revisi&oacute;n</li>
                    <li>Etapa de Optimizaci&oacute;n</li>
                    <li>Lanzamiento</li>
                </ol>
            </div>
        </section>

        <footer>
            <p>Todos los Derechos reservados &copy;Ramiro G Gonzalez 2023.</p>
        </footer>

    </main>

    <script>

        function saludar () {
            alert("cha chan!!! * "+document.getElementById("nombre").value+
            " * que gusto que estes aqui!");
        }

    </script>


</body>
</html>

<?php

 }

 #  -------- -------- -------  \            / -------- --------- --------    -----   --------
 #  |        |        |      |  \          /      |    |             |       |   |   |
 #  |        |        |      |   \        /       |    |             |       |   |   |
 #  -------- -------- -------     \      /        |    |             |       |   |   --------    
 #         | |        |   \        \    /         |    |             |       |   |          |
 #         | |        |    \        \  /          |    |             |       |   |          |
 #  -------- -------- |     \        \/       -------- --------- --------    -----   --------

 if (
    count(array_filter(explode("/",$_SERVER['REQUEST_URI']))) == 1
    && isset($_SERVER['REQUEST_METHOD'])
) {

    #GET

    if ($_SERVER['REQUEST_METHOD'] == "GET") {

        include_once "VERSOFT/SERVICIOS/Get/get.php";

    }

    #POST

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $json = [
            "estatus" => 200,
            "response" => "POST"
        ];

        echo json_encode($json,http_response_code($json['estatus']));

    }

    #PUT

    if ($_SERVER['REQUEST_METHOD'] == "PUT") {

        $json = [
            "estatus" => 200,
            "response" => "PUT"
        ];

        echo json_encode($json,http_response_code($json['estatus']));

    }

    #DELETE

    if ($_SERVER['REQUEST_METHOD'] == "DELETE") {

        $json = [
            "estatus" => 200,
            "response" => "DELETE"
        ];

        echo json_encode($json,http_response_code($json['estatus']));

    }

}

?>