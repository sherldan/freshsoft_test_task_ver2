<?php

require_once('connect_db.php');

$name = "не определено";
$age = "не определен";
if(isset($_POST["name"])){
  
    $name = $_POST["name"];
}
if(isset($_POST["phone"])){
  
    $age = $_POST["phone"];
}

$res = $database->prepare("INSERT INTO `users` SET `user_phone` = :parent, `fio` = :name");
$res->execute(array('parent' => $name, 'name' => $age));



?>