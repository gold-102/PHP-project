<?php

$ref = $_REQUEST['ref'];

require_once('db.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
</head>
<body >







    <!--header section-->
    <header id="header" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-5 my-auto col-3">
                    <img src="img/logo.png" alt="logo" class="img-fluid" id="logo-img" >
                </div>


                



                <div class="col-md-7 my-auto" id="menus">
                    <ul class="list-unstyled text-uppercase ">
                        <li class="list pl-3"><a href="index.php" class="text-white">home</a></li>
                        <li class="list pl-3"><a href="#blog" class="text-white">blog</a></li>
                        <li class="list pl-3"><a href="about.php" class="text-white">about us</a></li>
                        <li class="list pl-3"><a href="contact.php" class="text-white">contact us</a></li>
                        <li class="list pl-3"><a href="#" class="text-white">download app </a></li>
                        
                    </ul>
                </div>

                <a href="" class="nav-btn">
                    <i class="fas fa-bars fa-1x" style="color: #dc3545!important"></i>
                </a>

            </div>
        </div>


    </header>
    <!--end menu section-->




























     <!--blog section-->
     <section id="blog" class="bg-light py-5">
            <div class="container">
                <div class="row ">
                    <div class="col text-center text-uppercase">
                        <h1 class="text-warning">our blog</h1>
                        <div class="title-underline-1 bg-danger"></div>
                    </div>
                </div>

        

                <div class="row py-4">
                <?php
                 $q = "SELECT * FROM blog WHERE id = '$ref'";
                 $query = mysqli_query($db, $q);
                 $num = mysqli_num_rows($query);
     
                 if($num>0) {
                     while($blog = mysqli_fetch_assoc($query)) {

                ?>

                <div class="col-md-8 my-5 mx-auto">
                
                <h1 class="text-capitalize text-dark"><?php echo $blog['title']; ?></h1>
                <div class="d-flex justify-content-center">
                <h4 class="text-justify text-muted mt-3 mr-1"><?php echo $blog['desc_blog']; ?></h4>
                <img src="admin/img/<?php echo $blog['image']; ?>" alt="store" class="img-fluid ml-1">
                </div>
                
                </div>

                <?php
                     }
                    }

                ?>



                </div>


            </div>
        </section>
    <!--end of blog section-->






















    <footer id="footer" class="bg-danger">
        <div class="container-fluid">
            <p class="text-center text-white pt-2"><small>&copy; All rights reserved.</small></p>
        </div>
    </footer>










    <!--script files-->
    <script src="script.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    
</body>
</html>