<?php
include 'header.php';
include 'menu.php';
session_start();
$sessao=$_SESSION["Nome"];
$con="mysql:dbname=receitas_simples;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
$pdo=new PDO($con,$dbuser,$dbpass);
$sql="SELECT * FROM receitas WHERE Id_receita='".$_GET["id_receita"]."'";
$result=$pdo->query($sql);
$row=$result->fetch();
$_SESSION["Imagem"]=$row["Imagem"];
$id=$_GET["Id_receita"];
?>
<div class="espacamento-grande"></div>
<div class="pagina-container">
    <p>
        <a href="index_admin.php"><img src="icones/botao_voltar.png"></a>
    </p>
    
    
    
    <form action='editar_receita.php' method='POST'>
        
        Preencha/Edite os dados<br>
            Id:<input type="text" name="id_receita" value="<?php echo $row["Id_receita"]?>" readonly="true"> <br>
            Nome da receita:<input required type="text" name="nome" value="<?php echo $row["Nome"]?>"> <br>
            Tempo de preparação:<input required type="text" name="tempo" value="<?php echo $row["Tempo_preparacao"]?>"><br>
            Ingredientes:<textarea required type="text" name="ingredientes" style="width: 100%;min-height: 400px;"><?php echo $row["Ingredientes"]?></textarea><br>
            Receita:<textarea required type="text" name="receita" style="width: 100%;min-height: 400px;"><?php echo $row["Receita"]?></textarea><br>
            Video:<input required type="text" name="video" value="<?php echo $row["Video"]?>"><br>
            Imagem:<img height="100" src="Imagens/<?php echo $row['Imagem']?>"> <input type="file" name="Imagem" required><br>
            
            <center>
                <button type="submit" value="alterar">Alterar</button>
           </center>
    </form>
</div>
<?php
include 'rodape.php';
?>
