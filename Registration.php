<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="registration.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="registration.js"></script>
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>

    <!--this is the navigation bar -->
    <div class="container">
        <nav class="navbar navbar-dark fixed-top navbar-expand-md bg-dark">
            <button type="button" class="nav-toggler" data-toggle="collapse" data-target="#myNav"><span
                    class="navbar-toggler-icon"></span></button>
            <div id="myNav" class="collapse navbar-collapse">
                <div class="h3 text-primary ml-5">Eshiwani Security Systems(ESS)</div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link h6">Home</a></li>
                    <li class="nav-item"><a href="#regista" class="nav-link h6">Laptops</a></li>
                    <li class="nav-item"><a href="vehicles_form.php" class="nav-link h6"" >Vehicles</a></li>
                    <li class=" nav-item"><a href="mobile_form.php" class="nav-link h6">Mobile</a></li>
                </ul>
            </div>
        </nav>
    </div><br />


    <div class="h5 text-center text-primary">Registration Forms</div><br /><br />

    <!--this is the carousel-->
    <div id="john" class="carousel slide" data-ride="carousel">

        <!--slideshow-->
        <div class="carousel-inner fluid sizing">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/office.png" alt="First slide" style="height:750px;">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="img/home-office.jpg" alt="Second slide" style="height:750px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/pine.jpg" alt="Third slide" style="height:750px;">
            </div>
        </div>
    </div><br />

    <!--this is the registration forms section for the laptops-->
    <div id='regista'style="width:20%">
        <ul class="list-group ml-5">
            <li class="list-group-item"><a href="student_form.php">Student Form</a></li>
            <li class="list-group-item"><a href="staff_form.php">Staff Form</a></li>
            <li class="list-group-item"><a href="lecturer_form.php">Lecturer Form</a></li>
            <li class="list-group-item"><a href="visitor_form.php">Visitor Form</a></li>
        </ul>
    </div><br />


    <div class="footer-copyright text-center py-3 h6">Terms and Condition | Privacy Policy | &copy
        2019. ESS
    </div>

</body>

</html>