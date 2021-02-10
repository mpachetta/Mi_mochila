<?php
   session_start();

if(isset($_SESSION['user'])){   
    
    require ('../comprueba_login\conexionesBBDD.php');
    
    $n_usuario=$_SESSION["user"];



  
               try{
    
                    $miconexion=new PDO('mysql:host='.$base_host.';dbname='.$base_name.'',''.$base_usu.'',''.$base_contr.'');
    
                    $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
                    $miconexion->exec("SET CHARACTER SET utf8");

                //    include('../get_trofeos.php');
                    


                    $sql="UPDATE usuariosgame SET trofeos = trofeos+1 WHERE nombre = '$n_usuario'";
            
    
                    $resultado=$miconexion->prepare($sql);
          
                    $tarea=$resultado->execute();
            
                    $resultado->closeCursor();
        
                }catch(Exception $e){
    
                    die("Error: ".$e->getMessage());
            
                }finally{
    
                    $base=null;
    
                }
    
    
            
            

            }

?>