<?php

require_once 'config/DB.php';

$sql = "SELECT id_ajuda, texto_principal, titulo1, ajuda1, titulo2, ajuda2, titulo3, ajuda3, titulo4, ajuda4 FROM ajuda";
$result = DB->query($sql);

if ($result->num_rows > 0) {
    // Buscar dados
    $row = $result->fetch_assoc();
} else {
    echo "Nenhum dado encontrado.";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda</title>
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
            <div class="tituloajuda">
                <h1>Quero Ajudar</h1>
                <h4>Junte-se a nós para garantir que todos os animais tenham o amor e cuidado que merecem!</h4>
            </div>
        </div>
        <div id="container 2ajuda">
        <div class="redeajuda">
                <p><?php echo nl2br($row["texto_principal"]); ?></p>
            </div>
            <div class="ajudarajuda">
                <h1>Como Posso Ajudar</h1>
                <h2><?php echo $row["titulo1"]; ?></h2>
                <p><?php echo nl2br($row["ajuda1"]); ?></p>
                <h2><?php echo $row["titulo2"]; ?></h2>
                <p><?php echo nl2br($row["ajuda2"]); ?></p>
                <h2><?php echo $row["titulo3"]; ?></h2>
                <p><?php echo nl2br($row["ajuda3"]); ?></p>
                <h2><?php echo $row["titulo4"]; ?></h2>
                <p><?php echo nl2br($row["ajuda4"]); ?></p>
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
    </div>