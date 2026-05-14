<?php
$string_conexao= "pgsql:host=localhost; port=5432; dbname=bd_sql_parte1; user=postgres; password=postgres";

try{
    $conn = new PDO($string_conexao);
}catch(PDOExpection$e){
    echo "Serviço indisponível, tente novamente mais tarde";
    exit;
}
$varSQl="SELECT*FROM auluno";
$select= $conn -> query($varSQl);

while($linha= $select->fetch()){
    echo $linha['nome']."<br>";
    echo"<a href='mostra.php?id=".$linha['id_aluno']."'>Clique para editar</a><br>";
}



?>