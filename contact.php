<?php
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



























    <!--contact section-->
    <section id="contact">
        <div class="container">
            <div class="row my-5">
                    <div class="col text-center text-uppercase">
                            <h1 class="text-danger">contact us</h1>
                            
                        </div>
            </div>


            <div class="row mb-5">
                <div class="col-md-8 col-12 mx-auto">



                        <!--contact us form-->
                        <form action="detail_submit.php" method="post" onsubmit="return formSubmit()" >
                <p id="error-msg" class="font-weight-bold text-center text-danger"></p>
                                <div class="form-group pt-1">
                <input type="text" class="form-control" name="first_name" placeholder="First Name..." id="fname" autocomplete="off">
                                    </div>


                                    <div class="form-group pt-1">
                <input type="text" class="form-control" name="second_name" placeholder="Second Name..."  id="sname" autocomplete="off">
                                                </div>


                                    <div class="form-group pt-1">
            
        <input type="tel" class="form-control" name="mobile_no" placeholder="Phone Number..."  id="ph" autocomplete="off">
                        </div>
                                    
                                <div class="form-group pt-1">
               <input type="text" class="form-control" name="email" placeholder="Email..."  id="mail" autocomplete="off">
                                </div>
            
                         <button class="btn btn-danger btn-block" name="submit">Submit

                         </button>
                                    
                            </form>
                </div>
            </div>
        </div>
    </section>
    <!--end of contact-->





























    


<footer id="footer-2" class=" bg-danger">
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