<!DOCTYPE html>
<html lang="en">
<head>
<title>SAS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  margin:0 auto;
}

body {
    background-color: LightGray;
  margin: 10;
}

.header {
  background-color: DodgerBlue;
  padding: 10px;
  text-align: center;
}

.topnav {
  overflow: hidden;
  background-color: SlateBlue;
}


.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 25px;
  text-decoration: none;
}

.topnav a:hover {
  background-color: DodgerBlue;
  color: black;
}



.column {
   
  float: left;
  padding: 30px;
   text-align: center;
}

.column.left-side {
  width: 50%;
}

.column.right-side {
  width: 50%;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column.right-side, .column.left-side,  {
  
    width: 100%;
  }
}
</style>
</head>
<body>

<?php 
include_once('connection.php'); 
?>
<div class="header">
   <h1>School Automation System</h1>
  <p> </p>
</div>

<div class="topnav">
  <a href="Home.php">Home</a>
  <a href="About.php">About</a>
  <a href="Service.php">Service </a>
  <a href="Contact.php">Contact</a>
  <a href="single_edit.php">Edit</a>
  <a href="search.php">search</a>
  <a href="login.php">Login</a>
  <a href="logout.php">Logout</a>

 
 </div>
<div class="dropdown-content">
    <botton><a href="Student.php">Student</a> </botton>  
    <botton><a href="Result.php">Result</a> </botton>  
    <botton><a href="Teacher.php">Teacher</a> </botton>  
      
    </div>
    
<div class="row">
  <div class="column left-side">
    <h2> information</h2>
    <p>•	Academy Management - Manage Session , Terms, Subjects, Classes.<br>
•	Student Management -  Add Student , Bulk Add Student,  Fees Details Check , View Profile.<br>
•	Fees Management -  Add Fees , Delete Fees, Pay fee , Fees Structure , customize fee Structure.<br>
•	Result Management -  Add Result , Edit Result , Manage Result.<br>
•	Employee Management - Add Employee, Edit Employee, View Employee.<br>
So the motivation for our project came from that it has been made for that purpose,<br> 
and for trying hardly to achieve all the goals.

	</p>
	</div>
	
	<div class="column right-side">
    <h2> </h2>
    <p></p>
	<img src="pic.jpg" alt=" pic">
  </div>
  </div>
  
  
  
 
  
  
  
</body>
</html>