$(document).ready(function(){

console.log("inicializado....")
$("#botaotrocatela").click(function () {
    window.location.href ="http://localhost:8080/projeto_final/index.php/home/trocartela/view_clientes";
    ;
});
$("#botaoacompanhar").click(function () {
    window.location.href ="http://localhost:8080/projeto_final/index.php/home/trocartela/view_acompanha";
    ;
});
$("#botaohistorico").click(function () {
    window.location.href ="http://localhost:8080/projeto_final/index.php/home/trocartela/view_historico";
    ;
});

});
function teste() {

        var cep=$("#cepentrega").val();
        var cep2=$("#cepretirada").val();

         
    
      console.log(cep);   
      if (cep!="") {
        //USO DE API DE DISTANCIA

           $.get( "https://api.distancematrix.ai/maps/api/distancematrix/json?origins="+cep2+"&destinations="+cep+"&key=bO1hA46Uj3fWyoqArNhwRvZbQ6hZv", function( data ) {
            if (data!= "") {
                var distancia =data['rows'][0]['elements'][0]['distance']['text'];
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

