$(document).ready(function () {
  $(".orderTab").hide();
  $("#listPendingOrders").show();
});
$('#btnPendingOrders').click(function () {
  $(".orderTab").hide();
  $("#listPendingOrders").show();
});
$('#btnOngoingOrders').click(function () {
  $(".orderTab").hide();
  $("#listOngoingOrders").show();
});
$('#btnFinishedOrders').click(function () {
  $(".orderTab").hide();
  $("#listFinishedOrders").show();
});
$('.confirmar').click(function () {
    var idCard = this.id;
    $.post("deliveryman/confirmarPedido", {idPedido: idCard});
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