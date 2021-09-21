<?php 
include('Student.php');
$std= new Student("Arnob Rahee","rahee@student.com","18101225");
echo $std->getname()."<br />";
echo $std->getemail()."<br />";
echo $std->getid();

?>