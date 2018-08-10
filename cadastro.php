<?php

include ('connection.php');

$modo = "";
if(isset($_POST['modo']))
	$modo = $_POST['modo'];
$login = " ";
if (isset($_POST['login'])) {
	$login = $_POST['login'];
}
$senha = " ";
if(isset($_POST['senha'])){
	$senha = $_POST['senha'];
}
$nome = " ";
if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
}
$email = " ";
if(isset($_POST['email'])){
	$email = $_POST['email'];
}
$cpf = " ";
if(isset($_POST['cpf'])){
	$cpf = $_POST['cpf'];
}
$rg = " ";
if(isset($_POST['rg'])){
	$rg = $_POST['rg'];
}
$idade = " ";
if(isset($_POST['idade'])){
	$idade = $_POST['idade'];
}
$nomePai = " ";
if(isset($_POST['nomePai'])){
	$nomePai = $_POST['nomePai'];
}
$nomeMao = " ";
if(isset($_POST['nomeMao'])){
	$nomeMao = $_POST['nomeMao'];
}
$aniversário = " ";
if(isset($_POST['aniversário'])){
	$aniversário = $_POST['aniversário'];
}
if($modo == 'cadastrar'){
	
	$sql = "INSERT INTO info (login, senha, nome, email, cpf, rg, idade , nomePai, nomeMao, aniversário ) VALUES ('".$login."','".$senha."','".$nome."','".$email."','".$cpf."','".$rg."',.$idade.,'".$nomePai."','".$nomeMao."','".$aniversário."')";

	if($conn->query($sql)){

		echo "<script> alert('Dados salvos');
		window.location = 'login.php'</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="cadastro.css">
	<title>Cadastro</title>
</head>
<body id='body'  style="background-image: linear-gradient(to bottom, #bdc40f, #aace28, #95d73f, #7ddf56, #5de76e);">
	<div class="dados">
		<br>
		<h2 style=" color:black;">Cadastro:</h2>
		<form method="POST" action="cadastro.php" >
			<div class="dados-forma">
				<label>Login:</label>
				<input placeholder="Digite o seu login" name="login" type="text" required>
			</div>
			<div class="dados-forma2">
				<br>
				<label>Senha:</label>
				<input placeholder="Digite a sua senha" name="senha" type="password" required>
			</div>
			<div class="dados-forma2">
				<br>
				<label>Nome:</label>
				<input placeholder="Digite o seu nome completo" name="nome" type="text" required>
			</div>
			<div class="dados-forma2">
				<br>
				<label>e-mail:</label>
				<input placeholder="Digite o seu e-mail" name="email" type="email" required>
			</div>
			<div class="dados-forma2">
				<br>
				<label>CPF:</label>
				<input placeholder="Digite o seu CPF" name="cpf" type="text" required>
			</div>
			<div class="dados-forma2">
				<br>
				<label>RG:</label>
				<input placeholder="Digite o seu RG" name="rg" type="text" required>
			</div>
			<div class="dados-forma2">
				<br>
				<label>Idade:</label>
				<input name="idade" type="text">
			</div>
			<div class="dados-forma2">
				<br>
				<label>Nome do pai:</label>
				<input  name="nomePai" type="text" required>
			</div>
			<div class="dados-forma2">
				<br>
				<label>Nome da mãe:</label>
				<input  name="nomeMao" type="text" required>
			</div>
			<div class="dados-forma7">
				<br>
				<label>Data de nascimento:</label>
				<input placeholder="xx/xx/xxxx" name="aniversário" type="text" required>
			</div>
			<br>
			<input type="hidden" name="modo" value="cadastrar">
			<button class="btton" type="submit">salvar</button>
		</form>
		<div> 
		</div>
	</body>
	</html>