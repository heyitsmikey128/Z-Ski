<!DOCTYPE html>
<!--
Simple login page to gain access to the main site.
This is only being used to test 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Where's My Kid?  </title>
    </head>
    <body>
        <H1>Where's My Kid?!</H1>
        <br>
        <br>

        
        <form action='verify_user.php'>
        <table>
            <tr><td>Username: </td><td><input type='text' name='user_ID'></td></tr>
            <tr><td>Password: </td><td><input type='password' name='password'></td></tr>
            <tr><td><input type='submit' name='submit'></td></tr>
        </table>
        </form>
        <a href='create_user.php'>Create New User</a>
        <br>
        <br>
        
    </body>
</html>
