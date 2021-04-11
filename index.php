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
    <link rel="stylesheet" type="text/css" href="css/style1.css">

  </head>
  <body>
    <header>
      <article class="logo">
        <a href="index.php"><img src="images/dashup.svg" alt="foto van logo" height="140px"></a>
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
      <section class="dashup">
        <h1>DashUp</h1>
        <p>Onze visioen is om de gezondeste drank te maken voor breed publiek.</p>
        DashUp, een suikervrij energy drank, gemaakt voor jong en oud, energy voor het hele dag.
        <p>Met Dashup kunt u de hele dag door zonder één gram suiker.</p>
      </section>

      <br>
      <br>


      <section id="Catering">
  
  
        <div class="card">
          <img src="images/melon dashup.png" alt="Melon DashUp" width="100%">
          <h1>Volgende aanbiedingen</h1>
          
          <p>X-Dagen•2e gratis
          </p>
          <button onclick="window.location.href='aanbiedingen.html'">Kijk verder</button>
        </div>

        <div class="card">
          <img src="images/artiesten.png" alt="Artiesten" width="105%">
          <h1>Artiesten</h1>
          
          <p>Post Malone•Elvis Presly• & meer
          </p>
          <button onclick="window.location.href='artiesten.php'">Kijk verder</button>
        </div>

        <div class="card">
          <img src="images/evenemetn.png" alt="Evenement" width="100%">
          <h1>Volgende evenementen</h1>
          
          <p>Dakart•BMX•F1
          </p>
          <button onclick="window.location.href='event.php'">Kijk verder</button>
        </div>

      </section>


      <section id="base">
        <?php

          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "energy";

          $conn = new mysqli($servername, $username, $password, $database);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connection_error);
          }

        
          //WHERE datum >= NOW()
          $sql = "SELECT datum, plaatsnaam, date_format(datum, '%d-%m-%Y') AS datum, evenement_id
                FROM evenementen 
                LEFT JOIN locaties ON evenementen.locatie_id = locaties.locatie_id
                LEFT JOIN artiesten ON evenementen.artiest_id = artiesten.artiest_id
                ORDER BY  DATE_FORMAT(datum >= NOW(), '%d-%m-%Y') ASC
                LIMIT 3";
          if($result = $conn->query($sql)) {
            while($row = $result->fetch_object()) {
              echo "<section class='evenementen'><a href='event-page.php?id=".$row->evenement_id."'>".$row->datum." ".$row->plaatsnaam."</a></section>";
            }
        
            $result->close();
          } else {
            echo "doei";
          }

          $conn->close();

        ?>

        <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "energy";

          $conn = new mysqli($servername, $username, $password, $database);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connection_error);
          }
          $sql = "SELECT *
                  FROM aanbiedingen        
                  ORDER BY  DATE_FORMAT(begindatum >= NOW(), '%d-%m-%Y') ASC
                  LIMIT 2";
          if($result = $conn->query($sql)) {
            while($row = $result->fetch_object()) {
              echo "<section class='aanbiedingen-now'><a href='aanbiedingen.html?id='>".$row->titel." ".$row->omschrijving."</a></section>";
            }

            $result->close();
          } else {
            echo "doei";
          }

          $conn->close();

        ?>

      </section>

    </main>

  </body>
</html>
