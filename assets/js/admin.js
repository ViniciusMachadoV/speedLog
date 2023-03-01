$(document).ready(function(){
    // alert("teste ajax");
    $(".listDeliveryman").hide();
    $(".listDeliveries").hide();
    $(".registerAdmins").hide();
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