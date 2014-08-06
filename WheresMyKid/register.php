<?php
/* 
 * php file that handles adding new users to database.
 * It should hash the password and add the user to the users table.
 */

// create db connection 
$connection = mysqli_connect("localhost","nobullbl_zski","JUYHNM<KI*&^","nobullbl_z");  


// test connection 
if (!$connection) { 
   echo "Couldn't make DB connection!"; 
   exit; 
} 

//execute if connection doesn't fail
else {
    
    //Set variables using filtered input and hashed password
    $user_ID = filter_input(INPUT_GET, 'user_ID');
    $password = password_hash(filter_input(INPUT_GET, 'password'), PASSWORD_DEFAULT);

    // create SQL prepared statement 
    $sql = mysqli_prepare($connection, "INSERT INTO users (user_ID, password) VALUES (?,?)");
    
    //bind values to SQL statement
    mysqli_stmt_bind_param($sql, 'ss', $user_ID,$password);
    
    //execute INSERT statment
    mysqli_stmt_execute($sql);
    
    //close query to free server resources
    mysqli_stmt_close($sql);
    




echo "User Added";

$connection->close();

}


