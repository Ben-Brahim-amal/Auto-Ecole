<?php
session_start();
// if (isset($_SESSION['mail'])) {
//   header('Location: compte.php');
// }
include "connexion.php";
include "functions.php";



if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //something was posted
  $adresse = $_POST['adresse'];
  $domaine = $_POST['domaine'];
  $password = $_POST['mdp-login'];
  $mail = $adresse . '@' . $domaine;

  $_SESSION['mail'] = $mail;

  echo '<br>MAIL/' . $mail . '<br>';
  echo '<br>MAIL/' . $password . '<br>';

  if (!empty($adresse) && !empty($domaine) && !empty($password)) {

    //read from database
    $query = "select * from moniteurs where mail = '$mail' limit 1";
    $result_moni = mysqli_query($conn, $query);


    $query2 = "select * from candidats where mail = '$mail' limit 1";
    $result_can = mysqli_query($conn, $query2);

    if ($result_moni) {
      if ($result_moni && mysqli_num_rows($result_moni) > 0) {
        echo 'moni';
        $user_data = mysqli_fetch_assoc($result_moni);
        $_SESSION['id'] = $user_data['id_m'];

        if ($user_data['mdp'] === $password) {

          $_SESSION['mail'] = $user_data['mail'];
          header("Location: moniteur.php");
          die;
        }
      }

      echo "wrong username or password!";
    }
    // else {
    if ($result_can) {
      if ($result_can && mysqli_num_rows($result_can) > 0) {
        echo 'con';
        $user_data1 = mysqli_fetch_assoc($result_can);
        $_SESSION['id'] = $user_data1['id_c'];

        if ($user_data1['mdp'] === $password) {

          $_SESSION['mail'] = $user_data1['mail'];
          header("Location: compte.php");
          die;
        }
      }

      echo "wrong username or password!";
    }
    // }
  } else {
    echo "EMPTY   wrong username or password!";
  }
}
?>