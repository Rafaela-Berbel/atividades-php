<?php
include("funcao.php");
$conn= conecta();

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $nomeCurso = $_POST['nomeCurso'];
    $valor= $_POST['valor'];
    $sql = "INSERT INTO curso(nomeCurso, valor) VALUES(:nomeCurso, :valor)";
    $insert = $conn->prepare($sql);
    $insert->bindParam(":nomeCurso", $nomeCurso);
    $insert->bindParam(":valor", $valor); if($insert->execute()){ salvaUpload($conn, $_FILES, 'logo');
    header("Location: cursos.php"); 
    exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_2.css">
    <title>Document</title>
</head>
<body> 
   <div class="container ">
    <h2>Adicionar Cursos</h2>
    <form  class=" formulario" method="POST" name="form"
    action="adicionarCursos.php" enctype="multipart/form-data">
    <label for="nomeCurso">Nome do curso:</label>
    <input type="text"name="nomeCurso">
    <label for="valor">Valor:</label>
    <input type="text" name="valor">
    <label for="logo">Adicionar logo:</label>
    <input type="file" name ="logo">
    <input type="submit" value="Adicionar Curso">
    </form>
    </div> 
</body>
</html>
