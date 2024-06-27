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
           <div class="opcaoanimal">
                <select id="tipoanimal">
                    <option value="" selected disabled>Tipo</option>
                    <option value="cachorro">Cachorro</option>
                    <option value="gato">Gato</option>
                </select>
                <select id="generoanimal">
                    <option value="" selected disabled>Gênero</option>
                    <option value="macho">macho</option>
                    <option value="femea">Femêa</option>
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
                <div class="fotoanimal"></div>
                <div class="geralanimal">
                    <div class="umanimal"></div>
                    <div class="doisanimal"></div>
                    <div class="tresanimal"></div>
                    <div class="quatroanimal"></div>
                </div>
            </div>
            <div class="descricaoanimal">
                <div class="nomeanimal"><h1>Amora</h1></div>
                <div class="animalanimal"><h4>Cachorro - Femêa - Médio Porte - Filhote</h4></div>
                <p>Amora é uma cachorrinha adorável, que foi encontrada perto de um lixão. 
                Ela foi encontrada com ferimentos e levada ao veterinário e está em busca de um novo lar.</p>
                <input type="submit" value="CONTATO" class="contatoanimal">
            </div>
        </div>
        <div id="container4">
            <div class="rodape"></div>
        </div>
    </div>