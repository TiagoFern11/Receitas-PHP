<?php
$con="mysql:dbname=receitas_simples;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
$pdo=new PDO($con,$dbuser,$dbpass);
$sql="SELECT * FROM receitas WHERE Id_receita='".$_GET["id_receita"]."'";
$result=$pdo->query($sql);
$row = $result->fetch();
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $row["Nome"];?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="CSS/demo.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/navigation-icons.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Plugin-menu/slicknav.min.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Geral.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/navigation-icons.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php
            include 'menu.php';
        ?>
        <div class="espacamento"></div>
        <div class="pagina-completa" style="margin-top: 20px;">
            <iframe class="video-inicio" src="<?php echo $row['Video'];?>" frameborder="0" allowfullscreen>
            </iframe>
        </div>
        <div class="centro-pagina" style="margin-top: 10px;">
            <a class="titulo"><?php echo $row["Nome"];?></a><br>
            <div class="espacamento-2"></div>
            <div class="informacoes-primarias">
                
                <a class="titulo-seccao">Tempo de preparação: <?php echo $row["Tempo_preparacao"];?>min</a>
                
                <div class="divisao"></div>
                
                <a class="titulo-seccao">Ingredientes</a>
                <p class="texto-animais-plantas">
                    <?php echo $row["Ingredientes"];?>
                </P>
                
                <div class="divisao"></div>
                
                <a class="titulo-seccao">Receita</a>
                <p class="texto-animais-plantas">
                    <?php echo $row["Receita"];?>
                </p>
                
                <div class="divisao"></div>
                <div class="espacamento-2"></div>
                <img class="imagem-grande" src="Imagens/<?php echo $row["Imagem"];?>" alt=""/>
                <div class="espacamento-2"></div>
                <div class="divisao"></div>
            </div>
            
        </div>
        
        <?php
            include 'rodape.php';
        ?>
    </body>
</html>
