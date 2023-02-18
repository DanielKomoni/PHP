<?php 

    $host="localhost";
    $username="root";
    $password=""; 
    $db="task";
    $table="data";

    $conn=mysqli_connect($host,$username,$password,$db);
    $sql="CREATE DATABASE $db";

    $tbl="CREATE TABLE $table (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        address VARCHAR(50) NOT NULL
    )";

    

   if(mysqli_query($conn,"SHOW DATABASES LIKE '$db'")==null){
        mysqli_query($conn,$sql);
        
   }
   
  
if(mysqli_query($conn, "SHOW TABLES LIKE '$table'")==null) {
    mysqli_query($conn,$tbl);
    
}
    
   
$conn->close();


?>