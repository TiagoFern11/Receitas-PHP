<?php
$con="mysql:dbname=receitas_simples;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
$pdo=new PDO($con,$dbuser,$dbpass);
$username=$_POST["user"];
$password=$_POST["pass"];
$sql="select * from administrador where Utilizador='".$username."' and Passe='".$password."'";
$result=$pdo->query($sql);
$n=$result->rowCount();
$row=$result->fetch();
If ($n==1) {    
    session_start();
    $_SESSION["Nome"]=$row["Utilizador"];
    If ($row["Cargo"]==1) {
      header("location:index_admin.php");
    }
    else {
      echo "Não é administrador";
    }
 }
 else {
    header("location:Login.php");
 }
?>


