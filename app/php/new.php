<?php

echo <<<_START

      <script src='/TBvalue/app/javascript/jquery-3.1.0.min.js'></script>
      <script src='/TBvalue/app/javascript/register.js'></script>

      <table border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
        <th colspan="2" align="center">Add Book Form</th>
    
      <form method="post" action="/TBvalue/app/php/newbook.php" onsubmit="return validate1(this);">
        <br>
        <tr>
            <td id='register'></td>
        </tr>
        <br>
        <tr>
            <td>Book Name</td>
            <td><input type="text" maxlength="12" name="bookname"></td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input type="text" maxlength="12" name="author"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Submit"></td>
        </tr>
    </form>
    </table>
    

    
_START;
?>