<?php
session_start();
$sessao=$_SESSION["Nome"];
$con="mysql:dbname=receitas_simples;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
$pdo=new PDO($con,$dbuser,$dbpass);
$id_receita=$_POST["id_receita"];
$nome=$_POST["nome"];
$tempo=$_POST["tempo"];
$ingredientes=$_POST["ingredientes"];
$receita=$_POST["receita"];
$video=$_POST["video"];
$imag=$_POST["Imagem"];
$sql="UPDATE receitas SET Nome='$nome', Ingredientes='$ingredientes', Tempo_preparacao='$tempo',Receita='$receita', Video='$video', Imagem='$imag' where Id_receita='$id_receita'";
$result=$pdo->query($sql);
header("location:index_admin.php");
?>

