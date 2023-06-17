<?php
include 'header.php';
include 'menu.php';
session_start();
$sessao=$_SESSION["Nome"];
$con="mysql:dbname=receitas_simples;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
$pdo=new PDO($con,$dbuser,$dbpass);
?>
<div class="espacamento-grande"></div>
<div class="pagina-container">
    <p>
        <a href="index_admin.php"><img src="icones/botao_voltar.png"></a>
    </p>
    
    
    
    <form action='adicionar_receita.php' method='POST'>
        
        Preencha/Edite os dados<br>
            Nome da receita:<input required type="text" name="nome" > <br>
            Tempo de preparação:<input required type="text" name="tempo" ><br>
            Ingredientes:<textarea required type="text" name="ingredientes" style="width: 100%;min-height: 400px;"></textarea><br>
            Receita:<textarea required type="text" name="receita" style="width: 100%;min-height: 400px;"></textarea><br>
            Video:<input type="text" name="video" required><br>
            Imagem:
            <input type="file" name="Imagem"accept="image/jpeg, image/png"  onchange="document.getElementById('img1').src = window.URL.createObjectURL(this.files[0])"><br>
            <img class="imagem-animais" src="" alt="" id="img1"/>
            
            <center>
                <button type="submit" value="Adicionar">Adicionar</button>
           </center>
    </form>
</div>
<?php
include 'rodape.php';
?>
