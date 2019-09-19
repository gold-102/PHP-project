<?php

require_once ("db.php");

if(isset($_POST['submit']))
{
    $title = $_REQUEST['title'];
    $desc_blog = $_REQUEST['desc_blog'];
    $image = $_FILES['image'];
    $name = $image['name'];

    move_uploaded_file($image['tmp_name'], "img/".$image['name']);

    $q = "INSERT INTO blog(title, desc_blog, image) VALUES ('$title', '$desc_blog', '$name')";

    mysqli_query($db, $q);
    echo "inserted";
}



?>