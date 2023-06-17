<?php
include 'header.php';
include 'menu.php';
session_start();
$sessao=$_SESSION["Nome"];
$con="mysql:dbname=receitas_simples;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
$pdo=new PDO($con,$dbuser,$dbpass);
$sql="select * from receitas";
$result=$pdo->query($sql);
?>
<script>
    function confirmdel(a)
    {
        var j=confirm('Confirma que quer eliminar?');
        if(j)
            window.location=a.attr("href");
    }
</script>

<?php
if($sessao!=null){
?>
<div class="espacamento"></div>
<div class="espacamento"></div>
<div class="container-2">
    <a href="adicionar.php" style="font-size:21px; color:#333">Registar novo</a>
    <a href="imprimir.php" style="font-size:21px; color:#333; margin-left: 20px;">Imprimir</a>
</div>
<div class="espacamento-2"></div>

<table class="container-2">
    <tr>
        <th width="500">Receita</th>
        <th>Visualizar</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php
    foreach ($result->fetchAll() as $row)
    {
        $id_receita=$row["Id_receita"];
        echo "<tr>";
        echo "<td>".$row["Nome"]."</td>";
        echo '<td style="text-align:center"><a href="Receita.php?id_receita='.$id_receita.'"><img src="icones/icon_visua.png"></a></td>';
        echo '<td style="text-align:center"><a href="editar.php?id_receita='.$id_receita.'"><img src="icones/icon_editar.png"></a></td>';
        echo '<td style="text-align:center"><a onclick="confirmdel(this);return false;" href="eliminar.php?id_receita='.$id_receita.'"><img src="icones/icon_delete.png"></a></td>';
        echo "</tr>";
    }
    
    

    ?>
</table>
<?php
}
else
    echo "<a class='titulo-2'>Não é Administrador.</a>";

include "rodape.php";
?>