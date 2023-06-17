<?php
session_start();
$sessao=$_SESSION["Nome"];
$con="mysql:dbname=receitas_simples;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
$pdo=new PDO($con,$dbuser,$dbpass);
$nome=$_POST["nome"];
$tempo=$_POST["tempo"];
$ingredientes=$_POST["ingredientes"];
$receita=$_POST["receita"];
$video=$_POST["video"];
$imag=$_POST["Imagem"];
$sql="Insert into receitas(Nome, Ingredientes, Tempo_preparacao, Receita, Imagem, Video) VALUES('$nome', '$ingredientes', $tempo,'$receita','$imag','$video')";
$result=$pdo->query($sql);
header("location:index_admin.php");
?>