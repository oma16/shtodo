<?php require_once('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    
</head>
<body>
<?php session_start()

?>
    <main>

    <div>
    <h1>Todo List</h1>
    <legend><form action="processtodo.php" method="post">
    
    <div>

    <label for="textarea">Textarea</label><br>
     <textarea name="textarea"></textarea>
    
    </div>
    <div>
    
    <div>
    <button type="submit" name="submit" id ="submit">Submit</button>
    </div>
   
    </form></legend>
    
    </div>
    </main>
</body>
</html>



    