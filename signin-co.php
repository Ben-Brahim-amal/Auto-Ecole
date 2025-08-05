<?php
session_start();
include("connexion.php");
include("functions.php");
$user_data = check_login($conn);

// Include the database connection file
//require_once 'db_connection.php';
$name = $_POST["name"];
$family_name = $_POST["family_name"];
$email = $_POST["email"];
$adresse = $_POST["adress"];
$phone_number = $_POST["phone_number"];
$birthday = $_POST["date_de_naissance"];
$mdp = $_POST["mdp"];
$con_mdp = $_POST["con_mdp"];
$prof = $_POST["profession"];
$CIN = $_POST["CIN"];


if (isset($_FILES['profile_pic']) && !empty($_FILES['profile_pic'])) {
  $file = $_FILES['profile_pic']['name'];
  $file_loc = $_FILES['profile_pic']['tmp_name'];
  $folder = "assets/profile_pics/";
  $new_file_name = strtolower($file);
  echo '<br> new name' . $new_file_name;
  $final_file = str_replace(' ', '-', $new_file_name);
} else {
  echo "<script type='text/javascript'>alert('image file not found');</script>";
  echo "<script type='text/javascript'> document.location = 'signin.php'; </script>";
  echo 'image file not found';
}

$img_path = $folder . $final_file;
if (move_uploaded_file($file_loc, $folder . $final_file)) {
  $image = $final_file;
}


$birthday1 = $birthday;
//explode the date to get month, day and year
$birthday1 = explode("-", $birthday1);
//get age from date or bir$birthday1
$age = (date("md", date("U", mktime(0, 0, 0, $birthday1[1], $birthday1[2], $birthday1[0]))) > date("md")
  ? ((date("Y") - $birthday1[0]) - 1)
  : (date("Y") - $birthday1[0]));
echo "Age is:" . $age;


if ($age < 18) {
  echo 'too young';
  echo "<script type='text/javascript'>alert('vous devez avoir 18 ans!');</script>";
  echo "<script type='text/javascript'> document.location = 'signin.php'; </script>";
} else {
  echo "<script type='text/javascript'>alert(' age good!');</script>";
  if ($mdp === $con_mdp) {
    $mdp_final = $mdp;

    $stmt = $conn->prepare('insert into candidats(nom,prenom,naissance,CIN,mail,mdp,tel,adresse,img_path) values(?,?,?,?,?,?,?,?,?)');
    $stmt->bind_param("sssississ", $name, $family_name, $birthday, $CIN, $email, $mdp_final, $phone_number, $adresse, $img_path);
    $stmt->execute();
    // if ($stmt) {
    //   echo '<br>pass stmt';
    // } else {
    //   $error = "Something went wrong. Please try again";
    // }

    if ($stmt) {
      echo "<script type='text/javascript'>alert('Registration Sucessfull!');</script>";
      header('location: login.html');
      echo "<script type='text/javascript'> document.location = 'login.html''; </script>";
    } else {
      $error = "Something went wrong. Please try again";
    }

  } else {
    echo 'mdp non identique';
    die;
  }

}

// echo "<script type='text/javascript'>alert('Registration Sucessfull!');</script>";
// echo "registration success";

?>