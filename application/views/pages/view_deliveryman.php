<title>Entregador - SpeedLog</title>
<div class="container">
    <?php foreach ($entregas as $key) {
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
  
  
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Aceitar Pedido
        </button>
  
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Confirmação de Viagem</h4>
              </div>
              <div class="modal-body">
                Você confirma o transporte desse pedido?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary confirmar" id="'. $key->entrega_id .'" >Confirmar Viagem</a>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
    <br>';
  }?>
  
<form method="POST" enctype="multipart/form-data">
  <label for="conteudo">Enviar imagem:</label>
  <input type="file" name="pic" accept="image/*" class="form-control">

  <div align="center">
    <button type="submit" class="btn btn-success">Enviar imagem</button>
  </div>
</form>
</div>
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

<script type = 'text/javascript' src = "<?php echo base_url();?>speedlog/assets/js/deliveryman.js"></script>