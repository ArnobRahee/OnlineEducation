<?php
 session_start(); 
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "subjects";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
  }
 
  if (isset($_POST['submit'])){
      $title=$_POST['title'];
      $contents=$_POST['content'];
      if($_SESSION["subject"]=="Physics"){
        $sql = "INSERT INTO physics (Title, Post) VALUES ('$title', '$contents')";
        if ($conn->query($sql) === TRUE){
            echo "Post submitted";
        }else{
            echo "Something went wrong";
        }
      }
      if($_SESSION["subject"]=="Chemistry"){
        $sql = "INSERT INTO chemistry (Title, Post) VALUES ('$title', '$contents')";
        if ($conn->query($sql) === TRUE){
            echo "Post submitted";
        }else{
            echo "Something went wrong";
        }
      }
      if($_SESSION["subject"]=="Maths"){
        $sql = "INSERT INTO maths (Title, Post) VALUES ('$title', '$contents')";
        if ($conn->query($sql) === TRUE){
            echo "Post submitted";
        }else{
            echo "Something went wrong";
        }
      }
      if($_SESSION["subject"]=="Accounting"){
        $sql = "INSERT INTO accounting	 (Title, Post) VALUES ('$title', '$contents')";
        if ($conn->query($sql) === TRUE){
            echo "Post submitted";
        }else{
            echo "Something went wrong";
        }
      }
      if($_SESSION["subject"]=="Biology"){
        $sql = "INSERT INTO Biology (Title, Post) VALUES ('$title', '$contents')";
        if ($conn->query($sql) === TRUE){
            echo "Post submitted";
        }else{
            echo "Something went wrong";
        }
      }
      if($_SESSION["subject"]=="English"){
        $sql = "INSERT INTO english (Title, Post) VALUES ('$title', '$contents')";
        if ($conn->query($sql) === TRUE){
            echo "Post submitted";
        }else{
            echo "Something went wrong";
        }
      }
  }else{
      echo "Post not submitted";
  }
  
?>