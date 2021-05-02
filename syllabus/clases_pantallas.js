class Pantallas {

    constructor(nombreJuego,detalleJuego,rutaLogo) {

        //pantalla
        this.cont_pantalla = document.createElement('DIV');
        this.cont_pantalla.setAttribute('class', 'cont_pantallas');
        document.body.appendChild(this.cont_pantalla)

        this.nombre_juego = document.createElement('H1');
        this.nombre_juego.innerText = nombreJuego;
        
        this.detalle_juego = document.createElement('H3'); 
        this.detalle_juego.innerText = detalleJuego;

        this.logo = document.createElement('IMG');
        this.logo.setAttribute('id', 'logo');
        this.logo.setAttribute('width', '150px');
        this.logo.setAttribute('src', rutaLogo)
    }

    pantalla_ini(rutaLogo) {

        //logo

        

        this.cont_pantalla.appendChild(this.logo);

        //nombre del juego
        
        

        this.cont_pantalla.appendChild(this.nombre_juego);
        this.cont_pantalla.appendChild(this.detalle_juego);

 


        //boton
        this.boton = document.createElement('BUTTON');
        this.boton.setAttribute('class', 'boton_navegar');
        this.boton.setAttribute('id', 'jugar');
        this.boton.innerText = 'JUGAR';
        this.cont_pantalla.appendChild(this.boton);
    }

    clean() {

        while(this.cont_pantalla.lastChild){
            this.cont_pantalla.removeChild(this.cont_pantalla.lastChild);
        }
    }
    pantalla_selectGame() {

        //caja para usuario
        //load php

        this.caja_usuario = document.createElement('DIV');
        this.cont_pantalla.appendChild(this.caja_usuario);
        this.caja_usuario.innerText = "Martin";

        //titulo de pantalla
        this.tit_pantalla=document.createElement('H2');
        this.tit_pantalla.innerText="Elige el juego";
        this.cont_pantalla.appendChild(this.tit_pantalla);

        //contenedor de botones
        this.cont_pantallas_child=document.createElement('DIV');
        this.cont_pantallas_child.setAttribute('class','cont_pantallas_child');
        this.cont_pantalla.appendChild(this.cont_pantallas_child);
        



    }
    set_boton(ruta_img,valor){
        this.img_boton_select=document.createElement('IMG');
        this.img_boton_select.setAttribute('class','select_game');
        this.img_boton_select.setAttribute('src',ruta_img);
        this.cont_pantallas_child.appendChild(this.img_boton_select);
        
        this.btn_select=document.createElement('INPUT');
        this.btn_select.setAttribute('type','button');
        this.btn_select.setAttribute('class','boton_select');
        this.btn_select.setAttribute('value',valor);

        this.cont_pantallas_child.appendChild(this.btn_select);
    }

        
    pantalla_game(){

        this.puntaje=document.createElement('DIV');
        this.puntaje.setAttribute('id','puntaje');
                       
        this.descriptor=document.createElement('DIV');
        this.descriptor.setAttribute('id','descriptor');
        
        this.pts=document.createElement('DIV');
        this.pts.setAttribute('id','pts');
        this.pts.innerText='25';

        this.display=document.createElement('DIV');
        this.display.setAttribute('id','display');



        this.cont_pantalla.appendChild(this.puntaje);
        this.puntaje.appendChild(this.caja_usuario);
        this.puntaje.appendChild(this.descriptor);
        this.puntaje.appendChild(this.pts);
        this.cont_pantalla.appendChild(this.display);
        
        this.botonera=document.createElement('DIV');
        this.botonera.setAttribute('id','botonera');
        this.cont_pantalla.appendChild(this.botonera);

    }
    
    set_boton_game(id,value,color){


        this.boton_game=document.createElement('INPUT');
        this.boton_game.setAttribute('type','button');
        this.boton_game.setAttribute('id',id);
        this.boton_game.setAttribute('value',value);
        this.boton_game.style.backgroundColor=color;
        this.botonera.appendChild(this.boton_game);
    }
        
 
    set_imagen_game(src){

        this.imagen_game=document.createElement('IMG');
        this.imagen_game.setAttribute('src',src);
        this.imagen_game.setAttribute('width','200px');
        this.display.appendChild(this.imagen_game);

    }
            
        


    
}

