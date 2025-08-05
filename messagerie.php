<?php
include 'connexion.php';
session_start();
echo $_SESSION["sender"][2];
echo '<script> alert(' . $_SESSION["sender"][2] . ')</script>';

if (!empty($_POST)) {
  $content = $_POST['content'];
  $stmt = $conn->prepare('insert into messagerie(id_m,id_c,sender,content) values(?,?,?,?)');
  $stmt->bind_param('iiss', $_SESSION["sender"][0], $_SESSION["sender"][1], $_SESSION["sender"][2], $content);
  $stmt->execute();
  if ($stmt) {
    if ($_SESSION["sender"][2] == 'candidat') {
      header('location: compte.php');
    } else {
      header('location: moniteur_messagerie.php');
    }
    echo '<script> alert("inserted")</script>';
  }
}

?>