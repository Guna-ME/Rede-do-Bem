<?php

$sql = "SELECT id_blog, foto1, foto2, foto3, foto4, titulo, texto FROM blog ORDER BY id_blog DESC";
$result = DB->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/98d028094a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="container">
        <div class="cabecario">
            <div class="cabecario">
                <div class="img-container">
                <a href="<?php echo BASE_URL; ?>home">
                <img src="assets/images/logo.png" alt="logo"></a>
                </div>
                <div class="org-container">
                <input type="button" value="Blog" onclick="window.location.href='<?php echo BASE_URL; ?>Blog'" class="org">
                <input type="button" value="Quem Somos" onclick="window.location.href='<?php echo BASE_URL; ?>Sobre'" class="org">
                <input type="button" value="Adotar" onclick="window.location.href='<?php echo BASE_URL; ?>Adotar'" class="org">
                <input type="button" value="Ajudar" onclick="window.location.href='<?php echo BASE_URL; ?>Ajudar'" class="org">
                </div>
            </div>
        </div>
        <div class="apresentacao">
            <div class="textoblog">Todas as novidades você<br>encontra aqui!</div>
        </div>
    </div>
    <?php
         if ($result->num_rows > 0):
            while($row = $result->fetch_assoc()):
                $foto1 = ($row["foto1"]);
                $foto2 = ($row["foto2"]);
                $foto3 = ($row["foto3"]);
                $foto4 = ($row["foto4"]);
            ?>
            <div id="container2blog">
                <div class="foto-geralblog">
                    <div class="fotoblog">
                        <img src="assets/images/<?php echo $foto1; ?>" alt="Foto 1">
                    </div>
                    <div class="geralblog">
                        <div class="umblog">
                            <img src="assets/images/<?php echo $foto2; ?>" alt="Foto 2">
                        </div>
                        <div class="doisblog">
                            <img src="assets/images/<?php echo $foto3; ?>" alt="Foto 3">
                        </div>
                        <div class="tresblog">
                            <img src="assets/images/<?php echo $foto4; ?>" alt="Foto 4">
                        </div>
                    </div>
                </div>
                <div class="descricaoblog">
                    <h1><?php echo $row["titulo"]; ?></h1>
                    <p><?php echo $row["texto"]; ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Nenhum resultado encontrado</p>
    <?php endif; ?>

    <div id="container4">
        <div class="rodape"></div>
    </div>
</body>
</html>