<?php
	

	$nome = $_POST["nome"];
	$nascimento = $_POST["nasc"];
	$telefone = $_POST["tel"];
	$sexo = $_POST["sexo"];
	$curso = $_POST["curso"];
	$email = $_POST["email"];

	$erros = [];

	if (empty($nome) ){
		$erros[] = "Nome está vazio";
	}

	if (empty($nascimento) ){
		$erros[] = "O nascimento está vazio";
	}

	if (empty($telefone)){
		$erros[] = "O telefone está vazio";
	}

	if (empty($sexo) ){
		$erros[] = "Preencha o campo sexo";
	}

	if (empty($curso) ){
		$erros[] = "Preencha a curso";
	}

	if (empty($email) ){
		$erros[] = "Preencha o email corretamente";
	}


	if (count($erros) > 0) {
		echo ("Houve um erro: Verifique as mensagens abaixo");
		foreach ($erros as $erro) {
			echo ("$erro <br>");
		}
	} else {
		//abre conexao com o banco de dados mysql
		//endereco ip do servidor mysql, usuario, senha, nome da base de dados
		$conn = mysqli_connect("localhost", "root", "", "dwii" ); 

		if($conn){
			//conexão com o banco com sucesso

			//monta a instrucao sql a ser executada
			$sql = "INSERT INTO alunos (nome, nascimento, email, telefone, sexo, curso) VALUES ('$nome', '$nascimento', '$email', '$telefone', $sexo, '$curso')";

			//mysqli_query executa a consulta sql
			//se retornar true, a consulta foi executada com sucesso.
			if (mysqli_query($conn, $sql)){
				echo("Aluno inserido com sucesso!");
			}else{
				echo("Houve um errro ao inserir o registro: <br> $sql");
			}

			//encerra a conexão com o banco de dados
			mysqli_close($conn);
		}else{
			//erro ao conectar com o bd
			die("Erro ao conectar com banco de dados");
		}
	}
?>
