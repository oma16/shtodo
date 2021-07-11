<!DOCTYPE html>
<?php
session_start();
require_once('mysql-connect.php');
require_once('header.php');


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    
</head>
<body>

    <main>
    
    <div>
    <legend><form action="processedit.php" method="post">
    
    <h1>Edit</h1>
    <input type="hidden" name="id" value = "<?php echo  $_GET['id'];?>" >
    <div>
    
    <label for="textarea">Textarea</label><br>
    <textarea name="textarea" id="textarea" ></textarea>
    
    </div>
    
    <div>
    <button type="submit" name="update" id ='submit'>Update</button>
    </div>

    </form></legend>
    
    </div>
    </main>
</body>
</html>



    