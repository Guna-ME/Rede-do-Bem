<?php

require_once "config/DB.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM login WHERE login = ?";
    $stmt = $DB->prepare($sql);
    
    // Verifica se a preparação da consulta falhou
    if (!$stmt) {
        echo "Erro na preparação da consulta: " . $DB->error;
        exit;
    }

    // Liga o parâmetro de login à consulta preparada
    $stmt->bind_param("s", $login);
    
    // Executa a consulta
    $stmt->execute();

    // Obtém o resultado da consulta
    $result = $stmt->get_result();

    // Verifica se o usuário foi encontrado
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verifica se a senha digitada corresponde à senha no banco de dados
        if (password_verify($senha, $row['senha'])) {
            // Inicia a sessão
            session_start();
            
            // Armazenar informações do usuário na sessão
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['nome'];
            
            // Redirecionar para a página de dashboard
            header("Location: menu.php");
            exit;
        } else {
            // Senha incorreta
            echo "Login ou senha incorretos.";
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedeDoBem</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body id="body1">
<div id="containerLogin">
    <img class="imgLogin" src="assets/images/logo.png" alt="logo">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="loginLogin"><input class="inputLogin" type="text" placeholder="Login" id="login" name="login" required></div>
        <div class="loginLogin"><input class="inputLogin" type="password" placeholder="Senha" id="senha" name="senha" required></div>
        <div><input class="inputLogin" type="submit" id="botaoLogin" value="Entrar"></div>
    </form>
    <a class="aLogin" href="">Esqueceu sua senha?</a>
</div>
</body>
</html>