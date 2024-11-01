$(function () {


    let nombre_usuario = "";
    let juegoElegido = ""
    let actual_lista = []
    let progreso=0;
    let puntaje = 0;
    let niveles=0;
    let avance=0;
 
    let sound = document.createElement("AUDIO");


    //Pantalla inicial
    pantalla_ini = () => {
        $("#pantallas").append(cont_pantalla_ini);
        $(".cont_pantallas").addClass("w3-animate-opacity");
        $("footer").append(credito)
        $("#usuName").keydown(() => {
            $("#entrar").attr("disabled", false)
        })
        $("#pantallas #entrar").on("click", () => {
            nombre_usuario = $("#usuName").val();
            pantalla_great(nombre_usuario);
        })
    }


    //Pantalla saludo
    pantalla_great = (x) => {
        $("#pantallas").empty().append(cont_pantalla_great)
        $(".cont_pantallas").addClass("w3-animate-opacity")
        $("#usuName_alt").val(x);

        $("#jugar").on("click", () => {
            pantalla_selectGame();
        })
    }


    //     //Pantalla seleccionar juego
    pantalla_selectGame = () => {
        $("#pantallas").empty().append(cont_pantalla_selectGame)
        $(".cont_pantallas").addClass("w3-animate-opacity")
        $("footer").empty()


        $(".boton_select").on("click", selector)
    }

    let selector = (e) => {
        juegoElegido = e.target.value;
        if (juegoElegido == "Singular") {

            pantalla_game_articulos(lista_singular);
            $("#btn_las").attr("disabled", "disabled").css("background-color", "lightgray")
            $("#btn_los").attr("disabled", "disabled").css("backgroundColor", "lightgray")
        }
        if (juegoElegido == "Plural") {

            pantalla_game_articulos(lista_plural);
            $("#btn_la").attr("disabled", "disabled").css("background-color", "lightgray")
            $("#btn_el").attr("disabled", "disabled").css("backgroundColor", "lightgray")

        }
        if (juegoElegido == "Singular/Plural") {

            pantalla_game_articulos(lista_singular_plural);
          
        }


    }


        //Pantalla informa puntos y trofeos
        pantalla_premios = (x) => {
            $("#pantallas").empty().append(cont_pantalla_premios)
            $(".cont_pantallas").addClass("w3-animate-opacity")
            $("#usuName_alt").val(x);
            $("#puntaje").append(puntaje, " puntos")
    

            $("#salir_premios").click(() => {
                pantalla_selectGame();
            })

        }

        //Sección resultados
        resultado = (msg) => {

            $("#devolucion").append(msg)
            .addClass("w3-animate-opacity")
            
                        
                if (msg == resultado_msg_OK) {
                    puntaje+=10;
                    niveles++
                   } else {
                        puntaje=puntaje
                    }
               
            }


        


    // //Determina aleatorio
    aleatorio = (x) => {


        let y = Math.round(Math.random() * x - 1)
        while (y == -1 || y == -0) {
            y = Math.round(Math.random() * x - 1)
        }
        return y

    }

    //     //Barra de progreso

    //     progresar = (valor) => {
    //         porcentaje = valor * 30
    //         $("#barra").css("width", porcentaje)

    //     }

    //     let y = aleatorio(instrumentos_name.length);

    let relacionar = (event) => {

        x = event.target.value
        y = $("#display input").val()
        if (x == y) {
            resultado(resultado_msg_OK)
        }

        if(progreso<10){

            if (juegoElegido == "Singular") {

                pantalla_game_articulos(lista_singular);
                $("#btn_las").attr("disabled", "disabled").css("background-color", "gray")
                $("#btn_los").attr("disabled", "disabled").css("backgroundColor", "gray")
            }
            if (juegoElegido == "Plural") {
    
                
                pantalla_game_articulos(lista_plural);
                $("#btn_la").attr("disabled", "disabled").css("background-color", "gray")
                $("#btn_el").attr("disabled", "disabled").css("backgroundColor", "gray")
    
            }
            if (juegoElegido == "Singular/Plural") {
    
                
                pantalla_game_articulos(lista_singular_plural);
               
    
            }

        }else{

            
            pantalla_premios(nombre_usuario);
            actual_lista = []

}

    }

    //     //Pantalla Masculino/Femenino

    pantalla_game_articulos = (lista) => {


        $("#pantallas").empty().append(cont_pantalla_game)
        $("#cajaUsu").append(nombre_usuario)
        $(".cont_pantallas").addClass("w3-animate-opacity")
        $("#descriptor").append(`Nivel: ${avance}`)
        let y = 0


        darContenido = () => {
            y = aleatorio(lista.length)

            $("#display").empty()
            $("#display").append(lista[y])

            actual_lista.push(lista[y])
            console.log(lista)
            $("#botonera input").click(relacionar)

           
            $("#pts").append(puntaje)
            if (niveles>10){
                avance++
                
                niveles=0
            }
            progreso = actual_lista.length


        }

        $("#btn_game_volver").click(pantalla_selectGame).click(() => {
 
                        actual_lista = []
                    })


        darContenido()
    }


    pantalla_ini();
});

