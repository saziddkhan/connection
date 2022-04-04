<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
<form>
<ul class="form-style-1">
    <li><label>Full Name <span class="required">*</span></label>
    <input type="text" name="firstname" class="field-divided" placeholder="First" /> <input type="text" name="lastname" class="field-divided" placeholder="Last" /></li>
    <li>
        <label>Email <span class="required">*</span></label>
        <input type="email" name="email" class="field-long" />
    </li>
   
    
    <li>
        <input type="submit" value="Submit" name="submit" />
    </li>
</ul>
</form>
</body>
</html>







<?php 
error_reporting(0);

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "demo";
 
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 if ($conn) {
    
   
}



$rn=$_GET['firstname'];
$ln=$_GET['lastname'];
$em=$_GET['email'];

$query = "INSERT INTO DEMO_DATA VALUES('$rn','$ln','$em')";
$data = mysqli_query($conn,$query);

if ($data) {
    echo "data inserted";
}



 ?> 