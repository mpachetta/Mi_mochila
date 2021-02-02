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
<script>
    $("#usuName").css("display","flex");

</script>
</head>

<body>


    <div id="contenedor">
        <div id="usuName">
            
            <img src="image/lectus.png" alt="" width="200px">
            <?php
include ('../comprueba_login\formulario_ingresar.php');
?>
            <?php

if(isset($_POST['boton_i'])){
        
        echo "<div id='respuesta'>";
        include ('../comprueba_login\ingresar.php');
        echo "</div>";

}

    ?>
            <br>


            <button class="b_usuname"><a href="../comprueba_login/formulario_registrar.php">Registrarse</a></button>

            <button class="b_usuname"><a href="lectus.php">Jugar sin registro</a></button>



        </div>
    </div>


    <script src="lectus 1.js"></script>
    <script src="lectus 1_listas.js"></script>

</body>

</html>