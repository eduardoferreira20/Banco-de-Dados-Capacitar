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
	$sql = "SELECT `login`,`senha` FROM `usuario` WHERE login = '$login' AND senha = '$senha'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	if($row){
		echo "<script> alert('Acertou mizeravi'); window.location = '/Projeto/index.html'</script>";
		 // header('Location : index.php');
	}else{
		echo "<script> alert('Errou feio, errou rude');</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
	<title>Login</title>
</head>
<body class="bod" style="background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);">
	<div class="dados">
		<br>
		<br>
		<center><h2 style=" color:blackS;">Login:</h2></center>
		<form method="post" action="login.php">
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
			<button class="btton" type="submit">login</button>
			<br>
			<br>
			<br>
			<br>
			<center><p>É novo no site?  <a href="cadastro.php">Clique aqui</a> e cadastre-se.</p></center>
		</form>
	</div>
</body>
</html>