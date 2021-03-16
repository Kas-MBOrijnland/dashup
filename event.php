<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="nl">
    <meta name="description" content="DashUp Energy, ">
    <meta name="keywords" content="DashUp Energy, ">
    <meta name="author" content="Kas Kozakiewicz, Morgan Nicole, Florin Burlacioiu">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DashUp Energy</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body>
    <header>
      <article class="logo">
        <a href="index.html"><img src="images/logo.png" alt="foto van logo" height="150px"></a>
      </article>
      <nav>
        <ul>
          <a href="aanbiedingen.html">Aanbiedingen</a>
          <a href="event.php">Events</a>
          <a href="artiesten.php">Artiesten</a>
          <a href="product.html">Producten</a>
          <a href="contact.html">Contact</a>
          <a href="faq.html">FAQ</a>
        </ul>
      </nav>
    </header>
  <body>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "phples";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connection_error);
    }

    $sql = "SELECT * FROM gebruikers";
    if($result = $conn->query($sql)) {
        while($row = $result->fetch_row()) {
            echo $row[0]." ".$row[1]." ".$row[2]."<br/>";
        }
        $result->close();
    }

    $conn->close();

    ?>
  </body>
</html>
