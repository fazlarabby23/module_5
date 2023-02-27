<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ostad Assignment</title>
</head>
<body>

<!--php start-->
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $person = new Person();
  $person->setName($name);
  $person->setEmail($email);
  echo "Name: " . $person->getName() . "<br>";
  echo "Email: " . $person->getEmail();
}
?>
<!--php End-->

<!--Form Start-->
<h2> Form</h2>
<form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <input type="submit" value="Submit">
    </form>
<!--Form End-->
    
</body>
