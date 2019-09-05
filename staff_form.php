<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Form</title>
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
        function sitafu() {
            var manhole = document.getElementById('car').value;
            var drill = document.getElementById('chair').value;
            var trunking = document.getElementById('old').value;
            var sumbua = document.getElementById('gender').value;

            if (manhole == '' || drill == '' || trunking == '' || sumbua == '') {
                alert('Please Enter Real Values then Submit');
                return false;
            } else if (manhole.length < 3) {
                alert('Name must be atleast 4 characters');
                return false;
            } else if (drill.length < 3) {
                alert('Course must be atleast 4 characters');
                return false;
            } else if (trunking.length < 2) {
                alert('Model must be atleast 2 characters');
                return false;
            } else if (sumbua.length < 3) {
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
                    <li class="nav-item"><a href="index.html" class="nav-link h6">Home</a></li>
                    <li class="nav-item"><a href="Registration.php" class="nav-link h6">Registration</a></li>
                    <li class="nav-item"><a href="laptop_form.php" class="nav-link h6">Laptops</a></li>
                    <li class="nav-item"><a href="vehicles_form.php" class="nav-link h6">Vehicles</a></li>
                    <li class="nav-item"><a href="mobile_form.php" class="nav-link h6">Mobile</a></li>
                </ul>
            </div>
        </nav>
    </div><br />


    <div class="jumbotron col">
        <!--this code is for the lecturer table-->
        <Form method="POST" action="php_scripts/staff.php" onsubmit="return sitafu ()">
            <div class="h3 text-center"><u>Staff Form</u></div>
            <label>Name:</label>
            <input type="text" id="car" name="car"> <br /> <br />
            <label for="">Department:</label>

            <!--this code below is for the dropdown menu-->
            <select name="chair" id="chair">
                <option value="Department of Securtiy">Department of Securtiy</option>
                <option value="Department of Cleaning">Department of Cleaning</option>
                <option value="Department of Finance">Department of Finance</option>
                <option value="Department of Admission">Department of Admission</option>
            </select> <br /> <br />
            <!--it ends here-->

            <label for="">Laptop Model:</label>
            <input type="text" id="old" name="old" placeholder="Manufacturer's Name"> <br /> <br />
            <label>Serial Number:</label>
            <input type="text" id="gender" name="gender"> <br /> <br />
            <input type="submit" value="submit" id="ClickMe_two" name="ClickMe_two" class="btn-primary">
        </Form>
    </div>

    <a href="index.php" class="h6 text-left text-primary">Back to Homepage</a>

    <!--this is the footer-->
    <div class="footer h5 text-center">
        ESS Terms and Condition | Privacy Policy | &copy 2019. ESS
    </div>
</body>

</html>