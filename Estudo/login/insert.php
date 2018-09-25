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

  //INSERT DATA INTO DB

  $name = $_POST["name"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $dat_nasc = $_POST["dat_nasc"];
  $cidade = $_POST["cidade"];
  $pwd = $_POST["pwd"];

  $sql = "INSERT INTO Clientes (firstname, lastname, dat_nasc, cidade)
  VALUES ('$name', '$lastname', '$dat_nasc', '$cidade')";

  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully <br>";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

  $query_select = "SELECT login FROM Login WHERE login = '$email'";
  $select = mysqli_query($conn, $query_select);
  $array = mysqli_fetch_array($select);
  $logarray = $array['login'];

      if($email == "" || $email == null){
          echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

          }else{
              if($logarray == $email){

                  echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
                  die();

              }else{
                  $query = "INSERT INTO Login (login,senha) VALUES ('$email','$pwd')";
                  $insert = mysqli_query($conn ,$query);

                  if($insert){
                      echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
                  }else{
                      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
                  }
              }
          }



 ?>
