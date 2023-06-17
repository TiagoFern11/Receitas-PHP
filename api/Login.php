<?php
include 'header.php';
include 'menu.php';
?>
<style>
    
button { 
    background-color: #4CAF50; 
    width: 100%;
    color: orange; 
    padding: 15px; 
    margin: 10px 0px; 
    border: none; 
    cursor: pointer; 
     } 
form { 
    border: 3px solid #f1f1f1; 
} 
input[type=text], input[type=password] { 
    width: 100%; 
    margin: 8px 0;
    padding: 12px 20px; 
    display: inline-block; 
    border: 2px solid green; 
    box-sizing: border-box; 
}
button:hover { 
    opacity: 0.7; 
} 
</style>
<div class="espacamento-grande"></div>
<div class="espacamento-grande"></div>
<form action="logincheck.php" method="POST">
    <div class="container"> 
        <a class="titulo">Login</a>
        <div class="espacamento-2"></div>
        <label>Utilizador: </label> 
        <input type="text" placeholder="Utilizador" name="user" required>
        <label>Palavra Passe: </label> 
        <input type="password" placeholder="Palavra passe" name="pass" required>
        <button type="submit">Login</button>
    </div> 
</form>   
<?php
include 'rodape.php';
?>