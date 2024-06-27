<?php

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT tipo, genero, porte, idade, foto1, nome, historia FROM cadastro_animal WHERE id_cadastro = ?";
    $stmt = DB->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $animal = $result->fetch_assoc();
    } else {
        echo "Animal não encontrado.";
        exit;
    }
} else {
    echo "ID do animal não fornecido.";
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animalzinho</title>
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
           <div class="opcaoanimal">
                <select id="tipoanimal">
                    <option value="" selected disabled>Tipo</option>
                    <option value="cachorro">Cachorro</option>
                    <option value="gato">Gato</option>
                </select>
                <select id="generoanimal">
                    <option value="" selected disabled>Gênero</option>
                    <option value="macho">macho</option>
                    <option value="femea">Fêmea</option>
                </select>
            </div>
            <div class="opcao2animal">
                <select id="porteanimal">
                    <option value="" selected disabled>Porte</option>
                    <option value="cachorro">Cachorro</option>
                    <option value="gato">Gato</option>
                </select>
                <select id="idadeanimal">
                    <option value="" selected disabled>Idade</option>
                    <option value="macho">macho</option>
                    <option value="femea">Femêa</option>
                </select>
            </div>
        </div>
        <div id="container3animal">
            <div class="foto-geralanimal">
                <div class="fotoanimal" style="background-image: url('data:image/jpeg;base64,<?php echo base64_encode($animal["foto1"]); ?>');"></div>
                <div class="geralanimal">
                    <div class="umanimal"><strong>Tipo:</strong> <?php echo $animal['tipo']; ?></div>
                    <div class="doisanimal"><strong>Gênero:</strong> <?php echo $animal['genero']; ?></div>
                    <div class="tresanimal"><strong>Porte:</strong> <?php echo $animal['porte']; ?></div>
                    <div class="quatroanimal"><strong>Idade:</strong> <?php echo $animal['idade']; ?></div>
                </div>
            </div>
            <div class="historiaanimal">
                <div class="nomeanimal"><h1><?php echo $animal['nome']; ?></h1></div>
                <div class="animalanimal"><h4><?php echo $animal['tipo']; ?> - <?php echo $animal['genero']; ?> - <?php echo $animal['porte']; ?> - <?php echo $animal['idade']; ?></h4></div>
                <p><?php echo $animal['historia']; ?></p>
                <input type="submit" value="CONTATO" class="contatoanimal">
            </div>
        </div>
        <div id="container4">
            <div class="rodape"></div>
        </div>
    </div>