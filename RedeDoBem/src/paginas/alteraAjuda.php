<?php

$sql = "SELECT id_ajuda, texto_principal, titulo1, ajuda1, titulo2, ajuda2, titulo3, ajuda3, titulo4, ajuda4 FROM ajuda";
$result = DB->query($sql);

// Variável para armazenar os dados
$dados_ajuda = array();

if ($result->num_rows > 0) {
    // Armazena os dados em um array associativo
    $dados_ajuda = $result->fetch_assoc();

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar ajuda-me</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="containerSobreAjuda">
        <p>Na Rede do Bem, a transparência e a responsabilidade são nossos pilares.<br> Comprometemo-nos a utilizar cada recurso doado de forma ética e eficiente,<br> garantindo que ele seja direcionado diretamente para onde é mais necessário: o bem-estar dos animais que resgatamos.<br>
            Juntos Podemos Fazer a Diferença: Seja parte desta jornada de compaixão e esperança.<br> Junte-se a nós na missão de proteger e cuidar dos nossos amigos de quatro patas.<br> Com sua ajuda, podemos transformar a vida de muitos cães e inspirar outros a fazerem o mesmo."</p>
        <input type="submit" value="Editar" class="botaoEditar">
    </div>

    <div class="form-container">
        <form action="salvar_ajuda.php" method="POST">
            <input type="hidden" name="id_ajuda" value="<?php echo $dados_ajuda['id_ajuda']; ?>">
            
            <div class="ajuda">
                <input type="text" name="titulo1" placeholder="Título 1" class="tipo" value="<?php echo htmlspecialchars($dados_ajuda['titulo1']); ?>">
            </div>
            <div class="infoAjuda">
                <textarea name="ajuda1" class="info" cols="52" rows="8"><?php echo htmlspecialchars($dados_ajuda['ajuda1']); ?></textarea>
            </div>
            
            <div class="ajuda">
                <input type="text" name="titulo2" placeholder="Título 2" class="tipo" value="<?php echo htmlspecialchars($dados_ajuda['titulo2']); ?>">
            </div>
            <div class="infoAjuda">
                <textarea name="ajuda2" class="info" cols="52" rows="8"><?php echo htmlspecialchars($dados_ajuda['ajuda2']); ?></textarea>
            </div>
            
            <div class="ajuda">
                <input type="text" name="titulo3" placeholder="Título 3" class="tipo" value="<?php echo htmlspecialchars($dados_ajuda['titulo3']); ?>">
            </div>
            <div class="infoAjuda">
                <textarea name="ajuda3" class="info" cols="52" rows="8"><?php echo htmlspecialchars($dados_ajuda['ajuda3']); ?></textarea>
            </div>
            
            <div class="ajuda">
                <input type="text" name="titulo4" placeholder="Título 4" class="tipo" value="<?php echo htmlspecialchars($dados_ajuda['titulo4']); ?>">
            </div>
            <div class="infoAjuda">
                <textarea name="ajuda4" class="info" cols="52" rows="8"><?php echo htmlspecialchars($dados_ajuda['ajuda4']); ?></textarea>
            </div>

            <input type="submit" value="Salvar Alterações" class="botaoSalvar">
        </form>
    </div>
</body>
</html>