<?php
session_start();
?>
<!DOCTYPE html>

<head>
    <title>Lectus</title>
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
                $("#b_ranking").css('backgroundColor', 'white');
                $("#b_ajustes").css('backgroundColor', 'rgb(247, 158, 56)');
                $("#menu_ranking").toggle();
                $("#menu_opciones").css('display', 'none');
            });
            $("#b_ajustes").click(() => {
                $("#b_ajustes").css('backgroundColor', 'white');
                $("#b_ranking").css('backgroundColor', 'rgb(247, 158, 56)');
                $("#menu_opciones").toggle();
                $("#menu_ranking").css('display', 'none');
            });

            $("#editarImgPerfil").click(() => {

                $("#form_imgPerfil").toggle();

            })
            $("#form_imgPerfil").submit((e) => {

                $("#form_imgPerfil").css('display', 'none');
            })
        });
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

                <h1>Mi Mochila</h1>
            </div>
        </div>




        <div id="caja_juegos">
            <div><a href="lectus/lectus.php"><img src="lectus/image/lectus.png" width="100px" alt="">Lectus</a></div>
            <div><a href="animalario\animalario.php"><img src="animalario/img/pata.png" width="100px" alt="">Animalario</a></div>
        </div>
        <div id="menu_inf">
            <div id="ranking">
                <img src='img/ranking.png' alt="" id="b_ranking">
            </div>
            <div id="ajustes">
                <img src='img/configuraciones.png' alt="" id="b_ajustes">
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
                        echo '<a name="cerrar_sesion" href="comprueba_login/cerrar_sesion.php">Cerrar Sesión</a>';
    
                            if(isset($_POST['cerrar_sesion'])){ 
                            echo include("comprueba_login\cerrar_sesion.php"); 
                            }
                            ?>

                </div>

            </div>
            <div id="menu_ranking">
                <?php include ('model/get_ranking.php')?>
            </div>
        </div>


    </div>
    <script src="lectus/lectus 1.js"></script>


</body>

</html>