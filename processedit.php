<?php
session_start();
require_once('mysql-connect.php');


$id = $_POST["id"];
$textarea = $_POST["textarea"];


$_SESSION["id"] = $id;  
$_SESSION["textarea"] = $textarea;  


if(isset($_POST["update"])){

    $error = [];  

    echo "<div style ='margin:20px; font-size:30px; color:red'> Hello!</div>";
   if(empty($_POST["textarea"])){
       
       $error[] = 'textarea is required';
       header('location:edit.php');


   }else{
       $textarea = trim($_POST['textarea']);
   }
   if(empty($error)){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $response = @mysqli_query( "SELECT FROM todo WHERE id=$id");
        $row =mysqli_fetch_array($response);
    }
  
   
   $query = "UPDATE todo SET  textarea  ='$textarea', updated_at = NOW()  WHERE id ='$id' ";

if (mysqli_query($dbc, $query)) {
    $_SESSION['message'] = "Todo updated successfully";
    header('location:index.php');

} else {
    echo "Error updating todo: " . mysqli_error($dbc);
}
}else{
    echo "You need to enter the following data <br />";
    foreach($error as $error){
        echo $error;
}
}
}
mysqli_close($dbc);
?>