<?php

    require ('../comprueba_login\conexionesBBDD.php');
    $n_usuario=$_SESSION["user"];



  
               try{
    
                    $miconexion=new PDO('mysql:host='.$base_host.';dbname='.$base_name.'',''.$base_usu.'',''.$base_contr.'');
    
                    $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
                    $miconexion->exec("SET CHARACTER SET utf8");

                    $pts_ant="SELECT * FROM USUARIOSGAME WHERE NOMBRE='$n_usuario'";
                    $resultado_ant=$miconexion->prepare($pts_ant);
          
                    $resultado_ant->execute(array());
                while($reg=$resultado_ant->fetch(PDO::FETCH_ASSOC)){
                    $acumulado= $reg['pts_lectus'];
                    
                }
                    $resultado_ant->closeCursor();  
                    
                    
        
                }catch(Exception $e){
    
                    die("Error: ".$e->getMessage());
            
                }finally{
    
                    $base=null;
    
                }
    
    
function pedir_puntos(){
    require ('../comprueba_login\conexionesBBDD.php');
    $n_usuario=$_SESSION["user"];
    try{
    
        $miconexion=new PDO('mysql:host='.$base_host.';dbname='.$base_name.'',''.$base_usu.'',''.$base_contr.'');

        $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $miconexion->exec("SET CHARACTER SET utf8");

        $pts_ant="SELECT * FROM USUARIOSGAME WHERE NOMBRE='$n_usuario'";
        $resultado_ant=$miconexion->prepare($pts_ant);

        $resultado_ant->execute(array());
    while($reg=$resultado_ant->fetch(PDO::FETCH_ASSOC)){
        $acumulado= $reg['pts_lectus'];
        
    }

    echo $acumulado;
        $resultado_ant->closeCursor();  
        
        

    }catch(Exception $e){

        die("Error: ".$e->getMessage());

    }finally{

        $base=null;

    }
}
        



?>