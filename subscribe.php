<?php
require_once('db.php');


if(isset($_POST['submit'])) {

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];

    $to = $email;
    $subject = "Our Response";
    $msg = "Hi, Thank you for Subscribe us. you will get all new updates from us on your Email ID";
    $headers = "FROM: admin@admin.com";
    /* when you upload your website on main server then it will work...  */ 

    if(mail($to, $subject, $msg, $headers)) {

        echo "<script>alert('Email has been sent');</script>";
    
    $q= "INSERT INTO subscribe(name, email) VALUES ('$name', '$email')";
    if(mysqli_query($db, $q)) {
        header('Location:index.php');
    }

    }

    
}
   ?>