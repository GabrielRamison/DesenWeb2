<?php
// ajuste os parâmetros conforme o seu usuário, senha e banco de dados
$conn = mysqli_connect("127.0.0.1", "root", "", "dwii");

// Verifica se a conexão foi bem sucedida
if ($conn) {
    // Verifica se o parâmetro 'id' foi passado via GET
    if (isset($_GET['id'])) {
        // Captura o ID do curso a ser excluído (certifique-se de validar e limpar esta entrada no mundo real para evitar injeção de SQL)
        $id = (int) $_GET['id'];

        // Monta a consulta SQL para deletar o curso com o ID fornecido
        $sql = "DELETE FROM cursos WHERE id = $id";

        // Executa a consulta SQL
        if (mysqli_query($conn, $sql)) {
            echo "Curso excluído com sucesso";
        } else {
            echo "Houve um erro ao excluir o curso: " . mysqli_error($conn);
        }
    } else {
        echo "ID não fornecido para exclusão";
    }
} else {
    echo "Houve um erro ao conectar com o banco de dados: " . mysqli_connect_error();
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
