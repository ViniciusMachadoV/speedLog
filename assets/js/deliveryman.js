
$(document).ready(function () {
  $("#pendente").show();
  $("#atual").hide();
  $("#lucro").show();
});
$('#pedidoP').click(function () {
  $("#pendente").show();
  $("#concluido").hide();
  $("#atual").hide();
  $("#lucro").hide();
});
$('#pedidoA').click(function () {
  $("#atual").show();
  $("#pendente").hide();
  $("#concluido").hide();
  $("#lucro").hide();
});
$('#pedidoC').click(function () {
  $("#pendente").hide();
  $("#atual").hide();
  $("#concluido").show();
  $("#lucro").hide();
});
$('#ganhos').click(function () {
  $("#pendente").hide();
  $("#atual").hide();
  $("#concluido").hide();
  $("#lucro").show();
});
$('.confirmar').click(function () {
  $.post("deliveryman/confirmarPedido",{entregaId:this.id});
  location.reload();

});
$('.cancelar').click(function () {
  $.post("deliveryman/cancelarPedido",{entregaId:this.id});
  location.reload();

});
$('.concluir').click(function () {
  $.post("deliveryman/concluirPedido",{entregaId:this.id});
  location.reload();

});
$('.mostrar').click(function () {
  $.post("deliveryman/mostrarLucro",{entregaId:this.id});
  location.reload();
});