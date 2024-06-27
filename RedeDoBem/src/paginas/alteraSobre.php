<?php

$texto_sobre_nos = '';

$sql_sobre_nos = "SELECT sobre FROM sobre_nos WHERE id_sobre = 1"; 

$result_sobre_nos = $DB->query($sql_sobre_nos);

if ($result_sobre_nos && $result_sobre_nos->num_rows > 0) {
    $row_sobre_nos = $result_sobre_nos->fetch_assoc();
    $texto_sobre_nos = $row_sobre_nos['texto_sobre'];
} else {
    echo "Erro ao recuperar os dados do 'Sobre nós'";
}

$sql_patrocinadores = "SELECT foto_patrocinador FROM foto_patrocinador";
$result_patrocinadores = $DB->query($sql_patrocinadores);

$patrocinadores = [];
if ($result_patrocinadores && $result_patrocinadores->num_rows > 0) {
    while ($row_patrocinadores = $result_patrocinadores->fetch_assoc()) {
        $patrocinadores[] = $row_patrocinadores['foto_patrocinador'];
    }
} else {
    echo "Erro ao recuperar os dados dos patrocinadores";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar sobre nós</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="containerSobre">
            <p>Com uma equipe apaixonada e dedicada, a ONG Rede do Bem busca promover o <br>
               bem-estar e a proteção dos animais desamparados em Cocal do Sul e regiões <br>
               próximas. Nosso compromisso é oferecer cuidado, abrigo e assistência médica<br>
               para animais abandonados, feridos ou em situação de risco, além de promover a<br>
               conscientização sobre a importância da posse responsável e do respeito aos<br>
               direitos dos animais.<br>
               Por meio de programas de resgate, adoção responsável, castração e campanhas<br>
               educativas, trabalhamos incansavelmente para combater o abandono e o sofrimento<br> 
               animal. Nossa missão é proporcionar uma vida digna e feliz para cada ser vivo<br> 
               sob nossa proteção, garantindo-lhes amor, cuidado e uma segunda chance de<br> 
               encontrar um lar amoroso.<br> 
               Junte-se a nós nessa causa nobre! Seja um voluntário, faça uma doação ou adote<br> 
               um de nossos queridos animais. Juntos, podemos fazer a diferença e construir um<br> 
               mundo melhor para todos os seres vivos."</p>
               <input type="submit" value="Editar" class="botaoEditar">
        </div>
        <div class="containerPatrocinadores">
            <div class="item">
                <div class="fotosobre1"></div>
                <input type="submit" value="Editar" class="botaoExcluirPatr">
            </div>
            <div class="item">
                <div class="fotosobre2"></div>
                <input type="submit" value="Editar" class="botaoExcluirPatr">
            </div>
            <div class="item">
                <div class="fotosobre3"></div>
                <input type="submit" value="Editar" class="botaoExcluirPatr">
            </div>
        </div>
        <div class="addPatrocinador"> 
            <h4>✚ Adicione um patrocinador</h4>
        </div>
</body>
</html>