<?php
session_start();
$sessao=$_SESSION["Nome"];
$con="mysql:dbname=receitas_simples;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
$pdo=new PDO($con,$dbuser,$dbpass);
$id_receita=$_GET["id_receita"];
$sql="DELETE From receitas where Id_receita='$id_receita'";
$result=$pdo->query($sql);
header("location:index_admin.php");
?>
