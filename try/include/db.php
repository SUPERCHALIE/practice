<?php

  $dns = "mysql:host=localhost;port=3308;dbname=myfirstdatabase";
  $dbusername = "root";
  $dbpassword = "";
  $con = "";

  try{
    $pdo = new PDO($dns, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e){
    echo "Connection falied:" . $e->getMessage();
  }
?>