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
    "abeja",
    "águila",
    "araña",
    "ardilla",
    "armadillo",
    "avestruz",
    "babosa",
    "ballena",
    "búfalo",
    "buitre",
    "burro",
    "caballo",
    "cabra",
    "camaleón",
    "camello",
    "cangrejo",
    "canguro",
    "caracol",
    "castor",
    "cebra",
    "cerdo",
    "cienpies",
    "ciervo",
    "cigüeña",
    "cisne",
    "cocodrilo",
    "comadreja",
    "conejo",
    "cucaracha",
    "delfín",
    "elefante",
    "escarabajo",
    "foca",
    "gallina",
    "gallo",
    "ganso",
    "garza",
    "gato",
    "gorila",
    "halcón",
    "hamster",
    "hipopótamo",
    "hormiga",
    "iguana",
    "jabalí",
    "jirafa",
    "koala",
    "lechuza",
    "león",
    "leopardo",
    "llama",
    "lobo",
    "loro",
    "mapache",
    "mariposa",
    "mono",
    "murciélago",
    "nutria",
    "ñandú",
    "oso",
    "oveja",
    "pantera",
    "pato",
    "pavo",
    "pelícano",
    "perro",
    "picaflor",
    "pulpo",
    "puma",
    "rana",
    "rata",
    "reno",
    "rinoceronte",
    "sapo",
    "serpiente",
    "tiburón",
    "tigre",
    "topo",
    "toro",
    "tortuga",
    "tucán",
    "vaca",
    "zorro",
    "langosta"

];
let pista=[];
function obtener_pista_img(solicitud){
    
        let sintaxis="<img src='img/"+solicitud+".jpg'/>"
        
        return sintaxis;


    }


