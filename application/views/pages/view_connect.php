<!-- <link rel = "stylesheet" type = "text/css" href = "?php echo base_url('assets/css/connect.css'); ?>"> -->
<title>Conectar - SpeedLog</title>
<header class="homeHeader flex-row"><img src="<?php echo base_url('assets/img/title.png');?>" alt="Logo SpeedLog">
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
            <button class="btnSign btnSignIn">ENTRAR</button>
            <button class="btnSign btnSignUp">CADASTRAR</button>
        </div>
        <div class="loginForm">
            <!-- SIGN IN -->
            <div class="signIn">
                <div class="mb-3">
                    <label for="userSignIn" class="form-label">USUÁRIO OU EMAIL</label>
                    <input value="carlinha" type="email" class="formInput" id="user_SignIn">
                </div>
                <div class="mb-3">
                    <label for="passSignIn" class="form-label">SENHA</label>
                    <input value="1" type="password" class="formInput" id="pass_SignIn">
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
</header>
<div class="landingBackground"><img src="<?php echo base_url('assets/img/bg-mobile-fallback.jpg');?>" alt=""></div>
<div class="content">
    <section class="features flex-row wrap flex-horizontal-centered  text-centered">
        <div class="feature">
            <img src="<?php echo base_url('assets/icons/friends-colored.png');?>" alt="">
            <h3><span>Mais que parceiros, amigos</span></h3>
            <h5>Seja nosso entregador e você terá controle total do seu tempo de trabalho e receberá dados que podem melhorar seus ganhos com entregas</h5>
        </div>
        <div class="feature">
            <img src="<?php echo base_url('assets/icons/heart-colored.png');?>" alt="">
            <h3><span>Benefício atrás de benefício</span></h3>
            <h5>Clientes e entregadores possuem proteção contra danos, cupons promocionais, suporte 24 horas e muito mais!</h5>
        </div>
        <div class="feature">
            <img src="<?php echo base_url('assets/icons/hourglass-colored.png');?>" alt="">
            <h3><span>Pediu, chegou</span></h3>
            <h5>Nossas rotas são otimizadas para completar os pedidos tão rapidamente que você não precisar se preocupar com o tempo de entrega</h5>
        </div>
    </section>
    <section class="services flex-column">
        <div class="service flex-row">
            <div class="serviceDescription flex-row">
                <span>
                    a
                </span>
            </div>
            <div class="flex-row">
                <img class="serviceImage" src="<?php echo base_url('assets/img/service.jpg');?>"></img>
            </div>
        </div>
        <div class="service2">
            <video class="background playing" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="<?php echo base_url('assets/mp4/bg.mp4');?>" type="video/mp4" /></video>
            <button class="videoPause absolute">
                <img class="iconContinue" src="<?php echo base_url('assets/icons/continue.png');?>" alt="">
                <img class="iconPause" src="<?php echo base_url('assets/icons/pause.png');?>" alt="">
            </button>
            <div class="serviceDetails flex-column">
                <span>Mais inteligente,</span>
                <span>Mais intuitivo,</span>
                <span>Mais eficiente.</span>
                <button class="btnSign btnService pointer">Fazer parte</button>
            </div>
        </div>
    </section>
</div>

<!-- <div class="lorem">lorem*100</div> -->
<script type = 'text/javascript' src = "<?php echo base_url('assets/js/connect.js');?>"></script>
