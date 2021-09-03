<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Students";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  if (isset($_POST['submit'])){
    $user=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $id=$_POST['id'];
    $pattern1="/@student.com/i";
    if(preg_match($pattern1, $email)){
      $sql = "INSERT INTO stdInfo (Username ,ID,pass,email) VALUES ('$user', '$id', '$password','$email')";
      if ($conn->query($sql) === TRUE) {
        $_SESSION["name"]=$user;
        header("Location:../view/stydentdashboard.php");
        echo $user."<br>";
        echo $id;
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
    else{
      $pattern2="/@teacher.com/i";
      if(preg_match($pattern2, $email)){
        $sql = "INSERT INTO teacherinfo (Username ,ID,pass,email) VALUES ('$user', '$id', '$password','$email')";
        if ($conn->query($sql) === TRUE) {
          $_SESSION["name"]=$user;
          header("Location:../view/teacherdashboard.php");
          echo $user."<br>";
          echo $id;
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else{
        echo "Please use official email";
      }
      
    }
    
    
  }
 
 
?>