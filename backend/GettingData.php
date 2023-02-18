<?php
    include_once("DBControl.php");

    $conn->connect($host,$username,$password,$db);

    $sql="SELECT * FROM $table"; 
    $result=$conn->query($sql);

    
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
       
        if($result->num_rows>0){
            $data=array();
            while($row=$result->fetch_assoc()){
                $data[]=$row;
            }
            $json=json_encode($data);
    
            header("Content-Type: application/json");
        }
       
        echo $json;
    }

    $conn->close();
?>