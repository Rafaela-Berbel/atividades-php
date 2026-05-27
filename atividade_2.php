<?php
include ("funcao.php");
$conn=conecta();
$varSQL= "SELECT*FROM curso WHERE (valor<= :valor)";
$filtroValor = $_POST['filtro'];
$select= $conn->prepare($varSQL);
$select-> bindParam(":valor",$filtroValor);
$select->execute();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tabela de Cursos</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class= container>

    <h2>Cursos até o valor escolhido</h2>
    <table>
        <thead>
            <tr>
                <th>Curso</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $encontrou =false;
            while($linha = $select->fetch()){
                $encontrou=true;
                echo"
                <tr>
                  <td>".$linha['nomecurso']."</td>
                  <td class='valor'>R$ ".number_format($linha['valor'],2,',','.')."</td>
                </tr>";
            }
            ?>

        </tbody>
    </table>
    <?php
    if(!$encontrou){
        echo "<p class='sem-resultado'>Nenhum curso encontrado </p>";
    }
    ?>
    </div>
</body>
</html>