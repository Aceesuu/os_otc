<!DOCTYPE html>
<head>
<title>Updated Record
</title>

<link rel="stylesheet" type="text/css" href="css/viewuser1.css" />
<header>
<h1>UPDATED QUESTIONS</h1>
</header>
</head>
<?php
include('mysql_connect.php');
if (isset($_POST['update']))
{
$qs = $_POST['qs'];
$id = $_POST['ques_id'];

$query = "SELECT * FROM TBOdetoCodeQues";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row){
$query = mysqli_query($conn,"UPDATE TBOdetoCodeQues SET Questions='$qs' WHERE QuesId='$id'");
echo "<br><center><h2>The question has been updated.</h2>";
}
}
?>
<a href = "admin_updateques.php">UPDATE QUESTIONS</a>
<br><br><a href="admin_dashboard.php">ADMIN DASHBOARD</a>