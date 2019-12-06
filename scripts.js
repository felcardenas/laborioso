//ABRIR PAGINAS MENÃš
$(document).ready(function(){

    var pagina = '';
    
    $("#inicio").click(function(){
        quitarClases();
        $(this).addClass('seleccionado');
        
        pagina = "inicio.php";
        confirmar(pagina);
    });

    $("#quienessomos").click(function(){
        quitarClases();
        $(this).addClass('seleccionado');
        

        pagina = "quienessomos.php";
        confirmar(pagina);
    });

    $("#examenes").click(function(){
        quitarClases();
        $(this).addClass('seleccionado');
        
        pagina = "examenes.php";
        confirmar(pagina);
    });

    $("#revisarexamenes").click(function(){
        quitarClases();
        $(this).addClass('seleccionado');
        
        pagina = "revisarexamenes.php";
        pagina = "enconstruccion.php";
        confirmar(pagina);
    });

    $("#contacto").click(function(){
        quitarClases();
        $(this).addClass('seleccionado');
    });

    
});

function quitarClases(){
    $("#inicio").removeClass('seleccionado');
    $("#quienessomos").removeClass('seleccionado');
    $("#examenes").removeClass('seleccionado');
    $("#revisarexamenes").removeClass('seleccionado');
    $("#contacto").removeClass('seleccionado');        
};

function confirmar(pagina){
            $("#contenido").load(pagina);      
};
