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
#msg{
    text-align: center;
    color: #848F25;
}

tr:nth-child(2) td:nth-child(2){
            background-image: url('img/medalla1.png');
            background-position: right;
            background-repeat: no-repeat;
            background-size: 30px;
        }
tr:nth-child(3) td:nth-child(2){
    background-image: url('img/medalla2.png');
            background-position: right;
            background-repeat: no-repeat;
            background-size: 30px;
        }
tr:nth-child(4) td:nth-child(2){
    background-image: url('img/medalla3.png');
            background-position: right;
            background-repeat: no-repeat;
            background-size: 30px;
        }
    </style>
</head>
<body>

<?php


echo '<h2>Posiciones</h2>';

echo "<table id='tabla_ranking' class='w3-table-all w3-card-4'>";
echo"<tr class='w3-blue'><th></th><th>Usuario</th><th class='w3-right-align'>Puntos</th></tr>";

if(!isset($_SESSION['user'])){

    echo "<div id='msg'>No iniciaste sesión como usuario</div><br><br>";

}else{

    $n_usuario=$_SESSION["user"];


           try{

            require ('conexionesBBDD.php');
                $miconexion=new PDO('mysql:host='.$base_host.';dbname='.$base_name.'',''.$base_usu.'',''.$base_contr.'');

                $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $miconexion->exec("SET CHARACTER SET utf8");

                // $tabla_pts="SELECT * FROM USUARIOSGAME ORDER BY PTS_LECTUS DESC";
                $tabla_pts="SELECT NOMBRE AS NOMBRE, (PTS_LECTUS + PTS_ANIMALARIO) AS PTS_TOTAL FROM USUARIOSGAME ORDER BY PTS_TOTAL DESC";
                
                $resultado=$miconexion->prepare($tabla_pts);
      
                $resultado->execute();

                $arr=$resultado->fetchAll(PDO::FETCH_ASSOC);

                
            $n=1;

                foreach($arr as $row) {
             
                echo "<tr><td class='w3-blue w3-center'>".$n."</td>";
                echo "<td class='w3-large'>";
                if($n_usuario==$row['NOMBRE']){
                    echo "<span class='mi_nombre'>".$row['NOMBRE']."</span>"; 
                }else{
                echo $row['NOMBRE'];
                }
                echo "</td>";
                echo "<td class='w3-right-align'>";
                echo $row['PTS_TOTAL'];
                echo "</td></tr>";
                $n++;
                }                
                echo "</table>";
            
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


