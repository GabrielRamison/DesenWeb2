<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
</head>
<body>
    <h2>Votação Simples</h2>
    <form method="post">
        <input type="submit" name="votar" value="Votar">
    </form>

    <?php
    // Verifica se o botão foi pressionado
    if (isset($_POST['votar'])) {
        // Verifica se o usuário já votou
        if (!isset($_COOKIE['votou'])) {
            echo "<p>Você votou!</p>";
            
            // Define um cookie para evitar que o usuário vote novamente
            setcookie('votou', true, time() + (86400 * 30), "/"); // 86400 = 1 dia
        } else {
            echo "<p>Você já votou e só pode votar uma vez.</p>";
        }
    }
    ?>
</body>
</html>