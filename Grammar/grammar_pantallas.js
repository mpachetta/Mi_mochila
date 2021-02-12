

cont_pantalla_great = `<div class="cont_pantallas"><img src="pen.png" alt="" id="logo" width="150px">
    <h1>GRAMMAR</h1>
    
    <label for="usuName" class="mensaje">¡Te damos la bienvenida!</label>
    <div id="usuName" class="usuName_alt"></div>
    <button class="boton_navegar" id="jugar">JUGAR</button>
    <footer><a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">
    <img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/80x15.png" /></a><br />
    <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Grammar</span> por <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Martín Pachetta</span>
     se distribuye bajo una <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">
     Licencia Creative Commons Atribución-CompartirIgual 4.0 Internacional</a>
     <br/>Icons from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
     </footer>
    </div>`

cont_pantalla_selectGame = `<div class="cont_pantallas">
        <div id="cabecera"></div>
        <h2>Elige el juego</h2>  
        <div class="cont_pantallas_child">
        <div><img src="select_masculino-y-femenino.png" class="select_game" alt="">
        <input type="button" class="boton_select" value="Singular"></div>
        <div><img src="select_masculino-y-femenino.png" alt="" class="select_game">
        <input type="button" class="boton_select" value="Plural"></div>
        <div><img src="select_singular-y-plural2.png" alt="" class="select_game">
        <input type="button" class="boton_select" value="Singular/Plural"></div>
</div>
<div class="b_usuname" id="b_salir"><a href="../zona_juegos.php" style="text-decoration:none;">Salir del juego</a></div>
</div>`

cont_pantalla_premios = `<div class="cont_pantallas"><img src="img/pen.png" alt="" id="logo_min" width="150px">
        <h1>GRAMMAR</h1>
        <label for="usuName2" class="mensaje">¡Felicitaciones!</label>
        <div id="usuName_alt"></div>
        <div id="puntaje"></div>
        <div id="premios"></div>
        <div id="aviso"></div>
        <form action="set_puntos.php" method="post" name="punteador" id="punteador">
        <input type="hidden" name="pts_logrados" id="pts_logrados" value=20>
        <input type="submit" id="salir_premios" value="CONTINUAR"></input>'
       </form>
        
        </div>`

cont_pantalla_game = `<div class="cont_pantallas">
<div id="puntaje">
<div id="cajaUsu"></div>
<div id="descriptor"></div>
<div id="pts"></div>

</div>
<div id="display">


</div>

<div id="botonera">
<input type="button" id="btn_la" value="la" style="background-color: crimson;">
<input type="button" id="btn_el" value="el" style="background-color: rgb(100, 221, 84);">
<input type="button" id="btn_las" value="las" style="background-color: rgb(20, 140, 220);">
<input type="button" id="btn_los" value="los" style="background-color: rgb(217, 220, 20);">
</div>
<div id="devolucion"></div>
<div id="navegacion">
<button id='btn_game_volver'>Volver</button></div>`



resultado_msg_OK="MUY BIEN";
resultado_msg_bad=`<img src="negative-vote.png" width="64"alt="">`
trofeo=`<img src="../img/won.png" alt="trofeo">`
credito=`<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/80x15.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">GRAMMAR</span> por <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Martín Pachetta</span> se distribuye bajo una <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Licencia Creative Commons Atribución-CompartirIgual 4.0 Internacional</a><br/>Icons from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>`