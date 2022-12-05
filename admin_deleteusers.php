<!DOCTYPE html>
<head>
<title>STUDENT INFORMATION LIST
</title>
<link rel="stylesheet" type="text/css" href="css/delete1.css" />
</head>

<header>
<h1>DELETE RECORDS</h1>
</header>

<body>
<div class="center">
<br> <div class="container">

<center><h1> 
 <form method="POST"> 
 <br> Confirm Deletion: Are you sure? <br> 
  <input type=radio name=ConfirmDelete value="Yes">Yes 
  <input type=radio name=ConfirmDelete value="No">No 
  <br><br> 
  <input type=submit value=CONFIRM class="confirmbtn" name="btnConfirm">  
 </form> 
 </h1></center>  
<?php 
include 'mysql_connect.php';
if (isset($_POST['btnConfirm'])) 
{
  if($_POST['ConfirmDelete']=="No") 
  echo "<center><h1><br>No deletion were made. <br></h1></center>"; 
else if($_POST['ConfirmDelete']=="Yes") 
{ 
  $UserId=$_GET['deleteid']; 
  $username ="root"; 
  $password=""; 
  $database="oqsodetocode"; 
  $conn = mysqli_connect("localhost",$username,$password); 
  mysqli_select_db($conn, $database) or die ("Unable to select database"); 
  $query="DELETE FROM tbodetocode_users WHERE user_id={$_GET['deleteid']}"; 
  $result=mysqli_query($conn, $query); 
  mysqli_close($conn); 
  echo "<center>"; 
  echo "<h1>Successfully Deleted!</h1>"; 
 } 
 else 
  echo "<center><h1><br><br>Please choose Yes or No.<br><br></h1></center>"; 
} 
?>   
<button class="confirmbtn" onclick="document.location='admin_viewusers.php'">BACK TO VIEW INFORMATION</button> <br> <br>
</div>
</body> 