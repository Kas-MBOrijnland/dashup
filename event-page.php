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
    <link rel="stylesheet" type="text/css" href="css/event-page.css">

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
$sql = "SELECT * FROM evenementen, artiesten, locaties WHERE evenement_id=".$_GET['id'];
$result = $conn->query($sql);


if($result = $conn->query($sql)) {

    $row = $result->fetch_object();
    


    echo "<section class='evenementen'>". $row->artiest_id ."</section>";
    echo "<section class='evenementen'>". $row->max_bezoekers ."</section>";
    echo "<section class='evenementen'>". $row->datum."</section>";
        
    $result->close();
} else {
  echo "doei";
}

$conn->close();

?>

  </main>
  </body>
</html>