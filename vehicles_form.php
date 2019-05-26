<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicles Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        form {
            border: 2px solid black;
            padding: 8px;
            border-radius: 5px;
            width: 45%;
        }
    </style>
    <script>
        //this js code is for the lecturer form validation
        function gari() {
            var name = document.getElementById('brand').value;
            var course = document.getElementById('bumper').value;
            var modeli = document.getElementById('make').value;
            var serial_number = document.getElementById('gonga').value;

            if (name == '' || course == '' || modeli == '' || serial_number == '') {
                alert('Please Enter Real Values then Submit');
                return false;
            } else if (name.length < 3) {
                alert('Name must be atleast 4 characters');
                return false;
            } else if (course.length < 3) {
                alert('Course must be atleast 4 characters');
                return false;
            } else if (modeli.length < 2) {
                alert('Model must be atleast 2 characters');
                return false;
            } else if (serial_number.length < 3) {
                alert('Serial Number must be atleast 4 characters');
                return false;
            } else {
                return true;
            }
        };
    </script>
</head>

<body>

    <!--this is the navigation bar-->
    <div class="container">
        <nav class="navbar navbar-dark fixed-top navbar-expand-md bg-dark">
            <button type="button" class="nav-toggler" data-toggle="collapse" data-target="#myNav"><span
                    class="navbar-toggler-icon"></span></button>
            <div id="myNav" class="collapse navbar-collapse">
                <div class="h3 text-primary ml-5">Eshiwani Security Systems(ESS)</div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link h6">Home</a></li>
                    <li class="nav-item"><a href="Registration.php" class="nav-link h6">Registration</a></li>
                    <li class="nav-item"><a href="laptop_form.php" class="nav-link h6">Laptops</a></li>
                    <li class="nav-item"><a href="vehicles_form.php" class="nav-link h6">Vehicles</a></li>
                    <li class="nav-item"><a href="mobile_form.php" class="nav-link h6">Mobile</a></li>
                </ul>
            </div>
        </nav>
    </div><br />


    <!--this code is for the vehicles table-->
    <div class="jumbotron">
        <Form method="POST" action="php_scripts/vehicle.php" id="gari" onsubmit="return gari()">
            <div class="h3 text-center"><u>Vehicles Registration Form</u></div>
            <label for="">Name:</label>
            <input type="text" id="brand" name="brand"> <br /> <br />
            <label for="">ID Number:</label>
            <input type="text" id="bumper" name="bumper"> <br /> <br />
            <label for="">Vehicle Model:</label>
            <input type="text" id="make" name="make" placeholder="Manufacturer's Name"> <br /> <br />
            <label>Plate Number:</label>
            <input type="text" id="gonga" name="gonga"> <br /> <br />
            <input type="submit" value="submit" id="ClickMe_six" name="ClickMe_six" class="btn-primary">
        </Form>
    </div>

    <a href="index.html" class="h6 text-left text-primary">Back to Homepage</a>

    <!--this is the footer-->
    <div class="footer h5 text-center">
        ESS Terms and Condition | Privacy Policy | &copy 2019. ESS
    </div>
</body>

</html>