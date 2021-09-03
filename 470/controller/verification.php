<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Students";
session_start();
$conn =mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 
  if (isset($_POST['submit'])){
      
    $user=$_POST['username'];
    $password=$_POST['password'];
   
    $query="SELECT * FROM stdInfo WHERE Username='$user' AND  pass='$password'";
    $sql=mysqli_query($conn,$query);
     
    $rowcount=mysqli_num_rows($sql); 
    
    
    if($rowcount> 0 )
    { 
      $_SESSION["name"]=$user;
        header("Location:../view/stydentdashboard.php");
    }
    $query="SELECT * FROM teacherinfo WHERE Username='$user' AND  pass='$password'";
    $sql=mysqli_query($conn,$query);
     
    $rowcount=mysqli_num_rows($sql); 
       
    if($rowcount> 0 )
    { 
      $_SESSION["name"]=$user;
        header("Location:../view/teacherdashboard.php");
    }
    else
    {
        echo 'The username or password are incorrect!';
    }
    


  }
  
  else{
      echo "Not submitted";
  }
  mysqli_close($conn);
?>