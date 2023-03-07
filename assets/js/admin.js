$(document).ready(function(){
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
    $.post("<?php echo base_url(); ?>speedlog/index.php/admin/registerUser");
});