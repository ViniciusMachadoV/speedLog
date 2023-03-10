$(document).ready(function () {
	$("#cpfAdmin").mask("000.000.000-00");
	$("#telefoneAdmin").mask("(00)0 0000-0000");
    $(".tabAdmin").hide();
    $(".listDeliveryman").show();
});
$(".tabBtn").click(function(){              $(".tabAdmin").hide()});
$(".btnListDeliveryman").click(function(){  $(".listDeliveryman").show();});
$(".btnListDeliveries").click(function(){   $(".listDeliveries").show();});
$(".btnListClients").click(function(){      $(".listClients").show();});
$(".btnRegisterAdmins").click(function(){   $(".registerAdmins").show();});
$(".btnAdjustVariables").click(function(){  $(".adjustVariables").show();});
$(".btnReports").click(function(){          $(".listReports").show();});
$("#btnCadastrarAdmin").click(function (){
    if ($("#nomeCompleto").val() != "" && 
    $("#emailAdmin").val() != "" && 
    $("#cpfAdmin").val() != "" && 
    $("#apelidoAdmin").val() != "" &&
    $("#telefoneAdmin").val() != "" && 
    $("#senhaAdmin").val() != "" && 
    $("#senhaAdmin").val() == $("#ConfSenhaAdmin").val()) {
        var post_nomeAdmin = $("#nomeCompleto").val();
        var post_emailAdmin = $("#emailAdmin").val();
        var post_cpfAdmin = $("#cpfAdmin").val();
        var post_apelidoAdmin = $("#apelidoAdmin").val();
        var post_telefoneAdmin = $("#telefoneAdmin").val();
        var post_senhaAdmin = $("#senhaAdmin").val();

        $.post("admin/registerAdmin", {
            nome: post_nomeAdmin,
            email: post_emailAdmin,
            cpf: post_cpfAdmin,
            apelido: post_apelidoAdmin,
            telefone: post_telefoneAdmin,
            senha: post_senhaAdmin,
        });
    }
});
$(".btnTimeOut").click(function (){
    var userTimedOut = this.id;
    alert(this.id);
    $.post("admin/timeoutAccount",{user: userTimedOut});
    // location.reload();
});