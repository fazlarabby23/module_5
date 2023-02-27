<?php
class Person {
  private $name;
  private $email;

  public function setName($name) {
    $this->name = $name;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getName() {
    return $this->name;
  }
  public function getEmail() {
    return $this->email;
  }
}
$person = new Person();

$person->setName("Fazla Rabby");
$person->setEmail("Fazla.rabbywd@gmail.com");
echo "Name: " . $person->getName() . "\n";
echo "Email: " . $person->getEmail();
?>
