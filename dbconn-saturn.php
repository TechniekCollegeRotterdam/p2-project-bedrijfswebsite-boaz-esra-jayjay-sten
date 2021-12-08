<?php 
 try {
    $db = new PDO("mysql:host=localhost;dbname=saturnus", "root", "");
  
   } catch (PDOException $e) {
       die("Error! : " . $e->getMessage());
   }
?>