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


let pista = [
    "<img src='img/abeja.jpg'/>",
    "<img src='img/águila.jpg'/>",
    "<img src='img/araña.jpg'/>",
    "<img src='img/ardilla.jpg'/>",
    "<img src='img/armadillo.jpg'/>",
    "<img src='img/avestruz.jpg'/>",
    "<img src='img/babosa.jpg'/>",
    "<img src='img/ballena.jpg'/>",
    "<img src='img/búfalo.jpg'/>",
    "<img src='img/buitre.jpg'/>",
    "<img src='img/burro.jpg'/>",
    "<img src='img/caballo.jpg'/>",
    "<img src='img/cabra.jpg'/>",
    "<img src='img/camaleón.jpg'/>",
    "<img src='img/camello.jpg'/>",
    "<img src='img/cangrejo.jpg'/>",
    "<img src='img/canguro.jpg'/>",
    "<img src='img/caracol.jpg'/>",
    "<img src='img/castor.jpg'/>",
    "<img src='img/cebra.jpg'/>",
    "<img src='img/cerdo.jpg'/>",
    "<img src='img/cienpies.jpg'/>",
    "<img src='img/ciervo.jpg'/>",
    "<img src='img/cigueña.jpg'/>",
    "<img src='img/cisne.jpg'/>",
    "<img src='img/cocodrilo.jpg'/>",
    "<img src='img/comadreja.jpg'/>",
    "<img src='img/conejo.jpg'/>",
    "<img src='img/cucaracha.jpg'/>",
    "<img src='img/delfín.jpg'/>",
    "<img src='img/elefante.jpg'/>",
    "<img src='img/escarabajo.jpg'/>",
    "<img src='img/foca.jpg'/>",
    "<img src='img/gallina.jpg'/>",
    "<img src='img/gallo.jpg'/>",
    "<img src='img/ganso.jpg'/>",
    "<img src='img/garza.jpg'/>",
    "<img src='img/gato.jpg'/>",
    "<img src='img/gorila.jpg'/>",
    "<img src='img/halcón.jpg'/>",
    "<img src='img/hamster.jpg'/>",
    "<img src='img/hipopótamo.jpg'/>",
    "<img src='img/hormiga.jpg'/>",
    "<img src='img/iguana.jpg'/>",
    "<img src='img/jabalí.jpg'/>",
    "<img src='img/jirafa.jpg'/>",
    "<img src='img/koala.jpg'/>",
    "<img src='img/lechuza.jpg'/>",
    "<img src='img/león.jpg'/>",
    "<img src='img/leopardo.jpg'/>",
    "<img src='img/llama.jpg'/>",
    "<img src='img/lobo.jpg'/>",
    "<img src='img/loro.jpg'/>",
    "<img src='img/mapache.jpg'/>",
    "<img src='img/mariposa.jpg'/>",
    "<img src='img/mono.jpg'/>",
    "<img src='img/murciélago.jpg'/>",
    "<img src='img/nutria.jpg'/>",
    "<img src='img/ñandú.jpg'/>",
    "<img src='img/oso.jpg'/>",
    "<img src='img/oveja.jpg'/>",
    "<img src='img/pantera.jpg'/>",
    "<img src='img/pato.jpg'/>",
    "<img src='img/pavo.jpg'/>",
    "<img src='img/pelícano.jpg'/>",
    "<img src='img/perro.jpg'/>",
    "<img src='img/picaflor.jpg'/>",
    "<img src='img/pulpo.jpg'/>",
    "<img src='img/puma.jpg'/>",
    "<img src='img/rana.jpg'/>",
    "<img src='img/rata.jpg'/>",
    "<img src='img/reno.jpg'/>",
    "<img src='img/rinoceronte.jpg'/>",
    "<img src='img/sapo.jpg'/>",
    "<img src='img/serpiente.jpg'/>",
    "<img src='img/tiburón.jpg'/>",
    "<img src='img/tigre.jpg'/>",
    "<img src='img/topo.jpg'/>",
    "<img src='img/toro.jpg'/>",
    "<img src='img/tortuga.jpg'/>",
    "<img src='img/tucán.jpg'/>",
    "<img src='img/vaca.jpg'/>",
    "<img src='img/zorro.jpg'/>",


];
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

];

