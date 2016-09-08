<?php

    require_once 'newbook.php';
 
    //credentials for localserver
    $servername = getenv('IP');
    $username = "kyjuclub";
    $password = "password";
    $database = "tb";
    $dbport = 3306;
    
    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    if (isset($_POST['bookname']) && isset($_POST['author']))
    {
        
          $query = "INSERT INTO newbook(bookname,author)
                         VALUES('$bookname','$author')";
                         
          $result = $db->query($query);
          
          if(!$result) echo "This book already exists.";
            else echo "seccessfully entered into database.";
    }
    else
    {
        echo "Please insert both fields";
    }
    
    

?>