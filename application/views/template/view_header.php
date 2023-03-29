<!-- CABEÇALHO // HEADER -->
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!-- LOGOTIPO E NOME DA EMPRESA // LOGO AND COMPANY NAME -->
            <a class="navbar-brand flex wrap" href="#">
                <img src="" alt="SpeedLog-Icon" width="30" height="24" class="d-inline-block align-text-top">
                <h3>SpeedLog</h3>
            </a>
            <!-- BOTÃO DE EXPANDIR MENU, SÓ APARECE EM TELAS MÉDIAS E PEQUENAS // COLLAPSE MENU BUTTON THAT ONLY APPEARS IN MEDIUM AND SMALL SCREEN SIZES -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- CONTEÚDO DA BARRA DE NAVEGAÇÃO NO CABEÇALHO // HEADER NAVBAR CONTENT -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- PÁGINA INICIAL // MAIN MENU PAGE -->
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Tela Inicial</a></li>
                <!-- TELA DE MENSAGENS // MESSAGES SCREEN -->
                <li class="nav-item"><a class="nav-link" href="#">Mensagens</a></li>
                <!-- MENU COM OPÇÕES DE PERFIL // DROPDOWN WITH PROFILE OPTIONS AND INFOS-->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Perfil</a>
                <ul class="dropdown-menu">
                    <!-- VISUALIZAR PERFIL E EDITAR DADOS // SHOW USER PROFILE AND MODIFY PERSONAL INFO -->
                    <li><a class="dropdown-item" href="#">Meus dados</a></li>
                    <!-- ACOMPANHAR TODOS OS PEDIDOS REGISTRADOS // TRACK ALL ORDERS -->
                    <li><a class="dropdown-item" href="#">Histórico de entregas</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <!-- SAIR DA SESSÃO E RETORNAR À TELA DE LOGIN // LOGOUT AND GET BACK TO LOGIN SCREEN -->
                    <li><a class="dropdown-item" href="#">Desconectar</a></li>
                </ul>
                </li>
            </ul>
            <!-- FORMULÁRIO PARA PESQUISAR PEDIDOS // FORM TO SEARCH FOR ORDERS -->
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" style="width: 150px" placeholder="Código da entrega" aria-label="Search">
                <button class="btn btn-success" type="submit">Busca</button>
            </form>
            </div>
        </div>
    </nav>
</header>
