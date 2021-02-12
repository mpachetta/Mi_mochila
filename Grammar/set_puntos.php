<?php
   session_start();

    require ('../comprueba_login\conexionesBBDD.php');
    $n_usuario=$_SESSION["user"];
     $n_puntos=isset($_POST['pts_logrados']) ? $_POST['pts_logrados']:
     $_POST['pts_logrados'];
     $n_puntos=intval($n_puntos);

echo $n_puntos;

  
               try{
    
                    $miconexion=new PDO('mysql:host='.$base_host.';dbname='.$base_name.'',''.$base_usu.'',''.$base_contr.'');
    
                    $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
                    $miconexion->exec("SET CHARACTER SET utf8");

                   include('get_puntos.php');
                   $sumatoria=$acumulado+$n_puntos;
                    $sql="UPDATE usuariosgame SET pts_grammar = $sumatoria WHERE nombre = '$n_usuario'";
            
    
                    $resultado=$miconexion->prepare($sql);
          
                    $tarea=$resultado->execute();
                    if($tarea){
                        
                        echo $sumatoria;
                    }else{
                        echo "problemas";
                    }

                    $resultado->closeCursor();
        
                }catch(Exception $e){
    
                    die("Error: ".$e->getMessage());
            
                }finally{
    
                    $base=null;
    
                }
    
    





?>