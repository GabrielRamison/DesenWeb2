<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="processa.php">
        <fieldset>
        <legend>Cadastrar Usuário</legend>
        Nome: <input type="text" name="nome"> <br>
        Nascimento: <input type="date" name="nasc"><br>
        Email:<input type="email" name="email"><br>
        Telefone:<input type="tel" name="tel"><br>
        Sexo:
        <input type="radio" name="sexo" value="m">Masculino
        <input type="radio" name="sexo" value="f">Feminino
       <br>
        Onde você estuda:
        <select name="escola">
            <option>Instituto Federal do Rio Grande do Sul</option>
            <option>Escola Souza Cruz</option>
            <option>Escola Frei Miguelinho</option>
        </select>
        Senha:<input type="password" name="senha" /><br>
        Repita a senha:<input type="password" name="senha2" /><br>
        <br>
        Aceita os termos?
        <input type="checkbox" name="termos">
        <button>Cadastrar-se</button>
    </fieldset>
    </form>
</body>
</html>