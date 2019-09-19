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





























    <!--carousel-->
    <section id="carousel" class="bg-dark">
        <div class="container-fluid">

            <div class="row">

               
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/item1.jpg" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="img/item2.jpg" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="img/item3.jpg" alt="Third slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>



                



                      </div>
        </div>
    </section>
    <!--end of carousel-->





































    <!--demo section-->
    <section id="demo" class="bg-light">
        <div class="container">
            <div class="row text-center text-uppercase py-5">
               <div class="col-md-12 col-12"><h5 >DEMONSTRATING</h5></div>
        <div class="col-12"><h3 class="text-danger" id="heading">THE NEXT LEVEL OF CRICKET ANALYSIS</h3></div>
            </div>



            <div class="row py-5" >
                <div class="col-md-6 col-12" >
                    <img src="img/story.jpg" alt="story" class="img-fluid">
                </div>
                <div class="col-md-6 col-12 text-uppercase" id="text-1">
                    <h1>our story</h1>
                    <div class="title-underline-i bg-danger"></div>
                    <p class="lead py-5 text-secondary text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quam facere maxime provident eius beatae officiis est aliquid harum, quidem odit officia assumenda tempore atque.</p>
                </div>
            </div>





            <div class="row py-5">
                    
                    <div class="col-md-6 col-12 text-uppercase">
                        <h1>what we do</h1>
                        <div class="title-underline bg-danger"></div>
                        <p class="lead py-5 text-secondary text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quam facere maxime provident eius beatae officiis est aliquid harum, quidem odit officia assumenda tempore atque.</p>
                    </div>
                    <div class="col-md-6 col-12">
                            <img src="img/do.jpg" alt="story" class="img-fluid">
                        </div>
                </div>


        </div>
    </section>
    <!--end of demo section-->



























    


















     <!--subscribe-->
     <section id="subscribe" class="bg py-5">
            <div class="container-fluid">
                <div class="row  text-uppercase  py-5">
                    <div class="col-md-12 col-12 text-center">
                    <h1 class="display-4 text-danger ">subscribe for newsletter</h1>
                </div>
                </div>
    
    
                <div class="row py-4">
                    <div class="col-md-4 col-12 mx-auto">
                    <form action="subscribe.php" method="post" onsubmit="return subScribe()">
                    <p id="msg" style="font-size:2rem" class="font-weight-bold text-center text-danger"></p>

                    <div class="form-group">
                                <input type="text" name="name" id="fullname" class="form-control" placeholder="Name..." autocomplete="off">
                            </div>

                        <div class="form-group">
                            <input type="text" name="email" id="emailid" class="form-control" placeholder="Email..." autocomplete="off">
                        </div>
    
    
                        
    
                            <div class="form-group">
                            <button class="btn btn-danger btn-block" name="submit" />Subscribe</button>
                            </div>
                    </form>
                </div>
                </div>
            </div>
        </section>
        <!--end of subscribe-->












































    <!--blog section-->
        <section id="blog" class="bg-dark py-5">
            <div class="container">
                <div class="row ">
                    <div class="col text-center text-uppercase">
                        <h1 class="text-warning">our blog</h1>
                        <div class="title-underline-1 bg-danger"></div>
                    </div>
                </div>

        

                <div class="row py-4">
                <?php

            $q = "SELECT * FROM blog ORDER BY id ASC";
            $query = mysqli_query($db, $q);
            $num = mysqli_num_rows($query);

            if($num>0) {
                while($blog = mysqli_fetch_array($query)) {

           
            ?>
                    
                    <div class="col-md-4 col-12 " align="center">
                    <a href="blog.php?ref=<?php echo $blog['id']; ?>">
                <img src="admin/img/<?php echo $blog['image']; ?>" alt="blog" class="img-fluid img-thumbnail"> 
                <p class="lead text-white text-justify text-center"><?php echo $blog['title']; ?></p>
                        </a>
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