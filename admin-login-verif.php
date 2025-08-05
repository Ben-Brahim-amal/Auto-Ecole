<?php
session_start();
include('connexion.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //something was posted
  $identifiant = $_POST['identifiant'];
  $password = $_POST['mdp-admin'];

  if (!empty($identifiant) && !empty($password)) {

    $query = "select * from admin where identifiant = '$identifiant' limit 1";
    $result = mysqli_query($conn, $query);
    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        echo 'exist';
        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['mdp'] === $password) {
          echo 'mdp correct';
          $_SESSION['id_admin'] = $user_data['id_admin'];
          $_SESSION['identifiant'] = $user_data['identifiant'];
          header('Location: admin-home.php');
          die;
        }
      }

      echo "wrong username or password!";
    }
  }
}
?>