$(document).ready(function () {
	$(".informacaoPagamento").hide();
	$("#valor").hide();
	$("#tempoEstimado").hide();
	$("#numeroCartao").mask("0000 0000 0000 0000");
	$("#dataValidade").mask("00/00");
	$("#cvv").mask("000");
	$('#cepretirada').mask('00000-000');
	$('#cepentrega').mask('00000-000');
	$('#altura').mask('0.00');
	$('#largura').mask('0.00');
	$("#valor_entrega").hide();
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
	$(".btnPagar").click(function () {
		$(".informacaoPagamento").show();
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
function verificar_peso() {
	var peso = $("#peso").val();
	$("#peso").css('background', 'red');
	parseInt(peso);
	if (peso>12) {
	$("#divPeso").html("Não é permitido cargas com esse porte.");
	$("#divPeso").show();


	}else{
	$("#peso").css('background', 'white');
	$("#divPeso").hide();

	}
}
// calculo de valor do pedido
function teste() {
	var cep = $("#cepentrega").val();
	var cep2 = $("#cepretirada").val();
	var peso = $("#peso").val();
	parseInt(peso);
	if (peso>12) {
		console.log("peso dms");
		
	}
	if (cep != "") {
		//USO DE API DE DISTANCIA
		$.get("https://api.distancematrix.ai/maps/api/distancematrix/json?origins=" + cep2 + "&destinations=" + cep + "&key=EcQvMZeILr23cq8aw6nausfBMUMl5", function (data) {
			console.log(data);
			if (data != "") {
				
				var distancia = data['rows'][0]['elements'][0]['distance']['text'];
				var tempo = data['rows'][0]['elements'][0]['duration']['text'];
				console.log(data);
				
				var numsStr = tempo.replace(/[^0-9]/g, '');
				$("#tempoEstimado").val(numsStr);

				$.post("client/calculo", {
					distancia_cal: distancia,
					tempo_cal: numsStr,
					peso_cal: peso
				}, function (resposta) {
					$("#divcep2").html("distancia entre os pontos: " + distancia + "Tempo estimado de chegada: " + tempo + " Valor estimado de frete: " + resposta + "")
					$(".total").html(resposta);
					$("#valor_entrega").val(resposta);
				});
			}
		});
		// USO DE API DE LOCALIZAÇÃO
		var cepmeu=cep;

		$.get( "https://viacep.com.br/ws/"+ cepmeu +"/json/?data=?", function( data2 ) {
		    $("#ruaEntrega").val(data2['logradouro']);
		    // console.log("data2");
			
		});

		
	}
	if (cep2 || cep == "") {
		$("#divcep").html("digite um cep valido!");
	}

}
function preencherCep1() {
	var cepmeu2 = $("#cepretirada").val();

	$.get( "https://viacep.com.br/ws/"+ cepmeu2 +"/json/?data=?", function( data3 ) {
		    $("#ruaRetirada").val(data3['logradouro']);
		    // console.log("data2");
			
		});
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



 