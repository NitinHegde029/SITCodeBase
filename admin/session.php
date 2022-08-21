<?php

$uname = "admin";
$pwd = "admin";

session_start();
/*if(isset($_SESSION['uname'])){*/
   /* echo "header('Location: http://localhost/builds/admin/display.php');"
}

else*/
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
        $_SESSION['uname']=$uname;
        $_SESSION['pwd']=$pwd;
        echo "<script>location.href='display.php'</script>";
        
    }
    else{
        echo "<script>alert('Username or Password is incorrect')</script>";
        echo "<script>location.href='adminlogin.php'</script>";
    }
    
?>