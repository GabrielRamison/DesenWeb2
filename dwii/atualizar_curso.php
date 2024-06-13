<?php
// Abre a conexão com o banco de dados
$conn = mysqli_connect("127.0.0.1", "root", "", "dwii");

if ($conn) {
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$duracao = $_POST['duracao'];

		// Atualiza o curso no banco de dados
		$sql = "UPDATE cursos SET nome=?, descricao=?, duracao=? WHERE id=?";
		$stmt = mysqli_prepare($conn, $sql);
		mysqli_stmt_bind_param($stmt, "sssi", $nome, $descricao, $duracao, $id);

		if (mysqli_stmt_execute($stmt)) {
			echo "Curso atualizado com sucesso.";
		} else {
			echo "Erro ao atualizar o curso.";
		}
		mysqli_stmt_close($stmt);
	}
} else {
	die("Houve um erro ao conectar com o banco de dados");
}

mysqli_close($conn);
?>
