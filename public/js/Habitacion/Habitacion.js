

$('#Registro').click(function(){
    RegistrarMotocicleta();
});

$('#file').change(function(){
    // alert("The text has been changed.");
    Vistaprevia();
});


$( "#CrearHabitacion" ).submit(function( event ) {
    event.preventDefault();
    alert("asdad");
    var ruta =window.location.origin +"/Habitacion/";

    var formData = new FormData(document.getElementById("CrearHabitacion"));
    console.log(formData);
    var token = $("#tokCrearHabitacion").val();
        $.ajax({
          url: '/Habitacion',
          type: 'POST',
          headers: {"X-CSRF-TOKEN":token },
          data:formData,
          processData: false,  // tell jQuery not to process the data
          contentType: false, 
          success : function(json) {
            console.log(json);
          },
          error : function(ms) {
    
          },
      });
  });

function Vistaprevia(){
    var archivos = document.getElementById('file').files;
    // var Navegador= window.URL || window.webkitURL;
    for (let index = 0; index < archivos.length; index++) {
       
        var type = archivos[index].type;
        if(type != 'image/jpeg' && type != 'image/png' ){
            alert('Archivo no permitido...');
        }
        var reader = new FileReader();
        reader.onload = function(e){
            $('#list').append("<img src="+e.target.result+" width='100px' heigth='100px'  class='img-thumbnail'>");
        }
  
        reader.readAsDataURL(archivos[index]);
    }
}

function RegistrarMotocicleta(){
    var ruta =window.location.origin +"/Habitacion/";

    var formData = new FormData(document.getElementById("CrearHabitacion")[0]);
    console.log(formData);
    var token = $("#tokCrearHabitacion").val();
        $.ajax({
          url: '/Habitacion',
          type: 'POST',
          headers: {"X-CSRF-TOKEN":token },
          dataType: 'json',
          data:{data: formData},
          cache: false,
          contentType: false,
          processData: false,
          success : function(json) {
            
              console.log(json);
              
            // if($('.Error-formulario').length == 0) {
            //     $('.Error-formulario').remove();
            // }
            // $('#modalMenssaje').modal('open');
          },
          error : function(ms) {
            // if(ms.responseJSON.placa != null){
            //     $('#msPlaca').html('<p class ="Error-formulario">'+ms.responseJSON.placa+'</p>');
            // }
            // if(ms.responseJSON.cilindrada != null){
            //     $('#msCilindrada').html('<p class ="Error-formulario">'+ms.responseJSON.cilindrada+'</p>');
            // }
            // if(ms.responseJSON.color != null){
            //     $('#msColor').html('<p class ="Error-formulario">'+ms.responseJSON.color+'</p>');
            // }
          },
      });
  }

function CrearHabitacion(){
    var token = $("#tokenMotoRegis").val();
    var ruta =  window.location.origin +"/Dispositivo/";
    $.ajax({
          url: ruta,
          type: 'POST',
          headers: {"X-CSRF-TOKEN":token },
          dataType: 'json',
          data:{id:$('#idDisp').val()},
          
          success : function(json) {
            RegistrarMotocicleta();
            
            if($('.Error-formulario').length == 0) {
                $('.Error-formulario').remove();
            }
          },
          error : function(ms) {
          
            if(ms.responseJSON.id != null){
                $('#msidDisp').html('<p class ="Error-formulario">'+ms.responseJSON.id+'</p>');
            }
          },
      });
  }