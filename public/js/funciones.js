$(document).ready(function(){
    $("#pregunta5").hide();
  });
  $("#pregunta4").change(function(){
    var pregunta4 = $("#pregunta4").val();
    if(pregunta4=="No"){
      $("#lblPregunta5").html('¿Por Qué?');
      $("#pregunta5").show();
      $("#pregunta5").html('<select class="form-control" id="motivo" name="motivo"><option value="0" selected="selected" >Seleccionar</option><option value="No la conozco<">No la conozco</option><option value="No es mi causa">No es mi causa</option><option value="No es buen momento">No es buen momento</option><option value="Aporto a otra Fundacion">Aporto a otra Fundacion</option><option value="No confio en ella">No confio en ella</option><option value="Otra">Otra</option></select>')
    }if((pregunta4=="Si")){
      $("#lblPregunta5").html('¿Cuanto?');
      $("#pregunta5").html('<input class="form-control" id="cantidad" type="text" name="cantidad"  value="">')
    }if(pregunta4==0){
      $("#lblPregunta5").html("");
      $("#pregunta5").show();
    }
  });

  function guardar(){
  $("#pregunta5").on("change",function(){
    var motivo=$("#motivo").val();
    var cantidad=$("#cantidad").val();

    console.log(motivo);
    console.log(cantidad);

  });
  $("#btnGuardar").on("click",function(){
      var motivo=$("#motivo").val();
    var cantidad=$("#cantidad").val();

  var id=$("#cont_id").val();
  var contesta=$("#pregunta1").val();
  var conoce=$("#pregunta2").val();
  var interes=$("#pregunta3").val();
  var dono=$("#pregunta4").val();
  var dur_llamada=$("#dur_llamada").val();
  var comentarios=$("#comentarios").val();

  $.ajax({
    data:{ id:id,
    contesta:contesta,
    conoce:conoce,
    interes:interes,
    dono:dono,
    dur_llamada:dur_llamada,
    comentarios:comentarios,
    motivo:motivo
    },
    url:"{{route('contacto.gestionado')}}",
    type:"POST",
    success: function(response){
      window.location="localhost/Inicio";
    }
  });
});

  }
