$(document).ready(function() {


//Registrar y actualizar un usuario
$("#form_registrar").on("submit", function (e) {
    e.preventDefault();

    let datos = $("#form_registrar").serialize();

    $.ajax({
      type: "POST",
      url: "index.php?funcion=agregarEditarUsuario",
      data: datos,

      success: function (data) {

        var datos = JSON.parse(data);

        if (datos.resultado == 1) {

          mostrarAlertaGuardar(
            "Éxito",
            datos.mensaje,
            "success"
          );

        } else {
          mostrarAlertaGuardar("Error!", datos.mensaje, "error");
        }
      },
    });
  });


//Lista una persona para Actualizar
$(".actualizar").click( function(){

  var cod_usuario= $(this).data("cod_usuario");

  cadena = "cod_usuario=" + cod_usuario;
  console.log(cadena);

  $.ajax({
      type:"POST",
      url: "index.php?funcion=listarUsuarioEditar&cod_usuario="+ cod_usuario,
      //url:"editar.php",
      data:cadena,
      
      success: function(data){
        
          if(data != "error"){
            
            //console.log(data);
            var datos = JSON.parse(data);
            //console.log(datos);

            $("#cod_usuario").val(datos.cod_usuario);
            $("#user").val(datos.user);
            $("#nombre").val(datos.nombre);
            $("#email").val(datos.email);
          }
      }

  })
});



//Manejo de botones Gestionar Usuarios
$(".actualizar").on("click", function () {
  $("#editar_usuario").show();
  $("#save_usuario").hide();
});


//Sweet alert para guardar
function mostrarAlertaGuardar(titulo, descripcion, tipoAlerta) {
    Swal.fire(titulo, descripcion, tipoAlerta).then(function () {
      location.reload();
      
    });
  }


//Permite darle manejo a tabla por medio de los atributos del datatable
$("#table_id").DataTable({
           language: {
             processing: "Procesando...",
             lengthMenu: "Mostrar _MENU_ registros",
             infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
             infoFiltered: "(filtrado de un total de _MAX_ registros)",
             zeroRecords: "No se encontraron resultados",
             emptyTable: "Ningún dato disponible en esta tabla",
             info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
             search: "Buscar:",
             infoThousands: ",",
             loadingRecords: "Cargando...",
             paginate: {
               first: "Primero",
               last: "Último",
               next: "Siguiente",
               previous: "Anterior",
             },
           },
         });


 //Finaliza el document ready function
});