<?php

	$nome = $_POST["nome"];
	$descricao = $_POST["desc"];
	$duracao = $_POST["dura"];

	$erros = [];

	if (empty($nome) ){
		$erros[] = "Nome está vazio";
	}

	if (empty($descricao) ){
		$erros[] = "A descrição está vazio";
	}

	if (empty($duracao)){
		$erros[] = "O campo duração está vazio";
	}

	if (count($erros) > 0) {
		echo ("Houve um erro: Verifique as mensagens abaixo");
		foreach ($erros as $erro) {
			echo ("$erro <br>");
		}
	} else {
		// se cair  aqui é por que tudo preenchido corretamente
		
		// abre a conexão com o banco de dados mysql
		// endereco ip do servidor mysql, usuario, senha, nome da base
		$conn = mysqli_connect("localhost", "root", "", "dwii");

		if ($conn){
			// conexão com o banco com sucesso

			// monta a instrução sql a ser executada
			$sql = "INSERT INTO cursos (nome, descricao, duracao) VALUES ('$nome', '$descricao', '$duracao')";

			// mysqli_query executa a consulta sql
			// se retornar true, a consulta foi executada com sucesso. Em caso de falha, retorna false
			if (mysqli_query($conn, $sql) ){
				echo ("Curso inserido com sucesso");
			} else {
				echo ("Houve um erro ao inserir o registro: <br> $sql");
			}

			// encerra a conexão com o banco de dados
			mysqli_close($conn);
		} else {
			// erro ao conectar com o bd
			die("Erro ao conectar com o banco de dados");
		}

	}
?>