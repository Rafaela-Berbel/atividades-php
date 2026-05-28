<?php
include ("funcao.php");
$conn=conecta();
$filtroValor = $_POST['filtro'] ??'';
if($filtroValor != ''){
            $varSQL= "SELECT*FROM curso WHERE (valor<= :valor)";
            $select= $conn->prepare($varSQL);
            $select-> bindParam(":valor",$filtroValor);
}else{
    $varSQL= "SELECT*FROM curso";
    $select= $conn-> prepare($varSQL);
}
$select->execute();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Cursos</title>
    <link rel="stylesheet" href="style_2.css">
</head>
<body>
      <div class="container">
        <form method="POST" name="form" action="cursos.php">
            <label for="filtro">Valor:</label>
            <input type="text" name="filtro" id="filtro">
            <input type="submit" value="Filtrar">
        </form>
    <h2>Cursos até o valor escolhido</h2>
    <table>
        <thead>
            <tr>
                <th>Curso</th>
                <th>Valor</th>
                <th>Logo</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $encontrou =false;
            while($linha = $select->fetch()){
                $encontrou=true;

echo "
<tr>
    <td>".$linha['nomecurso']."</td>
    <td class='valor'>
        R$ ".number_format($linha['valor'],2,',','.')."
    </td>
    <td>
        <img src='imagens/".$linha['id_curso'].".jpg'>
    </td>
    <td>
        <a href='alterarCurso.php?id=".$linha['id_curso']."'>
            <img src='./lapis.png' alt='editar'>
        </a>
    </td>
    <td>
        <a href='excluirCurso.php?id=".$linha['id_curso']."'>
            <img src='./lixeira.png' alt='excluir'>
        </a>
    </td>
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
    <a  class= "btn" href="adicionarCursos.php">Adicionar novo curso </a>
    </div>

</body>
</html>