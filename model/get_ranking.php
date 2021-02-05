<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>

h2{
    text-align: center;
    font-weight: bolder;
}

.mi_nombre{
    color:#848F25;
    font-weight: bolder;
    font-size: 1.2em;
}

    </style>
</head>
<body>

<?php


echo '<h2>Posiciones</h2>';

echo "<table id='tabla_ranking' class='w3-table-all w3-card-4'>";
echo"<tr class='w3-blue'><th></th><th>Nombre</th><th class='w3-right-align'>Puntos</th></tr>";

if(!isset($_SESSION['user'])){

    echo "<div>No iniciaste sesión como usuario</div>";

}else{

    $n_usuario=$_SESSION["user"];


           try{

            require ('conexionesBBDD.php');
                $miconexion=new PDO('mysql:host='.$base_host.';dbname='.$base_name.'',''.$base_usu.'',''.$base_contr.'');

                $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $miconexion->exec("SET CHARACTER SET utf8");

                $tabla_pts="SELECT * FROM USUARIOSGAME ORDER BY PTS_LECTUS DESC";
                $resultado=$miconexion->prepare($tabla_pts);
      
                $resultado->execute();

                $reg = $resultado->setFetchMode(PDO::FETCH_ASSOC);
                $n=1;
                foreach($resultado->fetchAll() as $k=>$v) {
                
                echo "<tr><td class='w3-blue w3-center'>".$n."</td>";
                echo "<td class='w3-large'>";
                if($n_usuario==$v['nombre']){
                    echo "<span class='mi_nombre'>".$v['nombre']."</span>"; 
                }else{
                echo $v['nombre'];
                }
                echo "</td>";
                echo "<td class='w3-right-align'>";
                echo $v['pts_lectus'];
                echo "</td></tr>";
                $n++;
                }                
                echo "</table>";
            // while($reg=$resultado->fetch(PDO::FETCH_ASSOC)){
                
            //     $reg["nombre"];
            // }
                $resultado->closeCursor();  
                
                
    
            }catch(Exception $e){

                die("Error: ".$e->getMessage());
        
            }finally{

                $base=null;

            }
        }

?> 
</body>
</html>


