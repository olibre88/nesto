<?php


class Employee extends Person{
    public $jobTitle;
    public function __construct($jobTitle,$firtName,$lastName,$gender= 'f'){
        $this->jobTitle = $jobTitle;
        $this->setGender($gender);

        parent::__construct($firtName,$lastName,$gender);
    }
    public function getjobTitle(){
        return $this->jobTitle;
    }
    public function getGender(){
        return $this->gender;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }
}
class Person {
   public $firtName;
   public $lastName;
   protected $gender;

   public function __construct($firtName,$lastName,$gender = 'f'){
       $this->fistName = $firtName;
       $this->lastName = $lastName;
       $this->gender = $gender;
   }

   public function seyhello(){
       return "HEllo am ".$this->fistName;
   }
   


}


$tom = new Person('Tom', 'Ben', 'm');
//$tom->gender ='ff';
//echo $tom->gender."\n";
//echo $tom->getGender()."\n";



$empl = new Employee('poso','tom', 'pre','2');
$empl->setGender('dfvsdf');
echo $empl->getGender()."\n";
//echo $empl->gender."\n";
//echo $empl->getjobTitle();