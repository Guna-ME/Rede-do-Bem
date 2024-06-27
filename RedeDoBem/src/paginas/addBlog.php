<?php

$sql = "SELECT id_blog, foto1, foto2, foto3, foto4, titulo, texto FROM blog ORDER BY id_blog DESC";
$result = DB->query($sql);

if(isset($_POST['cadastrar'])) {
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $foto1 = $_FILES['foto1'];
    $error = 0;

    $caminhoUpload = "fotos/";

    // Lidar com uploads de arquivos para foto1
    $erros = [];
    $tiposPermitidos = ['jpg', 'jpeg', 'png', 'gif']; // Tipos de arquivo permitidos
    $arquivo1 = $_FILES['foto1']['name'];
    $arquivo1TmpName = $_FILES['foto1']['tmp_name'];

    // Verificar tipo de arquivo
    $extensao1 = strtolower(pathinfo($arquivo1, PATHINFO_EXTENSION));
    if (!in_array($extensao1, $tiposPermitidos)) {
        $erros[] = "Apenas arquivos JPG, JPEG, PNG e GIF são permitidos para foto1.";
    }

    // Realizar outras validações como tamanho do arquivo, dimensões, etc., aqui
    
    if (empty($erros)) {
        $nomeArquivo1 = md5(uniqid(time())) . "." . $extensao1;
        $caminhoCompleto1 = $caminhoUpload . $nomeArquivo1;

        if (move_uploaded_file($arquivo1TmpName, $caminhoCompleto1)) {
            // Arquivo carregado com sucesso, agora você pode inserir no banco de dados
            $query = "INSERT INTO blog (foto1, titulo, texto) VALUES ('$caminhoCompleto1', '$titulo', '$texto')";
            $resultado = DB->query($query);

            if ($resultado) {
                echo "<script language='javascript' type='text/javascript'>
                        alert('Publicação cadastrada com sucesso!');
                        window.location.href='menu.php';
                      </script>";
            } else {
                echo "<script language='javascript' type='text/javascript'>
                        alert('Erro ao cadastrar a publicação.');
                        window.location.href='menu.php';
                      </script>";
            }
        }
    } else {
        // Houve erros ao validar o arquivo
        foreach ($erros as $erro) {
            echo "<p>$erro</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Adicionar Publicação</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="containerBlog"> 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
            <div id="container2Blog">
                <div class="fotosBlog">
                    <span class="spanBlog">Adicione uma foto</span>
                    <input type="file" name="foto1" accept="assets/images/" required>
                </div>
                <div class="geralBlog">
                    <div class="umBlog"></div>
                    <div class="doisBlog"></div>
                    <div class="tresBlog"></div>
                    <div class="quatroBlog"></div>
                </div>
            </div>
            <div class="container3Blog">
                <div class="nomeBlog">
                    <input type="text" placeholder="Título" name="titulo" required>
                </div>
                <div class="historiaBlog">
                    <textarea name="texto" placeholder="Texto" cols="30" rows="10" required></textarea>
                </div>
                <input type="submit" name="cadastrar" value="Publicar" class="botaoPublicar">
            </div>
        </form>
    </div>
</body>
</html>