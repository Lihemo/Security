
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

    <form action="POST" method="php_scripts/display.php" onsubmit= "return substitute ()">
        <caption><b>ENTER RESPECTIVE DETAILS HERE</b></caption><br />
        <hr / color="black" cover="100%">
        <label for="">Name:</label>
        <input type="text" name="Username" id="mytextbox" placeholder="Enter Name" name="mytextbox"> <br /> <br />
        <input type="submit" value="submit" id = "ClickMe" name= "ClickMe">
    </form>

    <marquee>Security Starts with YOU!</marquee> 

    <h3>Copyright &copy; 2018. All rigths reserved</h3>

</body>
</html>