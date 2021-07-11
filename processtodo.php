<?php
session_start();
require_once('mysql-connect.php');

    $textarea = $_POST["textarea"];
    
    $_SESSION["textarea"] = $textarea;  



if(isset($_POST["submit"])){
     $error = [];  
     
     echo "<div style ='margin:20px; font-size:30px; color:red'> Welcome, </div>";
    if(empty($_POST["textarea"])){
        
        $error[] = 'textarea is required';
        header('location:todo.php');

    }else{
        $textarea = trim($_POST['textarea']);
    }
    
    
    if(empty($error)){

        $query = "INSERT INTO todo( textarea ,created_date,updated_at ,id) 
        VALUES('$textarea',NOW(),NOW(), NULL)";
    
    if (mysqli_query($dbc, $query)) {
        $_SESSION['message'] ="New todo created successfully";
        header('location:index.php');
        
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($dbc);
    }

    }else{
        echo "You need to enter the following data <br />";
        foreach($error as $error){
            echo $error;
        }
    }
    
}
  die;




?>