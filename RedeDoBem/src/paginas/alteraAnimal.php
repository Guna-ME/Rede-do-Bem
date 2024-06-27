$sql = "SELECT id, nome, tipo, genero, porte, idade, descricao FROM cadastro_animal WHERE adotado = 0";
$result = DB::query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar animais</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php while ($animal = DB::fetch_array($result)) { ?>
    <div class="Primeirocontainer">
        <div class="containerFotoBlog">
            <div class="imagemBlog"></div>
            <div class="fotinhosBlog">
                <div class="fotinhoUm"></div>
                <div class="fotinhoDois"></div>
                <div class="fotinhoTres"></div>
                <div class="fotinhoQuatro"></div>
            </div>
        </div>
        <div class="blogDescricao">
            <div class="nome"><h1><?php echo htmlspecialchars($animal['nome']); ?></h1></div>
            <div class="animalanimal"><h4><?php echo htmlspecialchars($animal['tipo']) . " - " . htmlspecialchars($animal['genero']) . " - " . htmlspecialchars($animal['porte']) . " - " . htmlspecialchars($animal['idade']); ?></h4></div>
            <p><?php echo htmlspecialchars($animal['descricao']); ?></p>
            <form method="post" action="adotar.php">
                <input type="hidden" name="id" value="<?php echo $animal['id']; ?>">
                <input type="submit" name="editar" value="Editar" class="botaoEditar">
                <input type="submit" name="adotar" value="Adotado" class="botaoAdotar">
            </form>
        </div>
    </div>
    <?php } ?>
</body>
</html>