<?php

// remove before flight
ini_set('display_errors', 'On');

try {
  $db = new PDO('sqlite:db/database.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo 'Database Error: ' . $e->getMessage();
  die();
}

?>
