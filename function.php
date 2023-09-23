<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "user_db");


// REGISTER
function register(){
  global $conn;

  $character = $_POST["character"];
  $fName = $_POST["fName"];
  $lName = $_POST["lName"];
  $s_Email = $_POST["s_Email"];
  $school = $_POST["school"];
  $password = $_POST["password"];
  $c_password = $_POST["c_password"];

  if(empty($character) || empty($fName) || empty($lName) || empty($s_Email) 
  || empty($school) || empty($password) || empty($c_password)){
    echo "Please Fill Out The Form!";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM user_tb WHERE s_Email = '$s_Email'");
  if(mysqli_num_rows($user) > 0){
    echo "Username Has Already Taken";
    exit;
  }
  else {
    if($password == $c_password){
        $query = "INSERT INTO user_tb VALUES('', '$character', '$fName', '$lName', '$s_Email', '$school', '$password', '$c_password')";
        mysqli_query($conn, $query);
        echo "Registration Successful";
        
    }
    else{
        echo "Password Does Not Match";
    }
}
}


// LOGIN
function login(){
  global $conn;

  $s_Email = $_POST["s_Email"];
  $password = $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM user_tb WHERE username = '$s_Email'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Login Successful";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}
?>