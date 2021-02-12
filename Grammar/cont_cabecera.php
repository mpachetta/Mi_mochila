<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #cabecera{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

#cabecera img{

    width:80px;
    margin-top: 10px;

}

#cabecera #n_usuario{
    
    font-size: 1.2em;
}
#cabecera input{
    text-align: center;
}</style>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['user'])){
    
    include ('../img_perfil/leer_imgPerfil.php');
echo '<span id="n_usuario">'.$_SESSION['user'].'</span>';
include ('get_puntos.php');

echo '<span>Puntos: </span>';
echo '<input disabled=true type="text" id="puntos_juego" value="';
echo $puntos=pedir_puntos('pts_grammar');
echo '"></input>';
}else{
    echo "<img src='../img\usuario.png' alt='foto del usuario' id='imgPerfil'>";
    echo "<p>Anónimo</p>";
}
?> 
</body>
</html>
