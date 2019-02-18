<?php
session_start();
include_once 'dbh.inc.php' ;
if (isset($_POST['submit'])) 
{
    

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    if (empty($uid)|| empty($pwd)) 
    {
        header("Location: ../index.php?empty");
        exit();
    }else {     
        $sql = "SELECT * FROM users WHERE user_uid='$uid'";
        $result = mysqli_query ($conn,$sql);
    if (!$result) {
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }
        $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        header("Location: ../index.php?login=error0");
        exit();
    }else
     {
        if ($row = mysqli_fetch_assoc($result)) 
        {
            //de-hashing the pw
            $hashedPwdCheck =password_verify($pwd,$row['user_pwd']);
            if ($hashedPwdCheck==false) {
              header("Location: ../index.php?login=error1");
              exit();
            }elseif ($hashedPwdCheck==true)
            {
            //log in the user here 
                
            
             $_SESSION['u_id']=$row['user_id'] ;  
             $_SESSION['u_first']=$row['user_first'] ;  
             $_SESSION['u_last']=$row['user_last'] ;  
             $_SESSION['u_email']=$row['user_email'] ;  
             $_SESSION['u_uid']=$row['user_uid'] ;  
             header("Location: ../index.php?login=success");
             exit();
        
            }

        }
    }
}
}else {
    header("Location: ../index.php?login=error2"); }
