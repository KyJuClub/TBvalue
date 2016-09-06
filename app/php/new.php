<?php
echo <<<_START

        <!DOCTYPE html>
          <html>
            <head>
                <noscript>
                    <style>html{display:none;}</style>
                    <meta http-equiv="refresh" content="0.0;url=/TBvalue/app/html/nojavascript.html">
                </noscript>
                
                <title>Add Book</title>
                <script src='/TBvalue/app/javascript/jquery-3.1.0.min.js'></script>
            </head>
            
            <body>
                  <table border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
                    <th colspan="2" align="center">Add Book Form</th>

                  <form method="post" action="/TBvalue/app/php/newbook.php" onSubmit="return validate(this)">
                    <br>
                    <tr>
                        <td id='signup'></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Textbook Name</td>
                        <td><input type="text" maxlength="12" name="textbook"></td>
                    </tr>
                    <tr>
                        <td>Author</td>
                        <td><input type="text" maxlength="12" name="author"></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" maxlength="12" name="lastname"></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td><input type="text" maxlength="40" name="email"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" maxlength="20" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Signup"></td>
                    </tr>
                </form>
                </table>
            </body>
            
           </html>


_START;
?>