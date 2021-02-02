<!DOCTYPE html>

<head>
    <title>Lectus</title>
    <link rel="icon" type="image/x-icon" href="image/fav_lectus.png" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="miMochilaStyle.css">
    
    <script src="Lectus\lectus 1.js"></script>
  
<script>
    $("#usuName").css("display","flex");

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
    </div>


    <script src="lectus/lectus 1.js"></script>


</body>

</html>