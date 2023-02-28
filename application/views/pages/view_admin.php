<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>speedlog/assets/css/admin.css"> 
<title>Admin - SpeedLog</title>
<div class="container">
    <a href='connect/logout'>Logout</a>
    <form>
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
            <label for="telefoneAdimin" class="form-label">Telefone</label>
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
<script type = 'text/javascript' src = "<?php echo base_url();?>speedlog/assets/js/admin.js"></script>