<!DOCTYPE html>
<head>
<title>QUESTIONS
</title>
<link rel="stylesheet" type="text/css" href="css/viewuser1.css" />
<header>
<h1>SEARCH QUESTIONS</h1>
</header>
</head>

<center>
<form action='admin_searchques.php' method='post'>
<h1><b>Question ID: <input type="text" name="QuesId" size=25 maxlength=40 /></h1><b>
<p><input type='submit' name='search' value='Search' class="dashbtn" /></p>

<?php
if (isset($_POST['QuesId'])) {
include('mysql_connect.php');
$id = $_POST['QuesId'];
$query = "SELECT QuesId, Questions FROM TBOdetoCodeQues WHERE QuesId='$id' ";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row) {
echo "<h2> Question ID : " . $row[0] . "<br>";
echo "Question : " . $row[1] .  "<br>";
}
else
echo "<h2>Question ID does not exist!</h2>";

}
?>
<br><br><a href="admin_dashboard.php">ADMIN DASHBOARD</a>
</form>
</html>