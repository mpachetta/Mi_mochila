<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
//recibimos los datos de la imagen, para hacerlso usamos la variable superglobal $_FILES
$usuario=$_SESSION['user'];
$nombre_img=$_FILES['imagen']['name'];
$tipo_img=$_FILES['imagen']['type'];
$tamagno_img=$_FILES['imagen']['size'];



if($tamagno_img<=(1024*5000)){

    if($tipo_img=='image/jpeg' || $tipo_img=='image/png' || $tipo_img=='image/jpg'){


        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/intranet/uploads/';


        move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_img);

}else{
    echo ("Solo se pueden subir imágenes jpeg, jpg y png");
}
}else{
    echo "El tamaño máximo es de 5Mb";
}

require ('../comprueba_login\conexionesBBDD.php');

try {
    $miconexion=new PDO('mysql:host='.$base_host.';dbname='.$base_name.'',''.$base_usu.'',''.$base_contr.'');
    
    $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $miconexion->exec("SET CHARACTER SET utf8");

    $sql="UPDATE USUARIOSGAME SET FOTOPERFIL='$nombre_img' WHERE NOMBRE='$usuario'";

    $resultado=$miconexion->prepare($sql);

    $resultado->execute();

    $resultado->closeCursor();
    header('Location:../zona_juegos.php');
} catch (Exception $e) {
    die("Error: ".$e->getMessage());
}finally{
    $base=null;
}

?>

