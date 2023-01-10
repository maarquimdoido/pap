<?php
include_once('connection.php');
	$query = "insert into usuarios"
						." (Usuario, Senha, Email, Nascimento)"
						." values"
						." ('".$_POST["username"]
						."', '".md5($_POST["password"])
						."', '".$_POST["emailreg"]
						."', '".$_POST["aniversario"]."')";
	echo $query."<br>";
	mysqli_query($con, $query) or die(mysqli_error($con));
	echo "Registo inserido com sucesso";
?>