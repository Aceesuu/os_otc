<!DOCTYPE html>
<head>
<title>QUESTIONS
</title>
<link rel="stylesheet" type="text/css" href="css/viewuser1.css" />

<header>
<h1>DELETE QUESTIONS</h1>
</header>
</head>
<center>

<form method='post'>
<h1><b>Question ID: <input type="text" name="QuesId" size=25 maxlength=2 /></h1><b>
<p><input type='submit' name='search' value='Search' class="dashbtn" /></p>
</form>
<?php

if (isset($_POST['QuesId'])) {
include('mysql_connect.php');
    $id = $_POST['QuesId'];
    $query = "SELECT QuesId, Questions FROM TBOdetoCodeQues WHERE QuesId='$id' ";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if ($row) {
echo "<h2>Question: <h2>" . $row[1] .  "<br>";
echo "<form action='admin_deletedques.php' method='post'>
<br><h3>Confirm Deletion:  Are you sure?</h3>

<h4><input type=hidden name='QuesId' value='$_POST[QuesId]'</h4>

<input type=radio name='ans' value='Yes'>YES
<input type=radio name='ans' value='No'>NO <br><br>
<p><input type='submit' name='delete' value='Delete' class='dashbtn' /></p> </form>";
}
else
echo "No record found..."; }   
?>