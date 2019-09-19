<?php

    require_once ("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="text-right mr-5 my-3 text-uppercase ">
<a href="logout.php">logout</a>
</div>

<div class="container my-5 bg-light">
    <h1 class="text-center text-uppercase py-3">Welcome Admin</h1>
    <div class="row py-5">


    <div class="col-8 mx-auto">
    <form action="send_data.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <input type="text" name="title" placeholder="enter title" class="form-control">
    </div>



    <div class="form-group">
    <textarea name="desc_blog" class="form-control"></textarea>
    </div>



    <div class="form-group">
    <input type="file" name="image" >
    </div>

    <button class="btn btn-primary" name="submit">
    submit</button>
    
    
    </form>
    
    </div>



</div>
</div>
</body>
</html>