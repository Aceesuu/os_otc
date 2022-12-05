<!DOCTYPE html>
<head>
<title>DELETED QUESTIONS
</title>
<link rel="stylesheet" type="text/css" href="css/viewuser1.css" />

<header>
<h1>DELETED QUESTIONS</h1>
</header>
</head>
<center>

<?php
if (isset($_POST['delete']))
{
if ($_POST['ans']=="Yes")
{
include('mysql_connect.php');
$id = $_POST['QuesId'];
$query = "Select * FROM TBOdetoCodeQues";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row)
{
$query = "DELETE FROM TBOdetoCodeQues WHERE QuesId='$id'";
mysqli_query($conn, $query);
echo "<center><h2>Record has been deleted!</h2></center>";
}
}
else
echo "<center><h2>No deletion were made.</h2></center>";
}
?>
<br><br><a href="admin_deleteques.php">DELETE RECORD</a>
<br><br><a href="admin_dashboard.php">ADMIN DASHBOARD</a>