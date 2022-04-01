<?php

class Flowers{
 private $host ="localhost";
 private $username ="root";
 private $password ="root";
 private $dbName ="Flowers";
 private $port = 8889;

 //Database Connection
 public $conn;

 public function __construct(){
    $this->conn = new mysqli($this->host, $this->username, $this->password,$this->dbName, $this->port);
    
    if(mysqli_connect_error()){
        trigger_error('Error in DB'. mysqli_connect_error());
    }else{
        return $this->conn;
    }
 }



 // Products 
 public function view_ValentinesDate(){
     $sql = "CALL `Show_specific_occasion_products`(1)";    
     $result = $this->conn->query($sql);

     if($result->num_rows>0){
         $data = array();
         while($row = $result->fetch_assoc()){
            $data[] = $row;
         }
         return $data;
     }
     
 }



 public function view_BirthdayDate(){
    $sql = "CALL `Show_specific_occasion_products`(2)";    
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
        $data = array();
        while($row = $result->fetch_assoc()){
           $data[] = $row;
        }
        return $data;
    }
    
}


public function view_WeedingDate(){
    $sql = "CALL `Show_specific_occasion_products`(3)";    
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
        $data = array();
        while($row = $result->fetch_assoc()){
           $data[] = $row;
        }
        return $data;
    }
    
}



public function view_PlantsDate(){
    $sql = "CALL `Show_specific_occasion_products`(4)";    
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
        $data = array();
        while($row = $result->fetch_assoc()){
           $data[] = $row;
        }
        return $data;
    }
    
}




// Occasion names
public function view_Occasion1(){
    $sql = "CALL `Show_Indivisual_occasion`(1)";    
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
        $data = array();
        while($row = $result->fetch_assoc()){
           $data[] = $row;
        }
        return $data;
    }

}


public function view_Occasion2(){
    $sql = "CALL `Show_Indivisual_occasion`(2)";    
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
        $data = array();
        while($row = $result->fetch_assoc()){
           $data[] = $row;
        }
        return $data;
    }

}


public function view_Occasion3(){
    $sql = "CALL `Show_Indivisual_occasion`(3)";    
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
        $data = array();
        while($row = $result->fetch_assoc()){
           $data[] = $row;
        }
        return $data;
    }

}

public function view_Occasion4(){
    $sql = "CALL `Show_Indivisual_occasion`(4)";    
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
        $data = array();
        while($row = $result->fetch_assoc()){
           $data[] = $row;
        }
        return $data;
    }

}





}