<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Acessos</title>
</head>
<body>
    <?php
    // Verifica se o cookie 'visitas' já está definido
    if (!isset($_COOKIE['visitas'])) {
        // Se o cookie não estiver definido, define-o como 1
        $visitas = 1;
        echo "<h2>Bem-vindo, esse é o seu primeiro acesso</h2>";
    } else {
        // Se o cookie estiver definido, incrementa o contador de visitas
        $visitas = $_COOKIE['visitas'] + 1;
        echo "<h2>Esta é a sua $visitas visita à página</h2>";
    }

    // Define o cookie para armazenar o número de visitas
    setcookie('visitas', $visitas, time() + (86400 * 30), "/"); // Expira em 30 dias
    ?>
</body>
</html>
