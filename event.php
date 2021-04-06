<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="nl">
    <meta name="description" content="DashUp Energy, ">
    <meta name="keywords" content="DashUp Energy, Energy drink ">
    <meta name="author" content="Kas Kozakiewicz, Morgan Nicole, Florin Burlacioiu">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DashUp Energy</title>
    <link rel="stylesheet" type="text/css" href="css/events1.css">

  </head>
  <body>
  <header>
      <article class="logo">
        <a href="index.html"><img src="images/dashup.svg" alt="foto van logo" height="140px"></a>
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
    

    <section id="gray-ground">
      <article></article>
    </section>

 

  <main>
    <article id="data">
<h1>Evenement</h1>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "energy";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connection_error);
    }

//WHERE datum <= NOW()
    $sql = "SELECT * FROM evenementen";
    if($result = $conn->query($sql)) {
       while($row = $result->fetch_object()) {
        echo "<section class='evenementen'><a href='event-page.php?id=".$row->evenement_id."'>".$row->datum."</a></section>";
       }
            
        $result->close();
    } else {
      echo "doei";
    }

    $conn->close();

    ?>
    
    </article>
    
    <footer></footer>

  </main>
  </body>
</html>
