<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    $(function(){

        let modificar_puntaje = (event,puntos)=>{

        
             //para que el submit no me lleve a otra página
           event.preventDefault();
            
            //empaquetar datos
            var datos_puntaje={puntos:puntos};

            $.get('set_puntos.php',datos_puntaje,procesarDatos).error(verErrores);
            
           
        }
        

        //creamos ufncion para procesar la informacion que nos devuelva el servidor
        function procesarDatos (datos_devueltos){

         console.log(datos_devueltos);


        }

        function verErrores(){

            var msg="Ooops, ocurrió un error inesperado";

            $("#respuesta").html("<p>"+msg+"</p>");


        }

    

    });