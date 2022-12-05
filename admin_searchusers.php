<!DOCTYPE html>
<head>
<title>SEARCH USERS
</title>
<link rel="stylesheet" type="text/css" href="css/viewuser1.css" />
<header>
<h1>SEARCH USERS</h1>
</header>

</head>
<center>
<form action='admin_searchusers.php' method='post'>
<h1><b>USER ID: <input type="text" name="user_id" size=25 maxlength=2 /></h1><b>
<p><input type='submit' name='search' value='Search' class="dashbtn" /></p><br>
<?php

if (isset($_POST['user_id'])) {
include('mysql_connect.php');
$id = $_POST['user_id'];
$query = "SELECT user_id, lastName, firstName, middleName, course, year_level, subject, section, address, contact FROM tbodetocode_users WHERE user_id='$id' ";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if ($row) {
echo "User ID:" .$row[0] . "<br>";
echo "Last Name: " . $row[1] .  "<br>";
echo "First Name: " . $row[2] .  "<br>";
echo "Middle Name: " . $row[3] .  "<br>";
echo "Course: " . $row[4] .  "<br>";
echo "Year Level: " . $row[5] .  "<br>";
echo "Subject: " . $row[6] .  "<br>";
echo "Section: " . $row[7] .  "<br>";
echo "Email Address: " . $row[8] .  "<br>";
echo "Contact No. " . $row[9] .  "<br>";

}
else
echo "<h2>USER ID does not exist!</h2>";
}

?>
<br><br><a href="admin_dashboard.php">ADMIN DASHBOARD</a>
</form>
</html>


