<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<?php
		
		$conn = mysqli_connect("127.0.0.1", "root", "", "dwii");

		$id_curso = $_GET["id"]; 

		if($conn){
			$sql = "SELECT * FROM cursos WHERE id = $id_curso";

			$resultado = mysqli_query($conn, $sql);

			if(mysqli_num_rows($resultado) == 1)
				$aluno = mysqli_fetch_array($resultado);

				$nome = $aluno["nome"];
				$nasc = $aluno["nascimento"];
				$email = $aluno["telefone"];
				$tel = $aluno["telefone"];
				$sexo = $aluno["sexo"];


		}else{
			die("Houve um erro ao conectar com o banco de dados");
		}
	?>
	<form method="POST" action="atualizar.php">
		
		<div class="input-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" placeholder="Seu nome completo" value="<?php echo ($nome) ?>"> 
		</div>
		<div class="input-group">
			<label for="nome">Nascimento</label>
			<input type="date" name="nasc" placeholder="Sua data de nascimento" value="<?php echo ($nascimento) ?>">> 
		</div>
		<div class="input-group">
			<label for="nome">E-mail</label>
			<input type="email" name="email" placeholder="Seu endereço de email" value="<?php echo ($email) ?>">>
		</div>
		<div class="input-group">
			<label for="nome">Telefone</label>
			<input type="tel" name="tel" placeholder="Seu número de telefone" value="<?php echo ($tel) ?>">>
		</div>
		<div class="radio-group">
			<label for="sexo">Sexo</label> <br>
			<input type="radio" name="sexo" value="1" <?php if ($sexo == 1) echo ("checked");?>> <label for="feminino">Feminino</label> 
			<input type="radio" name="sexo" value="2" <?php if ($sexo == 2) echo ("checked");?>> <label for="masculino">Masculino</label> 
			<input type="radio" name="sexo" value="3" <?php if ($sexo == 3) echo ("checked");?>> <label for="intersexo">Intersexo</label>
		</div>
		Qual seu curso? 
		<div class="radio-group">
			<select name="curso">
				<option>Análise e Desenvolvimento de Sistemas</option>
				<option>Tecnologia em Processos Gerenciais</option>
			</select>
		</div>
		<br>
		Você confirma que as informações estão corretas?
		<input type="checkbox" name="termos"> Sim
		<!-- CRIANDO UM CAMPO OCULTO PARA ENVIAR O ID DO ALUNO -->
		<input type="hidden" name="id" value="<?php echo($id_aluno); ?>">
		<!-- <button>Cadastrar-se</button> -->
		<div class="input-group">
			<input type="submit" class="btn" name="enviar" value="Salvar"> 
		</div>
	
	</form>
</body>
</html>
