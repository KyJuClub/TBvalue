<?php

echo <<<_START

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="livesearch.css">
        <noscript>
            // <style>html{display:none;}</style>
            <meta http-equiv="refresh" content="0.0;url=/TBvalue/app/html/nojavascript.html">
        </noscript>
        
        <title>Add Book</title>
        <script src='/TBvalue/app/javascript/jquery-3.1.0.min.js'></script>
        <script src='/TBvalue/app/javascript/register.js'></script>
        <script src='/TBvalue/app/javascript/livesearch.js'></script>
    </head>

    <body>
    
        <h1>Textbook Value Homepage</h1>
        
        <p>Click the button to add a new book</p>
        
        <button onclick="newBook()">Add new book</button>
        
        <script>
            function newBook() {
                    document.location.href = '/TBvalue/app/php/new.php';
            }
        //<div class="content">
        //<input type="text" class="search" id="searchid" placeholder="Search for books" />
        //<div id="result"></div>
        //</div>
        </script>
    
    
_START;

echo "</body>";
echo "</html>";

?>