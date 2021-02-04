<?php session_start(); 
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
        $(function(){

            $("#usuName").css("display", "flex");
        $("#b_opciones").click(()=>{
            $("#menu_opciones").toggle();
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
                    <p>Usuario:</p>
                    <?php 
            if(isset($_SESSION['user'])){
            echo $_SESSION['user'];
            }else{
            echo "Anónimo";
            }
            ?>
                </div>

                <?php
            echo "<img src='img/usuario.png' alt='foto del usuario' id='imgPerfil'>";
            ?>
                <div id="config">
                    <div id='b_opciones'>Opciones</div>
                   
                    
                </div>
                <div id="menu_opciones">
            <?php
            echo "<img src='img/usuario.png' alt='foto del usuario' id='imgPerfil'>";
            echo "<button id='editarImgPerfil'></button>";
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
            </div>
            <img src="mochila.png" alt="" width="200px" id='logo'>

            <h1>Mi Mochila</h1>

        </div>

        <div id="caja_juegos">
            <div><a href="lectus/lectus.php"><img src="lectus/image/lectus.png" width="100px" alt="">Lectus</a></div>
            <div><a href="#"><img src="que_animal_es/img/pata.png" width="100px" alt="">Qué animal es</a></div>
        </div>
    </div>
    <script src="lectus/lectus 1.js"></script>


</body>

</html>