<!DOCTYPE html>
    <head>
<title>Update</title>
</head>
<link rel="stylesheet" type="text/css" href="css/update1.css"/><!-- connected sa CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">

<body>
<div class="center">
</div>
<?php
echo "<h2 align = center style>UPDATE USER INFORMATION</h2>";

include('mysql_connect.php'); //connection sa mysql

$UserId=$_GET['updateid'];
$query= "SELECT * FROM tbodetocode_users WHERE user_id='$UserId'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
            $last = $row['lastName']; 
            $first = $row['firstName']; 
            $middle = $row['middleName']; 
            $course = $row['course']; 
            $yrlvl = $row['year_level']; 
            $sbjt = $row['subject']; 
            $sec = $row['section']; 
            $add = $row['address']; 
            $cont = $row['contact']; 

    if (isset($_POST['submit'])) {

            //check if the form has been submitted
        $ln = $_POST['LastName']; //galing sa input tag sa name
        $fn = $_POST['FirstName']; 
        $mn = $_POST['MiddleName']; 
        $co = $_POST['Course']; 
        $yr = $_POST['YearLevel']; 
        $sub = $_POST['Subject']; 
        $sec = $_POST['Section']; 
        $add = $_POST['Address']; 
        $con = $_POST['ContactNo'];

        $query = "UPDATE tbodetocode_users SET user_id =$UserId, lastName = '$ln', firstName = '$fn', middleName= '$mn', course='$co', year_level= '$yr', subject='$sub', section= '$sec', address= '$add', contact= '$con' WHERE user_id=$UserId";
        $result=mysqli_query($conn,$query);

        if($result){
            echo '<script type="text/javascript">';
                echo 'alert("Updated Successfully!")';
        echo '</script>';

        echo "<script>
                document.location.href = 'admin_viewusers.php';
            </script>";
        }else{
            die(mysqli_error($conn));
        }
    }
?>
<div class ="center">
<div class="contain">
    <div class="container my-5">
    <label><b>Please fill in the information you want to update:<b></label><br>
	<table>

     <tr><td>
	<form method = "post">
    <div class ="form-group">
    <label><b>Last Name:<b></label></td><td>
    <input type="text" class="form-control" placeholder="Enter LastName" name="LastName" value=<?php echo $last?> >
    </td></div></tr>

     <tr><td>   
    <form method = "post">
    <div class ="form-group">
    <label><b>First Name:<b></label></td><td>
    <input type="text" class="form-control" placeholder="Enter FirstName" name="FirstName" value=<?php echo $first?>>
    </td></div></tr>
   
     <tr><td>   
    <form method = "post">
    <div class ="form-group">
    <label><b>Middle Name:<b></label></td><td>
    <input type="text" class="form-control" placeholder="Enter Middle Name" name="MiddleName"value=<?php echo $middle?>>
    </td></div></tr>
    
    <tr><td>  
	<form method = "post">
    <div class ="form-group">
    <label><b>Course:<b></label></td><td>
    <input type="text" class="form-control" placeholder="Enter Course" name="Course" value=<?php echo $course?>>
    </td></div></tr>

	</div>
    <tr><td>  
	<form method = "post">
    <div class ="form-group">
    <label><b>Year Level:<b></label></td><td>
    <input type="text" class="form-control" placeholder="Enter YearLevel" name="YearLevel" value=<?php echo $yrlvl?>>
    </td></div></tr>

    <tr><td>  
	<form method = "post">
    <div class ="form-group">
    <label><b>Subject:<b></label></td><td>
    <input type="text" class="form-control" placeholder="Enter Subject" name="Subject" value=<?php echo $sbjt?>>
    </td></div></tr>
	<br> 

    <tr><td>  
	<form method = "post">
    <div class ="form-group">
    <label><b>Section:<b></label></td><td>
    <input type="text" class="form-control" placeholder="Enter Section" name="Section" value=<?php echo $sec?>>
    </td></div></tr>
	
    <tr><td>  
	<form method = "post">
    <div class ="form-group">
    <label><b>Email Address:<b></label></td><td>
    <input type="text" class="form-control" placeholder="Enter Address" name="Address" value=<?php echo $add?>>
    </td></div></tr>

    <tr><td>  
	<form method = "post">
    <div class ="form-group">
    <label><b>Contact No.<b></label></td><td>
    <input type="text" class="form-control" placeholder="Enter ContactNo" name="ContactNo" maxlength="11" value=<?php echo $cont?>>
    </td></div></tr></table>
	<br> 

  <center><button type="submit"class="updatebtn" name = "submit">UPDATE INFORMATION</button></center>

</form>
	</div></div>
    </form>
	</div></div>
  </body>
</html>

