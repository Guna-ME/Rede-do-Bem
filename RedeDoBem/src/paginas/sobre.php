<?php

$sql = "SELECT texto_sobre, foto_patrocinador FROM sobre";
$result = DB->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="css/style.css">
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
            <div class="titulosobre">
                <h1>Sobre Nós</h1>
                <h4>Faça parte da nossa família</h4>
            </div>
        </div>

        <?php

        if ($result->num_rows > 0) {
            // Exibir dados
            while($row = $result->fetch_assoc()) {
                echo "<div id='container 2sobre'>
                        <div class='redesobre'>
                            <p>" . nl2br($row["texto_sobre"]) . "</p>
                        </div>
                        <div class='patrociniosobre'>
                            <h1>SEJA UM DOS NOSSOS <br>PATROCINADORES</h1>
                            <div class='foto-geralsobre'>";
               
                $fotos = explode(',', $row["foto_patrocinador"]);
                foreach ($fotos as $foto) {
                    echo "<div class='fotosobre'><img src='assets/images/$foto' alt='Patrocinador'></div>";
                }
                echo "        </div>
                        </div>";
            }
        } else {
            echo "<div id='container 2sobre'>
                    <div class='redesobre'>
                        <p>Nenhum conteúdo disponível.</p>
                    </div>
                    <div class='patrociniosobre'>
                        <h1>SEJA UM DOS NOSSOS <br>PATROCINADORES</h1>
                        <div class='foto-geralsobre'>
                            <div class='fotosobre'>Nenhuma foto disponível</div>
                        </div>
                    </div>
                  </div>";
        }

        ?>

            <div id="container4">
                <div class="rodape"></div>
            </div>
        </div>