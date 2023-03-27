<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>speedlog/assets/css/deliveryman.css">
<title>Entregador - SpeedLog</title>
<div class="container">
	<!-- <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
  </ul> -->
	<h1>Area entegador!</h1>
	<ul class="nav nav-tabs">
		<li class="nav-item">
			<button class="btn btn-light" id="pedidoP" aria-current="page">Pedido Pendente</button>
		</li>
		<li class="nav-item">
			<button class="btn btn-light" id="pedidoA">Pedido atual</button>
		</li>
		<li class="nav-item">
			<button class="btn btn-light" id="pedidoC">Pedido concluído</button>
		</li>
	</ul>

	<div id="pendente">
		<?php
      foreach ($entregas as $key) {
          // echo $key->entrega_id;
          // echo $key->entrega_enderecoOrigem;
          // echo $key->entrega_status;
          echo '
        <div class="card text-center">
          <div class="card-header">
          </div>
          <div class="card-body">
            <h5 class="card-title">
            <h5 class="card-title">Origem: '.$key->entrega_enderecoOrigem.$key->entrega_cepOrigem.'.</h5>
            <h5 class="card-title">Destino: '.$key->entrega_enderecoDestino.$key->entrega_cepDestino.'.</h5>
            <p class="card-text">Valor: R$ '.$key->entrega_valor.',00</p>
            <p class="card-text">Peso: '.$key->entrega_peso.'kg</p>
            <p class="card-text">Nome do cliente: '.$key->entrega_cliente.'</p>
            <p class="card-text">Nome do motoboy: '.$key->entrega_responsavel.'</p>
            <p class="card-text">Observação: '.$key->entrega_observacao.'</p>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
              Aceitar Viagem
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Aceite da Viagem</h4>
                  </div>
                  <div class="modal-body">
                    Você realmente deseja aceitar essa viagem?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary confirmar" id="'. $key->entrega_id .'" >Aceitar viagem</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
        <br>';
}
?>
	</div>

	<div id="atual">
		<?php
      foreach ($atuais as $key) {
          // echo $key->entrega_id;
          // echo $key->entrega_enderecoOrigem;
          // echo $key->entrega_status;
          echo '
        <div class="card text-center">
        	<div class="card-header">
        	</div>
        	<div class="card-body">
        		<h5 class="card-title">
        			<h5 class="card-title">Origem: '.$key->entrega_enderecoOrigem.$key->entrega_cepOrigem.'.</h5>
        			<h5 class="card-title">Destino: '.$key->entrega_enderecoDestino.$key->entrega_cepDestino.'.</h5>
        			<p class="card-text">Valor: R$ '.$key->entrega_valor.',00</p>
        			<p class="card-text">Peso: '.$key->entrega_peso.'kg</p>
        			<p class="card-text">Nome do cliente: '.$key->entrega_cliente.'</p>
        			<p class="card-text">Nome do motoboy: '.$key->entrega_responsavel.'</p>
        			<p class="card-text">Observação: '.$key->entrega_observacao.'</p>
        			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        			<!-- Button trigger modal -->
        			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
        				Concluir Viagem
        			</button>

        			<!-- Modal -->
        			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        				<div class="modal-dialog" role="document">
        					<div class="modal-content">
        						<div class="modal-header">
        							<h4 class="modal-title" id="myModalLabel">Conclusão da Viagem</h4>
        						</div>
        						<div class="modal-body">
        							Você deseja concluir essa viagem?
        						</div>
        						<div class="modal-footer">
        							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        							<a class="btn btn-primary concluir" id="'. $key->entrega_id .'">Concluir da viagem</a>
        						</div>
        					</div>
        				</div>
        			</div>
        	</div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal3">
        	Cancelar Viagem
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-header">
        				<h4 class="modal-title" id="myModalLabel">Cancelamento da Viagem</h4>
        			</div>
        			<div class="modal-body">
        				Você realmente deseja cancelar essa viagem?
        			</div>
        			<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        				<a class="btn btn-primary cancelar" id="'. $key->entrega_id .'">Desistir da viagem</a>
        			</div>
        		</div>
        	</div>
        </div>
        <br>';
}
?>
	</div>

	<div id="concluido">
		<?php
      foreach ($concluidos as $key) {
          // echo $key->entrega_id;
          // echo $key->entrega_enderecoOrigem;
          // echo $key->entrega_status;
          echo '
        <div class="card text-center">
          <div class="card-header">
          </div>
          <div class="card-body">
            <h5 class="card-title">
            <h5 class="card-title">Origem: '.$key->entrega_enderecoOrigem.$key->entrega_cepOrigem.'.</h5>
            <h5 class="card-title">Destino: '.$key->entrega_enderecoDestino.$key->entrega_cepDestino.$key->entrega_valor.'.</h5>
            <p class="card-text">Valor: R$ '.(intval($key->entrega_valor)*0.7).'</p>
            <p class="card-text">Peso: '.$key->entrega_peso.'kg</p>
            <p class="card-text">Nome do cliente: '.$key->entrega_cliente.'</p>
            <p class="card-text">Nome do motoboy: '.$key->entrega_responsavel.'</p>
            <p class="card-text">Observação: '.$key->entrega_observacao.'</p>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        </div>
        <br>';
}
?>
	</div>
</div>
<script type='text/javascript' src="<?php echo base_url();?>/assets/js/deliveryman.js"></script>
