

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
        <div class="loginLogin"><input class="inputLogin" type="password" placeholder="Senha" id="senha" name="senha" required></div>
        <div class="loginLogin"><input class="inputLogin" type="password" placeholder="Nova Senha" id="senha" name="senha" required></div>
        <div><input class="inputLogin" type="submit" id="botaoLogin" value="Cadastrar"></div>
    </form>
</div>
</body>
</html>