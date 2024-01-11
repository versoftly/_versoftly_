<header>
<div class="contenedor">
    <div class="logoleft">
        <p>
            <a href="http://tbpplab.local">
                <img src="imgs/logo/logo.jpg" alt="mx logo" width=100% height=100%>
            </a>
        </p>
    </div>
    <div class="derecha">
        <form action="<?php echo RUTA; ?>/buscar.php"
        method="get">

            <input type="text" name="busqueda" placeholder="Buscar">

            <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mood-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M21 12a9 9 0 1 0 -9 9"></path>
                <path d="M9 10h.01"></path>
                <path d="M15 10h.01"></path>
                <path d="M9.5 15c.658 .672 1.56 1 2.5 1"></path>
                <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                <path d="M20.2 20.2l1.8 1.8"></path>
            </svg>
            </button>

        </form>
    </div>
</div>
</header>