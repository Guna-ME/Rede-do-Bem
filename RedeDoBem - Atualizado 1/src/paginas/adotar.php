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
                    <img src="rededobem.png" alt="logo">
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
                    <option value="cachorro">Cachorro</option>
                    <option value="gato">Gato</option>
                </select>
                <select id="generoadotar">
                    <option value="" selected disabled>Gênero</option>
                    <option value="macho">macho</option>
                    <option value="femea">Femêa</option>
                </select>
            </div>
            <div class="opcao2adotar">
                <select id="porteadotar">
                    <option value="" selected disabled>Porte</option>
                    <option value="cachorro">Cachorro</option>
                    <option value="gato">Gato</option>
                </select>
                <select id="idadeadotar">
                    <option value="" selected disabled>Idade</option>
                    <option value="macho">macho</option>
                    <option value="femea">Femêa</option>
                </select>
            </div>
        </div>
    </div>
    <div id="container2adotar">
        <div class="foto-geraladotar">
            <div class="fotoadotar"></div>
            <div class="fotoadotar"></div>
            <div class="fotoadotar"></div>
        </div>
        <div class="foto-geraladotar">
            <div class="fotoadotar"></div>
            <div class="fotoadotar"></div>
            <div class="fotoadotar"></div>
        </div>
        <div class="foto-geraladotar">
            <div class="fotoadotar"></div>
            <div class="fotoadotar"></div>
            <div class="fotoadotar"></div>
        </div>
        <div class="veradotar">
            <input type="submit" value="ver mais" class="vmadotar">
        </div>
    </div>
    <div id="container4">
        <div class="rodape"></div>
    </div>
</body>
</html>