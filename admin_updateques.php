<!DOCTYPE html>
<head>
<title>UPDATE QUESTIONS
</title>

<link rel="stylesheet" type="text/css" href="css/viewuser1.css" />
<header>
<h1>UPDATE QUESTIONS</h1>
</header>
</head>

<center>
<form method='POST'>
<h1>Question ID: <input type="text" name="QuesId" size=20 maxlength=40 /></h1>
<p><input type='submit' name='search' value='Search' class="dashbtn" /></p>
</form>

<?php
include('mysql_connect.php');
if (isset($_POST['search'])) {
$id = $_POST['QuesId'];
$query = "SELECT QuesId, Questions FROM TBOdetoCodeQues WHERE QuesId='$id'";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if ($row)  {
echo "<form action='admin_updatedques.php' method='post'>";
echo "<h2>Question ID  : " . "<input type=hidden name=ques_id value='$row[0]'>$row[0]" . "<br>"; 
echo "<h2>Questions : " . "<input type=text name=qs value='$row[1]'> <br>";
echo "<p><input type='submit' name='update' value='Update' class='dashbtn' /></p></form>";
}
else
echo "<h2>Question ID is INVALID</h2>";  }  
?>