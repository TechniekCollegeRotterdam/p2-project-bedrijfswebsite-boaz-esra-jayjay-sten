<?php 
 try {
    $db = new PDO("mysql:host=localhost;dbname=saturnus2", "root", "");
  
   } catch (PDOException $e) {
       die("Error! : " . $e->getMessage());
   }
?>








