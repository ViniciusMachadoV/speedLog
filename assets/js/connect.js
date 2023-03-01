$(document).ready(function(){
    // alert("teste ajax");
    $(".signUpType").hide();
    $(".signUp").hide();
});
$(".btnSignIn").click(function(){
    $("#tabSignUp").removeClass('active');
    $("#tabSignIn").addClass('active');
    $(".signUpType").hide();
    $(".signUp").hide();
    $(".signIn").show();
});
$(".btnSignUp").click(function(){
    $("#tabSignIn").removeClass('active');
    $("#tabSignUp").addClass('active');
    $(".signUpType").show();
    $(".signIn").hide();
    $(".signUp").hide();
});
$(".signUpClient").click(function(){
    $(".deliverymanForm").hide();
    $(".signUpType").hide();
    $(".signUp").show();
    $(".clientCheck").show();
    $(".deliverymanCheck").hide();
});
$(".signUpDeliveryman").click(function(){
    $(".deliverymanForm").show();
    $(".signUpType").hide();
    $(".signUp").show();
    $(".clientCheck").hide();
    $(".deliverymanCheck").show();
});
$("#signIn").click(function(){
    if ($("#user_SignIn").val() != "" && $("#pass_SignIn").val() != "") {
        var userName_signIn = $("#user_SignIn").val();
        var userPass_signIn = $("#pass_SignIn").val();
        if ($("#keepLogged").is(':checked')){
            alert("lembrar login marcado!")
        }
        $.post("index.php/connect/connectUser",{user:userName_signIn,pass:userPass_signIn});
        // $("#user_SignIn").val('');
        // $("#pass_SignIn").val('');
    }
    else alert("um ou mais campos vazios");
    });
$("#signUp").click(function(){
    // FIRST DO A SELECT TO VERIFY IF USERNAME ALREADY EXISTS
    if ($("#name_SignUp").val() != "" && 
    $("#email_SignUp").val() != "" && 
    $("#CPF_SignUp").val() != "" && 
    $("#nickname_SignUp").val() != "" &&
    $("#phoneNumber_SignUp").val() != "" && 
    $("#pass1_SignUp").val() != "" && 
    $("#pass2_SignUp").val() == $("#pass1_SignUp").val()) {
        var name_signUp = $("#name_SignUp").val();
        var email_SignUp = $("#email_SignUp").val();
        var cpf_signUp = $("#CPF_SignUp").val();
        var nickname_SignUp = $("#nickname_SignUp").val();
        var phoneNumber_SignUp = $("#phoneNumber_SignUp").val();
        var pass_SignUp = $("#pass1_SignUp").val();
        // alert(name_signUp + email_SignUp + cpf_signUp + nickname_SignUp + phoneNumber_SignUp + pass_SignUp);
        $.post("<?php echo base_url(); ?>speedlog/index.php/connect/registerUser",{name:name_signUp,email:email_SignUp,cpf:cpf_signUp,nick:nickname_SignUp,phone:phoneNumber_SignUp,pass:pass_SignUp});
        $("#txtMessage").val('');
        // location.reload();
        // if ($("#clientEmailCheck").is(':checked')){
        //     alert("receber email marcado!")
        // }
    }
    else alert("um ou mais campos vazios");
});