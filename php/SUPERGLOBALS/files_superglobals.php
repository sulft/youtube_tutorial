<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>$_FILES</title>
    </head>

    <body>
        <h1>$_FILES</h1>
        <?php
            error_reporting(E_ERROR | E_PARSE);
            //enctype="multipart/form-data" dit comment les données du formulaire doivent être encodé
            echo $name = $_FILES['file']['name'] . "<br>";
            echo $type = $_FILES['file']['type'] . "<br>";
            echo $error = $_FILES['file']['error'] . "<br>";          
        ?> 

        
        <form action = "files_superglobals.php" method = "post" enctype="multipart/form-data">
            <input type='file' name='file'>
            <button type="submit">SUBMIT</button>
        </form>
    </body>
<html>