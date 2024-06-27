
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="body1">
    <div id="containerOpcoes">
        <img class="imgOpcoes" img src="assets/images/logo.png" alt="logo">
        <h1 class="h1Opcoes">O que gostaria de fazer?</h1>
        <br>
        <div class="gridOpcoes">
            <div><input class="inputOpcoes" type="submit" value="Postar Animalzinho" onclick="window.location.href='<?php echo BASE_URL; ?>addAnimal'" class="orgOpcoes"></div>
            <div><input class="inputOpcoes" type="submit" value="Animaizinhos Adotados" onclick="window.location.href='<?php echo BASE_URL; ?>alteraAnimal'" class="orgOpcoes"></div>
            <div><input class="inputOpcoes" type="submit" value="Editar Sobre Nós" onclick="window.location.href='<?php echo BASE_URL; ?>alteraSobre'" class="orgOpcoes"></div>
            <div><input class="inputOpcoes" type="submit" value="Postar no Blog" onclick="window.location.href='<?php echo BASE_URL; ?>addBlog'" class="orgOpcoes"></div>
            <div><input class="inputOpcoes" type="submit" value="Alterar Postagens" onclick="window.location.href='<?php echo BASE_URL; ?>alteraBlog'" class="orgOpcoes"></div>
            <div><input class="inputOpcoes" type="submit" value="Editar Ajude-me" onclick="window.location.href='<?php echo BASE_URL; ?>alteraAjuda'" class="orgOpcoes"></div>
        </div>
    </div>
</body>
</html>