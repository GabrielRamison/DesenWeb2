<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Curso</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <h1>Editar Curso</h1>
    <?php
    // Abre a conexão com o banco de dados
    $conn = mysqli_connect("localhost", "root", "", "dwii");

    // Verifica a conexão
    if (!$conn) {
        die("Erro ao conectar com o banco de dados: " . mysqli_connect_error());
    }

    // Verifica se o parâmetro ID foi passado via GET
    if (isset($_GET['id'])) {
        $id_curso = $_GET['id'];

        // Consulta para obter os dados do curso pelo ID
        $sql = "SELECT * FROM cursos WHERE id = $id_curso";
        $resultado = mysqli_query($conn, $sql);

        // Verifica se a consulta retornou algum resultado
        if (mysqli_num_rows($resultado) > 0) {
            $curso = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
            // Dados do curso encontrados, atribuir às variáveis
            $nome = $curso['nome'];
            $descricao = $curso['descricao'];
            $duracao = $curso['duracao'];
        } else {
            echo "Curso não encontrado.";
            exit();
        }
    } else {
        echo "ID do curso não especificado.";
        exit();
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conn);
    ?>

    <form method="post" action="atualizar_curso.php">
        <div class="input-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" placeholder="Nome do curso" value="<?php echo htmlspecialchars($nome); ?>"> 
        </div>
        <div class="input-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" rows="4" cols="50"><?php echo htmlspecialchars($descricao); ?></textarea>
        </div>
        <div class="input-group">
            <label for="duracao">Duração:</label>
            <input type="text" name="duracao" placeholder="Duração do curso" value="<?php echo htmlspecialchars($duracao); ?>">
        </div>
        <!-- Campo oculto para enviar o ID do curso -->
        <input type="hidden" name="id" value="<?php echo $id_curso; ?>">
        <div class="input-group">
            <input type="submit" class="btn" name="update" value="Salvar"> 
        </div>
    </form>
</body>
</html>
