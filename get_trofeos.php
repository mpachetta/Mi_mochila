<?php

    require ('comprueba_login\conexionesBBDD.php');
    $n_usuario=$_SESSION['user'];



  
               try{
    
                    $miconexion=new PDO('mysql:host='.$base_host.';dbname='.$base_name.'',''.$base_usu.'',''.$base_contr.'');
    
                    $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
                    $miconexion->exec("SET CHARACTER SET utf8");

                    $sql="SELECT * FROM USUARIOSGAME WHERE NOMBRE='$n_usuario'";
                    $resultado=$miconexion->prepare($sql);
          
                    $resultado->execute(array());
                        while($reg=$resultado->fetch(PDO::FETCH_ASSOC)){
                        $acumulado= $reg['trofeos'];
                    echo $acumulado;
                    }
                    $resultado->closeCursor(); 
                
                     
                    
                    
        
                }catch(Exception $e){
    
                    die("Error: ".$e->getMessage());
            
                }finally{
    
                    $base=null;
    
                }
    
    
?>