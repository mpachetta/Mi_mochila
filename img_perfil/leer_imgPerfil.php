<?php


$usuario=$_SESSION['user'];

require_once ('conexionesBBDD.php');

try {
    $miconexion=new PDO('mysql:host='.$base_host.';dbname='.$base_name.'',''.$base_usu.'',''.$base_contr.'');
    
    $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $miconexion->exec("SET CHARACTER SET utf8");

    $sql="SELECT FOTOPERFIL FROM USUARIOSGAME WHERE NOMBRE='$usuario'";

    $resultado=$miconexion->prepare($sql);

    $resultado->execute(array());

    while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){

        $ruta_img=$fila['FOTOPERFIL'];
        
       echo '<img src="/intranet/uploads/'.$ruta_img.'" alt="" id="imgPerfil">';  
    }
    
    $resultado->closeCursor();

} catch (Exception $e) {
    die("Error: ".$e->getMessage());
}finally{
    $base=null;
}

?>
