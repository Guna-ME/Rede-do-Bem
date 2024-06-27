<?php

$sql = "SELECT * from cadastro_animal";
$result = DB->query($sql);

// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $genero = $_POST['genero'];
    $porte = $_POST['porte'];
    $idade = $_POST['idade'];
    $historia = $_POST['historia'];
    $status_animal = "Disponível";

    $fotos = [];
    for ($i = 0; $i < 5; $i++) {
        if (isset($_FILES['fotos']['name'][$i]) && $_FILES['fotos']['name'][$i] != '') {
            $foto = $_FILES['fotos']['name'][$i];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($foto);
            if (move_uploaded_file($_FILES['fotos']['tmp_name'][$i], $target_file)) {
                $fotos[] = $target_file;
            } else {
                $fotos[] = null;
            }
        } else {
            $fotos[] = null;
        }
    }

    $sql = "INSERT INTO cadastro_animal (nome, tipo, genero, porte, idade, foto1, foto2, foto3, foto4, foto5, historia, status_animal)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $DB->prepare($sql);
    $stmt->bind_param("ssssssssssss", $nome, $tipo, $genero, $porte, $idade, $fotos[0], $fotos[1], $fotos[2], $fotos[3], $fotos[4], $historia, $status_animal);

    if ($stmt->execute()) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro";
    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animalzinho</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/98d028094a.js" crossorigin="anonymous"></script>
</head>
<body id="body1">
    <div id="containerAnimalzinho"> 
        <!--<header>
            <div>
                <i class="fa-solid fa-arrow-left"></i>
            </div>
        </header>-->
        <form action="processa_animal.php" method="post" enctype="multipart/form-data">
            <div id="container2Animalzinho">
                <div class="fotosAnimalzinho">
                    <span class="spanAnimalzinho">Adicione até 5 fotos </span>
                    <input type="file" name="fotos[]" multiple>
                </div>
                <div class="geralAnimalzinho">
                    <div class="umAnimalzinho"></div>
                    <div class="doisAnimalzinho"></div>
                    <div class="tresAnimalzinho"></div>
                    <div class="quatroAnimalzinho"></div>
                </div>
            </div>
            <div class="container3Animalzinho">
                <div class="nomeAnimalzinho">
                    <input type="text" placeholder="Nome" id="nomeAnimalzinho" name="nome" required>
                </div>
                <div class="opcaoAnimalzinho">
                    <select id="tipoAnimalzinho" name="tipo" required>
                        <option value="" selected disabled>Tipo</option>
                        <option value="cachorro">Cachorro</option>
                        <option value="gato">Gato</option>
                    </select>
                    <select id="generoAnimalzinho" name="genero" required>
                        <option value="" selected disabled>Gênero</option>
                        <option value="macho">Macho</option>
                        <option value="femea">Fêmea</option>
                    </select>
                </div>
                <div class="opcaoAnimalzinho">
                    <select id="porteAnimalzinho" name="porte" required>
                        <option value="" selected disabled>Porte</option>
                        <option value="pequeno">Pequeno</option>
                        <option value="medio">Médio</option>
                        <option value="grande">Grande</option>
                    </select>
                    <select id="idadeAnimalzinho" name="idade" required>
                        <option value="" selected disabled>Idade</option>
                        <option value="filhote">Filhote</option>
                        <option value="adulto">Adulto</option>
                        <option value="idoso">Idoso</option>
                    </select>
                </div>
                <div class="historiaAnimalzinho">
                    <textarea name="historia" id="historia" cols="30" rows="10" placeholder="História" required></textarea>
                </div>
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>       
</body>
</html>