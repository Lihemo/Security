<!DOCTYPE html>
<html lang='en'>

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
            <div id="myNav" class="collapse navbar-collapse">
                <div class="h3 text-primary ml-5">Eshiwani Security Systems(ESS)</div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="Registration.php" class="nav-link">Registration</a></li>
                    <li class="nav-item"><a href="https://www.google.com" class="nav-link">Google</a></li>
                    <li class="nav-item"><a href="https://www.youtube.com" class="nav-link">YouTube</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!--this is the carousel-->
    <div id="john" class="carousel slide" data-ride="carousel">

        <!--slideshow-->
        <div class="carousel-inner fluid">
            <div class="carousel-item active">
                <img class="d-block w-100 caro" src="img/Beautiful.jpg" alt="First slide">
                <div class="carousel-caption"><span class="h4 text-primary">Security Starts with You!</span></div>
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100 caro" src="img/home-office.jpg" alt="Second slide">
                <div class="carousel-caption"><span class="h4 text-white">Forgot your laptop at work? No worries as
                        long as you have
                        ESS systems around you.</span></div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 caro" src="img/team.jpg" alt="Third slide">
                <div class="carousel-caption"><span class="h4 text-white">Be a good team player. Don't worry about
                        security WE GOT YOU.
                    </span></div>
            </div>
        </div><br />


    <!--this is the welcome note-->
    <div class="text-center">
        <p class="h6 text-primary"> Welcome to ESS where we NEVER take security for granted!!</p>
    </div><br />


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
            <hr />
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

    <!--this section describes the other services the company also offers-->
    <div class="h4 ml-1">Our Services</div>
    <div class="row">
        <div class="col card bajie">
            <div class="card-header bg-success">Security</div>
            <div class="card-body">
                <img class="card-img-top img-fluid" src=img/background.jpg> 
                <br />
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem dolor
                    aperiam eum,
                    consequuntur vero aspernaturnecessitatibus exercitationem cupiditate hic voluptas culpa, iure
                    incidunt optio
                    quibusdam doloribus sapiente! Quisquam, quibusdam.</p>
            </div>
            <div class="card-footer bg-success">Footer</div><br />
        </div>
    
        <div class="col card bajie">
            <div class="card-header bg-success">Trainning</div>
            <div class="card-body">
                <img class="card-img-top img-fluid" src=img/girl.jpg> 
                <br />
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem dolor
                    aperiam eum,
                    consequuntur vero aspernaturnecessitatibus exercitationem cupiditate hic voluptas culpa, iure
                    incidunt optio
                    quibusdam doloribus sapiente! Quisquam, quibusdam.</p>
            </div>
            <div class="card-footer bg-success">Footer</div><br />
        </div>
    
        <div class="col card bajie">
            <div class="card-header bg-success">Charity</div>
            <div class="card-body">
                <img class="card-img-top img-fluid" src=img/Baby.jpg> 
                <br />
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem dolor
                    aperiam eum,
                    consequuntur vero aspernaturnecessitatibus exercitationem cupiditate hic voluptas culpa, iure
                    incidunt optio
                    quibusdam doloribus sapiente! Quisquam, quibusdam.</p>
            </div>
            <div class="card-footer bg-success">Footer</div><br />
        </div>
    </div><br />


    <!--this section displays the users of the system-->
    <div class='row bg-primary text-white jumbotron text-center'>
        <div class='col'>Users 450k+</div>
        <div class='col'>Countries 94+</div>
        <div class='col'>7 Continets</div>
    </div>

    <!--this is the patners-->
    <div class="row">
        <div class="col"><img class="pat ml-4" src="img/men.jpg" alt="No pic for you!"></div>
        <div class="col ml-6">
            <ul>
                <div class="h5"><u>Partners</u></div>
                <li>Department of Defense DoD(USA)</li>
                <li>Google Inc</li>
                <li>Chevrolet Inc</li>
                <li>iOS App</li>
                <li>Product Hunt</li>
                <li>Lenovo Inc</li>
                <li>Microsoft</li>
                <li>Nucleo</li>
                <li>Explore</li>
                <li>Kenya Airways</li>
                <li>Qatar Airways</li>
                <li>Ethiopian Airlines</li>
            </ul>
        </div>
    
        <div class="col">
            <ul>
                <div class="h5"><u>Products</u></div>
                <li>Banking Systems</li>
                <li>Library Systems</li>
                <li>Alarm Systems</li>
                <li>Motion Detector Systems</li>
                <li>CCTV Sytems</li>
                <li>Motor vehicle tracking Systems</li>
                <li>Files organization Systems</li>
            </ul>
        </div>
    </div>

    <hr style="width:100%;" />
    <div class="row">
        <div class="jumbotron bg-white text-center col"><b class="fon">From a designer to all the others.</b><br />
            Designed, developed and maintained by one guy only.
        </div>
        <div class="col mr-15"><img class="free" src="img/freelance.png" alt="Freelancer"></div>
    </div>
    </div>

    <!--this is the contacts section-->
    <hr style="width:100%;" /><br />
    <div class="h4 ml-3"><u>Contacts</u></div><br />
    <div class="row text-center">
        <div class="col">
            <h6><b>United States of America</b></h6>
            Newyork City<br />
            ESS Building<br />
            24th Street<br />
            Contact:0791989156<br />
            Email:www.essuasa.org
        </div>
        <div class="col">
            <h6><b>France</b></h6>
            Paris<br />
            Free Sate Building<br />
            14th Street<br />
            Contact:0721589156<br />
            Email:www.essfr.org
        </div>
        <div class="col">
            <h6><b>Japan</b></h6>
            Tokyo<br />
            Tenri University Building<br />
            54th Street<br />
            Contact:0721799156<br />
            Email:www.essjpn.org
        </div>
        <div class="col">
            <h6><b>South Africa</b></h6>
            Pretoria<br />
            I&M Building<br />
            74th Street<br />
            Contact:0721989156<br />
            Email:www.esssa.org
        </div>
        <div class="col">
            <h6><b>Qatar</b></h6>
            Newyork City<br />
            Al-Mouradi Building<br />
            27th Street<br />
            Contact:0721984556<br />
            Email:www.essqtr.org
        </div>
    </div><br />

    <!--this is the footer section-->
    <div class="row ">
        <div class="col">
            <div class="col">
                <div class="text-center mb-2">
                    <a href="https://www.twitter.com/johnlihemo" title="twitter handle"><i class="fa fa-twitter-square fa-3x"></i></a>
                    <a href="https://www.facebook.com/johnlukaku" title="facebook page"><i class="fa fa-facebook-square fa-3x"></i></a>
                    <a href="https://www.instagram.com/johnlihemo" title="instagram account"><i class="fa fa-instagram fa-3x"></i></a>
                    <a href="https://www.linkedin.com/johnlihemo" title="linkedin account"><i class="fa fa-linkedin-square fa-3x"></i></a>
                    <a href="https://www.github.com/johnlihemo" title="github repo"><i class="fa fa-github-square fa-3x"></i></a>
                </div>
            </div>
            <hr style="width:100%;" />
            <div class="footer-copyright text-center py-3"><span class="h6 ml-5">Copyright &copy 2019. ESS</span></div>
        </div>
    </div>


</body>

</html>