<?php
session_start();
require_once('mysql-connect.php');
require_once('header.php'); 

if(isset($_GET['id'])){
    $id = $_GET['id'];
$query = @mysqli_query($dbc, "SELECT * FROM todo WHERE id='$id' ");
        
 

 if($query){
     
    
     while ($row = mysqli_fetch_array($query)){
        echo "<div style ='margin:20px; font-size:30px; color:green'>". 'Hello! ' . "</br>"; "</div>";
         echo'Id : '. $row['id'] ."</br>";
          echo 'Todo : '.$row['textarea']."</br>";
         echo 'created_date : '. $row['created_date']."</br>";
         echo 'Updated_at : '. $row['updated_at']."</br>";
         
         
     }
        
    }else{
        echo " couldn't issue database query";
        echo mysqli_error($dbc);

    }
       }       mysqli_close($dbc);
?>