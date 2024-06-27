<?php

$sql = "SELECT * FROM login";
$result = DB->query($sql);

if(isset($_POST['entrar']))
{
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$entrar = $_POST['entrar'];

$verifica = mysqli_query("SELECT login, senha FROM login
                         WHERE login = '$login' AND senha = '$senha'")
            or die("erro ao selecionar");
            
if (mysqli_num_rows($verifica)<=0)
      {
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');
        window.location.href='login.htm';</script>";
        die();
      }
else
      {
        setcookie("login",$login);
        header("Location:menu.php");
      }
  
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedeDoBem</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body id="body1">
<div id="containerLogin">
    <img class="imgLogin" src="assets/images/logo.png" alt="logo">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="loginLogin"><input class="inputLogin" type="text" placeholder="Login" id="login" name="login" required></div>
        <div class="loginLogin"><input class="inputLogin" type="password" placeholder="Senha" id="senha" name="senha" required></div>
        <div><input class="inputLogin" type="submit" id="botaoLogin" value="Entrar"></div>
    </form>
    <a class="aLogin" href="">Esqueceu sua senha?</a>
</div>
</body>
</html>