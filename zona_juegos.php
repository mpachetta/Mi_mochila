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
    
    <script src="Lectus\lectus 1.js"></script>
  
<script>
    $("#usuName").css("display","flex");

</script>

</head>

<body>


    <div id="contenedor">
        
        <div id="cabecera">
        <?php 
        if(isset($_SESSION['user'])){
        echo $_SESSION['user'];
    }else{
        echo "Usuario anónimo";
    }
        ?>
        <a href="comprueba_login/cerrar_sesion.php">Cerrar Sesión</a>

            
            <img src="mochila.png" alt="" width="200px">
            <h1>Mi Mochila</h1>

            </div>

            <div id="juegos">
                <div><img src="lectus/image/lectus.png" width="100px" alt=""><a href="lectus/lectus.php">Lectus</a></div>
            </div>

    <script src="lectus/lectus 1.js"></script>


</body>

</html>