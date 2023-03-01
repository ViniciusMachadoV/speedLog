$(document).ready(function () {
  // $(".signUpType").hide();
  // $(".signUp").hide();
});
$('.confirmar').click(function () {
  var idCard = this.id;
      $.post("deliveryman/confirmarPedido", {idPedido: idCard});
      location.reload();
});