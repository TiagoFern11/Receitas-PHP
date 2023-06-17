<?php
    include 'header.php';
    include 'menu.php';
    $con="mysql:dbname=receitas_simples;host=localhost;charset=utf8";
    $dbuser="root";
    $dbpass="";
    $pdo=new PDO($con,$dbuser,$dbpass);
    $sql="SELECT * FROM receitas limit 3";
    $result=$pdo->query($sql);
?>
    
<div class="pagina-completa">
    <div class="espaco-branco"></div>
    <div class="centro-pagina">

        <a class="titulo">Ultimas Receitas</a>
        <div class="espacamento-2"></div>
        <table class="tabela-imagens">
            <?php
            foreach ($result->fetchAll() as $row)
            {
                $id_receita=$row["Id_receita"];
                echo '<tr>';
                echo '<td class="tabela-imagens-espacos">';
                    echo  '<div class="imagem-tabela-container">';
                        echo '<a href="Receita.php?id_receita='.$id_receita.'">';
                            echo '<img class="imagem-tabela-imagens" alt="" src="Imagens/'.$row["Imagem"].'">';
                            echo '<div class="imagem-tabela-texto">'.$row["Nome"].'</div>';
                        echo '</a>';
                    echo '</div>';
                echo '</td>';
                echo "</tr>";
            }

            ?>
        </table>
    </div>
</div>

<?php
    include 'rodape.php';
?>
