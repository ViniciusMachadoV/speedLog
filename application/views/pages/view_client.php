<title>Cliente - SpeedLog</title>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Area Cliente!</h1>
                <ul class="nav nav-tabs">
                <li class="nav-item">
                    <button class="btn btn-light" id="botaotrocatela" aria-current="page">Fazer Pedido</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-light" id="botaoacompanhar">Acompanhe seu pedido</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-light" id="botaohistorico">historico de pedidos</button>
                </li>
                </ul>
            <div class="row">
                <div class="col" id="form_client">
                    <form  action="<?php echo base_url()?>index.php/client/fazer_pedido" method="post">
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Peso da Mercadoria(Kg)</label>
                            <input type="Text" value="12" class="form-control"name="peso" id="peso"placeholder="Digite o peso da sua mercadoria" aria-describedby="TextHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Largura</label>
                            <input type="Text" class="form-control" name="largura" id="largura"placeholder="Digite a largura da sua mercadoria" aria-describedby="TextHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Altura</label>
                            <input type="Text" class="form-control" name="altura" id="altura"placeholder="Digite a altura da sua mercadoria" aria-describedby="TextHelp">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">cep(retirada)</label>
                            <input type="Text"value="36050-000" class="form-control" name="cepretirada" id="cepretirada" placeholder="Digite o cep de retirada da sua mercadoria" aria-describedby="TextHelp">
                            <div id="divcep1"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">cep(entrega)</label>
                            <input type="Text" value="36010-071" class="form-control"onblur="teste()" name="cepentrega" id="cepentrega"placeholder="Digite o cep de entrega da sua mercadoria" aria-describedby="TextHelp">
                            <div id="divcep2"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Observações</label>
                            <input type="Text" class="form-control"name="cepentrega" id="observacao"placeholder="Digite o cep de entrega da sua mercadoria" aria-describedby="TextHelp">
                            <div id="divcep2"></div>
                        </div>
                        <input type="Text" class="form-control"name="valor" id="valor_entrega"placeholder="Valor da entrega" aria-describedby="TextHelp">

                        <button type="submit" class="btn btn-primary">Fazer pedido</button>
                    </form>
                </div>
                <div class="row">
                    <div class="col" id="historico">
                        <h1>seu historico de busca</h1>
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Endereço de entrega</th>
                            <th scope="col">Cep de entrega</th>
                            <th scope="col">Peso produto</th>
                            <th scope="col">Situação</th>
                            </tr>
                        </thead>
                        <?php
                         date_default_timezone_set('America/Sao_Paulo');
                         // CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
                             
                              foreach ($historico as $p) { ?>
                        <tr>
                        <th scope="row"><?php echo $p->entrega_id?></th>

                            <td><?php echo $p->entrega_enderecoDestino?></td>
                            <td><?php echo $p->entrega_cepDestino?></td>
                            <td><?php echo $p->entrega_peso?></td>
                            <td><?php echo $p->entrega_status?></td>
                            <?php ?>

                        </tr>
                    <?php } ?>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="acompanhar">
                        <h1>acompanhar pedido</h1>
                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Endereço de entrega</th>
                                <th scope="col">Cep de entrega</th>
                                <th scope="col">Peso produto</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                        <?php foreach ($acompanhar as $p) { ?>
                            <tr>
                            <th scope="row"><?php echo $p->entrega_id?></th>
                                <td><?php echo $p->entrega_enderecoDestino?></td>  
                                <td><?php echo $p->entrega_cepDestino?></td>
                                <td><?php echo $p->entrega_peso?></td>
                                <td><button id="btn_ex"  class="btn btn-danger" >
                                    <a class="link_excluir"onclick="pegarid(<?php echo $p->entrega_id?>)" id="<?php echo $p->entrega_id?>"style="text-decoration:none " 
                                >CANCELAR PEDIDO! </a></button></td>
                                <!--  echo base_url('index.php/client/cancelar_pedido/'.$p->entrega_id) -->
                            </tr>
                        <?php } ?>
                            </tbody>
                            </thead>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type = 'text/javascript' src = "<?php echo base_url('assets/js/client.js');?>"></script>
