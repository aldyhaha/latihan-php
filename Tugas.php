<?php 

class Person {
    private $firstname;
    private $lastname;

    public function setFirstName($firstname)
    {
        $this->firstname=$firstname;
    }
    public function setLastName($lastname)
    {
        $this->lastname=$lastname;
    }
    public function getFullName()
    {
       return $this->firstname.' '.$this->lastname;
    }
}

$manusia = new Person();
{
    $manusia->setFirstName('Aldy');
    $manusia->setLastName('Syafrudin');

    echo $manusia->getFullName();
}

?>