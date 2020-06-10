<?php
abstract class ParentClass {
    abstract public function someMethod1();
    abstract public function someMethod2($name, $color);
    abstract public function someMethod3() : string;
  }

/**
 * [Description person]
 */
class person {
    public $age, $firstname, $middlename, $lastname;
    function __construct($age, $firstname, $middlename, $lastname) {
        $this->age = $age;
        $this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
    }
    /**
     * @return [get the full name of the person]
     */
    public function getFullname(){
        return $this->firstname . "". $this->middlename . "". $this->lastname;
    }
    /**
     * @return [set full name]
     */
    public function setFullname(){

    }
    /**
     * @return [get the age of the person]
     */
    public function getAge(){
        return $this->age;
    }
    /**
     * @return [set the age]
     */
    public function setAge(){

    }
   /**
    * @return [the full personal info of the person]
    */
    function getPersoninfo(){
        return "This person is named " .$this->getFullname() ." and is " .$this->getAge() . " year's old.";
    }
}
$person = new person("30", "Luke ", "Albert ", "Combs");
echo $person->getPersoninfo();
?> 