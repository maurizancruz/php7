<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

<?php

  $servername = "?";
  $username = "?";
  $password = "?";
  $dbname = "?";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

    $login = $_POST['email'];
    $entrar = $_POST['entrar'];
    $senha = ($_POST['pwd']);
        if (isset($entrar)) {
            $verifica = mysqli_query($conn,"SELECT login,senha FROM Login WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
                if (mysqli_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
                    die();
                }else{
                    header("Location:cadastro.html");
                }
        }
?>
