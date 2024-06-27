<?php

$sql = "SELECT foto1 FROM cadastro_animal ORDER BY id_cadastro DESC LIMIT 3";
$result = DB->query($sql);

$fotos = array();

if ($result->num_rows > 0) {
    // Armazena as fotos em um array
    while($row = $result->fetch_assoc()) {
        if (!empty($row["foto1"])) {
            $fotos[] = $row["foto1"];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container">
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
        <div class="apresentacao">
            <div class="textohome">Bem-Vindos <br>Amigos</div>
        </div>
    </div>
    <div id="container2home">
    <div class="foto-geralhome">
        <?php foreach ($fotos as $foto): ?>
            <div class="fotohome">
                <img src="assets/images/<?php echo $foto; ?>" alt="Foto">
            </div>
        <?php endforeach; ?>
        </div>
        <div class="verhome">
            <input type="submit" value="ver mais" onclick="window.location.href='<?php echo BASE_URL; ?>Adotar'" class="vmhome">
        </div>
    </div>
    <div id="container4">
                <div class="rodape">
                    <h1 class="h1rodape">CONTATOS</h1>
                    <h2 class="h2rodape">Instagram: @rede_do_bem_cocal_do_sul</h2>
                    <H2 class="h2rodape">WhatsApp: +55 (48) 99999-9999 </H2>
                </div>
            </div>
        </div>
</body>
</html>