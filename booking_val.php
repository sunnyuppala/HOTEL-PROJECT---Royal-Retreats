<?php
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $postal=$_POST['postal'];
    $account=$_POST['account'];
    $details=$_POST['details'];
    $checkin=$_POST['check-in'];
    $checkout=$_POST['check-out'];
    $con= new mysqli('localhost','root','','Royal_Retreat');
    if($con->connect_error)
    {
        die('CONNECTION FAILED'.$connect_error);
    }
    else
    {
        $query="INSERT INTO userdetails(fname, name, phone, email, address, country, city, postal, account, details, checkin, checkout) VALUES('$fname','$lname','$phone','$email','$address','$country','$city','$postal','$account','$details','$checkin','$checkout') ";
        if($con->query($query)==TRUE)
        {?>
        <h3>
        <?php 
        $con->close();
        header("Location: Thankyou.php");
        exit;
        }
        else{
            echo "error";
        }
    }
?>