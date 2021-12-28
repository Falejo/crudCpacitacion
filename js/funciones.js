$(document).ready(function() {


//Registrar y actualizar un usuario
$("#form_registrar").on("submit", function (e) {
    e.preventDefault();

    let datos = $("#form_registrar").serialize();

    $.ajax({
      type: "POST",
      url: "usuarios.php",
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