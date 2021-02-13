<?php
session_start();
?>
<!DOCTYPE html>

<head>
    <title>Zona de juegos</title>
    <link rel="icon" type="image/x-icon" href="image/fav_lectus.png" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="miMochilaStyle.css">
    <link rel="stylesheet" href="zonajuegos_style.css">
    <link rel="stylesheet" href="menu_opciones_style.css">
    <script src="Lectus\lectus 1.js"></script>

    <script>
        $(function () {

            $("#usuName").css("display", "flex");

            $("#b_ranking").click(() => {
                $("#menu_ranking").toggle();
                
                $("#menu_opciones").css('display', 'none');
                $("#menu_favoritos").css('display', 'none');
            });
            $("#b_favoritos").click(() => {
                $("#menu_favoritos").toggle();
                $("#menu_opciones").css('display', 'none');
                $("#menu_ranking").css('display', 'none');
            });
            $("#b_ajustes").click(() => {
                $("#menu_opciones").toggle();
                $("#menu_ranking").css('display', 'none');
                $("#menu_favoritos").css('display', 'none');
            });

            $("#editarImgPerfil").click(() => {

                $("#form_imgPerfil").toggle();

            })
            $("#form_imgPerfil").submit((e) => {

                $("#form_imgPerfil").css('display', 'none');
            })

            $("#inf_cabecera").hover(()=>{
                $("#titulo").toggle();
            })
            
            cargar_favoritos();
        });

        let cargar_favoritos = ()=>{

            let mis_favoritos=['<a href="grammar/grammar.php"><img src="grammar/img/pen.png" width="100px" alt="">Grammar</a>',
            '<a href="lectus/lectus.php"><img src="lectus/image/lectus.png" width="100px" alt="">Lectus</a>'];
            
            for (i=0;i<mis_favoritos.length;i++){
                $("#menu_favoritos").append('<div class="favorito">'+mis_favoritos[i]+'</div>');
            }
        }
    </script>
    <style>

    </style>
</head>

<body>


    <div id="contenedor">

        <div id="cabecera">


            <div id="sup_cabecera">

                <div id="usu">
                    <div>
                        <p>Usuario:
                        </p>
                        <span class="resaltar">
                        <?php 
                        if(isset($_SESSION['user'])){
                            echo $_SESSION['user'];
                        }else{
                            echo "Anónimo";
                        }
                        ?>
                        </span>
                    </div>
                    <div id="vitrina">
                        <img src="img/won.png" alt="">
                        <p><?php 
                        if(isset($_SESSION['user'])){
                            include('get_trofeos.php');
                        }
                        
                         ?></p>
                    </div>
                    <div>  
                    <?php

                        if(!isset($_SESSION['user'])){
                            echo "<img src='img/usuario.png' alt='foto del usuario' id='imgPerfil'>";
                        }else{
                            include ('img_perfil\leer_imgPerfil.php');
                        }                
                    ?>
                    </div> 
                </div>
                
            </div>
            
            <div id="inf_cabecera">
                <img src="mochila.png" alt="" width="100px" id='logo'>

                <h1 id="titulo">Mi Mochila</h1>
            </div>
        </div>




        <div id="caja_juegos">
            <div><a href="lectus/lectus.php"><img src="lectus/image/lectus.png" width="100px" alt="">Lectus</a></div>
            <div><a href="animalario\animalario.php"><img src="animalario/img/pata.png" width="100px" alt="">Animalario</a></div>
            <div><a href="elementario\elementario.php"><img src="elementario/img/casa_ico.png" width="100px" alt="">Elementario</a></div>
            <div><a href="musical\musical.php"><img src="Musical\img\logo_headphones.png" width="100px" alt="">Musical</a></div>
            <div><a href="grammar\grammar.php"><img src="grammar\img\pen.png" width="100px" alt="">Grammar</a></div>

        </div>
        <div id="menu_inf">
            <div id="ranking">
                <img src='img/ranking.png' alt="botón ranking" id="b_ranking">
            </div>
            <div id="favoritos">
                <img src='img/favorito.png' alt="boton favoritos" id="b_favoritos">
            </div>
            <div id="ajustes">
                <img src='img/configuraciones.png' alt="boton ajustes" id="b_ajustes">
            </div>
        </div>
        <div id="caja_menu">
            <div id="menu_opciones">
                <?php
                        if(!isset($_SESSION['user'])){
                            echo "<img src='img/usuario.png' alt='foto del usuario' id='imgPerfil' width='100'>";
                        }else{
                            include ('img_perfil\leer_imgPerfil.php');
                                    
                        echo "<abbr title='Cambiar la foto de perfil'><button id='editarImgPerfil'></button></abbr>";         
                        echo '<form action="img_perfil\datosImagen.php" method="post" enctype="multipart/form-data" id="form_imgPerfil">';
                        echo '<label for="imagen">Elegir la imagen de perfil</label>';
                        echo '<input type="file" name="imagen" id="imagen"><br><br>';
                        echo '<input type="submit" value="Subir" id="subir">';
                        echo '</form>';
                        } 
                        ?>

                <div>
                    <?php 
                        echo '<a name="cerrar_sesion" href="comprueba_login/cerrar_sesion.php" id="cerrar_sesion">Cerrar Sesión</a>';
    
                            if(isset($_POST['cerrar_sesion'])){ 
                            echo include("comprueba_login\cerrar_sesion.php"); 
                            }
                            ?>

                </div>
                <footer>
                
                <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">
                <img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a>
                <br />
                <span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">"Mi mochila"</span>
                 por <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Martín Pachetta</span> se distribuye bajo una 
                 <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Licencia Creative Commons Atribución-NoComercial 4.0 Internacional.</a>
                <p>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from 
                <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></p>
                </footer>
            </div>
            <div id="menu_favoritos">
                
                
            </div>
            <div id="menu_ranking">
                <?php include ('model/get_ranking.php')?>
            </div>
        </div>


    </div>
    <script src="lectus/lectus 1.js"></script>


</body>

</html>