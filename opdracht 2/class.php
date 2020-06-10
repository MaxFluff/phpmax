<?php
class person {
    public $age, $firstname, $middlename, $lastname;
    function __construct($age, $firstname, $middlename, $lastname) {
        $this->age = $age;
        $this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
    }
    public function getFullname(){
        return $this->firstname . "". $this->middlename . "". $this->lastname;
    }
    public function setFullname(){

    }
    public function getAge(){
        return $this->age;
    }
    public function setAge(){

    }
    function getPersoninfo(){
        return "This person is named " .$this->getFullname() ." and is " .$this->getAge() . " year's old.";
    }
}
$person = new person("30", "Luke ", "Albert ", "Combs");
echo $person->getPersoninfo();
?>