
$(function () {
    
    // let n_usuario;
    let listas = new Array();
let locuciones = new Array();
    let memoria = [];
    let memoria_pizarra = [];
    let sound = document.createElement("AUDIO");
    let sound1 = document.createElement("AUDIO");
    let correcto = [];
    
    let puntos = 0;
    let nivel = 0;
    let avance = 0;
    
    // $("#iniciar").attr("disabled", true);
    
    // $("#usuName input").keyup(() => {
    //     $("#iniciar").attr("disabled", false);
    // });
    

    let leoSolo = $("#leoSolo");

    $("#iniciar").click(() => {
        // n_usuario = $("#usuName input").val();
        
         $("#usuName").css("display", "none");
        $("#pantallaIni").css("display", "flex");
        
        $(".mensaje").after(`<p id="n_usuario">${n_usuario}</p>`);
        $("#usuarioAvance").append(`<p id="usuarioSmall">${n_usuario}</p>`);
    });
    
    $("#niveles div button").click(selectorNivel);

    function limpieza(){
        $("#pizarra").empty();
        $("#tablero button").css({
            backgroundColor: "white",
            color: "black"
        }).attr("disabled", false);
        $("#tablero").empty();
        memoria = [];
        memoria_pizarra = [];
        correcto=[];
        palabras_aleatorias=[];
        
    }

    function selectorNivel(e) {

        limpieza();

        let x = e.target.value;

        switch (x) {
            case "inicio":
                listas = l_inicio;
                locuciones = loc_inicio;
                break;
            case "personas":
                listas = l_personas;
                locuciones = loc_personas;
                break;
            case "casa":
                listas = l_casa;
                locuciones = loc_casa;
                break;
            case "mascotas":
                listas = l_mascotas;
                locuciones = loc_mascotas;
                break;
            case "escuela":
                listas = l_escuela;
                locuciones = loc_escuela;
                break;
            case "comida":
                listas = l_comida;
                locuciones = loc_comida;
                break;
            default:
                break;
        }
         
        
        $("#jugar").attr("disabled",false);

        
    };


    $("#locucionOracion").click(locutar)
        .mousedown(function () {
            $("#locucionOracion").css("backgroundImage", "url('image/voiceC.png')")
        }).mouseup(function () {
            $("#locucionOracion").css("backgroundImage", "url('image/voice.png')")
        });
    $("#jugar").click(darOracion);
    $("#continuar").click(()=>{
        $("#puntos_logrados").val(puntos);
        if(puntos < 100){

            limpieza();

            darOracion();
        }else{
            $("#pantallaCont").css("display","flex");
            
            // avance= avance+100;
            
            // $("#rellenoBarra").css("width",avance);
            puntos=0;
            nivel=0;
            avance=0;
            listas=[];
            $("#rellenoBarra").css("width",avance);
        }});
    $(".irNiveles").click(() => {
        
        $("#jugar").attr("disabled", true);
        
        $("#pantallaNiv").css("display", "flex");
        
        locuciones=[];
        correcto=[];
    });
    $("#reintentar").click(() => {
        $("#nuevoIntento").attr("display", "none")
    });
    $("#reintentar").click(() => {
        $("#nuevoIntento").css("display", "none");
    })






    function darOracion() {
        
        $("#pantallaCont").css("display", "none");
        $("#pantallaIni").css("display", "none");
        $("#pantallaNiv").css("display", "none");
        $("#pantallaEval").css("display", "none");
        
        correcto = listas[nivel].slice();
        lista_mezcla= listas[nivel].slice();
        
        let palabras_aleatorias = shuffle(lista_mezcla);

        for (i = 0; i < palabras_aleatorias.length; i++) {

            $("#tablero").append(`<button value="${palabras_aleatorias[i]}">${palabras_aleatorias[i]}</button>`);
        };

        locutar();

        $("#tablero button").click((e) => {
            if (leoSolo.val() == 1) {
                sound.setAttribute("autoplay", "autoplay");
            };
            let x = e.target.value;

            let locucion = `sound/${x}.mp3`;

            if (x == "con") {
                locucion = "sound/kon.mp3";
            };
            sound.setAttribute("src", locucion);
           
        });


        $("#tablero button").click((e) => {

            let y = e.target.value;
            memoria_pizarra.push(y);

            let s1 = memoria_pizarra.length - 1;
            $("#pizarra").append(`<p>${memoria_pizarra[s1]}</p>`);

            let z = e.target;
            $(z).css({
                backgroundColor: "lightgray",
                color: "lightgray"
            }).attr("disabled", true);

            memoria.push(z);
            $("#comprobar").attr("disabled", false);
        });

    };


    function shuffle(array) {
        var currentIndex = array.length,
            temporaryValue, randomIndex;

        // Mientras queden elementos a mezclar...
        while (0 !== currentIndex) {

            // Seleccionar un elemento sin mezclar...
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            // E intercambiarlo con el elemento actual
            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }

        return array;
    };

    $("#borrar").click(() => {
        let s = memoria.length - 1;
        $(memoria[s]).css({
            backgroundColor: "white",
            color: "black"
        }).attr("disabled", false);
        memoria.pop(memoria[s]);
        memoria_pizarra.pop()
        let parrafosPizarra = $("#pizarra p");
        let long = parrafosPizarra.length - 1;
        $(parrafosPizarra[long]).remove();

    })
   


    $("#comprobar").click(() => {
        
        let aciertos = [];

        for (var i = 0; i < correcto.length; i++) {
            evaluacion = correcto[i].includes(memoria_pizarra[i]);
            aciertos.push(evaluacion);
            
        }
        // evalúo los aciertos comparando ambos arrays posición por posición y luego verifico
        // que las comparaciones sean todas true.
        let verificar = aciertos.includes(false);


        // verificar devuelve false si no hay ningún false y true si encuentra uno, por lo tanto, si arroja true es porque hay un false, o sea, un error.
        if (verificar == false) {

            puntos = parseInt(puntos) + 10;
            avance= avance+30;
            
            $("#rellenoBarra").css("width",avance);
            
            
            $("#pts").empty().append(puntos);
            nivel = nivel + 1;
            // $("#pizarra").empty();
            // $("#tablero button").css({
            //     backgroundColor: "white",
            //     color: "black"
            // }).attr("disabled", false);
            // $("#tablero").empty();
            // memoria = [];
            // memoria_pizarra = [];
            $("#pantallaEval").css("display", "flex");

            $("#comprobar").attr("disabled", true);
        } else {
            
            
            $("#nuevoIntento").css("display", "flex");
        }
    });

    function locutar() {

        sound1.setAttribute("autoplay", "autoplay");
        sound1.setAttribute("src", locuciones[nivel]);
        

    };


});