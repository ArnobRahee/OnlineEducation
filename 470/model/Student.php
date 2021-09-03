<?php 
class Student{
    public $username;
    public $id;
    public $email;
    public $cgpa;
    public $grades=array();
    public $subject=array();
    public $feedue;
    public function getCGPA(){
        return $this->$cgpa;
    }
    public function calculateCGPA(){
        $this->$cgpa;
       foreach($grades as $subject=>$number){
            $this->$cgpa=$this->$cgpa+$number;
       }
       $this->cgpa=$this->cgpa/sizeof($grades);
      }
    public function seeSubject(){
        print_r (each($subject));
    }
}
?>
