<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="main.js"></script>
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>

<body>
    <!--this is the navigation bar -->
    <div class="container">
        <nav class="navbar navbar-dark fixed-top navbar-expand-md bg-dark">
            <button type="button" class="nav-toggler" data-toggle="collapse" data-target="#myNav"><span class="navbar-toggler-icon"></span></button>
            <div id="myNav" class="collapse navbar-collapse"><div class="h3 text-primary ml-5">Universal Security Systems Corporation</div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">HomePage</a></li>
                    <li class="nav-item"><a href="Registration.php" class="nav-link">RegistrationPage</a></li>
                    <li class="nav-item"><a href="https://www.google.com" class="nav-link">Google</a></li>
                    <li class="nav-item"><a href="https://www.youtube.com" class="nav-link">YouTube</a></li>
                    <li class="nav-item"><a href="https://www.youtube.com" class="nav-link">Contacts</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!--this is the carousel-->
    <div class="container">
        <div id="john" class="carousel slide" data-ride="carousel">
            <!--indicators-->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!--slideshow-->
            <div class="carousel-inner fluid">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/current.jpeg" alt="First slide">
                    <div class="carousel-caption"><span class="h4 text-primary">Security Starts with You!</span></div>
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100" src="img/Beautiful.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner-img.jpg" alt="Third slide">
                </div>
            </div>

            <!--left and right controls-->
            <div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                <a class="carousel-control-next" href="#demo" data-slide="next"><span class="carousel-control-next-icon"></span></a>
            </div>
        </div>
    </div><br />
    <!--carousel ends here-->


    <!--forms-->
    <div class="row">
        <div class="col jumbotron">
            <h4 class="text-center"><u>ENTER RESPECTIVE DETAILS HERE</u></h4><br />
            <!--this code is for students display data-->
            <form method="POST" action="display_php/student_display.php" onsubmit="return substitute1 ()">
                <label for="">Student's Name:</label>
                <input type="text" name="studentdisplay" id="mytextbox1" placeholder="Enter Name"> <br />
                <button class="btn btn-primary">Submit</button>
            </form>

            <!--this code is for displaying lecturers data-->
            <form method="POST" action="display_php/lecturer_display.php" onsubmit="return substitute2 ()">
                <label for="">Lecturer's Name:</label>
                <input type="text" name="lecturerdisplay" id="mytextbox2" placeholder="Enter Name"> <br />
                <button class="btn btn-primary">Submit</button>
            </form>

            <!--This code is for displaying staff data-->
            <form method="POST" action="display_php/staff_display.php" onsubmit="return substitute3 ()">
                <label for="">Staff Name:</label>
                <input type="text" name="staffdisplay" id="mytextbox3" placeholder="Enter Name"> <br />
                <button class="btn btn-primary">Submit</button>
            </form>

            <!--This code is for displaying visitors data-->
            <form method="POST" action="display_php/visitors_display.php" onsubmit="return substitute4 ()">
                <label for="">Visitor's Name:</label>
                <input type="text" name="visitorsdisplay" id="mytextbox4" placeholder="Enter Name"> <br />
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!--the memo section-->
        <div class="col">
            <h3 class="text-center"><u>STAFF MEMO</u></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga placeat dolorum nihil
                aspernatur.Similique esse, veniam nobis iure voluptas ut nostrum? Commodi impedit perferendis dolores
                deleniti
                corporis accusamus sed id? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia
                temporibus explicabo necessitatibus obcaecati
                minus rerum placeat nam dolores? Doloremque tenetur repellat enim aliquam distinctio blanditiis fugit
                vitae assumenda quos vel.</p>
            <h3 class="text-center"><u>STUDENT MEMO</u></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga placeat dolorum nihil
                aspernatur.Similique esse, veniam nobis iure voluptas ut nostrum? Commodi impedit perferendis dolores
                deleniti
                corporis accusamus sed id? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia
                temporibus explicabo necessitatibus obcaecati
                minus rerum placeat nam dolores? Doloremque tenetur repellat enim aliquam distinctio blanditiis fugit
                vitae assumenda quos vel.</p>
        </div>
    </div>

    <div class="container jumbotron">
        <div class="h4 text-center">Other Services We Offer</div>
        <div class="row">
            <div class="col">
                <div class="card">
                        <div class="card-header bg-success">Banking Systems</div>
                        <div class="card-body">
                            <img class="card-img-top img-fluid" src=img/buildings.jpeg> 
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem dolor
                                aperiam eum,
                                consequuntur vero aspernaturnecessitatibus exercitationem cupiditate hic voluptas culpa, iure
                                incidunt optio
                                quibusdam doloribus sapiente! Quisquam, quibusdam.</p>
                        </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                        <div class="card-header bg-success">Web Development Services</div>
                        <div class="card-body">
                            <img class="card-img-top img-fluid" src=img/buildings.jpeg> 
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem dolor
                                aperiam eum,
                                consequuntur vero aspernaturnecessitatibus exercitationem cupiditate hic voluptas culpa, iure
                                incidunt optio
                                quibusdam doloribus sapiente! Quisquam, quibusdam.</p>
                        </div>
                </div>

            </div>
            <div class="col">
                <div class="card">
                        <div class="card-header bg-success">ICT Consoltancy</div>
                        <div class="card-body">
                            <img class="card-img-top img-fluid" src=img/buildings.jpeg> 
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem dolor
                                aperiam eum,
                                consequuntur vero aspernaturnecessitatibus exercitationem cupiditate hic voluptas culpa, iure
                                incidunt optio
                                quibusdam doloribus sapiente! Quisquam, quibusdam.</p>
                        </div>
                </div>

            </div>
            <div class="col">
                <div class="card">
                        <div class="card-header bg-success">Systems Repair and Upadation</div>
                        <div class="card-body">
                            <img class="card-img-top img-fluid" src=img/buildings.jpeg> 
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem dolor
                                aperiam eum,
                                consequuntur vero aspernaturnecessitatibus exercitationem cupiditate hic voluptas culpa, iure
                                incidunt optio
                                quibusdam doloribus sapiente! Quisquam, quibusdam.</p>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!--this is the patners section-->
    <div class="container">
            <div class="h3 text-underlined"><u>Our Patners</u></div>
            <div class="row">
                <div class="col"><img src="img/rural.jpeg" alt="The image is displayed here" class="img-fluid"></div>
                <div class="col"><img src="img/farm.jpeg" alt="Sorry no image for YOU!!!" class="img-fluid"></div>
                <div class="col"><img src="img/country.jpeg" alt="Sorry bruh no image!!!" class="img-fluid"></div>
                <div class="col"><img src="img/banner-img.jpeg" alt="NO picture for you" class="img-fluid"></div><br />
            </div><br />
        </div>

        <!--this is the footer section-->
    <div class="row bg-success ">
        <div class="col">
            <footer class="page-footer">
                <div class="footer-copyright text-left py-3"><span class="h6 ml-5">Copyright &copy 2019. All rights
                        reserved.</span></div>
                <div class="col">
                    <div class="text-center mb-2">
                        <a href="https://www.twitter.com/johnlihemo" title="twitter handle"><i class="fa fa-twitter-square fa-lg "></i></a>
                        <a href="https://www.facebook.com/johnlukaku" title="facebook page"><i class="fa fa-facebook-square fa-lg"></i></a>
                        <a href="https://www.instagram.com/johnlihemo" title="instagram account"><i class="fa fa-instagram fa-lg"></i></a>
                        <a href="https://www.linkedin.com/johnlihemo" title="linkedin account"><i class="fa fa-linkedin-square fa-lg"></i></a>
                        <a href="https://www.github.com/johnlihemo" title="github repo"><i class="fa fa-github-square fa-lg"></i></a>
                    </div>
                </div>
        </div>
        </footer>
    </div>


</body>


</html>