<title>Entregador - SpeedLog</title>
<?php if (isset($_SESSION['usuario'])) echo "bem vindo(a):".$_SESSION['usuario'];
	else echo "você não esta logado!";
	?>
<div class="container flex wrap">
  <?php 
    // print_r($perfil);
    foreach($perfil as $DeliverymanColumn){
      $idadeConta = date_diff(date_create(date('Y-m-d', strtotime($DeliverymanColumn->usuario_dataConta))),date_create(date('Y-m-d', time())));
    echo '
    <div class="profileDeliveryman flex column">
      <div class="profilePhotoStatus flex-vertical-centered" >
        <img class="profilePic pointer" src="'.base_url('assets/pictures/Hydrangeas.jpg').'">
        <div class="statusDeliveryman pointer">';
        if($DeliverymanColumn->usuario_status == 'SUSPENSO') echo 's';
        else echo 'a';
        echo '</div>
      </div>
      <div class="deliverymanStats flex-row">
        <div class="stat" id="deliveries">Deliveries</div>
        <div class="stat" id="rating">rate</div>
        <div class="stat" id="serviceTime">'.number_format($idadeConta->format("%a")/365, 1, ",", ".").' anos</div>
      </div>
      <div class="profileID">
        <span class="accNickname">'.$DeliverymanColumn->usuario_apelido.'</span>  
        <button id="infoEdit">EDITAR</button><br>
        <span class="accFullname">'.$DeliverymanColumn->usuario_nome.'</span>
      </div>
      <div class="achievements">
        <!--  -->
      </div>
    </div>';
  }
  ?>
  <div>
  <ul class="nav nav-tabs">
      <li class="nav-item">
        <button class="btn btn-light" id="btnPendingOrders" aria-current="page">Pedido Pendente</button>
      </li>
      <li class="nav-item">
        <button class="btn btn-light" id="btnOngoingOrders">Pedido atual</button>
      </li>
      <li class="nav-item">
        <button class="btn btn-light" id="btnFinishedOrders">Pedido concluído</button>
      </li>
    </ul>
    <div class="orderTab" id="listPendingOrders">
      <?php foreach ($pendente as $key) {
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
              <p class="card-text">Nome do cliente: '.$key->entrega_responsavel.'</p>
              <p class="card-text">Observação: '.$key->entrega_observacao.'</p>
              <button type="button" class="btn btn-primary btn-lg confirmar" id="'.$key->entrega_id.'" data-toggle="modal" data-target="#myModal">
                Iniciar Viagem
              </button>
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Iniciar entrega</h4>
                    </div>
                    <div class="modal-body">
                      Você deseja concluir essa viagem?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <a class="btn btn-primary confirmar" id="'. $key->entrega_id .'" >Concluir da viagem</a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
      <br>';
        }?>
    </div>
    <div class="orderTab" id="listOngoingOrders">
      <?php foreach ($andamento as $key) {
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
            <p class="card-text">Nome do cliente: '.$key->entrega_responsavel.'</p>
            <p class="card-text">Observação: '.$key->entrega_observacao.'</p>
            <button type="button" class="btn btn-primary btn-lg concluir" id="'. $key->entrega_id .'" data-toggle="modal" data-target="#myModal2">
              Concluir Viagem
            </button>
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Cancelamento da Viagem</h4>
                  </div>
                  <div class="modal-body">
                    Você deseja concluir essa viagem?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary concluir" id="'. $key->entrega_id .'" >Concluir da viagem</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
      
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg cancelar" id="'. $key->entrega_id .'" data-toggle="modal" data-target="#myModal3">
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
                <a class="btn btn-primary cancelar" id="'. $key->entrega_id .'" >Desistir da viagem</a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <br>';
      }?>
    </div>
    <div class="orderTab" id="listFinishedOrders">
      <?php foreach ($concluido as $key) {
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
            <p class="card-text">Nome do cliente: '.$key->entrega_responsavel.'</p>
            <p class="card-text">Observação: '.$key->entrega_observacao.'</p>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        </div>
        <br>';
      }?>
    </div>
  
<!-- <form method="POST" enctype="multipart/form-data">
  <label for="conteudo">Enviar imagem:</label>
  <input type="file" name="pic" accept="image/*" class="form-control">

  <div align="center">
    <button type="submit" class="btn btn-success">Enviar imagem</button>
  </div>
</form> -->
  </div>
</div>
<footer class="mobileView flex-row">
   <button class="btnMobile btnOrders">Pedidos</button>
   <button class="btnMobile btnMessages">M+N</button>
   <button class="btnMobile btnProfile">Perfil</button>
   <button class="btnMobile btnSettings">Conf</button>
</footer>
<?php
 if(isset($_FILES['pic']))
 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir ="assets/img/"; //Diretório para uploads
 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo '<div class="alert alert-success" role="alert" align="center">
          <img src=".assets/img/' . $new_name . '" class="img img-responsive img-thumbnail" width="200"> 
          <br>
          Imagem enviada com sucesso!
          <br>
          <a href="exemplo_upload_de_imagens.php">
          <button class="btn btn-default">Enviar nova imagem</button>
          </a></div>';
 } ?>
<script type = 'text/javascript' src = "<?php echo base_url('assets/js/deliveryman.js');?>"></script>
