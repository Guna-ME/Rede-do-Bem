<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedeDoBem</title>
    <link rel="stylesheet" href="./css/style2.css">

    <script>
        function Logar() {
            var login = document.getElementById('login').value;
            var senha = document.getElementById('senha').value;

            if (login == "admin" && senha == "admin") {
                alert('sucesso');
                location.href = "login.html";
            } else {
                alert("Login ou senha incorretos")
            }
        }

        document.getElementById("senha").addEventListener("keyup", function(event) {
            if (event.key === 'Enter') { 
                event.preventDefault();
                Logar();
            }
        });
    </script>

</head>
<body>
    <div id="container">
        <img src="assets/images/logo.png" alt="logo">
        <div class="login"><input type="text" placeholder="Login" id="login"></div>
        <div class="login"><input type="password" placeholder="Senha" id="senha"></div>
        <div><input type="submit" id="botão" value="Entrar" onclick="Logar();"></div>
        <a href="">Esqueceu sua senha?</a> 
    </div>
</body>
</html>