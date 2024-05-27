<?php

class User
{

  private $name;
  private $email;
  private $question;

  function __construct($name, $email, $question)
  {
    $this->name = $name;
    $this->email = $email;
    $this->question = $question;
  }
  function getName()
  {
    return $this->name;
  }
  function getEmail()
  {
    return $this->email;
  }
  function getQuestion()
  {
    return $this->question;
  }

  static function addUser($name, $email, $question)
  {
    global $mysqli;
    $email = mb_strtolower(trim($email));

    $result = $mysqli->query("SELECT * FROM `security_adds` WHERE `email`='$email'");

    if ($result->num_rows != 0) {
      return json_encode(["result" => "exist"]);
    } else {
      $mysqli->query("INSERT INTO `security_adds`(`name`, `email`, `question`) VALUES ('$name', '$email', '$question')");
      return json_encode(["result" => "success"]);
    }
  }
}
