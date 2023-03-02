$(document).ready(function(){
  function desabilitarbotao() {
    $('#btn_ex').prop('disabled', true);
  }
  function timeout_desabilitar_botao() {
    timeout = setTimeout(desabilitarbotao, 3000);
  }
  timeout_desabilitar_botao();
    $("#form_client").hide();
    $("#acompanhar").hide();
    $("#historico").hide();
$("#botaotrocatela").click(function () {
    $("#form_client").show();
      $("#acompanhar").hide();
    $("#historico").hide();
});
$("#botaoacompanhar").click(function () {
    $("#acompanhar").show();
    $("#historico").hide();
    $("#form_client").hide();
});
$("#botaohistorico").click(function () {
    $("#historico").show();
      $("#form_client").hide();
    $("#acompanhar").hide();
});
});
//Desabilita o botao de excluir
function teste() {
      var cep=$("#cepentrega").val();
      var cep2=$("#cepretirada").val();
      console.log(cep);   
      if (cep!="") {
        //USO DE API DE DISTANCIA
           $.get( "https://api.distancematrix.ai/maps/api/distancematrix/json?origins="+cep2+"&destinations="+cep+"&key=c40WtSqfR8we6DH4qToJKMvtfbCDE", function( data ) {
            if (data!= "") {
                var distancia =data['rows'][0]['elements'][0]['distance']['text'];
                var tempo =data['rows'][0]['elements'][0]['duration']['text'];
                //['rows'][0]['elements'][0]['distance']['text']
                //['rows'][0]['elements'][0]['duration']['text']
          console.log(distancia);
          console.log(tempo);
            $("#divcep2").html("distancia entre os pontos: "+ distancia +"Tempo estimado de chegada: " +tempo+"")
            $("#divcep2").html("distancia entre os pontos: "+ distancia);
            }
        });
        //USO DE API DE LOCALIZAÇÃO
        var cepmeu="36108000"
        
        $.get( "https://viacep.com.br/ws/"+ cepmeu +"/json/?data=?", function( data2 ) {
            console.log(data2);

            // $("#divcep2").html(cep);
        });
      } 
      if(cep2||cep == ""){
            $("#divcep").html("digite um cep valido!");
      }
}