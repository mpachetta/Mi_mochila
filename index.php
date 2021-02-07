<!DOCTYPE html>

<head>
    <title>Mi mochila</title>
    <link rel="icon" type="image/x-icon" href="img/backpack.png" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="miMochilaStyle.css">

    <script src="Lectus\lectus 1.js"></script>

    <script>
        $("#usuName").css("display", "flex");
    </script>

</head>

<body>


    <div id="contenedor">
        <div id="usuName">

            <img src="mochila.png" alt="" width="200px">
            <h1>Mi Mochila</h1>
            <div id="form">
                <?php
            include ('comprueba_login/formulario_ingresar.php');
                ?>
                <?php

            if(isset($_POST['boton_i'])){
        
                echo "<div id='respuesta'>";
                include ('comprueba_login\ingresar.php');
                echo "</div>";

            }

                ?>
            </div>



            <button class="b_usuname"><a href="comprueba_login/formulario_registrar.php">Registrarse</a></button>

            <button class="b_usuname"><a href="zona_juegos.php">Jugar sin registro</a></button>


        </div>
        <footer>
                <hr>
                <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img
                        alt="Licencia Creative Commons" style="border-width:0"
                        src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br /><span
                    xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource"
                    property="dct:title" rel="dct:type">"Mi mochila"</span> por <span
                    xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Martín Pachetta</span> se
                distribuye bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Licencia
                    Creative Commons Atribución-NoComercial 4.0 Internacional.</a>
                <p>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
                        href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></p>
            </footer>
    </div>
    <script src="lectus/lectus 1.js"></script>


</body>

</html>