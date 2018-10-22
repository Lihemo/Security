<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
</head>

<body>

    <hr />
    <h1>Tenzy University College<em>(TUC)</em></h1>
    <hr />

    <nav>
        <ul>
            <li> <a href="index.php" title="This is the HomePage"> Homepage</a> </li>
            <li> <a href="Registration.php" title="This is the Sign in Page"> RegisterPage</a> </li>
            <li> <a href="http://www.Google.com" title="Google.com"> Google.com</a> </li>
            <li> <a href="http://www.YouTube.com" title="YouTube.com"> YouTube.com</a> </li>
        </ul>
    </nav>

    <fieldset>
            <caption><b>ENTER RESPECTIVE DETAILS HERE</b></caption><br />
            <hr color="black" cover="100%" />

        <!--this code is for students display data-->
        <form method="POST" action="display_php/student_display.php" onsubmit="return substitute1 ()">
            <label for="">Student's Name:</label>
            <input type="text" name="studentdisplay" id="mytextbox1" placeholder="Enter Name"> <br /> <br />
            <input type="submit" value="submit" id="ClickMe" name="ClickMe"><br/>
        </form>

        <!--this code is for displaying lecturers data-->
        <form method="POST" action="display_php/lecturer_display.php" onsubmit="return substitute2 ()">
            <label for="">Lecturer's Name:</label>
            <input type="text" name="lecturerdisplay" id="mytextbox2" placeholder="Enter Name"> <br /> <br />
            <input type="submit" value="submit" id="ClickMe" name="ClickMe"><br/>
        </form>

        <!--This code is for displaying staff data-->
        <form method="POST" action="display_php/staff_display.php" onsubmit="return substitute3 ()">
            <label for="">Staff Name:</label>
            <input type="text" name="staffdisplay" id="mytextbox3" placeholder="Enter Name"> <br /> <br />
            <input type="submit" value="submit" id="ClickMe" name="ClickMe"><br/>
        </form>

        <!--This code is for displaying visitors data-->
        <form method="POST" action="display_php/visitors_display.php" onsubmit="return substitute4 ()">
            <label for="">Visitor's Name:</label>
            <input type="text" name="visitorsdisplay" id="mytextbox4" placeholder="Enter Name"> <br /> <br />
            <input type="submit" value="submit" id="ClickMe" name="ClickMe"><br/>
        </form>
    </fieldset>
    <marquee>Security Starts with YOU!</marquee>

    <h3>Copyright &copy; 2018. All rigths reserved</h3>

</body>

</html>
