<title>Admin - SpeedLog</title>
<div class="container">
    <a class="btnLogout">Logout</a>
    <?php print_r($this->session->userdata('tipo'))?>
    <?php print_r($this->session->userdata('usuario'))?>

    <button type="button" class="btn btn-primary tabBtn btnListDeliveryman">entregadores</button>
    <button type="button" class="btn btn-primary tabBtn btnListDeliveries">entregas</button>
    <button type="button" class="btn btn-primary tabBtn btnListClients">clientes</button>
    <button type="button" class="btn btn-primary tabBtn btnRegisterAdmins">cadastro de adms</button>
    <button type="button" class="btn btn-primary tabBtn btnAdjustVariables">Valores de frete</button>
    <button type="button" class="btn btn-primary tabBtn btnReports">Denuncias</button>

    <table class="table tabAdmin listDeliveryman">
        <!-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar entregadores</button>
        </form> -->
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">CPF</th>
            <th scope="col">Apelido</th>
            <th scope="col">Tipo</th>
            <th scope="col">Status</th>
            <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entregadores as $colunaEntregador) {
                    echo '
                        <tr>
                        <td scope="row">'.$colunaEntregador->usuario_nome.'</td>
                        <td>'.$colunaEntregador->usuario_email.'</td>
                        <td>'.$colunaEntregador->usuario_cpf.'</td>
                        <td>'.$colunaEntregador->usuario_apelido.'</td>
                        <td>'.$colunaEntregador->usuario_tipo.'</td>
                        <td>'.$colunaEntregador->entregador_status.'</td>
                        <td><button type="button" id="'.$colunaEntregador->usuario_id.'" class="btn btn-primary btnTimeOut">SUSPENDER</button><button type="button" id="'.$colunaEntregador->usuario_id.'" class="btn btn-primary btnBan">BANIR</button></td>
                        </tr>';
            }?>
        </tbody>
    </table>
    <table class="table tabAdmin listClients">
        <!-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar clientes</button>
        </form> -->
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">CPF</th>
            <th scope="col">Apelido</th>
            <th scope="col">Tipo</th>
            <th scope="col">Status</th>
            <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $colunaCliente) {
                    echo '
                        <tr>
                        <td scope="row">'.$colunaCliente->usuario_nome.'</td>
                        <td>'.$colunaCliente->usuario_email.'</td>
                        <td>'.$colunaCliente->usuario_cpf.'</td>
                        <td>'.$colunaCliente->usuario_apelido.'</td>
                        <td>'.$colunaCliente->usuario_tipo.'</td>
                        <td>'.$colunaCliente->usuario_status.'</td>
                        <td><button type="button" id="'.$colunaCliente->usuario_id.'" class="btn btn-primary btnTimeOut">SUSPENDER</button><button type="button" id="'.$colunaCliente->usuario_id.'" class="btn btn-primary btnBan">BANIR</button></td>
                        </tr>';
            }?>
        </tbody>
    </table>
    <table class="table tabAdmin listDeliveries">
        <!-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar pedidos</button>
        </form> -->
        <thead>
            <tr>
            <th scope="col">Origem</th>
            <th scope="col">Destino</th>
            <th scope="col">Peso</th>
            <th scope="col">Status</th>
            <th scope="col">Data</th>
            <th scope="col">Responsável</th>
            <th scope="col">Valor</th>
            <th scope="col">Observações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entregas as $colunaDB) {
                    echo '
                        <tr>
                        <td scope="row">'.$colunaDB->entrega_enderecoOrigem.$colunaDB->entrega_cepOrigem.'</td>
                        <td scope="row">'.$colunaDB->entrega_enderecoDestino.$colunaDB->entrega_cepDestino.'</td>
                        <td>'.$colunaDB->entrega_peso.'</td>
                        <td>'.$colunaDB->entrega_status.'</td>
                        <td>'.$colunaDB->entrega_dataPedido.'</td>
                        <td>'.$colunaDB->entrega_responsavel.'</td>
                        <td>'.$colunaDB->entrega_observacao.'</td>
                        </tr>';
            }?>
        </tbody>
    </table>
    <div class="tabAdmin registerAdmins">
        <div class="mb-3">
            <label for="nomeCompleto" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nomeCompleto" >
        </div>
        <div class="mb-3">
            <label for="emailAdmin" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailAdmin">
        </div>
        <div class="mb-3">
            <label for="cpfAdmin" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpfAdmin">
        </div>
        <div class="mb-3">
            <label for="apelidoAdmin" class="form-label">Apelido</label>
            <input type="text" class="form-control" id="apelidoAdmin">
        </div>
        <div class="mb-3">
            <label for="telefoneAdmin" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefoneAdmin">
        </div>
        <div class="mb-3">
            <label for="senhaAdmin" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senhaAdmin">
        </div>
        <div class="mb-3">
            <label for="ConfSenhaAdmin" class="form-label">Confirmação de senha</label>
            <input type="password" class="form-control" id="ConfSenhaAdmin">
        </div>
        <button type="submit" id="btnCadastrarAdmin" class="btn btn-primary">Cadastrar</button>
    </div>
    <!-- MONTAR FORMULÁRIO PARA MUDAR VARIÁVEIS DE CÁLCULO DO VALOR FINAL -->
    <form class="tabAdmin adjustVariables">
        <table class="table">
            <thead>
                <div class="row">
                    <div class="col">Alterar valores de frete: </td>
                    <input class="inputVariables" type="text" id="rskm">
                    <input class="inputVariables" type="text" id="rsmin">
                    <input class="inputVariables" type="text" id="ate1kg">
                    <input class="inputVariables" type="text" id="entre1e3kg">
                    <input class="inputVariables" type="text" id="entre3e8kg">
                    <input class="inputVariables" type="text" id="entre8e12kg">
                    <div class="row">
                        <div class="col">Aplicar nos dias: </td>
                        <div class="col">
                            <input type="checkbox" name="" id="all">TODOS
                            <input type="checkbox" name="" id="Sunday">DOM
                            <input type="checkbox" name="" id="Monday">SEG
                            <input type="checkbox" name="" id="Tuesday">TER
                            <input type="checkbox" name="" id="Wednesday">QUA
                            <input type="checkbox" name="" id="Thursday">QUI
                            <input type="checkbox" name="" id="Friday">SEX
                            <input type="checkbox" name="" id="Saturday">SÁB
                        </div>
                    </div>
                </tr>
                <tr>
                <th scope="col">TIPO</th>
                <th scope="col">R$/Km</th>
                <th scope="col">R$/min</th>
                <th scope="col">Até 1kg</th>
                <th scope="col">1 - 3kg</th>
                <th scope="col">3 - 8kg</th>
                <th scope="col">8 - 12kg</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($frete as $colConfig) {
                        echo '
                            <tr>
                            <td scope="row">'.$colConfig->frete_tipo.'</td>
                            <td>'.$colConfig->valor_km.'</td>
                            <td>'.$colConfig->valor_minuto.'</td>
                            <td>'.$colConfig->valor_kgAte1.'</td>
                            <td>'.$colConfig->valor_kg1a3.'</td>
                            <td>'.$colConfig->valor_kg3a8.'</td>
                            <td>'.$colConfig->valor_kg8a12.'</td>
                            </tr>';
                }?>
            </tbody>
        </table>
    </form>
    <form class="tabAdmin listReports">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuário</th>
                <th scope="col">N° entrega</th>
                <th scope="col">Descrição</th>
                <th scope="col">Entregador</th>
                <th scope="col">Data do pedido</th>
                <th scope="col">Data da denúncia</th>
                <th scope="col">Status</th>
                <th scope="col">ACÃO</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($denuncias as $colDenuncia) {
                        echo '
                            <tr>
                            <td scope="row">'.$colDenuncia->denuncia_id.'</td>
                            <td>'.$colDenuncia->denuncia_idDenunciante.'</td>
                            <td>'.$colDenuncia->denuncia_entrega.'</td>
                            <td>'.$colDenuncia->denuncia_descricao.'</td>
                            <td>'.$colDenuncia->entrega_responsavel.'</td>
                            <td>'.$colDenuncia->entrega_dataPedido.'</td>
                            <td>'.$colDenuncia->denuncia_data.'</td>
                            <td>'.$colDenuncia->denuncia_status.'</td>
                            <td><button type="button" class="btn btn-primary">ANÁLISE</button></td>
                            </tr>
                            ';
                }?>
            </tbody>
        </table>
    </form>
</div>
<script type='text/javascript' src="<?php echo base_url('assets/js/admin.js');?>"></script>
<script type='text/javascript' src="<?php echo base_url('assets/js/jquery.mask.min.js');?>"></script>
