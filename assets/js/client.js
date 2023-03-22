$(document).ready(function () {
	$('#exampleModal').modal('show');


	$('#cepretirada').mask('00000-000');
	$('#cepentrega').mask('00000-000');
	$('#altura').mask('0.00');
	$('#largura').mask('0.00');
	

	$("#valor_entrega").hide();

	// function timeout_desabilitar_botao() {
	//   timeout = setTimeout(desabilitarbotao, 3000);
	// }
	// timeout_desabilitar_botao();
	$("#form_client").hide();
	$("#acompanhar").hide();
	$("#historico").hide();
	$("#chat").hide();
	$("#botaotrocatela").click(function () {
		$("#form_client").show();
		$("#acompanhar").hide();
		$("#historico").hide();
	$("#chat").hide();

	});
	$("#botaoacompanhar").click(function () {
		$("#acompanhar").show();
		$("#historico").hide();
		$("#form_client").hide();
	$("#chat").hide();

	});
	$("#botaohistorico").click(function () {
		$("#historico").show();
		$("#form_client").hide();
		$("#acompanhar").hide();
	  $("#chat").hide();

	});
	$("#botaoreclamacoes").click(function () {
		$("#chat").show();
		$("#historico").hide();
		$("#form_client").hide();
		$("#acompanhar").hide();
	});
});
 

function pegarid(aq) {
	$.post("client/cancelar_pedido", {
		id: aq
	}, function (resposta) {
		if (resposta == "0") {
			alert("impossivel excluir");

		}
		if (resposta == "2") {
			alert("excluido");
		}

	});
}

// calculo de valor do pedido
function teste() {
	var cep = $("#cepentrega").val();
	var cep2 = $("#cepretirada").val();
	var peso = $("#peso").val();
	if (cep != "") {
		//USO DE API DE DISTANCIA
		$.get("https://api.distancematrix.ai/maps/api/distancematrix/json?origins=" + cep2 + "&destinations=" + cep + "&key=bO1hA46Uj3fWyoqArNhwRvZbQ6hZv", function (data) {
			if (data != "") {
				
				var distancia = data['rows'][0]['elements'][0]['distance']['text'];
				var tempo = data['rows'][0]['elements'][0]['duration']['text'];
				var numsStr = tempo.replace(/[^0-9]/g, '');
				$.post("client/calculo", {
					distancia_cal: distancia,
					tempo_cal: numsStr,
					peso_cal: peso
				}, function (resposta) {
					$("#divcep2").html("distancia entre os pontos: " + distancia + "Tempo estimado de chegada: " + tempo + " Valor estimado de frete: " + resposta + "")
					$("#valor_entrega").val(resposta);;
				});
				// $("#divcep2").html("distancia entre os pontos: "+ distancia +"Tempo estimado de chegada: " +tempo+"")
				// $("#divcep2").html("distancia entre os pontos: "+ distancia);
			}
		});
		//USO DE API DE LOCALIZAÇÃO
		// var cepmeu="36108000"

		// $.get( "https://viacep.com.br/ws/"+ cepmeu +"/json/?data=?", function( data2 ) {
		//     console.log(data2);

		// $("#divcep2").html(cep);
		// });
	}
	if (cep2 || cep == "") {
		$("#divcep").html("digite um cep valido!");
	}

}
$('#btnMessage').click(function(){
  var message = $("#txtMessage").val();
  $.post("client/adicionarMensagem",{msgAdd:message});
  $("#txtMessage").val('');
  
});
$('.btn_avaliar').click(function(){
	$('#exampleModal').modal('show');
  
});
$('.closeModal').click(function(){
	$('#exampleModal').modal('hide');
  
});

 