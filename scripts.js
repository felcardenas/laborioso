//ABRIR PAGINAS MENÃš

$(document).ready(function(){

    var pagina = '';
    
    $("#inicio").click(function(){
        pagina = "inicio.php";
        irA(pagina);
    });

    $("#quienessomos").click(function(){
        pagina = "quienessomos.php";
        irA(pagina);
    });

    $("#examenes").click(function(){
        pagina = "examenes.php";
        irA(pagina);
    });

    $("#revisarexamenes").click(function(){
        pagina = "revisarexamenes.php";
        pagina = "enconstruccion.php";
        irA(pagina);
    });

    $("#contacto").click(function(){
        irA(pagina);
    });

    
});

function irA(pagina){
            $("#contenido").load(pagina);      
};
