<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

    <h2>Filtro de Cursos</h2>

    <form method="POST" action="atividade_2.php">

        <label for="valor_filtro">
            Informe o valor máximo do curso:
        </label>

        <input 
            type="number" 
            id="valor_filtro" 
            name="filtro"
            placeholder="Digite o valor"
        >

        <input type="submit" value="Pesquisar Cursos">

    </form>

</div>
</body>
</html>

