<?php
session_start();
require_once('mysql-connect.php');
require_once('header.php'); 


?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
     <h3><a href="todo.php"> Click here to add todo</a></h3>
    
    <?php

    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);  
    }

    
    $query = "SELECT id, textarea,created_date,updated_at FROM todo";

 $response = @mysqli_query($dbc, $query);

 if($response){
     
     echo '<table >
     <tr>
     <th>Id</th>
     <th>Todo</th>
     <th>created_date</th>
     <th>Updated_at</th>
     <th>Actions</th>
     
     
     </tr>';
     while ($row = mysqli_fetch_array($response)){
         ?> 
         <tr>
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['textarea'] ?></td>
         <td><?php echo $row['created_date'] ?></td>
         <td><?php echo $row['updated_at'] ?></td>
         
         <td>
         
        
           <button type="submit"><a href="read.php?id=<?php echo $row['id'];?>">Read</a></button>
         <button type="submit" name="edit"><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></button>
         <button type="submit"><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></button> 
         
         </td>
         
         
        
         
         
         </tr>
<?Php
     }
     echo   '</table>';
      
 }else{
     echo " couldn't issue database query";
     echo mysqli_error($dbc);
 }
          mysqli_close($dbc);




?>
    </body>
    </html>
 