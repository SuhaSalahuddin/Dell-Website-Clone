<?php
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->

    <!-- JavaScript -->
    <script src="https://www.gstatic.com/firebasejs/5.5.2/firebase.js"></script>
    <script src="index.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="indexcss.css">
    <link rel="stylesheet" href="logincss.css">
    <style>
        .color{
            color: white;    
        }
        .color:hover{
            color: #fff;
        }
    </style>

    <title>Control Panel | Dell Pakistan</title>

</head>

<body>
    <!-- Header -->
    <header>
        <div>
            <a href="index.html"><img src="images/dellEmc_logo.png" alt="DellEmc_Logo" width="180" height="30"></a>
        </div>
        <h2 style='color:white; text-align:center; font-weight: bold;'>Admin Panel - Asynchronous Replication</h2>
    </header>

<form action="insert.php" method="POST">
    <div style='margin-left:100px;'>
        <br/> <br>

        <!-- Form 1 -->
        <h3 style='color:red;'>Insert</h3>
        <br/>
        <input type="text" name="EmployeeName" PlaceHolder="Employee Name" autocomplete="off" style="font-size: 18pt; height: 30px;"/>
        <br/><br/>
        <input type="text" name="EmployeeDesignition" PlaceHolder="Employee Designition" autocomplete="off"  style="font-size: 18pt; height: 30px;"/>
        <br/><br/><br/><br/>
        
        <input type="radio" name="CountryEmp" value="Pakistan"><span style='font-size:20px;'>Pakistan</span><br>
        <input type="radio" name="Country" value="Canada"><span style='font-size:20px;'>Canada</span><br>

        <input type="reset" value="Reset"/>
        <input type="Submit" value="Submit" name="Employee"/>

    </div>
    <!-- Form 2 -->
    <div style='margin-left:520px; margin-top:-340px;'>
        <br/>
        <h3 style='color:red;'>Update</h3>
        <br/>
        <input type="text" name="EmployeeName" PlaceHolder="Employee Name" autocomplete="off" style="font-size: 18pt; height: 30px;"/>
        <br/><br/>
        <input type="text" name="EmployeeDesignition" PlaceHolder="Employee Designition" autocomplete="off"  style="font-size: 18pt; height: 30px;"/>
        <br/><br/><br/><br/>
        
        <input type="radio" name="CountryEmp" value="Pakistan"><span style='font-size:20px;'>Pakistan</span><br>
        <input type="radio" name="Country" value="Canada"><span style='font-size:20px;'>Canada</span><br>

        <input type="reset" value="Reset"/>
        <input type="Submit" value="Update" name="Employee"/>
    </div>

    <!-- Form 3 -->
    <div style='margin-left:990px; margin-top:-320px;'>
        
        <h3 style='color:red;'>Delete</h3>
        <br/>
        <input type="text" name="EmployeeName" PlaceHolder="Employee Name" autocomplete="off" style="font-size: 18pt; height: 30px;"/>
        <br><br><br><br>
        <input type="radio" name="CountryEmp" value="Pakistan"><span style='font-size:20px;'>Pakistan</span><br>
        <input type="radio" name="Country" value="Canada"><span style='font-size:20px;'>Canada</span><br>
        

        <input type="reset" value="Reset"/>
        <input type="Submit" value="Delete" name="Employee"/>
        <br><br><br><br><br>
    </div>
</form>
<br>
<!-- Poster -->
<p style="text-align: center;"><img src="images/dellEmc.jpg" alt="EMC" height="300" width="1200" class="poster" ></p>

<!-- Footer -->
<div class="container-fluid text-center footer" style="margin-bottom:0">
    <div class="row footer1">
        <li><a href="#" class="d-inline-block color1">About Dell</a></li>
        <li><a href="#" class="d-inline-block color1">Community</a></li>
        <li><a href="#" class="d-inline-block color1">Events</a></li>
        <li><a href="#" class="d-inline-block color1">Partner Program</a></li>
        <li><a href="#" class="d-inline-block color1">Premier</a></li>
        <li><a href="#" class="d-inline-block color1">Dell Technologies</a></li>
    </div>
    <div class="row footer2">
        <li><a href="#" class="d-inline-block color">&copy; 2018 DELL</a></li>
        <li><a href="#" class="d-inline-block color">Legal & Regulatory</a></li>
        <li><a href="#" class="d-inline-block color">Site Terms</a></li>
        <li><a href="#" class="d-inline-block color">Terms Of  Sale</a></li>
        <li><a href="#" class="d-inline-block color">Unresolved Issues</a></li>
        <li><a href="#" class="d-inline-block color">Privacy Statement</a></li>
        <li><a href="#" class="d-inline-block color">Contact a Reseller</a></li>
        <li><a href="#" class="d-inline-block color">Feedback</a></li>
    </div>
</div>

<?php
$countryVal = $_POST["Country"];
if(isset($_POST['Customer']) && $countryVal == "Pakistan")
{
//connection for site 1	
$servername1 = "192.168.1.105";
$username1 = "Suha";
$password1 = "1234";
$dbname1 = "site 1";

$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);

$CustomerName=$_POST['CustomerName'];
$CustomerPhone=$_POST['CustomerPhone'];
$CustomerAddress=$_POST['CustomerAddress'];

$sql1 = "INSERT INTO Customer (Name,Phone,Address)
VALUES ('$CustomerName','$CustomerPhone','$CustomerAddress')";

if ($conn1->query($sql1) === TRUE) {
    echo "New record inserted successfully in site 1\n";

}
else {
    echo "Error: " . $sql1 . "<br>" . $conn1->error;
}


////second connection
//connection for head quarter	
$servername2 = "localhost";
$username2 = "root";
$password2 = "";
$dbname2 = "headquarter";

$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

$CustomerName=$_POST['CustomerName'];
$CustomerPhone=$_POST['CustomerPhone'];
$CustomerAddress=$_POST['CustomerAddress'];

$sql2 = "INSERT INTO customer (Name,Phone,Address)
VALUES ('$CustomerName','$CustomerPhone','$CustomerAddress')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record inserted successfully in site head quarter  ";

}
}


if(isset($_POST['Customer']) && $countryVal == "Canada")
{
//connection for site 2	
$servername3 = "192.168.1.116";
$username3 = "Mehwish";
$password3 = "12345";
$dbname3 = "site 2";

$conn3 = new mysqli($servername3, $username3, $password3, $dbname3);

$CustomerName=$_POST['CustomerName'];
$CustomerPhone=$_POST['CustomerPhone'];
$CustomerAddress=$_POST['CustomerAddress'];

$sql3 = "INSERT INTO customer (Name,Phone,Address)
VALUES ('$CustomerName','$CustomerPhone','$CustomerAddress')";

if ($conn3->query($sql3) === TRUE) {
    echo "New record inserted successfully in site 2\n";

}
else {
    echo "Error: " . $sql3 . "<br>" . $conn3->error;
}


////second connection
//connection for head quarter	
$servername2 = "localhost";
$username2 = "root";
$password2 = "";
$dbname2 = "headquarter";

$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

$CustomerName=$_POST['CustomerName'];
$CustomerPhone=$_POST['CustomerPhone'];
$CustomerAddress=$_POST['CustomerAddress'];

$sql2 = "INSERT INTO customer (Name,Phone,Address)
VALUES ('$CustomerName','$CustomerPhone','$CustomerAddress')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record inserted successfully in site head quarter\n";

}
}
?>


<?php
$countryValPro = $_POST["CountryPro"];
if(isset($_POST['Product']) && $countryValPro == "Pakistan")
{
//connection for site 1	
$servername1 = "192.168.1.105";
$username1 = "Suha";
$password1 = "1234";
$dbname1 = "site 1";

$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);

$ProductName=$_POST['ProductName'];
$ProductQuantity=$_POST['ProductQuantity'];


$sql1 = "INSERT INTO products (Name,Quantity)
VALUES ('$ProductName','$ProductQuantity')";

if ($conn1->query($sql1) === TRUE) {
    echo "New record inserted successfully in site 1 for product\n";

}
else {
    echo "Error: " . $sql1 . "<br>" . $conn1->error;
}


////second connection
//connection for head quarter	
$servername2 = "localhost";
$username2 = "root";
$password2 = "";
$dbname2 = "headquarter";

$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

$ProductName=$_POST['ProductName'];
$ProductQuantity=$_POST['ProductQuantity'];


$sql2 = "INSERT INTO products (Name,Quantity)
VALUES ('$ProductName','$ProductQuantity')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record inserted successfully in head quarter for product\n";

}
}
?>


<?php
$countryValPro = $_POST["CountryPro"];
if(isset($_POST['Product']) && $countryValPro == "Canada")
{
//connection for site 2	
$servername3 = "192.168.1.116";
$username3 = "Mehwish";
$password3 = "12345";
$dbname3 = "site 2";

$conn3 = new mysqli($servername3, $username3, $password3, $dbname3);

$ProductName=$_POST['ProductName'];
$ProductQuantity=$_POST['ProductQuantity'];


$sql3 = "INSERT INTO products (Name,Quantity)
VALUES ('$ProductName','$ProductQuantity')";

if ($conn3->query($sql3) === TRUE) {
    echo "New record inserted successfully in site 2 for product\n";

}
else {
    echo "Error: " . $sql3 . "<br>" . $conn3->error;
}


////second connection
//connection for head quarter	
$servername2 = "localhost";
$username2 = "root";
$password2 = "";
$dbname2 = "headquarter";

$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

$ProductName=$_POST['ProductName'];
$ProductQuantity=$_POST['ProductQuantity'];


$sql2 = "INSERT INTO products (Name,Quantity)
VALUES ('$ProductName','$ProductQuantity')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record inserted successfully in head quarter for product\n";

}
}
?>

<?php
$countryValEmp = $_POST["CountryEmp"];
if(isset($_POST['Employee']) && $countryValEmp == "Pakistan")
{
//connection for site 1	
$servername1 = "192.168.1.105";
$username1 = "Suha";
$password1 = "1234";
$dbname1 = "site 1";

$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);

$EmpName=$_POST['EmployeeName'];
$EmpDesignition=$_POST['EmployeeDesignition'];


$sql1 = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignition')";

if ($conn1->query($sql1) === TRUE) {
    echo "New record inserted successfully in site 1 for employee\n";

}
else {
    echo "Error: " . $sql1 . "<br>" . $conn1->error;
}


////second connection
//connection for head quarter	
$servername2 = "localhost";
$username2 = "root";
$password2 = "";
$dbname2 = "headquarter";

$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

$EmpName=$_POST['EmployeeName'];
$EmpDesignition=$_POST['EmployeeDesignition'];


$sql2 = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignition')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record inserted successfully in head quarter for employee\n";

}


////third connection
//connection for site 2	
$servername3 = "192.168.1.116";
$username3 = "Mehwish";
$password3 = "12345";
$dbname3 = "site 2";

$conn3 = new mysqli($servername3, $username3, $password3, $dbname3);

$EmpName=$_POST['EmployeeName'];
$EmpDesignation=$_POST['EmployeeDesignition'];


$sql3 = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignation')";

if ($conn3->query($sql3) === TRUE) {
    echo "New record inserted successfully in site 2 for employee\n";

}

}
?>

<?php
$countryValEmp = $_POST["Country"];
if(isset($_POST['Employee']) && $countryVal == "Canada")
{
//connection for site 2	
$servername3 = "192.168.1.116";
$username3 = "Mehwish";
$password3 = "12345";
$dbname3 = "site 2";

$conn3 = new mysqli($servername3, $username3, $password3, $dbname3);

$EmpName=$_POST['EmployeeName'];
$EmpDesignation=$_POST['EmployeeDesignition'];


$sql3 = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignation')";

if ($conn3->query($sql3) === TRUE) {
    echo "New record inserted successfully in site 2 for employee\n";

}
else {
    echo "Error: " . $sql3 . "<br>" . $conn3->error;
}

//connection for head quarter	
$servername2 = "localhost";
$username2 = "root";
$password2 = "";
$dbname2 = "headquarter";

$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

$EmpName=$_POST['EmployeeName'];
$EmpDesignation=$_POST['EmployeeDesignition'];


$sql2 = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignation')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record inserted successfully in head quarter for employee\n";

}
}
?>

</body>	
</html>