<?php

session_start();
require_once('mysql-connect.php');




if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM todo WHERE id='$id' ";

if (mysqli_query($dbc, $query)) {
    $_SESSION['message'] = "Todo deleted successfully";
    header('location:index.php');
    
} else {
    echo "Error deleting record: " . mysqli_error($dbc);
}
    
}





mysqli_close($dbc);
?>