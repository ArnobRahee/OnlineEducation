<?php
include('teacher.php');
$teacher=new teacher("Rahee","Rahee@teacher.com","2001");
echo $teacher->getname()."<br />";
echo $teacher->getemail()."<br />";
echo $teacher->getid();
$teacher->write("Quiz", "Your quiz is on next Monday");
echo $teacher->seepost();
?>