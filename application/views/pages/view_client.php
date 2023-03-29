<title>Cliente - SpeedLog</title>
<?php 
print_r($historico);
// echo '<pre>'; print_r($_SESSION);
if (isset($_SESSION['usuario'])) echo "bem vindo(a):".$_SESSION['usuario'];
	else echo "você não esta logado!";
	?>

<div class="container">
	<div class="row">
		<div class="col">
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
				<li class="nav-item">
					<button class="btn btn-light" id="botaoreclamacoes">Suporte</button>
				</li>
			</ul>
			<div class="row">
				<div class="col" id="form_client">
					<form action="<?php echo base_url()?>index.php/client/fazer_pedido" method="post">
						<div class="mb-3">
							<label for="exampleInputText1" class="form-label">Peso da Mercadoria(Kg)</label>
							<input type="Text" value="12" class="form-control" name="peso" id="peso"
								placeholder="Digite o peso da sua mercadoria" aria-describedby="TextHelp">
						</div>
						<div class="mb-3">
							<label for="exampleInputText1" class="form-label">Largura</label>
							<input type="Text" class="form-control" name="largura" id="largura"
								placeholder="Digite a largura da sua mercadoria" aria-describedby="TextHelp">
						</div>
						<div class="mb-3">
							<label for="exampleInputText1" class="form-label">Altura</label>
							<input type="Text" class="form-control" name="altura" id="altura"
								placeholder="Digite a altura da sua mercadoria" aria-describedby="TextHelp">
						</div>

						<div class="mb-3">
							<label for="exampleInputText1" class="form-label">cep(retirada)</label>
							<input type="Text" value="36050-000" class="form-control" name="cepretirada"
								id="cepretirada" placeholder="Digite o cep de retirada da sua mercadoria"
								aria-describedby="TextHelp">
							<div id="divcep1"></div>
						</div>
						<div class="mb-3">
							<label for="exampleInputText1" class="form-label">cep(entrega)</label>
							<input type="Text" value="36010-071" class="form-control" onblur="teste()" name="cepentrega"
								id="cepentrega" placeholder="Digite o cep de entrega da sua mercadoria"
								aria-describedby="TextHelp">
							<div id="divcep2"></div>
						</div>
						<div class="mb-3">
							<label for="exampleInputText1" class="form-label">Observações</label>
							<input type="Text" class="form-control" name="cepentrega" id="observacao"
								placeholder="Digite o cep de entrega da sua mercadoria" aria-describedby="TextHelp">
							<div id="divcep2"></div>
						</div>
						<input type="Text" class="form-control" name="valor" id="valor_entrega"
							placeholder="Valor da entrega" aria-describedby="TextHelp">

						<button type="submit" class="btn btn-primary">Fazer pedido</button>
					</form>
				</div>
				<div class="row">
					<div class="col" id="historico">
						<h1>seu historico de Pedidos</h1>
						<table class="table">
							<thead>
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Entregador responsavel</th>
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

								<td><?php echo $p->entrega_responsavel?></td>
								<td><?php echo $p->entrega_enderecoDestino?></td>
								<td><?php echo $p->entrega_cepDestino?></td>
								<td><?php echo $p->entrega_peso?></td>
								<td><?php echo $p->entrega_status?></td>
								
								<?php if ($p->entrega_status=="CONCLUIDO") {
									
									echo"<td> <button id=".  $p->entrega_id ." data-toggle='modal' data-target='#myModal type='button' class='btn btn-primary btn_avaliar'>AVALIAR</button></td>";

								} ?>

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
									<th scope="col">Entregador responsavel</th>
									<th scope="col">Endereço de entrega</th>
									<th scope="col">Cep de entrega</th>
									<th scope="col">Valor</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php foreach ($acompanhar as $p) { ?>
								<tr>
									<th scope="row"><?php echo $p->entrega_id?></th>
									<td><button id="<?php echo $p->entrega_responsavel ?> "class="btnEntregador"><?php  echo $p->entrega_responsavel?></button></td>
									<td><?php echo $p->entrega_enderecoDestino?></td>
									<td><?php echo $p->entrega_cepDestino?></td>
									<td><?php echo $p->entrega_valor?></td>
									<td><button id="btn_ex" class="btn btn-danger">
											<a class="link_excluir" onclick="pegarid(<?php echo $p->entrega_id?>)"
												id="<?php echo $p->entrega_id?>" style="text-decoration:none ">CANCELAR
												PEDIDO! </a></button></td>
									<!--  echo base_url('index.php/client/cancelar_pedido/'.$p->entrega_id) -->
								</tr>
								<tr>
									<th scope="row"><?php echo $p->usuario_nome?></th>
									<td><?php  echo $p->usuario_status?></td>
									<td><?php echo $p->entregador_foto?></td>
									<td><?php echo $p->entrega_cepDestino?></td>
									
									<!--  echo base_url('index.php/client/cancelar_pedido/'.$p->entrega_id) -->
								</tr>
								<?php } ?>
									<?php foreach ($pedidos as $p) { ?>
								<tr>
									<th scope="row"><?php echo $p->entrega_id?></th>
									<td><button id="<?php echo $p->entrega_responsavel ?> "class="btnEntregador"><?php  echo $p->entrega_responsavel?></button></td>
									<td><?php echo $p->entrega_enderecoDestino?></td>
									<td><?php echo $p->entrega_cepDestino?></td>
									<td><?php echo $p->entrega_valor?></td>
									<td><button id="btn_ex" class="btn btn-danger">
											<a class="link_excluir" onclick="pegarid(<?php echo $p->entrega_id?>)"
												id="<?php echo $p->entrega_id?>" style="text-decoration:none ">CANCELAR
												PEDIDO! </a></button></td>
									<!--  echo base_url('index.php/client/cancelar_pedido/'.$p->entrega_id) -->
								</tr>
								 
								<?php } ?>
								
							</tbody>
                        </table>
					</div>

				</div>


			</div>
		</div>
	</div>
	<div class="row">
		<div class="col" id="chat">
			<div id="messages">
				<?php foreach ($mensagens as $i => $value):
                echo '<div class="message ">'. $value->	denuncia_data . '<br>' . $value->denuncia_descricao .
                '<button id="'.$value->denuncia_id.'" class="delMsg">x</button></div>';
                endforeach; ?>
                <textarea name="" id="txtMessage"></textarea>
					<button id="btnMessage">ENVIAR</button>

			</div>

		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nivel de satistação</h5>
        <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			<label class="form-check-label" for="inlineRadio1">1</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
			<label class="form-check-label" for="inlineRadio2">2</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
			<label class="form-check-label" for="inlineRadio3">3 </label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
			<label class="form-check-label" for="inlineRadio3">4 </label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
			<label class="form-check-label" for="inlineRadio3">5 </label>
			</div> <br>
			<div class="form-group">
			<label for="exampleInputEmail1">Descrição da avaliação</label>
			<input type="text" class="form-control" id="exampleInputText"  placeholder="nos ajude a melhorar, conte sua expêriencia">
			
		</div>

      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary closeModal" data-dismiss="modal">fechar</button>
        <button type="button" class="btn btn-primary">Avaliar</button>
      </div>
    </div>
  </div>
</div>


	<script type='text/javascript' src="<?php echo base_url('assets/js/client.js');?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets/js/jquery.mask.js');?>"></script>
