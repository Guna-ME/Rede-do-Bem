<?php

include 'C:\xampp\htdocs\RedeDoBem\config\DB.php';

$conn = DB;

$sql = "SELECT foto1 FROM cadastro_animal ORDER BY id_cadastro DESC LIMIT 3";
$result = $conn->query($sql);

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
                <img src="logo.png" alt="logo">
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
                <div class="fotohome" style="background-image: url('path_to_images/<?php echo $foto; ?>');"></div>
            <?php endforeach; ?>
        </div>
        <div class="verhome">
            <input type="submit" value="ver mais" onclick="window.location.href='<?php echo BASE_URL; ?>Animal'" class="vmhome">
        </div>
    </div>
    <div id="container4">
        <div class="rodape"></div>
    </div>
</body>
</html>