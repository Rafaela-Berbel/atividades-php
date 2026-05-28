<?php
include ("funcao.php");
$conn = conecta();
$varSQl="SELECT*FROM aluno ORDER BY id_aluno ASC";
$select= $conn -> prepare($varSQl);
$select->execute();
echo "<link rel='stylesheet' href='style.css'>";
echo "<div class ='tabela'>";
echo "<table class= tabela border =1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NOME</th>";
echo "<th>TELEFONE </th>";
echo"<th>SEXO</th>";
echo"<th>TURMA</th>";
echo "<th>Editar</th>";
echo "<th>Excluir</th>";
echo "</tr>";

while($linha= $select->fetch()){
    echo "<tr>";
    echo "<td >".$linha['id_aluno']."</td>";
    echo "<td >".$linha['nome']."</td>";
    echo "<td >".$linha['telefone']."</td>";
    echo "<td>".$linha['sexo']."</td>";
    echo "<td>".$linha['turma']."</td>";
    echo "<td> <a href='alterarAlunos.php?id=".$linha['id_aluno']."'> <img src= './lapis.png' alt= 'editar'> </a></td>";
    echo "<td><a href='excluirAlunos.php?id=".$linha['id_aluno']."'><img src= './lixeira.png' alt= 'excluir'></a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<a class = 'btn' href='adicionarAlunos.php'>Adicionar aluno</a>";
echo "</div>";

?>