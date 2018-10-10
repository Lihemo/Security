<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="registration.css" />
    <script src="registration.js"></script>
</head>
<body>
   <h1>Registration Forms</h1>

   <nav>
        <ul>
            <li> <a href="index.php" title="This is the HomePage"> Homepage</a> </li>
            <li> <a href="Registration.php" title="This is the Sign in Page"> RegisterPage</a> </li>
            <li> <a href="http://www.Google.com" title="Google.com"> Google.com</a> </li>
            <li> <a href="http://www.YouTube.com" title="YouTube.com"> YouTube</a> </li>  
        </ul>
    </nav>

<!--this code is for the students table-->
    <Form method="POST" action="php_scripts/student.php" id="student" onsubmit="return student ()">
                <h2>Student Registration Form</h2>
            <label>Name:</label>
            <input type="text" id = "jina" name="jina" > <br /> <br />
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
            <input type="text" id = "model" name="model" placeholder="Manufacturer's Name" > <br /> <br />
            <label>Serial Number:</label>
            <input type="text" id = "serial" name="serial"> <br /> <br />

            <input type="submit" value="submit" name="ClickMe_one" id = "ClickMe" name="ClickMe_one">
    
    </Form>


<!--this code is for the lecturer table-->
    <Form method="POST" action="php_scripts/lecturer.php" id ="lecturer" onsubmit="return lecturer ()">
                <h2>Lecturer Registration Form</h2>
            <label>Name:</label>
            <input type="text" id = "car" name="car" > <br /> <br />
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
            <input type="text" id = "old" name="old" placeholder="Manufacturer's Name" > <br /> <br />
            <label>Serial Number:</label>
            <input type="text" id = "gender" name="gender"> <br /> <br />

            <input type="submit" value="submit" id = "ClickMe" name="ClickMe_two"> 
        
    </Form>


<!--this code is for the staff table-->
    <Form method="POST" action="php_scripts/staff.php" id="staff"onsubmit="return staff ()">
                <h2>Staff Registration Form</h2>
            <label for="">Name:</label>
            <input type="text" id = "dart" name="dart" > <br /> <br />
            <label for="">Department:</label>

            <!--this code below is for the dropdown menu-->
            <select name="shade" id="shade">
                <option value="Estates">Estates</option>
                <option value="Cleaning">Cleaning</option>
                <option value="Hotel and Accomodation">Hotel and Accomodation</option>
                <option value="Transport">Transport</option> 
            </select> <br /> <br />
            <!--it ends here--> 

            <label >Laptop Model:</label>
            <input type="text" id = "bet" name="bet" placeholder="Manufacturer's Name" > <br /> <br />
            <label>Serial Number:</label>
            <input type="text" id = "polite" name="polite"> <br /> <br />
        
            <input type="submit" value="submit" id = "ClickMe" name="ClickMe_three">
        
    </Form>


<!--this code is for the visitor table-->
    <Form method ="POST" action="php_scripts/visitor.php" id="visitor" onsubmit="return visitor()">
                <h2>Visitor Registration Form</h2>
            <label for="">Name:</label>
            <input type="text" id = "clueless" name="clueless" > <br /> <br />
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
            <input type="text" id = "nervous" name="nervous" placeholder="Manufacturer's Name" > <br /> <br />
            <label>Serial Number:</label>
            <input type="text" id = "thanks" name="thanks"> <br /> <br />
            
            <input type="submit" value="submit" id = "ClickMe" name="ClickMe_four">
    </Form>
    

   <h3 id= "footer">Copyright &copy; 2018. All rigths reserved</h3> 

</body>
</html>