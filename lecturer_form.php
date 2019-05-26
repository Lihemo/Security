<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lecturer Form</title>
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
        function lecturer() {
            var name = document.getElementById('clueless').value;
            var course = document.getElementById('kiti').value;
            var modeli = document.getElementById('uzee').value;
            var serial_number = document.getElementById('jinsia').value;

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
                    <li class="nav-item"><a href="laptops_form.php" class="nav-link h6">Laptops</a>
                    </li>
                    <li class="nav-item"><a href="vehicles_form.php" class="nav-link h6">Vehicles</a></li>
                    <li class="nav-item"><a href="mobile_form.php" class="nav-link h6">Mobile</a></li>
                </ul>
            </div>
        </nav>
    </div><br />


    <!--this code is for the visitor table-->
    <div class="jumbotron col">
        <Form method="POST" action="php_scripts/lecturer.php" onsubmit="return lecturer()">
            <div class="h3 text-center"><u>Lecturer Form</u></div>
            <label for="">Name:</label>
            <input type="text" id="clueless" name="clueless"> <br /> <br />
            <label for="">Faculty:</label>

            <!--this code below is for the dropdown menu-->
            <select name="kiti" id="kiti">
                <option value="Faculty of IT and Computing">Faculty of IT and Computing</option>
                <option value="Faculty of Applied Sciences">Faculty of Applied Sciences</option>
                <option value="Faculty of Agriculture">Faculty of Agriculture</option>
                <option value="Faculty of Engineering">Faculty of Engineering</option>
            </select> <br /> <br />
            <!--it ends here-->

            <label for="">Laptop Model:</label>
            <input type="text" id="uzee" name="uzee" placeholder="Manufacturer's Name"> <br /> <br />
            <label>Serial Number:</label>
            <input type="text" id="jinsia" name="jinsia"> <br /> <br />
            <input type="submit" value="submit" id="ClickMe_four" name="ClickMe_four" class="btn-primary">
        </Form>
    </div>

    <a href="index.html" class="h6 text-left text-primary">Back to Homepage</a>

    <!--this is the footer-->
    <div class="footer h5 text-center">
        ESS Terms and Condition | Privacy Policy | &copy 2019. ESS
    </div>

</body>

</html>