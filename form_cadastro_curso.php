<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<form method="POST" action="salvar_cursos.php">
		
		<div class="input-group">
			<label for="nome">Nome do curso</label>
			<input type="text" name="nome" placeholder="Nome do curso"> 
		</div>
		<div class="input-group">
			<label for="nome">Descrição</label>
			<input type="text" name="desc" placeholder="Descrição do curso"> 
		</div>
		<div class="input-group">
			<label for="nome">Duração</label>
			<input type="text" name="dura" placeholder="Duração do curso">
		</div>
		<br>
		Você confirma que as informações estão corretas?
		<input type="checkbox" name="termos"> Sim
		<!--<button>Cadastrar-se</button>-->
		<div class="input-group">
			<input type="submit" class="btn" name="enviar" value="Salvar"> 
		</div>
	
	</form>
</body>
</html>
