<?php
    $name=$_POST['name'];
    $pass=$_POST['psw'];
    $email=$_POST['email'];
    $flag=0;
    $psw_err="";
    if(strlen($pass)<8){
        ++$flag;
        $psw_err="Password should be atleast 8 characters";
    }
    if($flag != 0) {
        include('signup.php');
        exit;
    }

    $con= new mysqli('localhost','root','','Royal_Retreat');
    if($con->connect_error)
    {
        die('CONNECTION FAILED'.$connect_error);
    }
    else
    {
        $query="insert into users values('$name','$email','$pass') ";
        if($con->query($query)==TRUE)
        {?>
        <h3>
        <?php 
        $con->close();
        header("Location: login.php");
        exit;
        }
    }
?>