<?php

  $host="localhost";
  $dbname="viabahuet";
  $user="root";
  $pass="";
  try {
    $conn=new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$pass);
    $conn-> exec('SET NAMES utf8');
  }
  catch (Exception $e) {
    die('erreur '.$e->getmessage());
  }
?>
