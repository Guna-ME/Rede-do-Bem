<?php

$sql = "SELECT id_cadastro, tipo, genero, porte, idade, foto1 FROM cadastro_animal ORDER BY id_cadastro DESC";
$result = DB->query($sql);

$animais = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $animais[] = $row;
    }
}

$sqlTipos = "SELECT DISTINCT tipo FROM cadastro_animal ORDER BY tipo";
$resultTipos = DB->query($sqlTipos);

$sqlGeneros = "SELECT DISTINCT genero FROM cadastro_animal ORDER BY genero";
$resultGeneros = DB->query($sqlGeneros);

$sqlPortes = "SELECT DISTINCT porte FROM cadastro_animal ORDER BY porte";
$resultPortes = DB->query($sqlPortes);

$sqlIdades = "SELECT DISTINCT idade FROM cadastro_animal ORDER BY idade";
$resultIdades = DB->query($sqlIdades);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adotar</title>
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
            <div class="opcaoadotar">
                <select id="tipoadotar">
                    <option value="" selected disabled>Tipo</option>
                    <?php while($row = $resultTipos->fetch_assoc()): ?>
                        <option value="<?php echo $row['tipo']; ?>"><?php echo ucfirst($row['tipo']); ?></option>
                    <?php endwhile; ?>
                </select>
                <select id="generoadotar">
                    <option value="" selected disabled>Gênero</option>
                    <?php while($row = $resultGeneros->fetch_assoc()): ?>
                        <option value="<?php echo $row['genero']; ?>"><?php echo ucfirst($row['genero']); ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="opcao2adotar">
                <select id="porteadotar">
                    <option value="" selected disabled>Porte</option>
                    <?php while($row = $resultPortes->fetch_assoc()): ?>
                        <option value="<?php echo $row['porte']; ?>"><?php echo ucfirst($row['porte']); ?></option>
                    <?php endwhile; ?>
                </select>
                <select id="idadeadotar">
                    <option value="" selected disabled>Idade</option>
                    <?php while($row = $resultIdades->fetch_assoc()): ?>
                        <option value="<?php echo $row['idade']; ?>"><?php echo ucfirst($row['idade']); ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>
    </div>
    <div id="container2adotar">
    <?php 
        $foto_count = 0;
        foreach ($animais as $animal): 
            if ($foto_count % 3 == 0) {
                echo '<div class="foto-geraladotar">';
            }
        ?>
            <div class="fotoadotar">
                <a class="animalClicado" href="<?php echo BASE_URL; ?>index.php?q=animal&id=<?php echo $animal['id_cadastro']; ?>" img src="assets/images/<?php echo $foto; ?>" alt="Foto"></a>
            </div>
        <?php 
            $foto_count++;
            if ($foto_count % 3 == 0) {
                echo '</div>';
            }
        endforeach; 
        if ($foto_count % 3 != 0) {
            echo '</div>'; 
        }
        ?>
    </div>
    <div id="container4">
        <div class="rodape"></div>
    </div>
</body>
</html>