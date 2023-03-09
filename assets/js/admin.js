$(document).ready(function () {
	$("#cpfAdmin").mask("000.000.000-00");
	$("#telefoneAdmin").mask("(00)0 0000-0000");
    $(".tabAdmin").hide();
    $(".listDeliveryman").show();
});
$(".tabBtn").click(function(){
    $(".tabAdmin").hide();
});
$(".btnListDeliveryman").click(function(){
    $(".listDeliveryman").show();
});
$(".btnListDeliveries").click(function(){
    $(".listDeliveries").show();
});
$(".btnRegisterAdmins").click(function(){
    $(".registerAdmins").show();
});
$(".adjustServicesVariables").click(function(){
    $(".adjustServicesVariables").show();
});