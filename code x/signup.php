<?php
session_start();

include ("connections.php");
include ("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
  //SOMETHING WAS POSTED
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
    //SAVE TO Database
    $user_id = random_num(20);
    $query = "INSERT INTO users (user_name, password) VALUES('$user_name','$password')";

    mysqli_query($con, $query);
    //echo mysql_error();
    header("Location: login.php");
    die;
  } else{
    echo "Please enter a Valid Information!";
  }
}
?>