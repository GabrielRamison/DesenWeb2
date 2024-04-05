<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem de Boas-Vindas</title>
</head>
<body>
    <?php
    // Verifica se o cookie 'primeiro_acesso' já está definido
    if (!isset($_COOKIE['primeiro_acesso'])) {
        // Se o cookie não estiver definido, exibe a mensagem de primeiro acesso
        echo "<h2>Bem-vindo, esse é o seu primeiro acesso</h2>";
        
        // Define um cookie para marcar que o usuário já acessou a página
        setcookie('primeiro_acesso', 'true', time() + (86400 * 30), "/"); // Expira em 30 dias
    } else {
        // Se o cookie estiver definido, exibe a mensagem de boas-vindas padrão
        echo "<h2>Bem-vindo, é bom te ver por aqui novamente</h2>";
    }
    ?>
</body>
</html>