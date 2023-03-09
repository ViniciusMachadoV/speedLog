<title>Admin - SpeedLog</title>
<div class="container">
    <a href='connect/logout'>Logout</a>
    <button type="button" class="btn btn-primary tabBtn btnListDeliveryman">entregadores</button>
    <button type="button" class="btn btn-primary tabBtn btnListDeliveries">entregas</button>
    <button type="button" class="btn btn-primary tabBtn btnRegisterAdmins">cadastro de adms</button>
    <button type="button" class="btn btn-primary tabBtn btnAdjustServicesVariables">Ajustar frete</button>

    <table class="table tabAdmin listDeliveryman">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">CPF</th>
            <th scope="col">Apelido</th>
            <th scope="col">Tipo</th>
            <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entregadores as $colunaDB) {
                    echo '
                        <tr>
                        <td scope="row">'.$colunaDB->usuario_nome.'</td>
                        <td>'.$colunaDB->usuario_email.'</td>
                        <td>'.$colunaDB->usuario_cpf.'</td>
                        <td>'.$colunaDB->usuario_apelido.'</td>
                        <td>'.$colunaDB->usuario_tipo.'</td>
                        <td>'.$colunaDB->entregador_status.'</td>
                        </tr>';
            }?>
        </tbody>
    </table>
    <table class="table tabAdmin listDeliveries">
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
    <form class="tabAdmin registerAdmins">
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
            <label for="telefoneAdmin" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefoneAdmin">
        </div>
        <div class="mb-3">
            <label for="apelidoAdmin" class="form-label">Apelido</label>
            <input type="text" class="form-control" id="apelidoAdmin">
        </div>
        <div class="mb-3">
            <label for="senhaAdmin" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senhaAdmin">
        </div>
        <div class="mb-3">
            <label for="ConfSenhaAdmin" class="form-label">Confirmação de senha</label>
            <input type="password" class="form-control" id="ConfSenhaAdmin">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
    <!-- MONTAR FORMULÁRIO PARA MUDAR VARIÁVEIS DE CÁLCULO DO VALOR FINAL -->
    <form class="tabAdmin adjustServicesVariables">
        <div class="mb-3">
            <!-- <label for="nomeCompleto" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nomeCompleto" > -->
        </div>
    </form>
</div>
<script type = 'text/javascript' src = "<?php echo base_url('assets/js/admin.js');?>"></script>
<script type = 'text/javascript' src = "<?php echo base_url('assets/js/jquery.mask.min.js');?>"></script>
