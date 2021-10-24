function init(){

  $('#ticket_form').on("submit",function(e){
     guardaryeditar(e);
  });

}

$(document).ready(function() {
    $('#descripcion').summernote({
        height: 150,   //set editable area's height
        lang: 'es-ES',
        placeholder: 'Escribir el detalle...',
        codemirror: { // codemirror options
          theme: 'monokai'
        }
      });

     $.post("../../controller/categoriaController.php?op=combo", function(data,status){
        console.log(data);
        $('#id_categoria').html(data);
     }); 
});

function guardaryeditar(e){
      e.preventDefault();
      var formData = new FormData($('#ticket_form')[0]);
      $.ajax({
        url:"../../controller/ticketController.php?op=insertar",
        type:"POST",
        data:formData,
        contentType:false,
        processData:false,
        success: function(datos){
                         console.log(datos);
                         //swal("Correcto!","Registado Correctamente:","success");
   
                         swal("¡Correcto!", 
                         "Registado Correctamente:", 
                         "success");
                         $('#id_categoria').val('-1');
                         $('#titulo').val('');
                         $('#descripcion').summernote('reset'); //Limpiamos el componente
                         $('#descripcion').summernote('destroy'); // Destruimos el componente
                         $('#descripcion').summernote({
                                                       height: 150,   //set editable area's height
                                                       lang: 'es-ES',
                                                       placeholder: 'Escribir el detalle...',
                                                       codemirror: { // codemirror options
                                                                     theme: 'monokai'
                                                                   }
                                                      }); 
        }
      });

      
/*   swal({ 
    title: "¿Seguro que deseas Registrar el Ticket?", 
    text: "No podrás deshacer este paso...", 
    type: "warning", 
    showCancelButton: true,
    cancelButtonText: "Cancelar", 
    confirmButtonColor: "#DD6B55", 
    confirmButtonText: "Registrar", 
    closeOnConfirm: false }, 
    function(){ 
      e.preventDefault();
      var formData = new FormData($('#ticket_form')[0]);
      $.ajax({
        url:"../../controller/ticketController.php?op=insertar",
        type:"POST",
        data:formData,
        contentType:false,
        processData:false,
        success: function(datos){
                         console.log(datos);
                         //swal("Correcto!","Registado Correctamente:","success");
   
                         swal("¡Correcto!", 
                         "Registado Correctamente:", 
                         "success");
                         $('#id_categoria').val('-1');
                         $('#titulo').val('');
                         $('#descripcion').summernote('reset'); //Limpiamos el componente
                         $('#descripcion').summernote('destroy'); // Destruimos el componente
                         $('#descripcion').summernote({
                                                       height: 150,   //set editable area's height
                                                       lang: 'es-ES',
                                                       placeholder: 'Escribir el detalle...',
                                                       codemirror: { // codemirror options
                                                                     theme: 'monokai'
                                                                   }
                                                      }); 
        }
      });
    }); */
}

init();
