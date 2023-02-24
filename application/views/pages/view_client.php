<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>speedlog/assets/css/client.css"> 
<title>Cliente - SpeedLog</title>
<div class="container">
    <!-- HTML  -->
</div>
<script type = 'text/javascript' src = "<?php echo base_url();?>speedlog/assets/js/client.js"></script>
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
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Peso da Mercadoria(Kg)</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"placeholder="Digite o peso da sua mercadoria" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Largura</label>
                    <input type="email" class="form-control" name="largura" id="largura"placeholder="Digite a largura da sua mercadoria" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Altura</label>
                    <input type="email" class="form-control" name="altura" id="altura"placeholder="Digite a altura da sua mercadoria" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">comprimento</label>
                    <input type="email" class="form-control" name="comprimento" id="comprimento"placeholder="Digite o comprimento da sua mercadoria" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">cep(retirada)</label>
                    <input type="email" class="form-control" name="cepretirada" id="cepretirada" placeholder="Digite o cep de retirada da sua mercadoria" aria-describedby="emailHelp">
                    <div id="divcep1"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">cep(entrega)</label>
                    <input type="email" class="form-control"onblur="teste()" name="cepentrega" id="cepentrega"placeholder="Digite o cep de entrega da sua mercadoria" aria-describedby="emailHelp">
                    <div id="divcep2"></div>

                </div>
                
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
                        </tr>
                    </thead>

                    <?php foreach ($historico as $p) { ?>
                    <tr>
                    <th scope="row"><?php echo $p->entrega_id?></th>

                        <td><?php echo $p->entrega_endereco?></td>
                        <td><?php echo $p->entrega_cep?></td>
                        <td><?php echo $p->entrega_peso?></td>
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

                        <td><?php echo $p->entrega_endereco?></td>
                        <td><?php echo $p->entrega_cep?></td>
                        <td><?php echo $p->entrega_peso?></td>
                    </tr>
                       
                    
        	    

        	    <?php } ?>
                    </tbody>
                    </thead>

            </div>
        </div>
           
      
        
    </div>
    
