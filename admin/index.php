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
    

    <div class="container my-5 bg-light">
    <h1 class="text-center text-uppercase py-3">you need to login</h1>
    <div class="row py-5">

   
    
    <div class="col-4 mx-auto my-auto">

    <form action="validation.php" method="post">

    <div class="form-group">
    <input type="text" class="form-control" name="username" placeholder="enter username...">
    </div>

    <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="enter password...">

    </div>



    <button class="btn btn-primary" name="login">
    login
    </button>
    
    </form>
    
    </div>
    
    </div>
    </div>
</body>
</html>