<?php

$con = mysqli_connect("localhost","root","") or die("problema na conexao");
mysqli_select_db($con, "contas");
$query = "SELECT Usuario, Senha FROM Usuarios WHERE Usuario='".$_POST["Username"]."'";
$results = mysqli_query($con, $query) or die(mysqli_error($con));


$num = mysqli_num_rows($results);
if ($num == 0)
    echo "Utilizador não existe na base de dados";
else {
    $row = mysqli_fetch_assoc($results);
    if ($row["Senha"] == $_POST["pass"])
        header("Location:index.php");
    else
        header("Location:login.php");
}

?>