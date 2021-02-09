$(function () {

    // $("#contenedor").prepend('<h1 class="titulo">¿Qué animal es?</h1>');
    // $("#contenedor").prepend('');
    $(".pantallaInicial button").click(niveles);
    $("#b_continuar").click(continuar);



    $("#palabra input").change(resaltar);


    $("#b_check").click(comprobar);




    let sound = document.createElement("AUDIO");

    $("#i_audio[type=checkbox]").on("change", function () {
        
    
        let verCheck = $(this).is(':checked');

        if (verCheck == true) {
            sound.setAttribute("autoplay", "autoplay");
            $("#b_audio").css({
                filter: "none",
                border: "2px solid green",
                
            });

            $("#palabra input").click((e) => {

                let x = e.target.value;
                let locucion = `audio/${x}.mp3`;
                sound.setAttribute("src", locucion);
            });
        } else if (verCheck == false) {

            $("#b_audio").css({
                filter: "grayscale()",
                border: "none"
            });
           

               sound.removeAttribute("autoplay")
            

        };



    });



});



let palabra = [
    "aguja",
    "alacena",
    "almohada",
  
    "aspiradora",
    "balde",
    "baño",
    "batidora",
    
    "botella",
    "broche",
    "cama",
    "cepillo",
   
    "cocina",
    "colchón",
    "cortina",
    "cuadro",
    "cuchara",
    "cucharón",
    "cuchillo",
    "dormitorio",
    "ducha",
    "escoba",
    "estufa",
    "florero",
    "foco",
    "frazada",
    "heladera",
    "inodoro",
    "jabón",
    "lámpara",
    "lampazo",
    "lavarropas",
    "lavatorio",
    "licuadora",
    "llave",
    "maceta",
    "mesa",
    
    "olla",
    "plancha",
    "plato",
    "puerta",
    "reloj",
    "ropero",
    "sábana",
    "sartén",
    "servilleta",
    "silla",
    "sillón",
    "tabla",
    
    "taza",
    "teléfono",
    "televisor",
    "tenedor",
    "toalla",
    "vaso",
    "vela",
    "velador",
    "ventana",
    "ventilador"


];
let pista=[];
function obtener_pista_img(solicitud){
    
        let sintaxis="<img src='img/"+solicitud+".jpg'/>"
        
        return sintaxis;


    }


