<?php
include ("funcao.php");
$conn = conecta();
$varSQl="SELECT*FROM aluno WHERE sexo = :sexo";
$sexo = $_POST['sexo'];
$select= $conn -> prepare($varSQl);
$select->bindParam(":sexo",$sexo);
$select->execute();
echo "<link rel='stylesheet' href='style.css'>";
echo "<table class= tabela border =1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NOME</th>";
echo "<th>TELEFONE </th>";
echo"<th>SEXO</th>";
echo"<th>TURMA</th>";
echo "<th>Editar</th>";
echo "</tr>";

while($linha= $select->fetch()){
    echo "<tr>";
    echo "<td >".$linha['id_aluno']."</td>";
    echo "<td >".$linha['nome']."</td>";
    echo "<td >".$linha['telefone']."</td>";
    echo "<td>".$linha['sexo']."</td>";
    echo "<td>".$linha['turma']."</td>";
    echo" <td> <a href='editar.php'> <img src= './lapis.png' alt= 'editar'> </a></td>";
    echo "</tr>";
}
echo "</table>";



?>