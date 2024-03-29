<?php

require_once 'inc/database.php';

if (!empty($_GET['id'])) {
  $film_id = intval($_GET['id']);
  try {
    $results = $db->prepare('SELECT * FROM film WHERE film_id = ?');
    $results->bindParam(1, $film_id);
    $results->execute();
  } catch (Exception $e) {
    echo 'Database Error: ' . $e->getMessage();
    die();
  }
  $film = $results->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PHP Data Objects</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="home">
    <h1>Sakila Sample Database</h1>
    <h2>
    <?php
    if (!empty($film))
      echo $film['title'];
    else
      echo 'Sorry, no film was found!';
    ?>
    </h2>
  </body>
</html>
