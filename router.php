<?php

session_start();

$url = explode("/", $_SERVER["REQUEST_URI"]);
require_once("php/db.php");
require_once("php/classes/User.php");

if ($url[1] == "login") {
  $content = file_get_contents("pages/login.php");
} else if ($url[1] == "callback") {
  $content = file_get_contents("pages/callback.html");
} else if ($url[1] == "main") {
  $content = file_get_contents("pages/index.php");
} else if ($url[1] == "addUser") {
  echo User::addUser($_POST["name"], $_POST["email"], $_POST["question"]);
} else {
  $content = file_get_contents("pages/index.php");
}

if (!empty($content)) require_once("templation.php");
