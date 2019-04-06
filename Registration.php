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
    <!-- navigation bar -->
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-md bg-dark">
            <button type="button" class="nav-toggler" data-toggle="collapse" data-target="#myNav"><span class="navbar-toggler-icon"></span></button>
            <div id="myNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="Registration.php" class="nav-link">Registration</a></li>
                    <li class="nav-item"><a href="https://www.google.com" class="nav-link">Google</a></li>
                    <li class="nav-item"><a href="https://www.youtube.com" class="nav-link">YouTube</a></li>
                </ul>
            </div>
        </nav>
    </div><br />
    <div class="h1 text-center text-primary"><u>Registration Forms</u></div>

    <!--forms-->
    <div class="container jumbotron">
        <div class="row">
            <div class="col">
                <!--this code is for the students table-->
                <Form method="POST" action="php_scripts/student.php" id="student" onsubmit="return student ()">
                    <div class="h3 text-center"><u>Student Form</u></div>
                    <label>Name:</label>
                    <input type="text" id="jina" name="jina"> <br /> <br />
                    <label for="">Course:</label>

                    <!--this code below is for the dropdown menu-->
                    <select name="john" id="john">
                        <option value="Diploma in ICT">Diploma in ICT</option>
                        <option value="Bachelors in ICT">Bachelors in ICT</option>
                        <option value="Bachelors in Mechanical Engineering">Bachelors in Mechanical Engineering</option>
                        <option value="Diploma in Animal Husbandry">Diploma in Animal Husbandry</option>
                    </select> <br /> <br />
                    <!--it ends here-->

                    <label for="">Laptop Model:</label>
                    <input type="text" id="model" name="model" placeholder="Manufacturer's Name"> <br /> <br />
                    <label>Serial Number:</label>
                    <input type="text" id="serial" name="serial"> <br /> <br />
                    <input type="submit" value="submit" name="ClickMe_one" id = "ClickMe_one" name="ClickMe_one">
                </Form>
            </div>


            <div class="col">
                <!--this code is for the lecturer table-->
                <Form method="POST" action="php_scripts/lecturer.php" id="lecturer" onsubmit="return lecturer ()">
                    <div class="h3 text-center"><u>Lecturer Form</u></div>
                    <label>Name:</label>
                    <input type="text" id="car" name="car"> <br /> <br />
                    <label for="">Faculty:</label>

                    <!--this code below is for the dropdown menu-->
                    <select name="chair" id="chair">
                        <option value="Faculty of IT and Computing">Faculty of IT and Computing</option>
                        <option value="Faculty of Applied Sciences">Faculty of Applied Sciences</option>
                        <option value="Faculty of Agriculture">Faculty of Agriculture</option>
                        <option value="Faculty of Engineering">Faculty of Engineering</option>
                    </select> <br /> <br />
                    <!--it ends here-->

                    <label for="">Laptop Model:</label>
                    <input type="text" id="old" name="old" placeholder="Manufacturer's Name"> <br /> <br />
                    <label>Serial Number:</label>
                    <input type="text" id="gender" name="gender"> <br /> <br />
                    <input type="submit" value="submit" id = "ClickMe" name="ClickMe_two">

                </Form>
            </div>
        </div>
        <br />

        <div class="row">
            <div class="col">
                <!--this code is for the staff table-->
                <Form method="POST" action="php_scripts/staff.php" id="staff" onsubmit="return staff ()">
                    <div class="h3 text-center"><u>Staff Form</u></div>
                    <label for="">Name:</label>
                    <input type="text" id="dart" name="dart"> <br /> <br />
                    <label for="">Department:</label>

                    <!--this code below is for the dropdown menu-->
                    <select name="shade" id="shade">
                        <option value="Estates">Estates</option>
                        <option value="Cleaning">Cleaning</option>
                        <option value="Hotel and Accomodation">Hotel and Accomodation</option>
                        <option value="Transport">Transport</option>
                    </select> <br /> <br />
                    <!--it ends here-->

                    <label>Laptop Model:</label>
                    <input type="text" id="bet" name="bet" placeholder="Manufacturer's Name"> <br /> <br />
                    <label>Serial Number:</label>
                    <input type="text" id="polite" name="polite"> <br /> <br />
                    <input type="submit" value="submit" id = "ClickMe" name="ClickMe_three" class="btn-primary">

                </Form>
            </div>


            <!--this code is for the visitor table-->
            <div class="col">
                <Form method="POST" action="php_scripts/visitor.php" id="visitor" onsubmit="return visitor()">
                    <div class="h3 text-center"><u>Visitor Form</u></div>
                    <label for="">Name:</label>
                    <input type="text" id="clueless" name="clueless"> <br /> <br />
                    <label for="">Destination:</label>

                    <!--this code below is for the dropdown menu-->
                    <select name="looking" id="looking">
                        <option value="Administration Block">Administration Block</option>
                        <option value="Hotel and Conference">Hotel and Conference</option>
                        <option value="Hostels">Hostels</option>
                        <option value="Stadia">Stadia</option>
                    </select> <br /> <br />
                    <!--the value content is what is used in the php scripts.-->
                    <!--it ends here-->

                    <label for="">Laptop Model:</label>
                    <input type="text" id="nervous" name="nervous" placeholder="Manufacturer's Name"> <br /> <br />
                    <label>Serial Number:</label>
                    <input type="text" id="thanks" name="thanks"> <br /> <br />
                    <input type="submit" value="submit" id = "ClickMe" name="ClickMe_four">
                </Form>
            </div>
        </div>
    </div>

    <!--this is the footer-->
    <div class="footer h3 text-center">
        Copyright &copy; 2018. ESS
    </div>

</body>

</html>