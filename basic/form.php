<?php
     $name = $_GET['fName'];
     $lastname = $_GET['lName'];
     
     echo $name.' '.$lastname;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FormPage</title>
</head>
<body>
    
    <form action="form.php" method="get">
        Name : <input type="text" name="fName" >
        Last Name : <input type="text" name="lName">
        <input type="submit" value="กดดิ">
    </form>
    
</body>
</html>