<?php session_start() ?>
<!DOCTYPE html>

<head>
    <title>Lectus</title>
    <link rel="icon" type="image/x-icon" href="image/fav_lectus.png" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="lectus 1.css">
    <script src="lectus 1.js"></script>
    <script src="lectus 1_listas.js"></script>
    <script src="pantallas.js"></script>
</head>

<body>

    <div id="contenedor">
        
        <div id="pantallaIni">
            <div id="logo"><img src="image/lectus.png" alt="logo" width="180px"></div>

            <p class="mensaje">¡HOLA!</p>
            <?php echo '<span id="n_usuario">'.$_SESSION['user'].'</span>'?>
            <button class="irNiveles">CONTINUAR</button>
            <footer>
                <hr>
                <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img
                        alt="Licencia Creative Commons" style="border-width:0"
                        src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br /><span
                    xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource"
                    property="dct:title" rel="dct:type">"Lectus"</span> por <span
                    xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Martín Pachetta</span> se
                distribuye bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Licencia
                    Creative Commons Atribución-NoComercial 4.0 Internacional.</a>
                <p>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
                        href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></p>
            </footer>
        </div>
        
        <div id="nuevoIntento">
            <p>Algo no está bien</p>
            <button id="reintentar">VOLVER</button>
        </div>


        <div id="pizarra"></div>
        <div id="caja_locucionOracion"><button id="locucionOracion"></button></div>
        <div id="tablero">

        </div>

        <div id="botonera">
            <button id="borrar">BORRAR</button>
            <button id="comprobar" disabled=true>COMPROBAR</button>
        </div>
        
        
        
        <div id="pantallaEval">

            <div id="pts"></div>
            <p class="mensaje1">¡MUY BIEN!</p>
            <button id="continuar">CONTINUAR</button>
        </div>
        <div id="pantallaCont">
            <div id="trofeos"><img src="image/won.png" alt="trofeo" width="150px"></div>
            <?php echo '<span id="n_usuario">'.$_SESSION['user'].'</span>'?>
            <p class="mensaje">¡COMPLETASTE EL NIVEL!</p>
            <button class="irNiveles">CONTINUAR</button>
        </div>


        <div id="pantallaNiv">

            <div id="avance">
                <div id="usuarioAvance"></div>
                <div id="barra">
                    <div id="rellenoBarra"></div>
                </div>
            </div>
            <?php echo '<span id="n_usuario">'.$_SESSION['user'].'</span>'?>
            <div id="niveles">
                <div><button id="b_inicio" value="inicio"></button>
                    <p>INICIO</p>
                </div>
                <div><button id="b_personas" value="personas"></button>
                    <p>PERSONAS</p>
                </div>
                <div><button id="b_casa" value="casa"></button>
                    <p>CASA</p>
                </div>
                <div><button id="b_comida" value="comida"></button>
                    <p>COMIDA</p>
                </div>
                <div><button id="b_escuela" value="escuela"></button>
                    <p>ESCUELA</p>
                </div>
                <div><button id="b_mascotas" value="mascotas"></button>
                    <p>MASCOTAS</p>
                </div>

            </div>
            <button id="jugar" disabled=true>JUGAR</button>
        </div>








</body>

</html>