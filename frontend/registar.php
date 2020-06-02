<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registar</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>

<?php 
include 'funcoes.php';
?>

<div class="login-form">
    <form action="recebe_registo.php?cod_msg=1" method="post">
        <h2 class="text-center">Registar</h2> 
	<br>
		
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nome" name="nome" required="required">
        </div>
        <div class="form-group">
		    <input type="password" class="form-control" placeholder="Palavra-Chave" name="pwd" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirmar Palavra-Chave" name="conf_pwd" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" placeholder="Numero Telefone" name="numero_telefone" required="required">
        </div>
		<div class="form-group">
			<select id="Sexo" name="sexo" placeholder="Sexo" class="form-control">
			<option value="0">Sexo</option>
			<option value="masculino">Masculino</option>
			<option value="feminino">Feminino</option>
        </div>
		<div class="form-group">
            <input type="text" class="form-control" placeholder="Data de Nascimento" name="data_nascimento" onfocus="(this.type='date')" required="required">
        </div>		
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Submeter</button>
        </div>
    </form>
    <p class="text-center"><a href="frontend.php">Entrar</a></p>
	<p class="text-center"><a href="../pap.php">Home</a></p>
	
</div>
</body>
</html>                       		                            