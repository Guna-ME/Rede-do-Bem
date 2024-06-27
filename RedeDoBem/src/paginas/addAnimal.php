<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animalzinho</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/98d028094a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="containerAnimalzinho"> 
        <!--<header>
            <div>
                <i class="fa-solid fa-arrow-left"></i>
            </div>
        </header>-->
        <div id="container2Animalzinho">
            <div class="fotosAnimalzinho">
                <span class="spanAnimalzinho">Adicione uma foto </span>
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
                <input type="text" placeholder="Nome" id="nomeAnimalzinho">
            </div>
            <div class="opcaoAnimalzinho">
                <select id="tipoAnimalzinho">
                    <option value="" selected disabled>Tipo</option>
                    <option value="cachorro">Cachorro</option>
                    <option value="gato">Gato</option>
                </select>
                <select id="generoAnimalzinho">
                    <option value="" selected disabled>Genêro</option>
                    <option value="macho">macho</option>
                    <option value="femea">Femêa</option>
                </select>
            </div>
            <div class="opcaoAnimalzinho">
                <select id="porteAnimalzinho">
                    <option value="" selected disabled>Porte</option>
                    <option value="cachorro">Cachorro</option>
                    <option value="gato">Gato</option>
                </select>
                <select id="idadeAnimalzinho">
                    <option value="" selected disabled>Idade</option>
                    <option value="macho">macho</option>
                    <option value="femea">Femêa</option>
                </select>
            </div>
            <div class="historiaAnimalzinho">
                <textarea name="historia" id="historia" cols="30" rows="10"></textarea>
            </div>
        </div>
    </div>      
</body>
</html>