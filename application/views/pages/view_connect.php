<!-- <link rel = "stylesheet" type = "text/css" href = "?php echo base_url('assets/css/connect.css'); ?>"> -->
<title>Conectar - SpeedLog</title>
<!-- Background Video-->
<!-- <body class="flex"> -->
<div class="bg-video">
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="<?php echo base_url('assets/mp4/bg.mp4');?>" type="video/mp4" /></video>
</div>
<div class="loginForm">
    <?php print_r($this->session->userdata('usuario'))?>
    <!-- SIGN OPTIONS -->
    <ul class="nav nav-tabs signOptions">
        <li class="nav-item btnSignIn">
            <a id="tabSignIn" class="nav-link active" aria-current="page">ENTRAR</a>
        </li>
        <li class="nav-item btnSignUp">
            <a id="tabSignUp" class="nav-link" aria-current="page">CADASTRAR</a>
            <!-- <a class="nav-link disabled">Disabled</a> -->
        </li>
    </ul>
    <!-- SIGN IN -->
    <div class="signIn">
        <div class="mb-3">
            <label for="userSignIn" class="form-label">USUÁRIO OU EMAIL</label>
            <input value="carlinha" type="email" class="form-control" id="user_SignIn">
        </div>
        <div class="mb-3">
            <label for="passSignIn" class="form-label">SENHA</label>
            <input value="963" type="password" class="form-control" id="pass_SignIn">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="keepLogged">
            <label class="form-check-label" for="keepLogged">Lembrar dados de acesso</label>
        <a href="">Esqueci minha senha</a>
        </div>
        <button id="signIn" class="btn btn-success" >ENTRAR</button>
        <a href="<?php echo base_url('index.php/admin'); ?>">admin</a>
        <a href="<?php echo base_url('index.php/client'); ?>">client</a>
        <a href="<?php echo base_url('index.php/deliveryman'); ?>">deliveryman</a>
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
            <input class="form-control" id="name_SignUp">
        </div>
        <div class="mb-3">
            <label for="email_SignUp" class="form-label">E-MAIL</label>
            <input class="form-control" id="email_SignUp">
        </div>
        <div class="mb-3">
            <label for="CPF_SignUp" class="form-label">CPF</label>
            <input class="form-control" id="CPF_SignUp">
        </div>
        <div class="mb-3">
            <label for="nickname_SignUp" class="form-label">APELIDO</label>
            <input class="form-control" id="nickname_SignUp">
            <div id="nicknameHelp" class="form-text">Seu apelido deve ser único. Você poderá usar tanto o e-mail quanto esse apelido para acessar sua conta</div>
        </div>
        <div class="mb-3">
            <label for="phoneNumber_SignUp" class="form-label">TELEFONE</label>
            <input class="form-control" id="phoneNumber_SignUp" placeholder="XX 00000 0000">
        </div>

        <!-- DELIVERY MAN ADDITIONAL INPUTS -->
        <div class="deliverymanForm">
            <div class="mb-3 deliverymanForm">
                <label for="plate_SignUp" class="form-label">PLACA DA MOTO</label>
                <input class="form-control" id="plate_SignUp">
            </div>
            <div class="mb-3 deliverymanForm">
                <label for="facePhoto_SignUp" class="form-label">FOTO 3x4</label>
                <input class="form-control" id="facePhoto_SignUp">
            </div>
        </div>
        <!---->
        <div class="mb-3">
            <label for="pass1_SignUp" class="form-label">SENHA</label>
            <input type="password" class="form-control" id="pass1_SignUp">
        </div>
        <div class="mb-3">
            <label for="pass2_SignUp" class="form-label">CONFIRME SUA SENHA</label>
            <input type="password" class="form-control" id="pass2_SignUp">
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
<!-- Social Icons-->
<!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->
<div class="social-icons">
    <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
        <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-dark m-3" href="#!"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-dark m-3" href="#!"><i class="fab fa-instagram"></i></a>
    </div>
</div>
<script type = 'text/javascript' src = "<?php echo base_url('assets/js/connect.js');?>"></script>
<script type='text/javascript' src="<?php echo base_url('assets/js/jquery.mask.js');?>"></script>
