<?php
    include 'header.php';
    include 'menu.php';
    $con="mysql:dbname=receitas_simples;host=localhost;charset=utf8";
    $dbuser="root";
    $dbpass="";
    $pdo=new PDO($con,$dbuser,$dbpass);
    $sql="SELECT * FROM receitas";
    $result=$pdo->query($sql);
?>
    
<div class="pagina-completa">
    <div class="espaco-branco"></div>
    <a class="titulo">Receitas Simples</a>

    <div class="centro-pagina">

        <div class="classe-animal">
            <table class="tabela-classes">
                <tr>
                    <th class="espaco-classes-h2">
                        <a class="titulo-3">Jantar rapido</a><br>
                        <a class="texto-animais-plantas">
                            Se procura receitas deliciosas e práticas, quer inspirar-se e partilhar ideias 
                            úteis para renovar as refeições do seu dia-a-dia, seja bem-vindo, está na página certa!
                        </a>
                        <!--<a href="Tabela-Animais-Aves.html" class="botao-classes">Saber mais</a>-->
                    </th>
                    <td class="espaco-classes-img">
                        <iframe class="video-inicio" src="https://www.youtube.com/embed/dZo7Rx5ihTA" frameborder="0" allowfullscreen></iframe>
                    </td>
                </tr>
            </table>
        </div>

        <a class="titulo-2">Melhores receitas</a>
        <table class="tabela-imagens">
            <tr>
                <td class="caixa-imagem-2">
                    <img class="imagem-2" src="Imagens/Carnes/Bife-Molho-Madeira-Cogumenlos/Bife-Molho-Madeira-Cogumelos-SI-2.jpg" alt=""/>
                    <div class="centro-pagina">
                        <a class="descricao-4">descição da comida</a>
                        <a href="Paginas-Noticias/Cria-golfinho.html" class="botao-amarelo">Saber Mais</a>
                    </div>
                </td>
                <td class="caixa-imagem-2">
                    <img class="imagem-2" src="Imagens/Carnes/Bife-Molho-Madeira-Cogumenlos/Bife-Molho-Madeira-Cogumelos-SI-2.jpg" alt=""/>
                    <div class="centro-pagina">
                        <a class="descricao-4">descição da comida</a>
                        <a href="Paginas-Noticias/Primatas.html" class="botao-amarelo">Saber Mais</a>
                    </div>
                </td>
                <td class="caixa-imagem-2">
                    <img class="imagem-2" src="Imagens/Carnes/Bife-Molho-Madeira-Cogumenlos/Bife-Molho-Madeira-Cogumelos-SI-2.jpg" alt=""/>
                    <div class="centro-pagina">
                        <a class="descricao-4">descição da comida</a>
                        <a href="Paginas-Noticias/Wild-Planet.html" class="botao-amarelo">Saber Mais</a>
                    </div>
                </td>
            </tr>
        </table>
        <div class="espacamento-2"></div>
        <a class="titulo-2">Todas as Receitas</a>
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
