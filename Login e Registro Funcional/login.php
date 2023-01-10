<?php
	include_once('connection.php');
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/scrollbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="icones/favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Redragon Shop</title>
</head>
<body>
<h1 class="titlelogin">Redragon Shop</h1>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="verifica.php" method="POST">
			<h1>Criar Conta</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>Ou crie sua conta usando seus dados</span>
			<input type="text" name="username" placeholder="Username"  required/>
			<input type="email" name="emailreg" placeholder="Email"  required/>
            <input type="date" name="aniversario" required/>
			<input type="password" name="password" placeholder="Senha" required/>
			<button>Registrar</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="verificalogin.php" method="POST">
			<img src="imagens/redragon.png" alt="">
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>Ou use sua conta</span>
			<input type="text" name="Username" placeholder="Username" required/>
			<input type="password" name="pass" placeholder="Senha" required />
			<a class="forgotpass"href="#">Esqueceu sua senha ?</a>
			<a href="index.html"><button class="buttonlogin">Entrar</button></a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bem vindo de volta!</h1>
				<p>Para permanecer conectado com a gente por favor faça o login com suas informações.</p>
				<button class="ghost" id="signIn">Login</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Olá Pessoal</h1>
				<p>Faça login com as informações registradas anteriormente, e começe sua jornada com a gente</p>
				<button class="ghost" id="signUp">Registre - se</button>
			</div>
		</div>
	</div>
</div>
<footer>
	<p style="font-family: 'Merriweather Sans', sans-serif;">
    © 2023, Todos direitos reservados à, Redragon Shop
	</p>
</footer>
</body>
</html>
<script src="js/login.js"></script>
<script src="https://kit.fontawesome.com/7aedbe9e70.js" crossorigin="anonymous"></script>