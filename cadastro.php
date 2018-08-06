<?php

include 'connection.php';

$modo = "";
if(isset($_POST['modo']))
	$modo = $_POST['modo'];

$login = "";
if(isset($_POST['login'])){
	$login = $_POST['login'];
}
$senha = "";
if(isset($_POST['password'])){
	$senha = $_POST['password'];
}
if($modo == 'inserir'){
	$sql = "INSERT INTO usuario (login,senha) VALUES('".$login."','".$senha."')";
	$result = $conn->query($sql);
	if($result){
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
		<h2 style=" color:blackS;">Cadastro:</h2>
		<form method="POST" action="cadastro.php">
			<div class="dados-forma">
				<label>Login:</label>
				<input placeholder="Digite o seu login" name="login" type="text" required>
			</div>
			<div class="dados-forma2">
				<br>
				<label>Senha:</label>
				<input placeholder="Digite a sua senha" name="password" type="password" required>
			</div>
			<br>
			<input type="hidden" name="modo" value="inserir">
			<button class="btton" type="submit">salvar</button>
		</form>
		<div> 
</div>
</body>
</html>