<?php session_start(); 
// if(!isset($_SESSION['user'])){
// header('Location:../index.php');
// }
?>
<!DOCTYPE html>
<head>
    <title>Lectus</title>
    <link rel="icon" type="image/x-icon" href="image/fav_lectus.png" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <link rel="stylesheet" href="lectus 1.css">
    <script src="lectus 1.js"></script>
    <script src="lectus 1_listas.js"></script>
    <script src="pantallas.js"></script>
    <style>
    #puntos_juego{
   text-align: center;
   font-size: 18px;
   margin-bottom: 10px;
}
#imgPerfil{
margin-top: 20px;
   width:100px;
}
#n_usuario {
   font-size: 20px;
   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   font-weight: bolder;
   color: rgb(48, 23, 23);
   text-transform: uppercase;
   
   
   padding:0px 10px;
   border-radius: 5px;
   
}
    </style>
<script>

$(function(){
set_puntos();

});
let set_puntos = ()=>{
$("#punteador").on("submit",(e)=>{
e.preventDefault();
    var datos_puntaje=$("#punteador").serialize();

    
    $.ajax({
        'type':"POST",
        'url':'set_puntos.php',
        'data':datos_puntaje,
        'success':procesarDatos

});
$.post('../model/set_trofeos.php');
    
})
};


function procesarDatos (datos_devueltos){
    
    <?php
    if(isset($_SESSION['user'])){
    echo '$("#puntos_juego").val(datos_devueltos)';
    }
?>
}

function verErrores(){

    var msg="Ooops, ocurrió un error inesperado";

    $("#respuesta").html("<p>"+msg+"</p>");


}

function success(){
    console.log("success")
}


</script>
</head>

<body>

    <div id="contenedor">
        
        <div id="pantallaIni">
            <div id="logo"><img src="image/lectus.png" alt="logo" width="180px"></div>

            <p class="mensaje">¡HOLA!</p>
            <?php
            if(isset($_SESSION['user'])){
            echo '<span id="n_usuario">'.$_SESSION['user'].'</span>';
            }
            ?>
                        <form action="" id="nivelLectura">

<div><label for="">Leo solo</label><input type="range" name="leoSolo" id="leoSolo" min="0" max="1"
        step="1" value="0"><label for="">Necesito ayuda</label></div>
</form>
            <button class="irNiveles">CONTINUAR</button>
            <footer>
                <hr>
                <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img
                        alt="Licencia Creative Commons" style="border-width:0"
                        src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br /><span
                    xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource"
                    property="dct:title" rel="dct:type">"Lectus"</span> por <span
                    xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Martín Pachetta</span> se
                distribuye bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Licencia
                    Creative Commons Atribución-NoComercial 4.0 Internacional.</a>
                <p>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
                        href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></p>
            </footer>
        </div>
        
        <div id="nuevoIntento">
            <p>Algo no está bien</p>
            <button id="reintentar">VOLVER</button>
            <button class="b_usuname" id="salir"><a href="lectus.php">Salir del nivel</a></button>
        </div>
        <div id="avance">
                <div id="usuarioAvance"></div>
                <div id="barra">
                    <div id="rellenoBarra"></div>
                </div>
            </div>

        <div id="pizarra"></div>
        <div id="caja_locucionOracion"><button id="locucionOracion"></button></div>
        <div id="tablero">

        </div>

        <div id="botonera">
            <button id="borrar">BORRAR</button>
            <button id="comprobar" disabled=true>COMPROBAR</button>
        </div>
        
        
        
        <div id="pantallaEval">

            <div id="pts"></div>
            <p class="mensaje1">¡MUY BIEN!</p>
            <button id="continuar">CONTINUAR</button>
            <button class="b_usuname" id="salir"><a href="lectus.php">Salir del nivel</a></button>

        </div>
        
        
        <div id="pantallaCont">
            
            <div id="trofeos">
                
                <img src="image/won.png" alt="trofeo" width="150px"></div>
            <?php
            if(isset($_SESSION['user'])){
            echo '<span id="n_usuario">'.$_SESSION['user'].'</span>';
            }
            ?>
            <p class="mensaje">¡COMPLETASTE EL NIVEL!</p>
           <form action="'set_puntos.php'" id="punteador" name="punteador">
                <input type="hidden" id="puntos_logrados" name="puntos_logrados" value="">
            <input type="submit" class="irNiveles" value="CONTINUAR" id="continuar" name="continuar"></input>
            </form>
        </div>


        <div id="pantallaNiv">

            <!-- <div id="avance">
                <div id="usuarioAvance"></div>
                <div id="barra">
                    <div id="rellenoBarra"></div>
                </div>
            </div> -->
            <?php

            if(isset($_SESSION['user'])){
                
                include ('leer_imgPerfil.php');
            echo '<span id="n_usuario">'.$_SESSION['user'].'</span>';
            include ('get_puntos.php');
            
            echo '<span>Puntos: </span>';
            echo '<input disabled=true type="text" id="puntos_juego" value="';
            echo $puntos=pedir_puntos();
            echo '"></input>';
            }else{
                echo "<img src='../img\usuario.png' alt='foto del usuario' id='imgPerfil'>";
                echo "<p>Anónimo</p>";
            }
            ?>

            <div id="niveles">
                <div><button id="b_inicio" value="inicio"></button>
                    <p>INICIO</p>
                </div>
                <div><button id="b_personas" value="personas"></button>
                    <p>PERSONAS</p>
                </div>
                <div><button id="b_casa" value="casa"></button>
                    <p>CASA</p>
                </div>
                <div><button id="b_comida" value="comida"></button>
                    <p>COMIDA</p>
                </div>
                <div><button id="b_escuela" value="escuela"></button>
                    <p>ESCUELA</p>
                </div>
                <div><button id="b_mascotas" value="mascotas"></button>
                    <p>MASCOTAS</p>
                </div>

            </div>
            <button id="jugar" disabled=true>JUGAR</button>
            <button class="b_usuname" id="salir"><a href="../zona_juegos.php">Salir del juego</a></button>
        </div>








</body>

</html>