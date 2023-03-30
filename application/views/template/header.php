<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<!-- BRAZILIAN PORTUGUESE -->
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- PALAVRAS-CHAVE PARA MECANISMOS DE PESQUISA // SEARCH ENGINES KEYWORDS -->
	<meta name="keywords" content="Entregas, Motoboy, Logística">
	<!-- UMA BREVE DESCRIÇÃO DO SITE // SHORT DESCRIPTION OF THE WEB PAGE -->
	<meta name="description" content="SpeedLog é uma plataforma de entregas rápidas realizadas por motoboys"/>
	<!-- CRIADOR(ES) DA PÁGINA // AUTHOR OF THE PAGE -->
	<meta name="author" content="TeamKeep"/>
	<!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<!-- DESKTOP ICON -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.png');?>" type="image/x-icon">
	<!-- ANDROID ICON -->
	<!-- <link rel="icon" type="image/png" href="" sizes="192x192"> -->
	<!-- APPLE ICON -->
	<!-- <link rel="apple-touch-icon" sizes="180x180" href=""> -->
	<!-- FOLHA DE ESTILO GERAL // GENERAL STYLESHEET -->
	<link rel ="stylesheet" type = "text/css" href = "<?php echo base_url('assets/css/style.css'); ?>">
	<link rel ="stylesheet" type = "text/css" href = "<?php echo base_url('assets/css/library.css'); ?>">
	<!-- GOOGLE FONTS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
	<!-- SCRIPT JQUERY -->
	<script type = 'text/javascript' src = "<?php echo base_url('assets/js/jquery.js');?>"></script>
</head>
<body>
<!-- CABEÇALHO // HEADER -->
<?php if($this->session->userdata('tipo') == 'ADMIN'){ echo
'admin';}?>
<?php if($this->session->userdata('tipo') == 'CLIENTE'){ echo
'cliente';}?>
<?php if($this->session->userdata('tipo') == 'ENTREGADOR'){ echo
'ent';}?>
<?php if($this->session->userdata('tipo') == ''){ echo
	'<header class="homeHeader flex-row"><img src="'.base_url("assets/img/title.png").'" alt="Logo SpeedLog">
	<!-- <div class="language">
		<div class="btnChangeLanguage">
			<span>Português</span>
			<li>pt-br</li>
			<li>en</li>
		</div>
	</div> -->
	<div class="signOptions flex-column">
			<!-- SIGN OPTIONS -->
		<div class="signButtons flex-row spaced-around">
			<div class="tabSign tabSignIn flex flex-horizontal-centered">
				<button class="btnSign btnSignIn">ENTRAR</button>
			</div>
			<div class="tabSign tabSignUp flex flex-horizontal-centered">
				<button class="btnSign btnSignUp">CADASTRAR</button>
			</div>
		</div>
		<div class="loginForm">
			<!-- SIGN IN -->
			<div class="signIn flex-column">
				<div class="mb-3 flex-column">
					<label for="userSignIn" class="form-label text-center">USUÁRIO OU EMAIL</label>
					<input value="carlinha" type="email" class="formInput" id="user_SignIn">
				</div>
				<div class="mb-3 flex-column">
					<label for="passSignIn" class="form-label text-center">SENHA</label>
					<input value="1" type="password" class="formInput" id="pass_SignIn">
				</div>
				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="keepLogged">
					<label class="form-check-label" for="keepLogged">Lembrar dados de acesso</label>
					<a href="">Esqueci minha senha</a>
				</div>
				<button id="signIn" class="btn btn-success" >ENTRAR</button>
				<p id="warning"> </p>
			</div>
			<!-- SIGN UP TYPE BUTTONS -->
			<div class="signUpType flex column">
				<button class="signUpClient btn btn-primary">CLIENTE</button>
				<button class="signUpDeliveryman btn btn-primary">ENTREGADOR</button>
			</div>
			<!-- SIGN UP FORM -->
			<div class="signUp">
				<div class="mb-3">
					<label for="name_SignUp" class="form-label">NOME COMPLETO</label>
					<input class="formInput" id="name_SignUp" value="1" >
				</div>
				<div class="mb-3">
					<label for="email_SignUp" class="form-label">E-MAIL</label>
					<input class="formInput" id="email_SignUp" value="1" >
				</div>
				<div class="mb-3">
					<label for="cpf_SignUp" class="form-label">CPF</label>
					<input class="formInput" id="cpf_SignUp" value="111.111.111-11" >
				</div>
				<div class="mb-3">
					<label for="nickname_SignUp" class="form-label">APELIDO</label>
					<input class="formInput" id="nickname_SignUp" value="1" >
					<div id="nicknameHelp" class="form-text">Seu apelido deve ser único. Você poderá usar tanto o e-mail quanto esse apelido para acessar sua conta</div>
				</div>
				<div class="mb-3">
					<label for="phoneNumber_SignUp" class="form-label">TELEFONE</label>
					<input class="formInput" id="phoneNumber_SignUp" placeholder="(XX) 00000 0000" value="1" >
				</div>
				
				<!-- DELIVERY MAN ADDITIONAL INPUTS -->
				<div class="deliverymanForm">
					<div class="mb-3 deliverymanForm">
						<label for="plate_SignUp" class="form-label">PLACA DA MOTO</label>
						<input class="formInput" id="plate_SignUp">
					</div>
					<div class="mb-3 deliverymanForm">
						<label for="facePhoto_SignUp" class="form-label">FOTO 3x4</label>
						<input class="formInput" id="facePhoto_SignUp">
					</div>
				</div>
				<!---->
				<div class="mb-3">
					<label for="pass1_SignUp" class="form-label">SENHA</label>
					<input type="password" class="formInput" id="pass1_SignUp" value="1" >
				</div>
				<div class="mb-3">
					<label for="pass2_SignUp" class="form-label">CONFIRME SUA SENHA</label>
					<input type="password" class="formInput" id="pass2_SignUp" value="1" >
				</div>
				
				<!-- DELIVERYMAN EMAIL CHECK -->
				<div class="form-check deliverymanCheck">
					<input type="checkbox" class="form-check-input" id="deliverymanEmailCheck">
					<label class="form-check-label" for="deliverymanEmailCheck">Quero receber e-mails sobre minhas entregas</label>
				</div>
				<!---->
				<!-- CLIENT EMAIL CHECK -->
				<div class="form-check clientCheck">
					<input type="checkbox" class="form-check-input" id="clientEmailCheck">
					<label class="form-check-label" for="clientEmailCheck">Quero receber e-mails sobre meus pedidos</label>
				</div>
				<!---->
				<div id="emailHelp" class="form-text">Você pode alterar essa opção mais tarde no seu perfil.</div>
				<button id="signUp" class="btn btn-success">CADASTRAR</button>
				<div id="dataHelp" class="form-text">Seus dados jamais serão compartilhados.</div>
			</div>
		</div>
	</div>
	</header>';
}?>

