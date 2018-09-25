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

  $sql = "SELECT * FROM Clientes";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "- ID: " . $row["id"]. "<br> - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br> - E-mail: " . $row["email"] . "<br> - Data de Nascimento: " . $row["dat_nasc"] . "<br> - Cidade: " . $row["cidade"] . "<br><br>";
    }
  } else {
    echo "0 results";
  }

 ?>

  <form action="http://7maravilhas.esy.es/php" method="link" style="margin-left:500px">
  <input type="submit" value="Voltar">
  </form>
