<?php
//Used

// create db connection 
$connection = mysqli_connect("localhost","nobullbl_zski","JUYHNM<KI*&^","nobullbl_z");  

// test connection 
if (!$connection) { 
   echo "Couldn't make DB connection!"; 
   exit; 
} 

else {

    $user_ID = filter_input(INPUT_GET, 'user_ID');
    $password = filter_input(INPUT_GET, 'password');
    
    // create SQL statement, bind variables, execute, and fetch variables 
    $sql = mysqli_prepare($connection, "SELECT user_ID,password FROM users "
            ."WHERE user_ID=?");
    
    mysqli_stmt_bind_param($sql, 's', $user_ID);
    mysqli_stmt_execute($sql);
    mysqli_stmt_bind_result($sql, $user_ID_check, $password_check);
    mysqli_stmt_fetch($sql);
        
    if (strcmp($user_ID_check,$user_ID)==0) {
        echo "Correct username";
    }
    else {
        echo "Incorrect username";
    }   
    
    
    if (password_verify($password, $password_check)) {
        echo "Correct Password";
    }
    else {
        echo "Incorrect Password";
    }
  

    //close connections    
    mysqli_stmt_close($sql);
    mysqli_close($connection);
}
