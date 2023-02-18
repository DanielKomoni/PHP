<?php
    include_once("DBControl.php");

    $conn->connect($host,$username,$password,$db);
    $name;
    $address; 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name= strip_tags($_POST["name"]);
        $address= strip_tags($_POST["address"]);

        $stmt =$conn->prepare("INSERT INTO $table (name, address) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $address);
        $stmt->execute();
    }
  
    $conn->close();
?>