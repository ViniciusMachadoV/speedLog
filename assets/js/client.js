$(document).ready(function(){
  function desabilitarbotao() {
    // $("#btn_ex").disabled = true;
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
           $.get( "https://api.distancematrix.ai/maps/api/distancematrix/json?origins="+cep2+"&destinations="+cep+"&key=bO1hA46Uj3fWyoqArNhwRvZbQ6hZv", function( data ) {
            if (data!= "") {
                var distancia =data;
                //['rows'][0]['elements'][0]['distance']['text']
          console.log(distancia);
            $("#divcep2").html("distancia entre os pontos: "+ distancia);
            }
        });
        //USO DE API DE LOCALIZAÇÃO
        
        // $.get( "https://viacep.com.br/ws/"+ cep +"/json/?data=?", function( data2 ) {
        //     console.log(data2);

        //     $("#divcep2").html(cep);
        // });
      } 
      if(cep2||cep == ""){
            $("#divcep").html("digite um cep valido!");
      }
}