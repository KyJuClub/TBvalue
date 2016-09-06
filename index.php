<?php

echo <<<_START

<!DOCTYPE html>
<html>
    <body>
    
        <h1>Textbook Value Homepage</h1>
        
        <p>Click the button to add a new book</p>
        
        <button onclick="newBook()">Add new book</button>
        
        <script>
            function newBook() {
                    document.location.href = '/TBvalue/app/php/new.php';
            }
        </script>
    
    </body>
</html>


_START;


?>