//https://threejs.org/
$(document).ready(function () {
    // alert('ajax');
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
$(".btnVouchers").click(function(){         $(".addVoucher").show();});
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
    $.post("admin/timeoutAccount",{user: userTimedOut});
    location.reload();
});
$(".btnLogout").click(function (){
    location.assign('connect/logout');
});
$("#all").click(function (){
    if (this.text = 'TODOS'){
        $('.weekDay').prop('checked', true);
        // this.text = 'NENHUM';
    }
    else{
        $('.weekDay').prop('checked', false);
        // this.text = 'TODOS';
    }
});
$(".btnEditVariables").click(function (){
     var $days = [];
    $.each($('.weekDay'), function(){
        if (this.checked){
            // alert($(this).attr('id').toUpperCase());
            $days.push("'"+$(this).attr('id').toUpperCase()+"'");
        }
    })
    $.each($('.inputVariables'), function(){
        if (this.val){
            $valor = this.val;
            alert($valor);
            // alert(this.id);
        }
        // else alert(this.val);
    })
    // alert($days);
    // $.push('Admin/changeVariables',{changedDays: days});
    // location.reload();)
});
$("#btnAddVoucher").click(function (){
    // alert($("#startVoucher").val() + ' 11:24:11');
    if ($("#codeVoucher").val() != "" && 
    $("#discountVoucher").val() != "" && 
    $("#startVoucher").val() != "" &&
    $("#endVoucher").val() != "" && 
    $("#quantityVoucher").val() != "" && 
    $("#descriptionVoucher").val() != "") {
        var post_codeVoucher = $("#codeVoucher").val();
        var post_discountVoucher = $("#discountVoucher").val();
        if ($("#isPercentual").is(':checked')) var post_percentVoucher = '1';
        else var post_percentVoucher = '0';
        var post_startVoucher = $("#startVoucher").val() + ' 00:00:00';
        var post_endVoucher = $("#endVoucher").val() + ' 23:59:59';
        var post_quantityVoucher = $("#quantityVoucher").val();
        var post_descriptionVoucher = $("#descriptionVoucher").val();

        $.post("admin/addVoucher", {
            codeVoucher: post_codeVoucher,
            discountVoucher: post_discountVoucher,
            percentVoucher: post_percentVoucher,
            startVoucher: post_startVoucher,
            endVoucher: post_endVoucher,
            quantityVoucher: post_quantityVoucher,
            descriptionVoucher: post_descriptionVoucher,
        });
    }
    else alert('campos vazios');
});
