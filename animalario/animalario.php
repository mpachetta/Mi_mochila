<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>Animalario</title>
    <link rel="stylesheet" href="index_style.css">
    <link rel="icon" type="image/x-icon" href="/img/pata.png>
    <meta charset=" utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="comosellama.css">
    <link rel="stylesheet" href="accesible.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="accesible_1.js"></script>
    <script src="animalario.js"></script>

</head>

<body>


    <div id="contenedor">
        
        <div class="pantallaInicial">
            <h1 class="titulo">ANIMALARIO</h1>
            <img src="img/pata.png" width="150px">
            <div id="usuName">
            <p class="mensaje">¡HOLA!</p>
            <?php
            if(isset($_SESSION['user'])){
            echo '<span id="n_usuario">'.$_SESSION['user'].'</span>';
            }
            ?>
            </div>
            <button>EMPEZAR</button>
        </div>
        <div id="usuName_juego">
            <?php

if(isset($_SESSION['user'])){
    
    include ('leer_imgPerfil.php');
echo "<div>";
echo '<span id="n_usuario">'.$_SESSION['user'].'</span>';


echo '<span>Puntos acumulados: </span>';
echo '<input disabled=true type="text" id="puntos_juego" value="';

include ('get_puntos.php');
echo pedir_puntos('pts_animalario');
echo '"></input>';
echo "</div>";
}else{
    echo "<img src='../img\usuario.png' alt='foto del usuario' id='imgPerfil'>";
    echo "<p>Anónimo</p>";
}

?>
            </div>
        <div id="puntaje">

            <div id="pts"></div>
        </div>
        <div id="estrellas">

        </div>
        <div id="pista">

        </div>
        <form id="palabra">
            <input id="opcion0" type="radio" name="i_palabras" readonly="readonly" value="">

            <input id="opcion1" type="radio" name="i_palabras" readonly="readonly" value="">

            <input id="opcion2" type="radio" name="i_palabras" readonly="readonly" value="">

        </form>
        <div id="check">
            <button id="b_check">COMPROBAR</button></div>
        <form id="audio"><input type="checkbox" id="i_audio" name="i_audio"></input><label for="i_audio"
                id="b_audio"></label></form>
        <div id="continuar">
            <div id="correcta"></div>
            <button id="b_continuar">CONTINUAR</button>
            <button class="b_usuname" id="salir"><a href="../zona_juegos.php">Salir del juego</a></button>
        </div>

    </div>

    <footer>
        <hr>
        <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Licencia Creative Commons"
                style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br /><span
            xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource"
            property="dct:title" rel="dct:type">"Mi mochila"</span> por <span xmlns:cc="http://creativecommons.org/ns#"
            property="cc:attributionName">Martín Pachetta</span> se distribuye bajo una <a rel="license"
            href="http://creativecommons.org/licenses/by-nc/4.0/">Licencia Creative Commons Atribución-NoComercial 4.0
            Internacional.</a>
        <p>Icons from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></p>
    </footer>
    <script>
        let puntaje = 0;
        let premio = 10;
        let castigo = 5;
        let opciones = [$("#opcion0"), $("#opcion1"), $("#opcion2")];
        let p_dada = "";
        let elegida = "";

        niveles = () => {
            $("#contenedor").css({

                top: "0px"
            });
            $("#audio").css("display", "flex")
            $("footer").css("display", "none");
            $(".titulo").css("margin-top", "0px");

            let i = Math.round(Math.random() * (palabra.length) - 1);
            if (i < 0) {
                i = 0;
            }
            p_dada = palabra[i];
            let y = Math.round(Math.random() * 2);
            let z = Math.round(Math.random() * (palabra.length) - 1);
            if (z < 0) {
                z = 0;
            }
            let w = Math.round(Math.random() * (palabra.length) - 1);
            if (w < 0) {
                w = 0;
            }

            $("#continuar").css("visibility", "hidden");
            $("#pista").text("");
            $("#palabra input").val("");
            $(".pantallaInicial").remove();
            $("#pista").append(pista[i]);

            let id_dada = opciones[y].attr("id");

            opciones[y].val(palabra[i]);

            if (y == 0) {
                opciones[y].before(`<label id="label0" for="${id_dada}">${palabra[i]}</label>`);
                opciones[1].before(`<label id="label1" for="opcion1">${palabra[z]}</label>`);
                opciones[1].val(palabra[z]);
                opciones[2].before(`<label id="label2" for="opcion2">${palabra[w]}</label>`);
                opciones[2].val(palabra[w]);
            } else if (y == 1) {
                opciones[y].before(`<label id="label1" for="${id_dada}">${palabra[i]}</label>`);
                opciones[0].before(`<label id="label0" for="opcion0">${palabra[z]}</label>`);
                opciones[0].val(palabra[z]);
                opciones[2].before(`<label id="label2" for="opcion2">${palabra[w]}</label>`);
                opciones[2].val(palabra[w]);
            } else if (y == 2) {
                opciones[y].before(`<label id="label2" for="${id_dada}">${palabra[i]}</label>`);
                opciones[0].before(`<label id="label0" for="opcion0">${palabra[w]}</label>`);
                opciones[0].val(palabra[w]);
                opciones[1].before(`<label id="label1" for="opcion1">${palabra[z]}</label>`);
                opciones[1].val(palabra[z]);

            }
            $("#b_check").attr("disabled", true).css("backgroundColor", "lightgray");
        };

        comprobar = () => {
            elegida = $("#palabra input[name='i_palabras']:checked").val();


            if (elegida == p_dada) {

                puntaje = puntaje + premio;


                $("#pts").text("").append(puntaje);
                $("#continuar").css({
                    visibility: "visible",
                    backgroundColor: "rgba(0, 230, 0,0.7)",
                });
                $("#b_continuar").css("backgroundColor", "green");
                // $("#contenedor").css("backgroundColor", "lightgray");
                $("#palabra label").css("visibility", "hidden");
                $("#check").css("visibility", "hidden");

            } else {
                puntaje = puntaje - castigo;

                $("#pts").text("").append(puntaje);
                $("#continuar").css({
                    visibility: "visible",
                    backgroundColor: "rgba(230, 0, 0,0.7)",
                });
                $("#b_continuar").css("backgroundColor", "red");
                // $("#contenedor").css("backgroundColor", "lightgray");
                $("#palabra label").css("visibility", "hidden");
                $("#check").css("visibility", "hidden");
            }

            $("#correcta").append(p_dada);
            
        }

        continuar = () => {
            $("#palabra label").remove();
            $("#palabra input").prop("checked", false);
            // $("#contenedor").css("backgroundColor", "royalblue");
            $("#check").css("visibility", "visible");
            $("#correcta").empty();
            niveles();
            
        };

        resaltar = (e) => {

            let x = e.target.id


            if (x == "opcion0") {

                $("#label0").addClass("resaltado").css("backgroundColor", "lightblue");
                $("#label1").removeClass().css("backgroundColor", "white");
                $("#label2").removeClass().css("backgroundColor", "white");


            } else if (x == "opcion1") {

                $("#label1").addClass("resaltado").css("backgroundColor", "lightblue");
                $("#label0").removeClass().css("backgroundColor", "white");
                $("#label2").removeClass().css("backgroundColor", "white");



            } else if (x == "opcion2") {

                $("#label2").addClass("resaltado").css("backgroundColor", "lightblue");
                $("#label1").removeClass().css("backgroundColor", "white");
                $("#label0").removeClass().css("backgroundColor", "white");


            }

            $("#b_check").attr("disabled", false).css("backgroundColor", "rgb(10, 153, 248)");
        }
    </script>
</body>

</html>