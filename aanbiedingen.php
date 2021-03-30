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
        <a href="index.html"><img src="images/dashup.svg" alt="foto van logo" height="140px"></a>
      </article>
      <nav>
        <ul>
          <a href="aanbiedingen.php">Aanbiedingen</a>
          <a href="event.php">Events</a>
          <a href="artiesten.php">Artiesten</a>
          <a href="product.html">Producten</a>
          <a href="contact.html">Contact</a>
          <a href="faq.html">FAQ</a>
        </ul>
      </nav>

      <script src="../dashup/js/script.js"></script>
    </header>
    
    <div id="topright"> 
      <button onclick="myFunction()">Dark Mode</button>
    </div>

    <section id="gray-ground">
      <article></article>
    </section>

    <main>
      <article id="container1">
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "energy";
    
        $conn = new mysqli($servername, $username, $password, $database);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connection_error);
        }
    
    
        $sql = "SELECT * FROM evenementen";
        if($result = $conn->query($sql)) {
            while($row = $result->fetch_row()) {
                echo $row[6]."<br/>";
            }
            $result->close();
        }
    
        $conn->close();
    
        ?>
      </article>

      <article id="container2">
        
      </article>
    </main>

  </body>
</html>
